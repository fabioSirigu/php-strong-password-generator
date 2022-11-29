<?php

function generatePassword($length, $chars, $numbers, $symbol, $repeat)
{
      if ($length < 8 || $length > 25 || is_null($length) == true) {
            return null;
      } else {
            if (isset($chars)) {
                  $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
            }
            if (isset($numbers)) {
                  $numbers = "0123456789";
            }
            if (isset($symbol)) {
                  $symbol = "!@#$%^&*";
            }

            $password = $chars . $numbers . $symbol;

            if ($repeat == "yes") {
                  $reapeatChars = "";
                  for ($i = 0; $i < $length; $i++) {
                        /* $reapeatChars = $reapeatChars . $password[rand(0, strlen($password) - 1)]; */
                        $reapeatChars .= substr(str_shuffle($password), 0, 1);
                  }
                  return $reapeatChars;
            } else {
                  return substr(str_shuffle($password), 0, $length);
            };
      }
}
