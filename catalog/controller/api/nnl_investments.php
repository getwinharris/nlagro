<?php
namespace Opencart\Catalog\Controller\Api;
class NnlInvestments extends \Opencart\System\Engine\Controller {
	public function index(): void {
		$json = ['success' => false, 'investments' => []];
		$query = $this->db->query("SELECT i.*, pd.name as product_name
			FROM " . DB_PREFIX . "nnl_investments i
			LEFT JOIN " . DB_PREFIX . "product p ON i.product_id = p.product_id
			LEFT JOIN " . DB_PREFIX . "product_description pd ON p.product_id = pd.product_id AND pd.language_id = '" . (int)$this->config->get('config_language_id') . "'
			WHERE i.status = 'active'
			ORDER BY i.date_added DESC
			LIMIT 5");
		if ($query->num_rows) {
			$json['success'] = true;
			foreach ($query->rows as $row) {
				$json['investments'][] = [
					'investment_id' => $row['investment_id'],
					'product_name' => $row['product_name'],
					'amount' => number_format($row['amount'], 2),
					'profit_share' => $row['profit_share_percentage'],
					'duration' => $row['duration']
				];
			}
		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}
