<?php
namespace Opencart\Catalog\Controller\Api;
class NnlLeaderboard extends \Opencart\System\Engine\Controller {
	public function index(): void {
		$json = ['success' => false, 'agents' => []];
		$query = $this->db->query("SELECT c.customer_id, CONCAT(c.firstname, ' ', c.lastname) as name,
			COALESCE(c.nn_total_commission, 0) as commission
			FROM " . DB_PREFIX . "customer c
			WHERE c.nn_is_agent = '1' AND c.status = '1'
			ORDER BY commission DESC
			LIMIT 10");
		if ($query->num_rows) {
			$json['success'] = true;
			foreach ($query->rows as $row) {
				$json['agents'][] = [
					'name' => $row['name'],
					'commission' => number_format($row['commission'], 2)
				];
			}
		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}
