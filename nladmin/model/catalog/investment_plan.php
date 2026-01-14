<?php
namespace Opencart\Admin\Model\Catalog;
class InvestmentPlan extends \Opencart\System\Engine\Model {
    public function addInvestmentPlan($data) {
        $this->db->query("INSERT INTO `" . DB_PREFIX . "investment_plan` SET `name` = '" . $this->db->escape($data['name']) . "', `price` = '" . (float)$data['price'] . "'");
    }

    public function editInvestmentPlan($investment_plan_id, $data) {
        $this->db->query("UPDATE `" . DB_PREFIX . "investment_plan` SET `name` = '" . $this->db->escape($data['name']) . "', `price` = '" . (float)$data['price'] . "' WHERE `investment_plan_id` = '" . (int)$investment_plan_id . "'");
    }

    public function deleteInvestmentPlan($investment_plan_id) {
        $this->db->query("DELETE FROM `" . DB_PREFIX . "investment_plan` WHERE `investment_plan_id` = '" . (int)$investment_plan_id . "'");
    }

    public function getInvestmentPlan($investment_plan_id) {
        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "investment_plan` WHERE `investment_plan_id` = '" . (int)$investment_plan_id . "'");
        return $query->row;
    }

    public function getInvestmentPlans($data = []) {
        $sql = "SELECT * FROM `" . DB_PREFIX . "investment_plan`";
        $sort_data = ['name', 'price'];
        if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
            $sql .= " ORDER BY " . $data['sort'];
        } else {
            $sql .= " ORDER BY name";
        }
        if (isset($data['order']) && ($data['order'] == 'DESC')) {
            $sql .= " DESC";
        } else {
            $sql .= " ASC";
        }
        if (isset($data['start']) || isset($data['limit'])) {
            if ($data['start'] < 0) {
                $data['start'] = 0;
            }
            if ($data['limit'] < 1) {
                $data['limit'] = 20;
            }
            $sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
        }
        $query = $this->db->query($sql);
        return $query->rows;
    }

    public function getTotalInvestmentPlans() {
        $query = $this->db->query("SELECT COUNT(*) AS total FROM `" . DB_PREFIX . "investment_plan`");
        return $query->row['total'];
    }
}
