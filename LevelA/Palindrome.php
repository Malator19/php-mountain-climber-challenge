<?php

namespace Hackathon\LevelA;

class Palindrome
{
    private $str;

    public function __construct($str)
    {
        $this->str = $str;
    }

    /**
     * This function creates a palindrome with his $str attributes
     * If $str is abc then this function return abccba
     *
     * @TODO
     * @return string
     */
    public function generatePalindrome()
    {

        $dec = utf8_decode($this->str);
        $res_dec = strrev($dec);
        $res_enc = utf8_encode($res_dec);
        return $this->str.$res_enc;
    }

}
