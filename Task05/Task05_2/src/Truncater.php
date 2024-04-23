<?php

namespace App;

class Truncater
{
    public static $defaultOptions = [
      'length' => 50,
      'separator' => '...'
    ];

    private $options;

    public function __construct($options = [])
    {
        $this->options = array_merge(self::$defaultOptions, $options);
    }

    public function truncate($string, $options = [])
    {
        $options = array_merge($this->options, $options);
        $length = $options['length'];
        $separator = $options['separator'];

        if (mb_strlen($string, 'UTF-8') <= $length) {
            return $string;
        }

        return rtrim(mb_substr($string, 0, $length, 'UTF-8')) . $separator;
    }
}
