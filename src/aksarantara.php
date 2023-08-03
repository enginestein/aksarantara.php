<?php

namespace Sanskrit;

class aksarantara {

    public $defaults = array(
        "skip_sgml" => FALSE,
        "syncope" => FALSE
    );

    public $schemes = array(

        // Bengali

        "bengali" => array(
            "vowels" => array("অ", "আ", "ই", "ঈ", "উ", "ঊ", "ঋ", "ৠ", "ঌ", "ৡ", "", "এ", "ঐ", "", "ও", "ঔ"),
            "vowel_marks" => array("া", "ি", "ী", "ু", "ূ", "ৃ", "ৄ", "ৢ", "ৣ", "", "ে", "ৈ", "", "ো", "ৌ"),
            "other_marks" => array("ং", "ঃ", "ঁ"),
            "virama" => array("্"),
            "consonants" => array("ক", "খ", "গ", "ঘ", "ঙ", "চ", "ছ", "জ", "ঝ", "ঞ", "ট", "ঠ", "ড", "ঢ", "ণ", "ত", "থ", "দ", "ধ", "ন", "প", "ফ", "ব", "ভ", "ম", "য", "র", "ল", "ব", "শ", "ষ", "স", "হ", "ळ", "ক্ষ", "জ্ঞ"),
            "symbols" => array("০", "১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "ॐ", "ঽ", "।", "॥"),
            "other" => array("", "", "", "", "ড", "ঢ", "", "য", "")
        ),

        // Devnagri

        "devanagari" => array(
            "vowels" => array("अ", "आ", "इ", "ई", "उ", "ऊ", "ऋ", "ॠ", "ऌ", "ॡ", "ऎ", "ए", "ऐ", "ऒ", "ओ", "औ"),
            "vowel_marks" => array("ा", "ि", "ी", "ु", "ू", "ृ", "ॄ", "ॢ", "ॣ", "ॆ", "े", "ै", "ॊ", "ो", "ौ"),
            "other_marks" => array("ं", "ः", "ँ"),
            "virama" => array("्"),
            "consonants" => array("क", "ख", "ग", "घ", "ङ", "च", "छ", "ज", "झ", "ञ", "ट", "ठ", "ड", "ढ", "ण", "त", "थ", "द", "ध", "न", "प", "फ", "ब", "भ", "म", "य", "र", "ल", "व", "श", "ष", "स", "ह", "ळ", "क्ष", "ज्ञ"),
            "symbols" => array("०", "१", "२", "३", "४", "५", "६", "७", "८", "९", "ॐ", "ऽ", "।", "॥"),
            "zwj" => array("\u200D"),
            "skip" => array(""),
            "accent" => array("\u0951", "\u0952"),
            "combo_accent" => array("ः॑", "ः॒", "ं॑", "ं॒"),
            "candra" => array("ॅ"),
            "other" => array("क़", "ख़", "ग़", "ज़", "ड़", "ढ़", "फ़", "य़", "ऱ")
        ),

        // Gujrati 

        "gujarati" => array(
            "vowels" => array("અ", "આ", "ઇ", "ઈ", "ઉ", "ઊ", "ઋ", "ૠ", "ઌ", "ૡ", "", "એ", "ઐ", "", "ઓ", "ઔ"),
            "vowel_marks" => array("ા", "િ", "ી", "ુ", "ૂ", "ૃ", "ૄ", "ૢ", "ૣ", "", "ે", "ૈ", "", "ો", "ૌ"),
            "other_marks" => array("ં", "ઃ", "ઁ"),
            "virama" => array("્"),
            "consonants" => array("ક", "ખ", "ગ", "ઘ", "ઙ", "ચ", "છ", "જ", "ઝ", "ઞ", "ટ", "ઠ", "ડ", "ઢ", "ણ", "ત", "થ", "દ", "ધ", "ન", "પ", "ફ", "બ", "ભ", "મ", "ય", "ર", "લ", "વ", "શ", "ષ", "સ", "હ", "ળ", "ક્ષ", "જ્ઞ"),
            "symbols" => array("૦", "૧", "૨", "૩", "૪", "૫", "૬", "૭", "૮", "૯", "ૐ", "ઽ", "૤", "૥"),
            "candra" => array("ૅ")
        ),

        // Gurmukhi

        "gurmukhi" => array(
            "vowels" => array("ਅ", "ਆ", "ਇ", "ਈ", "ਉ", "ਊ", "", "", "", "", "", "ਏ", "ਐ", "", "ਓ", "ਔ"),
            "vowel_marks" => array("ਾ", "ਿ", "ੀ", "ੁ", "ੂ", "", "", "", "", "", "ੇ", "ੈ", "", "ੋ", "ੌ"),
            "other_marks" => array("ਂ", "ਃ", "ਁ"),
            "virama" => array("੍"),
            "consonants" => array("ਕ", "ਖ", "ਗ", "ਘ", "ਙ", "ਚ", "ਛ", "ਜ", "ਝ", "ਞ", "ਟ", "ਠ", "ਡ", "ਢ", "ਣ", "ਤ", "ਥ", "ਦ", "ਧ", "ਨ", "ਪ", "ਫ", "ਬ", "ਭ", "ਮ", "ਯ", "ਰ", "ਲ", "ਵ", "ਸ਼", "ਸ਼", "ਸ", "ਹ", "ਲ਼", "ਕ੍ਸ਼", "ਜ੍ਞ"),
            "symbols" => array("੦", "੧", "੨", "੩", "੪", "੫", "੬", "੭", "੮", "੯", "ॐ", "ऽ", "।", "॥"),
            "other" => array("", "ਖ", "ਗ", "ਜ", "ਡ", "", "ਫ", "", "")
        ),

        // Kannada

        "kannada" => array(
            "vowels" => array("ಅ", "ಆ", "ಇ", "ಈ", "ಉ", "ಊ", "ಋ", "ೠ", "ಌ", "ೡ", "ಎ", "ಏ", "ಐ", "ಒ", "ಓ", "ಔ"),
            "vowel_marks" => array("ಾ", "ಿ", "ೀ", "ು", "ೂ", "ೃ", "ೄ", "ೢ", "ೣ", "ೆ", "ೇ", "ೈ", "ೊ", "ೋ", "ೌ"),
            "other_marks" => array("ಂ", "ಃ", "ँ"),
            "virama" => array("್"),
            "consonants" => array("ಕ", "ಖ", "ಗ", "ಘ", "ಙ", "ಚ", "ಛ", "ಜ", "ಝ", "ಞ", "ಟ", "ಠ", "ಡ", "ಢ", "ಣ", "ತ", "ಥ", "ದ", "ಧ", "ನ", "ಪ", "ಫ", "ಬ", "ಭ", "ಮ", "ಯ", "ರ", "ಲ", "ವ", "ಶ", "ಷ", "ಸ", "ಹ", "ಳ", "ಕ್ಷ", "ಜ್ಞ"),
            "symbols" => array("೦", "೧", "೨", "೩", "೪", "೫", "೬", "೭", "೮", "೯", "ಓಂ", "ಽ", "।", "॥"),
            "other" => array("", "", "", "", "", "", "ಫ", "", "ಱ")
        ),

        // Malayalam

        "malayalam" => array(
            "vowels" => array("അ", "ആ", "ഇ", "ഈ", "ഉ", "ഊ", "ഋ", "ൠ", "ഌ", "ൡ", "എ", "ഏ", "ഐ", "ഒ", "ഓ", "ഔ"),
            "vowel_marks" => array("ാ", "ി", "ീ", "ു", "ൂ", "ൃ", "ൄ", "ൢ", "ൣ", "െ", "േ", "ൈ", "ൊ", "ോ", "ൌ"),
            "other_marks" => array("ം", "ഃ", "ँ"),
            "virama" => array("്"),
            "consonants" => array("ക", "ഖ", "ഗ", "ഘ", "ങ", "ച", "ഛ", "ജ", "ഝ", "ഞ", "ട", "ഠ", "ഡ", "ഢ", "ണ", "ത", "ഥ", "ദ", "ധ", "ന", "പ", "ഫ", "ബ", "ഭ", "മ", "യ", "ര", "ല", "വ", "ശ", "ഷ", "സ", "ഹ", "ള", "ക്ഷ", "ജ്ഞ"),
            "symbols" => array("൦", "൧", "൨", "൩", "൪", "൫", "൬", "൭", "൮", "൯", "ഓം", "ഽ", "।", "॥"),
            "other" => array("", "", "", "", "", "", "", "", "റ")
        ),

        // Oriya

        "oriya" => array(
            "vowels" => array("ଅ", "ଆ", "ଇ", "ଈ", "ଉ", "ଊ", "ଋ", "ୠ", "ଌ", "ୡ", "", "ଏ", "ଐ", "", "ଓ", "ଔ"),
            "vowel_marks" => array("ା", "ି", "ୀ", "ୁ", "ୂ", "ୃ", "ୄ", "ୢ", "ୣ", "", "େ", "ୈ", "", "ୋ", "ୌ"),
            "other_marks" => array("ଂ", "ଃ", "ଁ"),
            "virama" => array("୍"),
            "consonants" => array("କ", "ଖ", "ଗ", "ଘ", "ଙ", "ଚ", "ଛ", "ଜ", "ଝ", "ଞ", "ଟ", "ଠ", "ଡ", "ଢ", "ଣ", "ତ", "ଥ", "ଦ", "ଧ", "ନ", "ପ", "ଫ", "ବ", "ଭ", "ମ", "ଯ", "ର", "ଲ", "ଵ", "ଶ", "ଷ", "ସ", "ହ", "ଳ", "କ୍ଷ", "ଜ୍ଞ"),
            "symbols" => array("୦", "୧", "୨", "୩", "୪", "୫", "୬", "୭", "୮", "୯", "ଓଂ", "ଽ", "।", "॥"),
            "other" => array("", "", "", "", "ଡ", "ଢ", "", "ଯ", "")
        ),

        // Tamil

        "tamil" => array(
            "vowels" => array("அ", "ஆ", "இ", "ஈ", "உ", "ஊ", "", "", "", "", "எ", "ஏ", "ஐ", "ஒ", "ஓ", "ஔ"),
            "vowel_marks" => array("ா", "ி", "ீ", "ு", "ூ", "", "", "", "", "ெ", "ே", "ை", "ொ", "ோ", "ௌ"),
            "other_marks" => array("ஂ", "ஃ", ""),
            "virama" => array("்"),
            "consonants" => array("க", "க", "க", "க", "ங", "ச", "ச", "ஜ", "ச", "ஞ", "ட", "ட", "ட", "ட", "ண", "த", "த", "த", "த", "ந", "ப", "ப", "ப", "ப", "ம", "ய", "ர", "ல", "வ", "ஶ", "ஷ", "ஸ", "ஹ", "ள", "க்ஷ", "ஜ்ஞ"),
            "symbols" => array("௦", "௧", "௨", "௩", "௪", "௫", "௬", "௭", "௮", "௯", "ௐ", "ऽ", "।", "॥"),
            "other" => array("", "", "", "", "", "", "", "", "ற")
        ),

        // Telugu
        
        "telugu" => array(
            "vowels" => array("అ", "ఆ", "ఇ", "ఈ", "ఉ", "ఊ", "ఋ", "ౠ", "ఌ", "ౡ", "ఎ", "ఏ", "ఐ", "ఒ", "ఓ", "ఔ"),
            "vowel_marks" => array("ా", "ి", "ీ", "ు", "ూ", "ృ", "ౄ", "ౢ", "ౣ", "ె", "ే", "ై", "ొ", "ో", "ౌ"),
            "other_marks" => array("ం", "ః", "ఁ"),
            "virama" => array("్"),
            "consonants" => array("క", "ఖ", "గ", "ఘ", "ఙ", "చ", "ఛ", "జ", "ఝ", "ఞ", "ట", "ఠ", "డ", "ఢ", "ణ", "త", "థ", "ద", "ధ", "న", "ప", "ఫ", "బ", "భ", "మ", "య", "ర", "ల", "వ", "శ", "ష", "స", "హ", "ళ", "క్ష", "జ్ఞ"),
            "symbols" => array("౦", "౧", "౨", "౩", "౪", "౫", "౬", "౭", "౮", "౯", "ఓం", "ఽ", "।", "॥"),
            "other" => array("", "", "", "", "", "", "", "", "ఱ")
        ),

        // IAST

        "iast" => array(
            "vowels" => array("a", "ā", "i", "ī", "u", "ū", "ṛ", "ṝ", "ḷ", "ḹ", "", "e", "ai", "", "o", "au"),
            "other_marks" => array("ṃ", "ḥ", "~"),
            "virama" => array(""),
            "consonants" => array("k", "kh", "g", "gh", "ṅ", "c", "ch", "j", "jh", "ñ", "ṭ", "ṭh", "ḍ", "ḍh", "ṇ", "t", "th", "d", "dh", "n", "p", "ph", "b", "bh", "m", "y", "r", "l", "v", "ś", "ṣ", "s", "h", "ḻ", "kṣ", "jñ"),
            "symbols" => array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "oṃ", "'", "।", "॥")
        ),

        // ITRANS

        "itrans" => array(
            "vowels" => array("a", "A", "i", "I", "u", "U", "RRi", "RRI", "LLi", "LLI", "", "e", "ai", "", "o", "au"),
            "other_marks" => array("M", "H", ".N"),
            "virama" => array(""),
            "consonants" => array("k", "kh", "g", "gh", "~N", "ch", "Ch", "j", "jh", "~n", "T", "Th", "D", "Dh", "N", "t", "th", "d", "dh", "n", "p", "ph", "b", "bh", "m", "y", "r", "l", "v", "sh", "Sh", "s", "h", "L", "kSh", "j~n"),
            "symbols" => array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "OM", ".a", "|", "||"),
            "candra" => array(".c"),
            "zwj" => array("{}"),
            "skip" => "_",
            "accent" => array("\\'", "\\_"),
            "combo_accent" => array("\\'H", "\\_H", "\\'M", "\\_M"),
            "other" => array("q", "K", "G", "z", ".D", ".Dh", "f", "Y", "R")
        ),

