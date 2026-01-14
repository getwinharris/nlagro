<?php
namespace Opencart\Catalog\Controller\Api;
/**
 * NNL AI Agent Integration - Gemini 2.5 API
 *
 * @package Opencart\Catalog\Controller\Api
 */
class NnlAi extends \Opencart\System\Engine\Controller {

	private $apiKey = '';
	private $apiUrl = 'https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash-exp:generateContent';

	public function __construct($registry) {
		parent::__construct($registry);
		$this->apiKey = $this->config->get('nnl_ai_api_key') ?: getenv('GEMINI_API_KEY') ?: '';
	}

	public function index(): void {
		$json = ['success' => false, 'response' => ''];

		if (empty($this->apiKey)) {
			$json['response'] = 'AI Assistant is currently being configured. Please contact support for assistance.';
			$this->response->addHeader('Content-Type: application/json');
			$this->response->setOutput(json_encode($json));
			return;
		}

		if (isset($this->request->post['query'])) {
			$user_query = $this->request->post['query'];

			$system_prompt = "You are the NNL Organic Leader assistant. Explain how NNL empowers Indian farmers and small manufacturers by connecting them to US/Canada markets. Emphasize that capital goes directly to production and yield, with profits shared from international export margins. Help users understand Share-Base Bonds and the benefits of investing in sustainable farming. Be concise, friendly, and informative. Focus on transparency, direct farmer connections, and global export opportunities.";

			$payload = [
				'contents' => [
					[
						'parts' => [
							['text' => $system_prompt . "\n\nUser Question: " . $user_query]
						]
					]
				],
				'generationConfig' => [
					'temperature' => 0.7,
					'topK' => 40,
					'topP' => 0.95,
					'maxOutputTokens' => 1024
				]
			];

			$ch = curl_init($this->apiUrl . '?key=' . urlencode($this->apiKey));
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
			curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

			$response = curl_exec($ch);
			$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
			curl_close($ch);

			if ($http_code === 200) {
				$data = json_decode($response, true);
				if (isset($data['candidates'][0]['content']['parts'][0]['text'])) {
					$json['success'] = true;
					$json['response'] = $data['candidates'][0]['content']['parts'][0]['text'];
				} else {
					$json['response'] = 'I received an unexpected response. Please try rephrasing your question.';
				}
			} else {
				$json['response'] = 'I\'m having trouble connecting right now. Please try again in a moment.';
			}
		} else {
			$json['response'] = 'Please provide a question.';
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}
