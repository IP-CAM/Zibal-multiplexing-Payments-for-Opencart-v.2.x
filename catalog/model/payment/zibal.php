<?php 

class ModelPaymentZibal extends Model
{
	public function getMethod($address)
	{
		$this->load->language('payment/zibal');

		if ($this->config->get('zibal_status')) {

			$status = true;

		} else {

			$status = false;
		}

		$method_data = array ();

		if ($status) {

			$method_data = array (
        		'code' => 'zibal',
        		'title' => $this->language->get('text_title'),
				'terms' => '',
				'sort_order' => $this->config->get('melli_sort_order')
			);
		}

		return $method_data;
	}
}
