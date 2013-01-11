<?php

//class test
//{
/**
 *
 * @param $time $type @
 *
 */

function ol_RedirectToURL($url)
{
    header("Location: $url");
    exit;
}


function ol_time_ago($timestamp, $format = '%number% %word%') {

    if (!is_numeric($timestamp)) {
        $timestamp = strtotime($timestamp);
    }
    $now_timestamp = time();
    if ($timestamp > $now_timestamp)
        $timestamp = $now_timestamp;

    $distance_in_minutes = ceil(abs($now_timestamp - $timestamp) / 60) + 1;

    $parameters = array();

    if ($distance_in_minutes <= 58) {
        $parameters['%word%'] = '?.????';
        $parameters['%number%'] = $distance_in_minutes;
    } else if ($distance_in_minutes <= 1379) {
        $minute = fmod($distance_in_minutes, 60);
        if ($minute > 0) {
            $str = strtr($format, array('%word%' => '???', '%number%' => round($distance_in_minutes / 60)));
            $str .= strtr($format, array('%word%' => '?.????', '%number%' => "&nbsp;" . $minute));
        } else {
            $str = strtr($format, array('%word%' => '?.????', '%number%' => round($distance_in_minutes / 60)));
        }
        return $str;
    } else {
        $parameters['%word%'] = '';
        $parameters['%number%'] = date("Y-m-d H:i", $timestamp);
    }
    return strtr($format, $parameters);
}

function ol_slugify($text) {
    // replace all non letters or digits by -
    $text = preg_replace('/\W+/', '-', $text);

    // trim and lowercase
    $text = strtolower(trim($text, '-'));

    return $text;
}

function search_people() {

    $arr = json_encode(array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5));

//        echo json_encode($arr);

    return $arr;
}

function search_page($s) {
    $a = "";

    return $a;
}

function search_group($s) {
    $a = "";

    return $a;
}

//}
