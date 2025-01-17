<?php

if (!function_exists('getSchoolImgs')) {
    function getSchoolImgs()
    {
        return [
            '2024' => [
                [
                    'title' => "Osu Basic School, Accra, Ghana.",
                    'src' => 'osu_1',
                ],[
                    'title' => "Osu Basic School, Accra, Ghana.",
                    'src' => 'osu_2',
                ],[
                    'title' => "Osu Basic School, Accra, Ghana.",
                    'src' => 'osu_3',
                ],[
                    'title' => "Osu Basic School, Accra, Ghana.",
                    'src' => 'osu_4',
                ],[
                    'title' => "Osu Basic School, Accra, Ghana.",
                    'src' => 'osu_5',
                ],[
                    'title' => "Osu Basic School, Accra, Ghana.",
                    'src' => 'osu_6',
                ],[
                    'title' => "Osu Basic School, Accra, Ghana.",
                    'src' => 'osu_7',
                ],[
                    'title' => "Osu Basic School, Accra, Ghana.",
                    'src' => 'osu_8',
                ],[
                    'title' => "Osu Basic School, Accra, Ghana.",
                    'src' => 'osu_9',
                ],[
                    'title' => "Osu Basic School, Accra, Ghana.",
                    'src' => 'osu_10',
                ],[
                    'title' => "Osu Basic School, Accra, Ghana.",
                    'src' => 'osu_11',
                ],[
                    'title' => "Osu Basic School, Accra, Ghana.",
                    'src' => 'osu_12',
                ],
            ],
            '2023' => [
                [
                    'title' => "Accra New Town Experimental School, Accra, Ghana.",
                    'src' => '1',
                ],
                [
                    'title' => "Accra New Town Experimental School, Accra, Ghana.",
                    'src' => '2',
                ],
                [
                    'title' => "Accra New Town Experimental School, Accra, Ghana.",
                    'src' => '3',
                ],
                [
                    'title' => "Gracewell Academy Surulere, Lagos, Nigeria.",
                    'src' => 'a',
                ],
                [
                    'title' => "Gracewell Academy Surulere, Lagos, Nigeria.",
                    'src' => 'b',
                ],
                [
                    'title' => "Gracewell Academy Surulere, Lagos, Nigeria.",
                    'src' => 'c',
                ],
                [
                    'title' => "Gudmerc Academy, Abuja, Nigeria.",
                    'src' => 'gudmerc2',
                ],
                [
                    'title' => "Gudmerc Academy, Abuja, Nigeria.",
                    'src' => 'gudmerc1',
                ],
                [
                    'title' => "Gudmerc Academy, Abuja, Nigeria.",
                    'src' => 'gudmerc',
                ],
                [
                    'title' => "KARU Government Secondary School, Karu Abuja, Nigeria.",
                    'src' => 'karu2',
                ],
                [
                    'title' => "KARU Government Secondary School, Karu Abuja, Nigeria.",
                    'src' => 'karu',
                ],
                [
                    'title' => "KARU Government Secondary School, Karu Abuja, Nigeria.",
                    'src' => 'karu1',
                ],
            ],
        ];
    }
}

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
        return array_map(fn ($img) => asset("images/stepup4girls/$img.jpg"), [1, 2, 3, 4, 5, 7, 8, 9, 10, 11, 12]);
    }
}

if (!function_exists('setStemUpImagesByYear')) {

    function setStemUpImagesByYear()
    {
        return [
            '2024' => array_map(fn ($img) => asset("images/stepup4girls/$img.jpg"), [1, 2, 3, 4, 5]),
            '2023' => array_map(fn ($img) => asset("images/stepup4girls/$img.jpg"), [7, 8, 9, 10, 11, 12]),
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
