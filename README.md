aksarantara.php
=============================

Introduction
-----------------------------
aksarantara.php is a transliteration library for Indian languages written in PHP. It supports the most popular Indian scripts and several different romanization schemes. Although aksarantara focuses on Sanskrit transliteration, it has partial support for other languages and is easy to extend.

Requirements
-----------------------------
aksarantara requires PHP 5.4.8 and up. PHP versions before 5.4.8 have a version of `mb_substr()` that is known to be [broken](http://us.php.net/ChangeLog-5.php). These versions will not work with aksarantara.

Usage
-----------------------------
aksarantara is simple to use. 

First install the [Composer](http://getcomposer.org) package manager, then install aksarantara with:

    composer require sanskrit/aksarantara

then invoke aksarantara like this:

```php
<?php

use Sanskrit\aksarantara;

$aksarantara = new aksarantara();
$output = $aksarantara->t($input, $from, $to);
```

Here, `$from` and `$to` are the names of different **schemes**. In aksarantara, the word "scheme" refers to both scripts and romanizations. These schemes are of two types:

1. **Brahmic** schemes, which are *abugidas*. All Indian scripts are Brahmic schemes.
2. **Roman** schemes, which are *alphabets*. All romanizations are Roman schemes.

By default, aksarantara supports the following Brahmic schemes:

* `bengali`
* `devanagari`
* `gujarati`
* `gurmukhi`
* `kannada`
* `malayalam`
* `oriya`
* `tamil`
* `telugu`

and the following Roman schemes:

* `hk` (Harvard-Kyoto)
* `iast` (International Alphabet of Sanskrit Transliteration)
* `itrans` (ITRANS)
* `itrans_dravidian` (ITRANS with support for Dravidian short "e" and "o")
* `kolkata` (National Library at Kolkata)
* `slp1` (Sanskrit Library Phonetic Basic)
* `velthuis` (Velthuis)
* `wx` (WX)

### Disabling transliteration
When aksarantara sees the token `##`, it toggles the transliteration state:

    $aksarantara->t('ga##Na##pa##te', 'hk', 'devanagari'); // गNaपte
    $aksarantara->t('ध##र्म##क्षेत्रे', 'devanagari', 'hk'); // dhaर्मkSetre

When aksarantara sees the token `\`, it disables transliteration on the character that immediately follows. `\` is used for ITRANS compatibility; we recommend always using `##` instead.

    $aksarantara->t('a \\a', 'itrans', 'devanagari'); // अ a
    $aksarantara->t('\\##aham', 'itrans', 'devanagari'); // ##अहम्

### Transliterating to lossy schemes
A **lossy** scheme does not have the letters needed to support lossless translation. For example, Bengali is a lossy scheme because it uses `ব` for both `ba` and `va`. In future releases, aksarantara might let you choose how to handle lossiness. For the time being, it makes some fairly bad hard-coded assumptions. Corrections and advice are always welcome.

### Transliteration options
You can tweak the transliteration function by passing an `options` array:

    $output = $aksarantara->t($input, $from, $to, $options);

`$options` maps options to values. Currently, these options are supported:

* `skip_sgml` - If TRUE, transliterate SGML tags as if they were ordinary words (`<b>iti</b>` → `<ब्>इति</ब्>`). Defaults to `FALSE`.
* `syncope` - If TRUE, use Hindi-style transliteration (`ajay` → `अजय`). In linguistics, this behavior is known as [schwa syncope](http://en.wikipedia.org/wiki/Schwa_deletion_in_Indo-Aryan_languages). Defaults to `FALSE`.

Adding new schemes
-----------------------------
Adding a new scheme is simple:

    $aksarantara->addBrahmicScheme($schemeName, $schemeData);
    $aksarantara->addRomanScheme($schemeName, $schemeData);

For help in creating `$schemeData`, see the comments on the `addBrahmicScheme` and `addRomanScheme` functions.

Running tests
-----------------------------
Running tests is facilitated with Composer:

    1. cd /path/to/aksarantara
    2. composer install
    3. ./vendor/bin/phpunit