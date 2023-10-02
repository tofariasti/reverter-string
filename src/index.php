<?php

/**
 * 
 */
function reverteString(string $word) : string
{
    $word = trim($word);
    if( empty($word) )
    {
        throw new \Exception('String vazia!');
    }

    return '';
}

echo reverteString('   ');