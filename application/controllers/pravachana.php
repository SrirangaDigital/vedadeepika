<?php

class pravachana extends Controller {

	public function __construct() {
		
		parent::__construct();
	}

	public function videoPlayer($query = [], $id, $title) {
	
		$data['id'] = $id;
		$data['title'] = $title;
		$this->view('pravachana/videoPlayer', $data);
	}

	public function download($query= [],$root, $year, $month, $pageRange) {

		(!($this->model->generatePDF($root, $year, $month, $pageRange))) ? $this->redirect('article/download/' . $root . '/' . $year . '/' . $month . '/' . $pageRange) : $this->view('error/index');
	}
}

?>
