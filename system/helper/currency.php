<?php
namespace Opencart\System\Helper;
class Currency {
    public static function getIpInfo($ip) {
        $url = "http://ip-api.com/json/{$ip}";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $data = curl_exec($ch);
        curl_close($ch);
        return json_decode($data, true);
    }

    public static function getCurrency($ip_info) {
        $country_code = isset($ip_info['countryCode']) ? $ip_info['countryCode'] : 'US';
        $currencies = [
            'US' => 'USD',
            'GB' => 'EUR', // Europe is not a country, so we'll use Great Britain as an example
            'AE' => 'AED'  // United Arab Emirates for Gulf region
        ];
        return isset($currencies[$country_code]) ? $currencies[$country_code] : 'USD';
    }
}
