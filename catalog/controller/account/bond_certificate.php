<?php
namespace Opencart\Catalog\Controller\Account;
/**
 * NNL Bond Certificate Generator
 * Generates downloadable Share-Base Bond certificates
 *
 * @package Opencart\Catalog\Controller\Account
 */
class BondCertificate extends \Opencart\System\Engine\Controller {

	/**
	 * Generate and download bond certificate
	 */
	public function download(): void {
		if (!$this->customer->isLogged()) {
			$this->response->redirect($this->url->link('account/login', 'language=' . $this->config->get('config_language')));
			return;
		}

		$investment_id = isset($this->request->get['investment_id']) ? (int)$this->request->get['investment_id'] : 0;

		if (!$investment_id) {
			$this->response->redirect($this->url->link('account/account', 'language=' . $this->config->get('config_language') . '&customer_token=' . $this->session->data['customer_token']));
			return;
		}

		// Get investment details
		$query = $this->db->query("SELECT i.*, pd.name as product_name, c.firstname, c.lastname, c.email
			FROM " . DB_PREFIX . "nnl_investments i
			LEFT JOIN " . DB_PREFIX . "product p ON i.product_id = p.product_id
			LEFT JOIN " . DB_PREFIX . "product_description pd ON p.product_id = pd.product_id AND pd.language_id = '" . (int)$this->config->get('config_language_id') . "'
			LEFT JOIN " . DB_PREFIX . "customer c ON i.customer_id = c.customer_id
			WHERE i.investment_id = '" . (int)$investment_id . "'
			AND i.customer_id = '" . (int)$this->customer->getId() . "'");

		if (!$query->num_rows) {
			$this->response->redirect($this->url->link('account/account', 'language=' . $this->config->get('config_language') . '&customer_token=' . $this->session->data['customer_token']));
			return;
		}

		$investment = $query->row;

		// Generate PDF certificate (simplified HTML version for now)
		$this->load->language('account/bond_certificate');

		$data['investment'] = $investment;
		$data['certificate_number'] = 'NNL-BOND-' . str_pad($investment_id, 8, '0', STR_PAD_LEFT);
		$data['date_issued'] = date('F d, Y', strtotime($investment['date_added']));
		$data['maturity_date'] = $investment['date_maturity'] ? date('F d, Y', strtotime($investment['date_maturity'])) : 'TBD';

		$this->response->addHeader('Content-Type: text/html');
		$this->response->setOutput($this->load->view('account/bond_certificate', $data));
	}
}
