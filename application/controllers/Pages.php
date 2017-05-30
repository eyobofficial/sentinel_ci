<?php defined('BASEPATH') OR exit('No direct script allowed');

class Pages extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->data['main_view'] = 'pages/';
	}


	public function index()
	{
		$this->data['page_title'] = 'home';
		$this->data['main_view'] .= $this->data['page_title'] . '_view';
		$this->render();
	}


	public function about()
	{
		$this->data['page_title'] = 'about';
		$this->data['main_view'] .= $this->data['page_title'] . '_view';
		$this->render();
	}


	public function products()
	{
		$this->data['page_title'] = 'products';
		$this->data['main_view'] .= $this->data['page_title'] . '_view';
		$this->render();
	}


	public function services()
	{
		$this->data['page_title'] = 'services';
		$this->data['main_view'] .= $this->data['page_title'] . '_view';
		$this->render();
	}



	public function blogs()
	{
		$this->data['page_title'] = 'blogs';
		$this->data['main_view'] .= $this->data['page_title'] . '_view';
		$this->render();
	}



	public function contact()
	{
		$this->data['page_title'] = 'contact';
		$this->data['main_view'] .= $this->data['page_title'] . '_view';
		$this->render();
	}



	public function faq()
	{
		$this->data['page_title'] = 'faq';
		$this->data['main_view'] .= $this->data['page_title'] . '_view';
		$this->render();
	}


} /***** END PAGES CONTROLLER ****/