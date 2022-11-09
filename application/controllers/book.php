<?php

class book extends Controller {

	public function __construct() {
		
		parent::__construct();
	}

	//short for view
	public function v($query = [], $id = '') {

		$data['id'] = $id;
		$this->viewFullScreen('book/view', $data);
		 // : $this->view('error/index');
	}
}

?>
