<?php

function generatePassword($length)
{
      var_dump($length);
      if ($length < 1 || is_null($length) == true) {
            return null;
      } else {
            $chars = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
            $symbol = '-_.:,;§°ç{})(/&$£^+[]';
            $number = '1234567890';
            return substr(str_shuffle($chars . $symbol . $number), 0, $length);
      }
}
