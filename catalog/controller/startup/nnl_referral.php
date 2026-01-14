<?php
namespace Opencart\Catalog\Controller\Startup;
/**
 * NNL Referral Tracking Startup
 * Tracks ?agent=ID and ?ref=ID parameters
 * Sets 90-day cookie for agent tracking
 *
 * @package Opencart\Catalog\Controller\Startup
 */
class NnlReferral extends \Opencart\System\Engine\Controller {

	/**
	 * Index - Called on every page load
	 */
	public function index(): void {
		// Check for ?agent= parameter
		if (isset($this->request->get['agent'])) {
			$agent_id = (int)$this->request->get['agent'];
			$this->setAgentCookie($agent_id);
		}

		// Also check for ?ref= parameter (alternative)
		if (isset($this->request->get['ref'])) {
			$agent_id = (int)$this->request->get['ref'];
			$this->setAgentCookie($agent_id);
		}
	}

	/**
	 * Set agent cookie for 90 days
	 */
	private function setAgentCookie(int $agent_id): void {
		if ($agent_id > 0) {
			// Validate agent exists and is active
			$query = $this->db->query("SELECT customer_id FROM " . DB_PREFIX . "customer
				WHERE customer_id = '" . (int)$agent_id . "'
				AND status = '1'
				AND (nnl_is_agent = '1' OR nnl_is_agent IS NULL)");

			if ($query->num_rows) {
				// Set cookie for 90 days
				$expire = time() + (90 * 24 * 60 * 60);
				setcookie('nnl_agent_id', $agent_id, $expire, '/', '', false, true);
				setcookie('nnl_ref_id', $agent_id, $expire, '/', '', false, true);

				// Also store in session
				$this->session->data['nnl_agent_id'] = $agent_id;
				$this->session->data['nnl_ref_id'] = $agent_id;
			}
		}
	}

	/**
	 * Get current agent ID from cookie or session
	 */
	public function getAgentId(): ?int {
		if (isset($_COOKIE['nnl_agent_id'])) {
			return (int)$_COOKIE['nnl_agent_id'];
		}
		if (isset($this->session->data['nnl_agent_id'])) {
			return (int)$this->session->data['nnl_agent_id'];
		}
		return null;
	}
}
