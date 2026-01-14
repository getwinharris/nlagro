<?php
namespace Opencart\Catalog\Controller\Api;
class NnlExports extends \Opencart\System\Engine\Controller {
	public function index(): void {
		$json = ['success' => false, 'products' => []];
		// Focus on organic products - filter by category or tag containing "organic", "rice", "millet", "oil", "spice"
		$query = $this->db->query("SELECT DISTINCT p.product_id, pd.name, p.price, p.image
			FROM " . DB_PREFIX . "product p
			LEFT JOIN " . DB_PREFIX . "product_description pd ON p.product_id = pd.product_id AND pd.language_id = '" . (int)$this->config->get('config_language_id') . "'
			LEFT JOIN " . DB_PREFIX . "product_to_category p2c ON p.product_id = p2c.product_id
			LEFT JOIN " . DB_PREFIX . "category_description cd ON p2c.category_id = cd.category_id AND cd.language_id = '" . (int)$this->config->get('config_language_id') . "'
			WHERE p.status = '1'
			AND (
				pd.name LIKE '%organic%' OR pd.name LIKE '%rice%' OR pd.name LIKE '%millet%'
				OR pd.name LIKE '%oil%' OR pd.name LIKE '%spice%' OR pd.name LIKE '%farmer%'
				OR cd.name LIKE '%organic%' OR cd.name LIKE '%rice%' OR cd.name LIKE '%millet%'
				OR cd.name LIKE '%oil%' OR cd.name LIKE '%spice%'
			)
			ORDER BY p.date_added DESC
			LIMIT 5");
		if ($query->num_rows) {
			$json['success'] = true;
			foreach ($query->rows as $row) {
				$image = '';
				if ($row['image'] && is_file(DIR_IMAGE . $row['image'])) {
					$image = $this->config->get('config_url') . 'image/' . $row['image'];
				}
				$json['products'][] = [
					'product_id' => $row['product_id'],
					'name' => $row['name'],
					'price' => number_format($row['price'], 2),
					'image' => $image
				];
			}
		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}
