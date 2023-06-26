## Aksarantara: Versatile Transliteration Framework for Indian Languages

Aksarantara is a powerful transliteration framework primarily designed for Sanskrit, with additional transliteration features for various Indian languages. It offers multiple versions tailored for different programming languages, making it highly adaptable and versatile.

### Installation

To ensure seamless utilization of aksarantara.php, please make sure that your PHP version is 5.4.8 or higher. Earlier versions, particularly those preceding 5.4.8, contain a defective version of `mb_substr()`, as indicated in the [PHP ChangeLog](http://us.php.net/ChangeLog-5.php). Therefore, compatibility issues may arise with aksarantara if used with such versions.

To install aksarantara.php, follow these steps:

1. Download [Composer](http://getcomposer.org).
2. Run the following command in your terminal:

   ```terminal
   composer require enginestein/aksarantara
   ```

### Usage

Use the following code snippet to utilize aksarantara.php:

```php
<?php

use Enginestein\aksarantara;

$aksarantara = new aksarantara();
$output = $aksarantara->t($input, $from, $to);
```

In the code above, `$from` and `$to` represent the names of different **schemes**. A scheme refers to romanization. There are two types of scehems in Aksarantara:

1. **Brahmic** schemes, which are abugidas and encompass all Indian scripts.
2. **Roman** schemes, which are alphabets and cover various romanizations.

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

### Disabling Transliteration

To toggle the transliteration state in aksarantara, use the `##` token:

```php
$aksarantara->t('ga##Na##pa##te', 'hk', 'devanagari'); // गNaपte
$aksarantara->t('ध##र्म##क्षेत्रे', 'devanagari', 'hk'); // dhaर्मkSetre
```

If you want to disable transliteration on a specific character, use the `\` token. However, it is recommended to use `##` instead of `\` for better compatibility with ITRANS:

```php
$aksarantara->t('a \\a', 'itrans', 'devanagari'); // अ a
$aksarantara->t('\\##aham', 'itrans', 'devanagari'); // ##अहम्
```

### Transliterating to Lossy Schemes

A **lossy** scheme lacks specific letters required for lossless

 translation. For example, Bengali is a lossy scheme because it uses `ব` for both `ba` and `va`. In future releases, aksarantara may provide options to handle lossiness. For now, it makes some assumptions but welcomes corrections and advice.

### Transliteration Options

You can customize the transliteration function by passing an `options` array:

```php
$output = $aksarantara->t($input, $from, $to, $options);
```

The `$options` array maps options to their corresponding values. Currently, the following options are supported:

* `skip_sgml` - If set to `TRUE`, transliterate SGML tags as ordinary words (`<b>iti</b>` → `<ब्>इति</ब्>`). The default value is `FALSE`.
* `syncope` - If set to `TRUE`, use Hindi-style transliteration (`ajay` → `अजय`). This behavior is known as [schwa syncope](http://en.wikipedia.org/wiki/Schwa_deletion_in_Indo-Aryan_languages) in linguistics. The default value is `FALSE`.

### Adding New Schemes

Adding a new scheme is a simple process. Use the following functions:

```php
$aksarantara->addBrahmicScheme($schemeName, $schemeData);
$aksarantara->addRomanScheme($schemeName, $schemeData);
```

Refer to the comments on the `addBrahmicScheme` and `addRomanScheme` functions for assistance in creating the `$schemeData` parameter.

### Running Tests

Running tests is made easy with Composer. Follow these steps:

1. Navigate to the `/path/to/aksarantara` directory.
2. Install Composer dependencies by running the following command:

   ```terminal
   composer install
   ```

3. Run the tests using the following command:

   ```terminal
   ./vendor/bin/phpunit
   ```

By following these steps, you can ensure that aksarantara is functioning correctly and running as expected.
