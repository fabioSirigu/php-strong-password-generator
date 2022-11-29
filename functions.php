<?php

function generatePassword($length, $chars, $numbers, $symbol, $repeat)
{
      var_dump($length);
      if ($length < 1 || is_null($length) == true) {
            return null;
      } else {
            if (isset($chars)) {
                  $charsBox = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
            } else {
                  $charsBox = '';
            };

            if (isset($numbers)) {
                  $numbersBox = '0123456789';
            } else {
                  $numbersBox = '';
            };

            if (isset($symbol)) {
                  $symbolBox = '-_.:,;§°ç{})(/&$£^+[]';
            } else {
                  $symbolBox = '';
            };

            $password = $charsBox . $symbolBox . $numbersBox;

            if ($repeat == "yes") {

                  $reapeatChars = "";

                  for ($i = 0; $i < $length; $i++) {
                        $reapeatChars .= $password[rand(0, strlen($password) - 1)];
                  }

                  return $reapeatChars;
            } else {
                  return substr(str_shuffle($password), 0, $length);
            };
      }
}
