<?php
function __url($url)
{
    $out = '';

    if ($url) {
        $out = asset(TCG\Voyager\Facades\Voyager::image($url));
        $out = str_replace('%5C', '/', $out);
    }

    return $out;
}
