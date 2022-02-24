<?php

if (!function_exists('viewFile')) {
    function viewFile($value)
    {
        if (isset($value)) {
            if(env('FILESYSTEM_DRIVER') == 's3') {
                return 'https://'.env('AWS_BUCKET').'.s3.ap-south-1.amazonaws.com/'.$value;
            } else {
                return asset($value);
            }
        } else {
            return asset('images/no-image-available.jpeg');
        }        
    }
}

if (!function_exists('leadingZero')) {
    function leadingZero($value)
    {
        $length = strlen((string)$value);
        if($length >= 0 && $length < 2) {
            return '0'.$value;
        }
        return $value;
    }
}
