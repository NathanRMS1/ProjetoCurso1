<?php
function BuscarProdutos($tabela,$condicoes = NULL){
    $QueryBuscar = "SELECT * FROM {$tabela} WHERE {$condicoes}";
    mysql_query($QueryBuscar);
    
}
/* * ***************************
  GERA RESUMOS
 * *************************** */

function lmWord($string, $words = '20') {
    $string = strip_tags($string);
    $count = strlen($string);

    if ($count <= $words) {
        return $string;
    } else {
        $strpos = strrpos(substr($string, 0, $words), ' ');
        return substr($string, 0, $strpos);
    }
}