        // Harvard-Kyoto

        "hk" => array(
            "vowels" => array("a", "A", "i", "I", "u", "U", "R", "RR", "lR", "lRR", "", "e", "ai", "", "o", "au"),
            "other_marks" => array("M", "H", "~",),
            "virama" => array(""),
            "consonants" => array("k", "kh", "g", "gh", "G", "c", "ch", "j", "jh", "J", "T", "Th", "D", "Dh", "N", "t", "th", "d", "dh", "n", "p", "ph", "b", "bh", "m", "y", "r", "l", "v", "z", "S", "s", "h", "L", "kS", "jJ"),
            "symbols" => array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "OM", "'", "|", "||")
        ),

        // SLP

        "slp1" => array(
            "vowels" => array("a", "A", "i", "I", "u", "U", "f", "F", "x", "X", "", "e", "E", "", "o", "O"),
            "other_marks" => array("M", "H", "~"),
            "virama" => array(""),
            "consonants" => array("k", "K", "g", "G", "N", "c", "C", "j", "J", "Y", "w", "W", "q", "Q", "R", "t", "T", "d", "D", "n", "p", "P", "b", "B", "m", "y", "r", "l", "v", "S", "z", "s", "h", "L", "kz", "jY"),
            "symbols" => array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "oM", "'", ".", "..")
        ),

        // Velthuis

        "velthuis" => array(
            "vowels" => array("a", "aa", "i", "ii", "u", "uu", ".r", ".rr", ".li", ".ll", "", "e", "ai", "", "o", "au"),
            "other_marks" => array(".m", ".h", ""),
            "virama" => array(""),
            "consonants" => array("k", "kh", "g", "gh", "\"n", "c", "ch", "j", "jh", "~n", ".t", ".th", ".d", ".d", ".n", "t", "th", "d", "dh", "n", "p", "ph", "b", "bh", "m", "y", "r", "l", "v", "~s", ".s", "s", "h", "L", "k.s", "j~n"),
            "symbols" => array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "o.m", "'", "|", "||")
        ),

        // WX

        "wx" => array(
            "vowels" => array("a", "A", "i", "I", "u", "U", "q", "Q", "L", "", "", "e", "E", "", "o", "O"),
            "other_marks" => array("M", "H", "z"),
            "virama" => array(""),
            "consonants" => array("k", "K", "g", "G", "f", "c", "C", "j", "J", "F", "t", "T", "d", "D", "N", "w", "W", "x", "X", "n", "p", "P", "b", "B", "m", "y", "r", "l", "v", "S", "R", "s", "h", "", "kR", "jF"),
            "symbols" => array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "oM", "'", "|", "||")
        ),
    );

    private $romanSchemes = array();

    private $allAlternates = array(
        "itrans" => array(
            "A" => array("aa"),
            "I" => array("ii", "ee"),
            "U" => array("uu", "oo"),
            "RRi" => array("R^i"),
            "RRI" => array("R^I"),
            "LLi" => array("L^i"),
            "LLI" => array("L^I"),
            "M" => array(".m", ".n"),
            "~N" => array("N^"),
            "ch" => array("c"),
            "Ch" => array("C", "chh"),
            "~n" => array("JN"),
            "v" => array("w"),
            "Sh" => array("S", "shh"),
            "kSh" => array("kS", "x"),
            "j~n" => array("GY", "dny"),
            "OM" => array("AUM"),
            "\\_" => array("\\`"),
            "\\_H" => array("\\`H"),
            "\\'M" => array("\\'.m", "\\'.n"),
            "\\_M" => array("\\_.m", "\\_.n", "\\`M", "\\`.m", "\\`.n"),
            ".a" => array("~"),
            "|" => array("."),
            "||" => array(".."),
            "z" => array("J")
        )
    );

    private $cache = array();

    function __construct() {
        $this->convertUnicodeConstants($this->schemes['devanagari']['zwj']);
        $this->convertUnicodeConstants($this->schemes['devanagari']['accent']);
        $this->setUpSchemes();
    }

    private function convertUnicodeConstants(&$values) {
        $values = json_decode('["' . implode('","', $values) . '"]');
    }

    public function isRomanScheme($name) {
        return isset($this->romanSchemes[$name]);
    }

    public function addBrahmicScheme($name, &$scheme) {
        $this->schemes[$name] = $scheme;
    }

    public function addRomanScheme($name, &$scheme) {
        if (!isset($scheme['vowel_marks'])) {
            $scheme['vowel_marks'] = array_slice($scheme['vowels'], 1);
        }
        $this->schemes[$name] = $scheme;
        $this->romanSchemes[$name] = TRUE;
    }

    private function cheapCopy(&$scheme) {
        $copy = array();
        foreach ($scheme as $key => $value) {
            $copy[$key] = $value;
        }
        return $copy;
    }

    private function setUpSchemes() {
        $kolkata = $this->cheapCopy($this->schemes['iast']);
        $kolkata['vowels'] = array("a", "ā", "i", "ī", "u", "ū", "ṛ", "ṝ", "ḷ", "ḹ", "e", "ē", "ai", "o", "ō", "au");
        $this->schemes['kolkata'] = &$kolkata;

        $schemeNames = array("iast", "itrans", "hk", "kolkata", "slp1", "velthuis", "wx");
        foreach ($schemeNames as $name) {
            $this->addRomanScheme($name, $this->schemes[$name]);
        }

        $itrans_dravidian = $this->cheapCopy($this->schemes['itrans']);
        $itrans_dravidian['vowels'] = array("a", "A", "i", "I", "u", "U", "Ri", "RRI", "LLi", "LLi", "e", "E", "ai", "o", "O", "au");
        $itrans_dravidian['vowel_marks'] = array_slice($itrans_dravidian['vowels'], 1);
        $this->allAlternates['itrans_dravidian'] = $this->allAlternates['itrans'];
        $this->addRomanScheme('itrans_dravidian', $itrans_dravidian);
    }

    private function makeMap($from, $to, &$options) {
        $consonants = array();
        $fromScheme = &$this->schemes[$from];
        $letters = array();
        $tokenLengths = array();
        $marks = array();
        $toScheme = &$this->schemes[$to];

        if (isset($this->allAlternates[$from])) {
            $alternates = &$this->allAlternates[$from];
        } else {
            $alternates = array();
        }

        foreach ($fromScheme as $group => &$fromGroup) {
            if (!isset($toScheme[$group])) {
                continue;
            }
            $fromLength = count($fromGroup);
            $toGroup = &$toScheme[$group];

            for ($i = 0; $i < $fromLength; $i++) {
                $F = $fromGroup[$i];

                if ($F !== '') {
                    $T = $toGroup[$i];
                    $alts = isset($alternates[$F]) ? $alternates[$F] : array();

                    $tokenLengths[] = mb_strlen($F, 'UTF-8');
                    foreach ($alts as $alt) {
                        $tokenLengths[] = mb_strlen($alt, 'UTF-8');
                    }

                    if ($group === 'vowel_marks' || $group === 'virama') {
                        $marks[$F] = $T;
                        foreach ($alts as $alt) {
                            $marks[$alt] = $T;
                        }
                    } else {
                        $letters[$F] = $T;
                        foreach ($alts as $alt) {
                            $letters[$alt] = $T;
                        }
                        if ($group === 'consonants' || $group === 'other') {
                            $consonants[$F] = $T;
                            foreach ($alts as $alt) {
                                $consonants[$alt] = $T;
                            }
                        }
                    }
                }
            }
        }

        return array(
            'consonants' => &$consonants,
            'fromRoman' => $this->isRomanScheme($from),
            'letters' => &$letters,
            'marks' => &$marks,
            'maxTokenLength' => max($tokenLengths),
            'toRoman' => $this->isRomanScheme($to),
            'virama' => $toScheme['virama'][0],
        );
    }

    private function transliterateRoman($data, &$map, &$options) {
        $buf = array();
        $consonants = &$map['consonants'];
        $hadConsonant = FALSE;
        $letters = &$map['letters'];
        $marks = &$map['marks'];
        $maxTokenLength = &$map['maxTokenLength'];
        $optSkipSGML = $options['skip_sgml'];
        $optSyncope = $options['syncope'];
        $tokenBuffer = '';
        $toRoman = &$map['toRoman'];
        $virama = &$map['virama'];
        $dataChars = preg_split('//u', $data, -1, PREG_SPLIT_NO_EMPTY);
        $dataLength = count($dataChars);
        $skippingSGML = FALSE;
        $skippingTrans = FALSE;
        $toggledTrans = FALSE;

        for ($i = 0; ($i < $dataLength || $tokenBuffer); $i++) {
            $difference = $maxTokenLength - mb_strlen($tokenBuffer, 'UTF-8');
            if ($difference > 0 && $i < $dataLength) {
                $tokenBuffer .= $dataChars[$i];
                if ($difference > 1) {
                    continue;
                }
            }
            for ($j = 0; $j < $maxTokenLength; $j++) {
                $token = mb_substr($tokenBuffer, 0, $maxTokenLength - $j, 'UTF-8');

                if ($skippingSGML) {
                    $skippingSGML = ($token !== '>');
                } else if ($token === '<') {
                    $skippingSGML = $optSkipSGML;
                } else if ($token === '##') {
                    $toggledTrans = !$toggledTrans;
                    $tokenBuffer = mb_substr($tokenBuffer, 2, NULL, 'UTF-8');
                    break;
                }
                $skippingTrans = $skippingSGML || $toggledTrans;
                if (isset($letters[$token]) && !$skippingTrans) {
                    if ($toRoman) {
                        $buf[] = $letters[$token];
                    } else {
    
                        if ($hadConsonant) {
                            if (isset($marks[$token])) {
                                $buf[] = $marks[$token];
                            } else if ($token !== 'a') {
                                $buf[] = $virama;
                                $buf[] = $letters[$token];
                            }
                        } else {
                            $buf[] = $letters[$token];
                        }
                        $hadConsonant = isset($consonants[$token]);
                    }
                    $tokenBuffer = mb_substr($tokenBuffer, $maxTokenLength - $j, NULL, 'UTF-8');
                    break;
                } else if ($j === $maxTokenLength - 1) {
                    if ($hadConsonant) {
                        $hadConsonant = FALSE;
                        if (!$optSyncope) {
                            $buf[] = $virama;
                        }
                    }
                    $buf[] = $token;
                    $tokenBuffer = mb_substr($tokenBuffer, 1, NULL, 'UTF-8');
                }
            }
        }
        if ($hadConsonant && !$optSyncope) {
            $buf[] = $virama;
        }
        return implode('', $buf);
    }

    private function transliterateBrahmic($data, &$map, &$options) {
        $buf = array();
        $consonants = &$map['consonants'];
        $danglingHash = FALSE;
        $hadRomanConsonant = FALSE;
        $letters = &$map['letters'];
        $marks = &$map['marks'];
        $toRoman = &$map['toRoman'];
        $skippingTrans = FALSE;
        $dataChars = preg_split('//u', $data, -1, PREG_SPLIT_NO_EMPTY);

        foreach ($dataChars as $L) {
            if ($L === '#') {
                if ($danglingHash) {
                    $skippingTrans = !$skippingTrans;
                    $danglingHash = FALSE;
                } else {
                    $danglingHash = TRUE;
                }
                if ($hadRomanConsonant) {
                    $buf[] = 'a';
                    $hadRomanConsonant = FALSE;
                }
                continue;
            } else if ($skippingTrans) {
                $buf[] = $L;
                continue;
            }

            if (isset($marks[$L])) {
                $buf[] = $marks[$L];
                $hadRomanConsonant = FALSE;
            } else {
                if ($danglingHash) {
                    $buf[] = '#';
                    $danglingHash = FALSE;
                }
                if ($hadRomanConsonant) {
                    $buf[] = 'a';
                    $hadRomanConsonant = FALSE;
                }

                if (isset($letters[$L]) && $letters[$L] !== '') {
                    $buf[] = $letters[$L];
                    $hadRomanConsonant = $toRoman && isset($consonants[$L]);
                } else {
                    $buf[] = $L;
                }
            }
        }
        if ($hadRomanConsonant) {
            $buf[] = 'a';
        }
        return implode('', $buf);
    }

    public function t($data, $from, $to, $options = NULL) {
        $options = isset($options) ? $options : array();
        $cachedOptions = isset($this->cache['options']) ? $this->cache['options'] : array();
        $hasPriorState = (isset($this->cache['from']) && $this->cache['from'] === $from && isset($this->cache['to']) && $this->cache['to'] === $to);

        foreach ($this->defaults as $key => $value) {
            if (isset($options[$key])) {
                $value = $options[$key];
            }
            $options[$key] = $value;

            if (!isset($cachedOptions[$key]) || $value !== $cachedOptions[$key]) {
                $hasPriorState = FALSE;
            }
        }

        if ($hasPriorState) {
            $map = $this->cache['map'];
        } else {
            $map = $this->makeMap($from, $to, $options);
            $this->cache = array(
                'from' => $from,
                'map' => &$map,
                'options' => $options,
                'to' => $to,
            );
        }

        if ($from === 'itrans') {
            $data = preg_replace("/\{\\\m\+\}/u", ".h.N", $data);
            $data = preg_replace("/\.h/u", "", $data);
            $data = preg_replace("/\\\([^'`_]|$)/u", "##$1##", $data);
        }

        if ($map['fromRoman']) {
            return $this->transliterateRoman($data, $map, $options);
        } else {
            return $this->transliterateBrahmic($data, $map, $options);
        }
    }
}