<?php
namespace Opencart\Catalog\Controller\Information;
class Investment extends \Opencart\System\Engine\Controller {
	public function index(): void {
		$this->load->language('information/investment');

		$this->document->setTitle($this->language->get('heading_title'));

		$data['breadcrumbs'] = [];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('information/investment')
		];

		$this->load->model('catalog/product');

		$data['investment_products'] = [];

        $investment_names = [
            'NNL Sprout-Growth Bond - Seed',
            'NNL Sprout-Growth Bond - Sapling',
            'NNL Sprout-Growth Bond - Plant',
            'NNL Sprout-Growth Bond - Tree'
        ];

        foreach ($investment_names as $name) {
            $product_info = $this->model_catalog_product->getProductByName($name);

            if ($product_info) {
                $data['investment_products'][] = [
                    'name'  => $product_info['name'],
                    'price' => $this->currency->format($product_info['price'], $this->session->data['currency']),
                    'total_return' => $this->currency->format($product_info['price'] * 2, $this->session->data['currency']),
                    'href'  => $this->url->link('product/product', 'product_id=' . $product_info['product_id'])
                ];
            }
        }

		$data['continue'] = $this->url->link('common/home');

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('information/investment', $data));
	}
}
 