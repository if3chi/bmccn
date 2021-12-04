<?php

if (!function_exists('setAboutImage')) {

    function setAboutImage()
    {
        return 'images/about.jpg';
    }
}

if (!function_exists('textNl2br')) {

    function textNl2br($text)
    {
        return strtr($text, array("\r\n" => '<br/>', "\r" => '<br/>', "\n" => '<br/>'));
    }
}

if (!function_exists('paypalLink')) {

    function paypalLink($type)
    {
        return [
            'bmccn' => 'https://www.paypal.com/donate/?hosted_button_id=DME4VFG9D37YJ',
            'generic' => 'https://www.paypal.com/donate/?hosted_button_id=ZSE7RS78U6QF4',
        ][$type];
    }
}
