<?php

function generatePassword($length, $chars, $numbers, $symbol, $repeat)
{
      var_dump($length);
      if ($length < 8 || $length > 25 || is_null($length) == true) {
            return null;
      } else {
            if (isset($chars)) {
                  $charsBox = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
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
                        $appoggio = $password[rand(0, strlen($password) - 1)];
                        if (str_contains($password, $appoggio)) {
                              $i--;
                        } else {
                              $reapeatChars .= $appoggio;
                        }
                  }

                  return $reapeatChars;
            } else {
                  return substr(str_shuffle($password), 0, $length);
            };
      }
}
