<?php
class ControllerAccountWebinarOrder extends Controller {
 	public function index () {
        /** @todo все що потрібно текст мови і тд......
         *  @todo не ясно що ще буде тому буде з нуля
         */

        /**
         * Всі замовлення даного колистувача
         */

        $data = array(
            'product_type' => 1
        );

        $results =  $this->model_catalog_product->getProducts($data);

        echo '<pre>'; print_r($results); die;


        $data['column_left'] = $this->load->controller('common/column_left');
        $data['column_right'] = $this->load->controller('common/column_right');
        $data['content_top'] = $this->load->controller('common/content_top');
        $data['content_bottom'] = $this->load->controller('common/content_bottom');
        $data['footer'] = $this->load->controller('common/footer');
        $data['header'] = $this->load->controller('common/header');

        if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/account/webinar_order.tpl')) {
            $this->response->setOutput($this->load->view($this->config->get('config_template') . '/template/webinar_order/account.tpl', $data));
        } else {
            $this->response->setOutput($this->load->view('default/template/account/webinar_order.tpl', $data));
        }
    }
}
  
