<?php

class ControllerModulecreditbox extends Controller {

    protected function index($setting) {
        $this->language->load('module/credit_box');

        $this->load->model('account/reward');
//    	$this->data['heading_title'] = sprintf($this->language->get('heading_title'), $this->config->get('config_name'));

        $this->data['heading_title'] = $this->language->get('heading_title');
        $this->data['logged'] = $this->customer->isLogged();

        $points = $this->model_account_reward->getTotalPoints();
        $this->data['message'] = sprintf("You have %s credits", $points);
        if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/module/credit_box.tpl')) {
            $this->template = $this->config->get('config_template') . '/template/module/credit_box.tpl';
        } else {
            $this->template = 'default/template/module/credit_box.tpl';
        }

        $this->render();
    }

}

?>