<?php
namespace Opencart\Catalog\Controller\Account;
/**
 * NNL Registration Handler
 * Processes Agent ID and Investor Profile during registration
 *
 * @package Opencart\Catalog\Controller\Account
 */
class NnlRegisterHandler extends \Opencart\System\Engine\Controller {

	/**
	 * Process NNL-specific registration data
	 * Called after customer is created
	 */
	public function processRegistration(int $customer_id, array $post_data): void {
		// Get agent ID from cookie/session
		$agent_id = null;
		if (isset($_COOKIE['nnl_agent_id'])) {
			$agent_id = (int)$_COOKIE['nnl_agent_id'];
		} elseif (isset($this->session->data['nnl_agent_id'])) {
			$agent_id = (int)$this->session->data['nnl_agent_id'];
		} elseif (isset($post_data['nnl_agent_id']) && !empty($post_data['nnl_agent_id'])) {
			$agent_id = (int)$post_data['nnl_agent_id'];
		}

		// Link customer to agent
		if ($agent_id) {
			$this->db->query("UPDATE " . DB_PREFIX . "customer SET
				nnl_agent_id = '" . (int)$agent_id . "'
				WHERE customer_id = '" . (int)$customer_id . "'");
		}

		// Set account type
		$account_type = $post_data['nnl_account_type'] ?? 'customer';

		if ($account_type === 'investor') {
			// Mark as investor
			$this->db->query("UPDATE " . DB_PREFIX . "customer SET
				nnl_is_investor = '1'
				WHERE customer_id = '" . (int)$customer_id . "'");
		} elseif ($account_type === 'agent') {
			// Mark as agent and generate referral ID
			$ref_id = 'NNL' . str_pad($customer_id, 6, '0', STR_PAD_LEFT) . rand(1000, 9999);
			$this->db->query("UPDATE " . DB_PREFIX . "customer SET
				nnl_is_agent = '1',
				nnl_ref_id = '" . $this->db->escape($ref_id) . "'
				WHERE customer_id = '" . (int)$customer_id . "'");
		}
	}
}
