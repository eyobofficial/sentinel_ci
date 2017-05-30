<?php defined('BASEPATH') OR exit('No direct script allowed');

class Pages extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->data['main_view'] = 'pages/';
	}


	public function index()
	{
		$this->data['main_view'] .= 'index_view';
		$this->render();
	}


	public function about()
	{
		$this->data['main_view'] .= 'about_view';
		$this->render();
	}


	public function products()
	{
		$this->data['main_view'] .= 'products_view';
		$this->render();
	}


	public function services()
	{
		$this->data['main_view'] .= 'services_view';
		$this->render();
	}



	public function blogs()
	{
		$this->data['main_view'] .= 'blogs_view';
		$this->render();
	}



	public function contact()
	{
		$this->data['main_view'] .= 'contact_view';
		$this->render();
	}


} /***** END PAGES CONTROLLER ****/