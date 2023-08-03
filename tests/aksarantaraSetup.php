<?php

use Enginestein\aksarantara\Tests\aksarantaraBase;

class aksarantaraSetup extends aksarantaraBase {

    public function testSchemeDefinitions() {
        
        
        $schemes = $this->aksarantara->schemes;
        $devanagari = &$schemes['devanagari'];
        $lengths = array();
        foreach ($devanagari as $key => $value) {
            $lengths[$key] = count($devanagari[$key]);
        }

        foreach ($schemes as $name => &$scheme) {
            foreach ($scheme as $key => $value) {
                
                if ($key !== 'virama') {
                    $this->assertEquals($lengths[$key], count($value), $name . "." . $key);
                }
            }
        }
    }

    public function testRomanSchemeMembership() {
        
        
        $aksarantara = $this->aksarantara;
        $roman = array('iast', 'itrans', 'hk', 'kolkata', 'slp1', 'velthuis', 'wx');
        $other = array('bengali', 'devanagari', 'gujarati', 'gurmukhi', 'kannada', 'malayalam', 'oriya', 'tamil', 'telugu');

        foreach ($roman as $name) {
            $this->assertTrue($aksarantara->isRomanScheme($name), $name);
        }
        foreach ($other as $name) {
            $this->assertTrue(!$aksarantara->isRomanScheme($name), $name);
        }
    }

    public function testAddingSchemes() {
        $aksarantara = $this->aksarantara;
        $sanskritOCR = array(
            "vowels" => array("a", "å", "i", "ï", "u", "÷", "Ÿ", "", "", "", "e", "ai", "o", "au"),
            "consonants" => array("k", "kh", "g", "gh", "¼",
                "c", "ch", "j", "jh", "ñ",
                "¶", "¶h", "·", "·h", "½",
                "t", "th", "d", "dh", "n",
                "p", "ph", "b", "bh", "m",
                "y", "r", "l", "v",
                "¸", "¹", "s", "h",
                "", "k¹", "jñ"),
        );
        $aksarantara->addRomanScheme('sanskritOCR', $sanskritOCR);
        $f = $this->transHelper('sanskritOCR', 'devanagari');
        $f('bhïma', 'भीम');
        $f('narå½åm', 'नराणाम्');
    }
}
