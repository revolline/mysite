<?php
/**
 * Created by PhpStorm.
 * User: vovakutsanov
 * Date: 28.03.17
 * Time: 20:05
 */

namespace common\helpers\numToText;


class NumToText
{
    public $onlyWord = false;

    public $Mant = array(); // описания мантисс
// к примеру ('рубль', 'рубля', 'рублей')
// или ('метр', 'метра', 'метров')
    public $Expon = array(); // описания экспонент

// к примеру ('копейка', 'копейки', 'копеек')

    public function __construct()
    {

    }

// установка описания мантисс
    public function SetMant($mant)
    {
        $this->Mant = $mant;
    }

// установка описания экспонент
    public function SetExpon($expon)
    {
        $this->Expon = $expon;
    }

// функция возвращает необходимый индекс описаний разряда
// ('миллион', 'миллиона', 'миллионов') для числа $ins
// например для 29 вернется 2 (миллионов)
// $ins максимум два числа
    public function DescrIdx($ins)
    {
        if (intval($ins / 10) == 1) // числа 10 - 19: 10 миллионов, 17 миллионов
            return 2;
        else {
// для остальных десятков возьмем единицу
            $tmp = $ins % 10;
            if ($tmp == 1) // 1: 21 миллион, 1 миллион
                return 0;
            else if ($tmp >= 2 && $tmp <= 4)
                return 1; // 2-4: 62 миллиона
            else
                return 2; // 5-9 48 миллионов
        }
    }

// IN: $in - число,
// $raz - разряд числа - 1, 1000, 1000000 и т.д.
// внутри функции число $in меняется
// $ar_descr - массив описаний разряда ('миллион', 'миллиона', 'миллионов') и т.д.
// $fem - признак женского рода разряда числа (true для тысячи)
    public function DescrSot(&$in, $raz, $ar_descr, $fem = false)
    {
        $ret = '';

        $conv = intval($in / $raz);
        $in %= $raz;

        $descr = $ar_descr[$this->DescrIdx($conv % 100)];

        if ($conv >= 100) {
            $Sot = array('сто', 'двести', 'триста', 'четыреста', 'пятьсот',
                'шестьсот', 'семьсот', 'восемьсот', 'девятьсот');
            $ret = $Sot[intval($conv / 100) - 1] . ' ';
            $conv %= 100;
        }

        if ($conv >= 10) {
            $i = intval($conv / 10);
            if ($i == 1) {
                $DesEd = array('десять', 'одиннадцать', 'двенадцать', 'тринадцать',
                    'четырнадцать', 'пятнадцать', 'шестнадцать', 'семнадцать',
                    'восемнадцать', 'девятнадцать');
                $ret .= $DesEd[$conv - 10] . ' ';
                if (count($ar_descr) > 0)
                    $ret .= $descr;
// возвращаемся здесь
                return $ret;
            }
            $Des = array('двадцать', 'тридцать', 'сорок', 'пятьдесят', 'шестьдесят',
                'семьдесят', 'восемьдесят', 'девяносто');
            $ret .= $Des[$i - 2] . ' ';
        }

        $i = $conv % 10;
        if ($i > 0) {
            if ($fem && ($i == 1 || $i == 2)) {
// для женского рода (сто одна тысяча)
                $Ed = array('одна', 'две');
                $ret .= $Ed[$i - 1] . ' ';
            } else {
                $Ed = array('один', 'два', 'три', 'четыре', 'пять',
                    'шесть', 'семь', 'восемь', 'девять');
                $ret .= $Ed[$i - 1] . ' ';
            }
        }
        if (count($ar_descr) > 0)
            $ret .= $descr;
        return $ret;
    }

// IN: $sum - число, например 1256.18
    public function Convert($sum)
    {
        $ret = '';

// имена данных перменных остались от предыдущей версии
// когда скрипт конвертировал только денежные суммы
        $Kop = 0;
        $Rub = 0;

        $sum = trim($sum);
// удалим пробелы внутри числа
        $sum = str_replace(' ', '', $sum);

// флаг отрицательного числа
        $sign = false;
        if ($sum[0] == '-') {
            $sum = substr($sum, 1);
            $sign = true;
        }

// заменим запятую на точку, если она есть
        $sum = str_replace(',', '.', $sum);

        $Rub = intval($sum);
        $Kop = round($sum * 100 - $Rub * 100);

        if ($Rub) {
// значение $Rub изменяется внутри функции DescrSot
// новое значение: $Rub %= 1000000000 для миллиарда
            if ($Rub >= 1000000000)
                $ret .= $this->DescrSot($Rub, 1000000000, array('миллиард', 'миллиарда', 'миллиардов')) . ' ';
            if ($Rub >= 1000000)
                $ret .= $this->DescrSot($Rub, 1000000, array('миллион', 'миллиона', 'миллионов')) . ' ';
            if ($Rub >= 1000)
                $ret .= $this->DescrSot($Rub, 1000, array('тысяча', 'тысячи', 'тысяч'), true) . ' ';

            $ret .= $this->DescrSot($Rub, 1, $this->Mant) . ' ';

// если необходимо поднимем регистр первой буквы
            $ret = iconv('utf-8', 'windows-1251', $ret);
            $ret[0] = chr(ord($ret[0]) + ord('A') - ord('a'));
            $ret = iconv('windows-1251', 'utf-8', $ret);
// для корректно локализованных систем можно закрыть верхнюю строку
// и раскомментировать следующую (для легкости сопровождения)
// $ret[0] = strtoupper($ret[0]);
        }
        if ($this->onlyWord !== true) {
            if ($Kop < 10)
                $ret .= '0';
            $ret .= $Kop . ' ' . $this->Expon[$this->DescrIdx($Kop)];
        }

// если число было отрицательным добавим минус
        if ($sign)
            $ret = '-' . $ret;
        return $ret;
    }

}