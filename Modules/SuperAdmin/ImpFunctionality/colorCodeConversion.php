<?php

//////////////// convert color code \\\\\\\\\\\\\\\\\\\\\\\\\\


///**
// * -----------------------------------------------------------------------------------------------------------------
// * @description This method is responsible for converting rgba color code into hex color code
// * -----------------------------------------------------------------------------------------------------------------
// * @param $rgba
// * @return string
// */
//public function rgbaToHex($rgba): string {
//    $hex = sprintf("#%02x%02x%02x", $rgba['r'], $rgba['g'], $rgba['b']);
//    $alphaDec = $rgba['a'] * 255;
//    $alpha = dechex($alphaDec);
//    return $hex . $alpha;
//}
//
///**
// * -----------------------------------------------------------------------------------------------------------------
// * @description This method is responsible for converting hex color code into rgba color code
// * -----------------------------------------------------------------------------------------------------------------
// * @param $hex
// * @return array
// */
//public function hexToRgba($hex): array {
//    $hexValue = str_replace('#', '', $hex);
//    $length = strlen($hexValue);
//    $alpha = hexdec(substr($hexValue, 6, 2)) / 255;
//    $alpha = round($alpha, 2);
//    return [
//        'r' => hexdec($length == 8 ? substr($hexValue, 0, 2) : ($length == 3 ? str_repeat(substr($hexValue, 0, 1), 2) : 0)),
//        'g' => hexdec($length == 8 ? substr($hexValue, 2, 2) : ($length == 3 ? str_repeat(substr($hexValue, 1, 1), 2) : 0)),
//        'b' => hexdec($length == 8 ? substr($hexValue, 4, 2) : ($length == 3 ? str_repeat(substr($hexValue, 2, 1), 2) : 0)),
//        'a' => $alpha,
//    ];
//
//}
