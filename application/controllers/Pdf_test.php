<?php
class Pdf_test extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->library('pdf');
        
	}
	
	function index(){
	    echo "hh"; exit;
		$html = '<html>
				<head></head>
				<body>
					<h1>HELLO WORLD!</h1>
				</body>
				</html>
				';
		
		//$pdf_filename  = '';
		
		$this->pdf->loadHtml($html);
		$this->pdf->render();
		$this->pdf->stream("report.pdf", array('Attachment' => 0));
	}
	
}
?>