<?php
/**
 * CodeIgniter NO Captcha ReCAPTCHA a.k.a reCAPTCHA Version 2.0 library
 *
 * This library is based on official reCAPTCHA library for PHP
 * https://github.com/google/ReCAPTCHA
 * 
 * Using Recaptcha V2 Checkbox
 *
 *
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class ReCaptcha {

    private $dataSitekey = "6Lf5fR8gAAAAAG0_QZ3gLWlb82skBxNX_4O7wp0s"; //Your SiteKey
    private $lang = "en";
    public $secret = '6Lf5fR8gAAAAAC4GBZdDTZRItk3athF1NpTTg5qh'; //Secret

    public function render() {
        $return = '<div class="g-recaptcha" data-sitekey="' . $this->dataSitekey . '"></div>
            <script src="https://www.google.com/recaptcha/api.js?hl=' . $this->lang . '" async defer></script>';
        return $return;
    }

}
