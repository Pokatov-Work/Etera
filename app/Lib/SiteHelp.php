<?php

namespace App\Lib;

class SiteHelp
{

    /**
     * Транслитерация фраз
     *
     * @param $string - исходная строка
     * @return string - преобразованная строка
     */
    public static function transliterate(string $string): string
    {
        $cyr = [
            'Щ', 'Ш', 'Ч', 'Ц', 'Ю', 'Я', 'Ж', 'А', 'Б', 'В',
            'Г', 'Д', 'Е', 'Ё', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н',
            'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ь', 'Ы', 'Ъ',
            'Э', 'Є', 'Ї', 'І',
            'щ', 'ш', 'ч', 'ц', 'ю', 'я', 'ж', 'а', 'б', 'в',
            'г', 'д', 'е', 'ё', 'з', 'и', 'й', 'к', 'л', 'м', 'н',
            'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ь', 'ы', 'ъ',
            'э', 'є', 'ї', 'і',
        ];
        $lat = [
            'Shch', 'Sh', 'Ch', 'C', 'Yu', 'Ya', 'J', 'A', 'B', 'V',
            'G', 'D', 'e', 'e', 'Z', 'I', 'y', 'K', 'L', 'M', 'N',
            'O', 'P', 'R', 'S', 'T', 'U', 'F', 'H', '',
            'Y', '', 'E', 'E', 'Yi', 'I',
            'shch', 'sh', 'ch', 'c', 'Yu', 'Ya', 'j', 'a', 'b', 'v',
            'g', 'd', 'e', 'e', 'z', 'i', 'y', 'k', 'l', 'm', 'n',
            'o', 'p', 'r', 's', 't', 'u', 'f', 'h',
            '', 'y', '', 'e', 'e', 'yi', 'i',
        ];
        for ($i = 0; $i < count($cyr); $i++) {
            $c_cyr = $cyr[$i];
            $c_lat = $lat[$i];
            $string = str_replace($c_cyr, $c_lat, $string);
        }
        $string = preg_replace(
            '/([qwrtpsdfgjhklzxcvbnmQWRTPSDFGJHKLZXCVBNM]+)e/', '${1}e', $string);
        $string = preg_replace(
            '/([qwrtpsdfgjhklzxcvbnmQWRTPSDFGJHKLZXCVBNM]+)/', "\${1}'", $string);
        $string = preg_replace('/([eyuioaEYUIOA]+)[Kk]h/', '${1}h', $string);
        $string = preg_replace('/^kh/', 'h', $string);
        $string = preg_replace('/^Kh/', 'H', $string);
        $string = preg_replace("/[\'\"\?]+/", '', $string);
        $string = str_replace(' ', '-', $string);
        $string = preg_replace('/[^0-9a-z_-]+/i', '', $string);

        return strtolower($string);
    }
}
