<?php
namespace Opencart\Catalog\Model\Catalog;
/**
 * NNL Product Model Extensions
 * Distinguishes between Products and Investment Bonds
 *
 * @package Opencart\Catalog\Model\Catalog
 */
class NnlProduct extends \Opencart\System\Engine\Model {

	/**
	 * Check if product is an Investment Bond
	 */
	public function isInvestmentBond(int $product_id): bool {
		// Check if product is in "Investment" category
		$query = $this->db->query("SELECT COUNT(*) as total
			FROM " . DB_PREFIX . "product_to_category p2c
			LEFT JOIN " . DB_PREFIX . "category_description cd ON p2c.category_id = cd.category_id
			WHERE p2c.product_id = '" . (int)$product_id . "'
			AND (cd.name LIKE '%investment%' OR cd.name LIKE '%bond%' OR cd.name LIKE '%venture%')
			AND cd.language_id = '" . (int)$this->config->get('config_language_id') . "'");

		return $query->row['total'] > 0;
	}

	/**
	 * Check if product is Organic
	 */
	public function isOrganic(int $product_id): bool {
		$query = $this->db->query("SELECT COUNT(*) as total
			FROM " . DB_PREFIX . "product_to_category p2c
			LEFT JOIN " . DB_PREFIX . "category_description cd ON p2c.category_id = cd.category_id
			WHERE p2c.product_id = '" . (int)$product_id . "'
			AND (cd.name LIKE '%organic%' OR cd.name LIKE '%rice%' OR cd.name LIKE '%millet%'
				OR cd.name LIKE '%oil%' OR cd.name LIKE '%spice%')
			AND cd.language_id = '" . (int)$this->config->get('config_language_id') . "'");

		return $query->row['total'] > 0;
	}

	/**
	 * Get product type (product, investment, organic)
	 */
	public function getProductType(int $product_id): string {
		if ($this->isInvestmentBond($product_id)) {
			return 'investment';
		} elseif ($this->isOrganic($product_id)) {
			return 'organic';
		}
		return 'product';
	}
}
