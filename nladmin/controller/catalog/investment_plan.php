<?php
namespace Opencart\Admin\Controller\Catalog;
class InvestmentPlan extends \Opencart\System\Engine\Controller {
    public function index() {
        $this->load->language('catalog/investment_plan');
        $this->document->setTitle($this->language->get('heading_title'));
        $this->getList();
    }

    public function add() {
        $this->load->language('catalog/investment_plan');
        $this->document->setTitle($this->language->get('heading_title'));
        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
            $this->load->model('catalog/investment_plan');
            $this->model_catalog_investment_plan->addInvestmentPlan($this->request->post);
            $this->session->data['success'] = $this->language->get('text_success');
            $this->response->redirect($this->url->link('catalog/investment_plan', 'user_token=' . $this->session->data['user_token']));
        }
        $this->getForm();
    }

    public function edit() {
        $this->load->language('catalog/investment_plan');
        $this->document->setTitle($this->language->get('heading_title'));
        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
            $this->load->model('catalog/investment_plan');
            $this->model_catalog_investment_plan->editInvestmentPlan($this->request->get['investment_plan_id'], $this->request->post);
            $this->session->data['success'] = $this->language->get('text_success');
            $this->response->redirect($this->url->link('catalog/investment_plan', 'user_token=' . $this->session->data['user_token']));
        }
        $this->getForm();
    }

    public function delete() {
        $this->load->language('catalog/investment_plan');
        $this->document->setTitle($this->language->get('heading_title'));
        if (isset($this->request->post['selected']) && $this->validateDelete()) {
            $this->load->model('catalog/investment_plan');
            foreach ($this->request->post['selected'] as $investment_plan_id) {
                $this->model_catalog_investment_plan->deleteInvestmentPlan($investment_plan_id);
            }
            $this->session->data['success'] = $this->language->get('text_success');
            $this->response->redirect($this->url->link('catalog/investment_plan', 'user_token=' . $this->session->data['user_token']));
        }
        $this->getList();
    }

    protected function getList() {
        if (isset($this->request->get['sort'])) {
            $sort = $this->request->get['sort'];
        } else {
            $sort = 'name';
        }

        if (isset($this->request->get['order'])) {
            $order = $this->request->get['order'];
        } else {
            $order = 'ASC';
        }

        if (isset($this->request->get['page'])) {
            $page = $this->request->get['page'];
        } else {
            $page = 1;
        }

        $url = '';

        if (isset($this->request->get['sort'])) {
            $url .= '&sort=' . $this->request->get['sort'];
        }

        if (isset($this->request->get['order'])) {
            $url .= '&order=' . $this->request->get['order'];
        }

        if (isset($this->request->get['page'])) {
            $url .= '&page=' . $this->request->get['page'];
        }

        $data['breadcrumbs'] = [];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'])
        ];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('catalog/investment_plan', 'user_token=' . $this->session->data['user_token'] . $url)
        ];

        $data['add'] = $this->url->link('catalog/investment_plan/add', 'user_token=' . $this->session->data['user_token'] . $url);
        $data['delete'] = $this->url->link('catalog/investment_plan/delete', 'user_token=' . $this->session->data['user_token'] . $url);

        $data['investment_plans'] = [];

        $filter_data = [
            'sort'  => $sort,
            'order' => $order,
            'start' => ($page - 1) * $this->config->get('config_pagination_admin'),
            'limit' => $this->config->get('config_pagination_admin')
        ];

        $this->load->model('catalog/investment_plan');

        $investment_plan_total = $this->model_catalog_investment_plan->getTotalInvestmentPlans();

        $results = $this->model_catalog_investment_plan->getInvestmentPlans($filter_data);

        foreach ($results as $result) {
            $data['investment_plans'][] = [
                'investment_plan_id' => $result['investment_plan_id'],
                'name'               => $result['name'],
                'price'              => $this->currency->format($result['price'], $this->config->get('config_currency')),
                'edit'               => $this->url->link('catalog/investment_plan/edit', 'user_token=' . $this->session->data['user_token'] . '&investment_plan_id=' . $result['investment_plan_id'] . $url)
            ];
        }

        $data['user_token'] = $this->session->data['user_token'];

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        if (isset($this->session->data['success'])) {
            $data['success'] = $this->session->data['success'];
            unset($this->session->data['success']);
        } else {
            $data['success'] = '';
        }

        if (isset($this->request->post['selected'])) {
            $data['selected'] = (array)$this->request->post['selected'];
        } else {
            $data['selected'] = [];
        }

        $url = '';

        if ($order == 'ASC') {
            $url .= '&order=DESC';
        } else {
            $url .= '&order=ASC';
        }

        if (isset($this->request->get['page'])) {
            $url .= '&page=' . $this->request->get['page'];
        }

        $data['sort_name'] = $this->url->link('catalog/investment_plan', 'user_token=' . $this->session->data['user_token'] . '&sort=name' . $url);
        $data['sort_price'] = $this->url->link('catalog/investment_plan', 'user_token=' . $this->session->data['user_token'] . '&sort=price' . $url);

        $url = '';

        if (isset($this->request->get['sort'])) {
            $url .= '&sort=' . $this->request->get['sort'];
        }

        if (isset($this->request->get['order'])) {
            $url .= '&order=' . $this->request->get['order'];
        }

        $data['pagination'] = $this->load->controller('common/pagination', [
            'total' => $investment_plan_total,
            'page'  => $page,
            'limit' => $this->config->get('config_pagination_admin'),
            'url'   => $this->url->link('catalog/investment_plan', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}')
        ]);

        $data['results'] = sprintf($this->language->get('text_pagination'), ($investment_plan_total) ? (($page - 1) * $this->config->get('config_pagination_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_pagination_admin')) > ($investment_plan_total - $this->config->get('config_pagination_admin'))) ? $investment_plan_total : ((($page - 1) * $this->config->get('config_pagination_admin')) + $this->config->get('config_pagination_admin')), $investment_plan_total, ceil($investment_plan_total / $this->config->get('config_pagination_admin')));

        $data['sort'] = $sort;
        $data['order'] = $order;

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('catalog/investment_plan_list', $data));
    }

    protected function getForm() {
        $this->load->language('catalog/investment_plan');

        $data['text_form'] = !isset($this->request->get['investment_plan_id']) ? $this->language->get('text_add') : $this->language->get('text_edit');

        $data['entry_name'] = $this->language->get('entry_name');
        $data['entry_price'] = $this->language->get('entry_price');
        $data['help_price'] = $this->language->get('help_price');

        if (isset($this->error['name'])) {
            $data['error_name'] = $this->error['name'];
        } else {
            $data['error_name'] = '';
        }

        if (isset($this->error['price'])) {
            $data['error_price'] = $this->error['price'];
        } else {
            $data['error_price'] = '';
        }

        $url = '';

        if (isset($this->request->get['sort'])) {
            $url .= '&sort=' . $this->request->get['sort'];
        }

        if (isset($this->request->get['order'])) {
            $url .= '&order=' . $this->request->get['order'];
        }

        if (isset($this->request->get['page'])) {
            $url .= '&page=' . $this->request->get['page'];
        }
        
        $data['breadcrumbs'] = [];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'])
        ];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('catalog/investment_plan', 'user_token=' . $this->session->data['user_token'] . $url)
        ];
        
        if (!isset($this->request->get['investment_plan_id'])) {
            $data['action'] = $this->url->link('catalog/investment_plan/add', 'user_token=' . $this->session->data['user_token'] . $url);
        } else {
            $data['action'] = $this->url->link('catalog/investment_plan/edit', 'user_token=' . $this->session->data['user_token'] . '&investment_plan_id=' . $this->request->get['investment_plan_id'] . $url);
        }
        
        $data['back'] = $this->url->link('catalog/investment_plan', 'user_token=' . $this->session->data['user_token'] . $url);

        if (isset($this->request->get['investment_plan_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
            $this->load->model('catalog/investment_plan');
            $plan_info = $this->model_catalog_investment_plan->getInvestmentPlan($this->request->get['investment_plan_id']);
        }

        if (isset($this->request->post['name'])) {
            $data['name'] = $this->request->post['name'];
        } elseif (!empty($plan_info)) {
            $data['name'] = $plan_info['name'];
        } else {
            $data['name'] = '';
        }

        if (isset($this->request->post['price'])) {
            $data['price'] = $this->request->post['price'];
        } elseif (!empty($plan_info)) {
            $data['price'] = $plan_info['price'];
        } else {
            $data['price'] = '';
        }

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('catalog/investment_plan_form', $data));
    }

    protected function validateForm() {
        if (!$this->user->hasPermission('modify', 'catalog/investment_plan')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        if ((utf8_strlen($this->request->post['name']) < 3) || (utf8_strlen($this->request->post['name']) > 255)) {
            $this->error['name'] = $this->language->get('error_name');
        }

        if (!is_numeric($this->request->post['price'])) {
            $this->error['price'] = $this->language->get('error_price');
        }

        return !$this->error;
    }

    protected function validateDelete() {
        if (!$this->user->hasPermission('modify', 'catalog/investment_plan')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        return !$this->error;
    }
}
