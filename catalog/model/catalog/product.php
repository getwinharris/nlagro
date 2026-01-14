<?php
namespace Opencart\Catalog\Model\Catalog;

class Product extends \Opencart\System\Engine\Model {
	// ... (existing code) ...

	public function getProductByName(string $name): array {
		$query = $this->db->query("SELECT DISTINCT *, `pd`.`name`, `p`.`image`, " . $this->statement['discount'] . ", " . $this->statement['special'] . ", " . $this->statement['reward'] . ", " . $this->statement['review'] . " FROM `" . DB_PREFIX . "product_to_store` `p2s` LEFT JOIN `" . DB_PREFIX . "product` `p` ON (`p`.`product_id` = `p2s`.`product_id` AND `p`.`status` = '1' AND `p`.`date_available` <= NOW()) LEFT JOIN `" . DB_PREFIX . "product_description` `pd` ON (`p`.`product_id` = `pd`.`product_id`) WHERE `p2s`.`store_id` = '" . (int)$this->config->get('config_store_id') . "' AND `pd`.`name` = '" . $this->db->escape($name) . "' AND `pd`.`language_id` = '" . (int)$this->config->get('config_language_id') . "'");

		if ($query->num_rows) {
			$product_data = $query->row;

			$product_data['variant'] = $query->row['variant'] ? json_decode($query->row['variant'], true) : [];
			$product_data['override'] = $query->row['override'] ? json_decode($query->row['override'], true) : [];
			$product_data['price'] = (float)($query->row['discount'] ?: $query->row['price']);
			$product_data['rating'] = (int)$query->row['rating'];
			$product_data['reviews'] = (int)$query->row['reviews'] ? $query->row['reviews'] : 0;

			return $product_data;
		} else {
			return [];
		}
	}

	// ... (existing code) ...
}
