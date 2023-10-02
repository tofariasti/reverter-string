<?php

/**
 * Reverte uma string
 * Reverte uma string usando função recursiva
 *
 * @author Tiago Farias <tiago.farias.poa@gmail.com>
 * 
 * @string $word
 */
function reverteString(string $word)
{
    $word = trim($word);

    if( !empty($word) )
    {
        echo ($word[strlen($word) - 1]);
        reverteString(substr($word, 0,(strlen($word) - 1)));
    }
}

echo reverteString('Tiago Oliveira de Farias');