<?php (! defined('BASEPATH')) and exit('No direct script access allowed');

class Recaptcha
{
    private $_ci;


    const sign_up_url = 'https://www.google.com/recaptcha/admin';
    const site_verify_url = 'https://www.google.com/recaptcha/api/siteverify';
    const api_url = 'https://www.google.com/recaptcha/api.js';

    
    public function __construct()
    {
        $this->_ci = & get_instance();
        $this->_ci->load->config('recaptcha');
        $this->_siteKey = $this->_ci->config->item('recaptcha_site_key');
        $this->_secretKey = $this->_ci->config->item('recaptcha_secret_key');
        $this->_language = $this->_ci->config->item('recaptcha_lang');

        if (empty($this->_siteKey) or empty($this->_secretKey)) {
            die("To use reCAPTCHA you must get an API key from <a href='"
                .self::sign_up_url."'>".self::sign_up_url."</a>");
        }
    }

    /**
     
     *
     * @param array 
     *
     * @return array 
     */
    private function _submitHTTPGet($data)
    {
        $url = self::site_verify_url.'?'.http_build_query($data);
        
        if( ini_get('allow_url_fopen') ) {
            $response = file_get_contents($url);
        } else {
            $ch = curl_init();

            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);       

            $response = curl_exec($ch);
            curl_close($ch);
        }

        return $response;
    }

    /**
     *
     * @param string 
     * @param string 
     *
     * @return ReCaptchaResponse
     */
    public function verifyResponse($response, $remoteIp = null)
    {
        $remoteIp = (!empty($remoteIp)) ? $remoteIp : $this->_ci->input->ip_address();

        
        if (empty($response)) {
            return array(
                'success' => false,
                'error-codes' => 'missing-input',
            );
        }

        $getResponse = $this->_submitHttpGet(
            array(
                'secret' => $this->_secretKey,
                'remoteip' => $remoteIp,
                'response' => $response,
            )
        );

        
        $responses = json_decode($getResponse, true);

        if (isset($responses['success']) and $responses['success'] == true) {
            $status = true;
        } else {
            $status = false;
            $error = (isset($responses['error-codes'])) ? $responses['error-codes']
                : 'invalid-input-response';
        }

        return array(
            'success' => $status,
            'error-codes' => (isset($error)) ? $error : null,
        );
    }

    /**
     * @param array parameters.
     *
     * @return scripts
     */
    public function getScriptTag(array $parameters = array())
    {
        $default = array(
            'render' => 'onload',
            'hl' => $this->_language,
        );

        $result = array_merge($default, $parameters);

        $scripts = sprintf('<script type="text/javascript" src="%s?%s" async defer></script>',
            self::api_url, http_build_query($result));

        return $scripts;
    }

    /**
     *
     * @param array parameters.
     *
     * @return scripts
     */
    public function getWidget(array $parameters = array())
    {
        $default = array(
            'data-sitekey' => $this->_siteKey,
            'data-theme' => 'light',
            'data-type' => 'image',
            'data-size' => 'normal',
        );

        $result = array_merge($default, $parameters);

        $html = '';
        foreach ($result as $key => $value) {
            $html .= sprintf('%s="%s" ', $key, $value);
        }

        return '<div class="g-recaptcha" '.$html.'></div>';
    }
}
