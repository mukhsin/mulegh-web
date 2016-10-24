<?php

namespace App;

class Utils
{
    public static function intTo5($int)
    {
        if ($int < 10) {
            return '0000' . $int;
        } else if ($int < 100) {
            return '000' . $int;
        } else if ($int < 1000) {
            return '00' . $int;
        } else if ($int < 10000) {
            return '0' . $int;
        } else {
            return $int;
        }
    }

    public static function formatAngka($angka) {
        return number_format($angka, 2, ',', '.');
    }

    public static function timestampToTime($timestamp)
    {
        $timestamp = explode(' ', $timestamp);
        if (count($timestamp) > 1) {
            return $timestamp[1];
        }
    }

    public static function timestampToString($timestamp)
    {
        $timestamp = explode(' ', $timestamp);
        if (count($timestamp) > 1) {
            $date = $timestamp[0];
            return self::dateToString($date);
        }
    }

    public static function dateToString($date) {
        $date = explode('-', $date);
        if (count($date) > 1) {
            $yyyy = $date[0];
            $mm = $date[1];
            $dd = $date[2];
            return self::ddToString($dd) . ' ' . self::mmToString($mm) . ' ' . self::yyyyToString($yyyy);
        }
    }

    public static function yyyyToString($yyyy)
    {
        return $yyyy;
    }

    public static function mmToString($mm)
    {
        switch ($mm) {
            case '01':
                return 'Januari';
                break;
            case '02':
                return 'Februari';
                break;
            case '03':
                return 'Maret';
                break;
            case '04':
                return 'April';
                break;
            case '05':
                return 'Mei';
                break;
            case '06':
                return 'Juni';
                break;
            case '07':
                return 'Juli';
                break;
            case '08':
                return 'Agustus';
                break;
            case '09':
                return 'September';
                break;
            case '10':
                return 'Oktober';
                break;
            case '11':
                return 'November';
                break;
            case '12':
                return 'Desember';
                break;

            default:
                return 'Gagal mengonversi bulan';
                break;
        }
    }

    public static function ddToString($dd)
    {
        $dd = intval($dd);
        return $dd . '';
    }
}
