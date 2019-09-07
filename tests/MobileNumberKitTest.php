<?php
/**
*  Mobile phone helper class
*
*  Methods to help work with Mauritius mobile numbers
*
*  @author aliirfaan
*/

namespace Aliirfaan\PhoneNumberKit\Test;

use PHPUnit\Framework\TestCase;
use Aliirfaan\PhoneNumberKit\MobileNumberKit;

class MobileNumberKitTest extends TestCase
{
    public function providerTestIsValidLocalMobileNumberFormat()
    {
        return array(
            array('57848960', true),
            array('77848960', false),
            array('5784896a', false),
            array('5784896898', false),
        );
    }

    public function providerTestIsValidInternationalMobileNumberFormat()
    {
        return array(
            array('+23057848960', true),
            array('0023057848960', true),
            array('23057848960', true),
            array('23077848960', false),
            array('3077848960', false),
        );
    }

    public function providerTestInternationalizeMobileNumber()
    {
        return array(
            array('57848960', '+23057848960')
        );
    }

    public function providerTestLocalizeMobileNumber()
    {
        return array(
            array('+23057848960', '57848960'),
            array('0023057848960', '57848960'),
            array('23057848960', '57848960'),
            array('57848960', '57848960'),
        );
    }

    /**
     * @dataProvider providerTestIsValidLocalMobileNumberFormat
     */
    public function testIsValidLocalMobileNumberFormat($inputNumber, $expectedResult)
    {
        $mobileNumberKit = new MobileNumberKit();

        $result = $mobileNumberKit->isValidLocalMobileNumberFormat($inputNumber);
        $this->assertEquals($expectedResult, $result);
    }

    /**
     * @dataProvider providerTestIsValidInternationalMobileNumberFormat
     */
    public function testIsValidInternationalMobileNumberFormat($inputNumber, $expectedResult)
    {
        $mobileNumberKit = new MobileNumberKit();

        $result = $mobileNumberKit->isValidInternationalMobileNumberFormat($inputNumber);
        $this->assertEquals($expectedResult, $result);
    }

    /**
     * @dataProvider providerTestInternationalizeMobileNumber
     */
    public function testInternationalizeMobileNumber($inputNumber, $expectedResult)
    {
        $mobileNumberKit = new MobileNumberKit();

        $result = $mobileNumberKit->internationalizeMobileNumber($inputNumber);
        $this->assertEquals($expectedResult, $result);
    }

    /**
     * @dataProvider providerTestLocalizeMobileNumber
     */
    public function testLocalizeMobileNumber($inputNumber, $expectedResult)
    {
        $mobileNumberKit = new MobileNumberKit();

        $result = $mobileNumberKit->localizeMobileNumber($inputNumber);
        $this->assertEquals($expectedResult, $result);
    }
}
