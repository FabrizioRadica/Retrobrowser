<?php
// ******************** Funzioni Utils
function left($str,$len){
        return substr($str, 0, $len);
}

function right($str,$len){
        $len=$len*-1;
        return substr($str, $len);
}

function charset_decode_utf_8 ($string) {
    if (!preg_match("/[\200-\237]/", $string)
     && !preg_match("/[\241-\377]/", $string)
    ) {
        return $string;
    }
    $string = preg_replace("/([\340-\357])([\200-\277])([\200-\277])/e",
        "'&#'.((ord('\\1')-224)*4096 + (ord('\\2')-128)*64 + (ord('\\3')-128)).';'",
        $string
    );
    $string = preg_replace("/([\300-\337])([\200-\277])/e",
        "'&#'.((ord('\\1')-192)*64+(ord('\\2')-128)).';'",
        $string
    );
    return $string;
}
?>