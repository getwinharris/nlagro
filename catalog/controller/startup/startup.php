<?php
namespace Opencart\Catalog\Controller\Startup;
/**
 * Class Startup
 *
 * @package Opencart\Catalog\Controller\Startup
 */
class Startup extends \Opencart\System\Engine\Controller {
	/**
	 * Index
	 *
	 * @return void
	 */
	public function index(): void {
		// NNL: Track referrals on every page load (before other startups)
		if (class_exists('\Opencart\Catalog\Controller\Startup\NnlReferral')) {
			try {
				$nnl_referral = new \Opencart\Catalog\Controller\Startup\NnlReferral($this->registry);
				$nnl_referral->index();
			} catch (\Exception $e) {
				// Silently fail if not ready
			}
		}

		// Load startup actions
		$this->load->model('setting/startup');

		$results = $this->model_setting_startup->getStartups();

		foreach ($results as $result) {
			if (substr($result['action'], 0, 8) == 'catalog/') {
				$this->load->controller(substr($result['action'], 8));
			}
		}
	}
}
