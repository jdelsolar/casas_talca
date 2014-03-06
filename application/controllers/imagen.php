<?php
/**
* @property CI_Loader $load
* @property CI_Form_validation $form_validation
* @property CI_Input $input
* @property CI_Email $email
* @property CI_DB_active_record $db
* @property CI_DB_forge $dbforge
* @property CI_Table $table
* @property CI_Session $session
* @property CI_FTP $ftp
* @property CI_Pagination $pagination
* ....
*/
class Imagen extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }
    
    function upload()
	{
		//header("Content-Type: text/javascript; charset=utf-8");
		$status = "";
		$msg = "";
		$file_element_name = 'foto';
		
				 
		if ($status != "error")
		{
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = 1024 * 8;
			$config['encrypt_name'] = TRUE;
	 
			$this->load->library('upload', $config);
	 
			if (!$this->upload->do_upload($file_element_name))
			{
				$status = 'error';
				$msg = $this->upload->display_errors('', '');
				$nombre = '';
			}
			else
			{
				$data = $this->upload->data();
				$status = "success";
				$msg = "Archivo subido correctamente";
				$nombre = $data['file_name'];
				// creando el thumb
				$this->crear_thumb($nombre, $status, $msg, $nombre);
				
			}
			@unlink($_FILES[$file_element_name]);
			
			echo json_encode(array('status' => $status, 'msg' => $msg, 'nombre' => $nombre));
		}
		else {
			echo json_encode(array('status' => $status, 'msg' => $msg, 'nombre' => $nombre));
		}
		
	}
	
	function crear_thumb($archivo, &$status, &$msg, &$nombre)
	{
		$config['image_library'] = 'gd2';
		$config['source_image'] = './uploads/'.$archivo;
		$config['create_thumb'] = TRUE;
		$config['maintain_ratio'] = TRUE;
		$config['width'] = 150;
		$config['height'] = 150;
		$config['new_image'] = './uploads/_'.$archivo;
		$config['thumb_marker'] = '';
		$this->load->library('image_lib', $config);
		if (!$this->image_lib->resize())
		{
			$status = 'error';
			$msg = $this->image_lib->display_errors('', '');
			$nombre = '';
		}
	}
	
}