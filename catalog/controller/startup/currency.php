<?php
namespace Opencart\System\Engine;
class Startup extends \Opencart\System\Engine\Controller {
    public function index() {
        // Set the default currency to INR if not already set
        if (!isset($this->session->data['currency'])) {
            $this->session->data['currency'] = 'INR';
        }

        // Get the user's IP address
        $ip = $this->request->server['REMOTE_ADDR'];

        // Load the currency helper
        $this->load->helper('currency');

        // Get IP information and determine the currency
        $ip_info = \Opencart\System\Helper\Currency::getIpInfo($ip);
        $currency = \Opencart\System\Helper\Currency::getCurrency($ip_info);

        // Set the currency in the session
        $this->session->data['currency'] = $currency;
    }
}
