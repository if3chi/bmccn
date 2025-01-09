<?php

if (!function_exists('setAboutImage')) {

    function setAboutImage()
    {
        return asset('images/about.jpg');
    }
}

if (!function_exists('setStemImage')) {

    function setStemImage()
    {
        return asset('images/stem4girls.jpg');
    }
}

if (!function_exists('setStemUpImages')) {

    function setStemUpImages()
    {
        return array_map(fn ($img) => asset("images/stepup4girls/$img.jpg"), [1, 2, 3, 4, 5, 6]);
    }
}

if (!function_exists('setStemUpImagesByYear')) {

    function setStemUpImagesByYear()
    {
        return [
            '2024' => array_map(fn ($img) => asset("images/stepup4girls/$img.jpg"), [1, 2, 3, 4, 5, 6]),
            '2023' => array_map(fn ($img) => asset("images/stepup4girls/$img.jpg"), [1, 2, 3,]),
        ];
    }
}

if (!function_exists('setSchoolImg')) {

    function setSchoolImg(string $imgName = '1'): string
    {
        return asset("images/schools/$imgName.jpg");
    }
}

if (!function_exists('setFlyer')) {

    function setFlyer()
    {
        return asset('images/flyer.jpg');
    }
}

if (!function_exists('setCreativeWritingFlyer')) {

    function setCreativeWritingFlyer()
    {
        return asset('images/creativeWriting.jpeg');
    }
}

if (!function_exists('setKids2ActionImage')) {

    function setKids2ActionImage()
    {
        return asset('images/kids2action.jpg');
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
