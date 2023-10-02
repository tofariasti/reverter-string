<?php

/**
 * Reverte uma string
 * Reverte uma string usando função recursiva
 *
 * @author Tiago Farias <tiago.farias.poa@gmail.com>
 * 
 * @param string $word
 */
function reverteString(string $word) : void
{
    if( !empty($word) )
    {
        echo ($word[strlen($word) - 1]);
        reverteString(substr($word, 0,(strlen($word) - 1)));
    }
}