<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* Name:  DOMPDF
* 
* Author: Jd Fiscus
* 	 	  jdfiscus@gmail.com
*         @iamfiscus
*          
*
* Origin API Class: http://code.google.com/p/dompdf/
* 
* Location: http://github.com/iamfiscus/Codeigniter-DOMPDF/
*          
* Created:  06.22.2010 
* 
* Description:  This is a Codeigniter library which allows you to convert HTML to PDF with the DOMPDF library
* 
*/

class Dompdf_gen {
		
	public function __construct() {
		
		require_once APPPATH.'third_party/dompdf/dompdf_config.inc.php';
		
		$pdf = new DOMPDF();
		
		$CI =& get_instance();
		$CI->filename = $pdf;
		
	}
	protected function _ci(){
		return get_instance();
	}
	
	public function load_view($view, $data = array()){
		$html = $this->_ci()->load->view($view, $data, TRUE);
		$this->load_html($html);
		
		//Render the PDF
		$this->render();
	$this->stream($this->filename, array ("Attachment" => false)
	}
}