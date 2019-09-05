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
     * Followed by 7 digits
     *
     * @param int|string $inputNumber Mobile number without any spaces
     * @return bool
     */
    public function isValidLocalMobileNumberFormat($inputNumber)
    {
        $regex = '/^5\d{7}$/';
        return preg_match($regex, $inputNumber);
    }

    /**
     * Validates a mobile number without spaces against international format using regex
     *
     * Starts with +230 or 00230 or 230
     * Followed by 5
     * Followed by 7 digits
     *
     * @param int|string $inputNumber Mobile number without any spaces
     * @return bool
     */
    public function isValidInternationalMobileNumberFormat($inputNumber)
    {
        $regex = '/^(\+|00)?2305\d{7}$/';
        return preg_match($regex, $inputNumber);
    }

    /**
     * Converts a valid local mobile number to international format
     *
     * @param int|string $inputNumber Valid mobile number in local format without any spaces
     * @param int|string $internationalCode International code
     * @param string $prefix Character(s) to add before international code
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
}
