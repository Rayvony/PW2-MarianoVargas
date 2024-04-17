<?php



function buscar($clave, $texto)
{
    $ocurrencias = 0;
    $clave_length = strlen($clave);
    $texto_length = strlen($texto);

    for ($i = 0; $i < $texto_length; $i++) {
        $match = true;
        for ($j = 0; $j < $clave_length; $j++) {
            if ($texto[$i + $j] != $clave[$j]) {
                $match = false;
                break;
            }
        }
        if ($match && (($i == 0 || $texto[$i - 1] == ' ') && ($i + $clave_length == $texto_length || $texto[$i + $clave_length] == ' '))) {
            $ocurrencias++;
            $i += $clave_length - 1;
        }
    }

    return $ocurrencias;
}
