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
* @property Casas_model $Casas_model
* ....
*/
class Casas extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('Casas_model');
    }
    
    function agregar(){
        
        $this->form_validation->set_rules('titulo', 'Título', 'required');
        $this->form_validation->set_rules('descripcion', 'Descripción', 'required');
        $this->form_validation->set_rules('precio', 'Precio', 'required|is_natural');
        $this->form_validation->set_rules('sector', 'Sector', '');
        $this->form_validation->set_rules('vende_arrienda', 'Vende Arrienda', '');
        $this->form_validation->set_rules('superficie', 'Superficie', 'required|is_natural');
        $this->form_validation->set_rules('superficie_cons', 'Superficie construida', 'required|is_natural');
        $this->form_validation->set_rules('banos', 'Baños', 'required|is_natural');
        $this->form_validation->set_rules('estacionamientos', 'Estacionamientos', 'required|is_natural');
        $this->form_validation->set_rules('amoblado', 'Amoblado', 'required');
        $this->form_validation->set_rules('disponible', 'Disponible', 'required');
        $this->form_validation->set_rules('dormitorios', 'Dormitorios', 'required|is_natural');
        $this->form_validation->set_rules('fecha', 'Fecha disponible', 'callback_valida_fecha');
        
        $data[0] = '';
        
        if($this->input->post('fotos'))
        {
            foreach ($this->input->post('fotos') as $foto) {
                $data['fotos'][] = $foto;
            }
        }
        
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('header', $data);
            $this->load->view('casa_form', $data);
            $this->load->view('footer', $data);
        }
        else
        {
            $id_casa = $this->Casas_model->agregar_casa();
            redirect('editar_casa/'.$id_casa);
        }
        
    }
    
    function editar_casa($id_casa)
    {
        $data['editar'] = 1;
        $this->form_validation->set_rules('titulo', 'Título', 'required');
        $this->form_validation->set_rules('descripcion', 'Descripción', 'required');
        $this->form_validation->set_rules('precio', 'Precio', 'required|is_natural');
        $this->form_validation->set_rules('sector', 'Sector', '');
        $this->form_validation->set_rules('vende_arrienda', 'Vende Arrienda', '');
        $this->form_validation->set_rules('superficie', 'Superficie', 'required|is_natural');
        $this->form_validation->set_rules('superficie_cons', 'Superficie construida', 'required|is_natural');
        $this->form_validation->set_rules('banos', 'Baños', 'required|is_natural');
        $this->form_validation->set_rules('estacionamientos', 'Estacionamientos', 'required|is_natural');
        $this->form_validation->set_rules('amoblado', 'Amoblado', 'required');
        $this->form_validation->set_rules('disponible', 'Disponible', 'required');
        $this->form_validation->set_rules('dormitorios', 'Dormitorios', 'required|is_natural');
        $this->form_validation->set_rules('fecha', 'Fecha disponible', 'callback_valida_fecha');
        $this->form_validation->set_rules('id_casa', 'ID Casa', '');
        
        $casa = $this->Casas_model->obtener_casa($id_casa);
        $data['id_casa'] = $id_casa;
        $data['titulo'] = $casa['TITULO'];
        $data['descripcion'] = $casa['DESCRIPCION'];
        $data['precio'] = $casa['PRECIO'];
        $data['sector'] = $casa['SECTOR'];
        $data['vende_arrienda'] = $casa['VENDE_ARRIENDA'];
        $data['superficie'] = $casa['SUPERFICIE'];
        $data['superficie_cons'] = $casa['SUP_CONST'];
        $data['banos'] = $casa['BANOS'];
        $data['estacionamientos'] = $casa['ESTACIONAMIENTOS'];
        $data['amoblado'] = $casa['AMOBLADO'];
        $data['disponible'] = $casa['DISPONIBLE'];
        $data['dormitorios'] = $casa['DORMITORIOS'];
        $data['fecha'] = $casa['FECHA_DISP'];
        
        //cargar las fotos
        $fotos = $this->Casas_model->obtener_fotos($id_casa);
        if(count($fotos) > 0)
        {
            foreach ($fotos as $foto) {
                $data['fotos'][] = $foto['NOMBRE'];
            }
        }
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('header', $data);
            $this->load->view('casa_form', $data);
            $this->load->view('footer', $data);
        }
        else
        {
            $this->Casas_model->modificar_casa();
            redirect('editar_casa/'.$id_casa);
        }
        
    }
            
    function valida_fecha($fecha) {
        if ($fecha == ''){
            return true;
        }
        $arr = explode("/", $fecha);
        if (count($arr) == 3) {
            $y = $arr[2];
            $m = $arr[1];
            $d = $arr[0];

            if (is_numeric($y) && is_numeric($m) && is_numeric($d)) {
                $this->form_validation->set_message('valida_fecha', '%s incorrecta');
                return checkdate($m, $d, $y);
            } else {
                $this->form_validation->set_message('valida_fecha', '%s incorrecta');
                return false;
            }
        } else {
            $this->form_validation->set_message('valida_fecha', '%s incorrecta');
            return false;
        }
    }

}