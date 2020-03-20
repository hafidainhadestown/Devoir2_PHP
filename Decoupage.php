<?php
function decoupage($str, $l = 0) {
        $r = array();
        //la fonction mb_len retourne le nombre de caracteres de $str
        $len = mb_strlen($str, "UTF-8");
        for ($i = 0; $i < $len; $i += $l) {
            $r[] = mb_substr($str, $i, $l, "UTF-8");
        }
        return $r;

}

$string='Decoupage';
print_r(decoupage($string, 2))

?>
