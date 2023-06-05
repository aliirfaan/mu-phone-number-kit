<?php
/**
*  Mobile phone helper class
*
*  Methods to help work with Mauritius mobile numbers
*
*  @author aliirfaan
*/

namespace Aliirfaan\PhoneNumberKit;

class MobileNumberKit
{
    /**
     * Validates a mobile number without spaces against local format using regex
     *
     * Starts with 5
     * Followed by 2|4|5|7|8|9
     * Followed by 6 digits
     *
     * @param int|string $inputNumber Mobile number without any spaces
     * @return bool
     */
    public function isValidLocalMobileNumberFormat($inputNumber)
    {
        $regex = '/^5(2|4|5|7|8|9)\d{6}$/';
        return preg_match($regex, $inputNumber);
    }

    /**
     * Validates a mobile number without spaces against international format using regex
     *
     * Starts with +230 or 00230 or 230
     * Followed by 2|4|5|7|8|9
     * Followed by 6 digits
     *
     * @param int|string $inputNumber Mobile number without any spaces
     * @return bool
     */
    public function isValidInternationalMobileNumberFormat($inputNumber)
    {
        $regex = '/^(\+|00)?2305(2|4|5|7|8|9)\d{6}$/';
        return preg_match($regex, $inputNumber);
    }

    /**
     * Validates a mobile number without spaces against both local and international format using regex
     *
     * May start with +230 or 00230 or 230
     * Followed by 2|4|5|7|8|9
     * Followed by 6 digits
     *
     * @param int|string $inputNumber Mobile number without any spaces
     * @return bool
     */
    public function isValidLocalOrInternationalMobileNumberFormat($inputNumber)
    {
        $regex = '/^(\+|00)?(230)?5(2|4|5|7|8|9)\d{6}$/';
        return preg_match($regex, $inputNumber);
    }

    /**
     * Converts a valid local mobile number to international format
     *
     * @param int|string $inputNumber Valid mobile number in local format without any spaces
     * @param string $prefix Character(s) to add before international code
     * @param int|string $internationalCode International code
     * @return string Mobile number in international format
     */
    public function internationalizeMobileNumber($inputNumber, $prefix = '+', $internationalCode = '230')
    {
        return $prefix . $internationalCode . $inputNumber;
    }

    /**
     * Converts a valid international mobile number to local format
     *
     * @param int|string $inputNumber Valid mobile number in international format without any spaces
     * @return string Mobile number in local format
     */
    public function localizeMobileNumber($inputNumber)
    {
        $inputNumberLength = strlen($inputNumber);
        return substr($inputNumber, $inputNumberLength - 8, 8);
    }
    
    /**
     * Removes all charactes except numbers from mobile number
     *
     * @param int|string $inputNumber Mobile number to clean
     *
     * @return void
     */
    public function cleanMobileNumber($inputNumber)
    {
        return preg_replace('/[^0-9]/', '', $inputNumber);
    }

    /**
     * Masks valid MU mobile phone number using a mask character
     *
     * @param int|string $inputNumber Mobile number to clean
     * @param string $maskCharacter mask character
     *
     * @return void
     */
    public function maskMobileNumber($inputNumber, $maskCharacter = '*')
    {
        return substr($inputNumber, 0, 2) . str_repeat($maskCharacter, 3) . substr($inputNumber, -3);
    }
}
