<?php

if (!function_exists('textNl2br')) {

    function textNl2br($text)
    {
        return strtr($text, array("\r\n" => '<br/>', "\r" => '<br/>', "\n" => '<br/>'));
    }
}
