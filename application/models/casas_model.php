<?php

/**
 * @property CI_Loader $load
 * @property CI_Input $input
 * @property CI_DB_active_record $db
 */
class Casas_model extends CI_Model {
    
    function __construct() {
        parent::__construct();
        $this->load->database();
    }


    public function agregar_casa(){
        
        $titulo = $this->input->post('titulo') == '' ? "NULL" : "'".$this->input->post('titulo')."'";
        $descripcion = $this->input->post('descripcion') == '' ? "NULL" : "'".$this->input->post('descripcion')."'";
        $precio = $this->input->post('precio') == '' ? "NULL" : "".$this->input->post('precio')."";
        $sector = $this->input->post('sector') == '' ? "NULL" : "".$this->input->post('sector')."";
        $vende_arrienda = $this->input->post('vende_arrienda') == '' ? "NULL" : "'".$this->input->post('vende_arrienda')."'";
        $superficie = $this->input->post('superficie') == '' ? "NULL" : "".$this->input->post('superficie')."";
        $superficie_cons = $this->input->post('superficie_cons') == '' ? "NULL" : "".$this->input->post('superficie_cons')."";
        $banos = $this->input->post('banos') == '' ? "NULL" : "".$this->input->post('banos')."";
        $estacionamientos = $this->input->post('estacionamientos') == '' ? "NULL" : "".$this->input->post('estacionamientos')."";
        $amoblado = $this->input->post('amoblado') == '' ? "NULL" : "'".$this->input->post('amoblado')."'";
        $disponible = $this->input->post('disponible') == '' ? "NULL" : "'".$this->input->post('disponible')."'";
        $dormitorios = $this->input->post('dormitorios') == '' ? "NULL" : "".$this->input->post('dormitorios')."";
        $tmp = explode('/', $this->input->post('fecha'));
        $fecha = $this->input->post('fecha') == '' ? "NULL" : "'".$tmp[2].'-'.$tmp[1].'-'.$tmp[0]."'";
        
        $sql = "
            INSERT INTO CASAS
            (TITULO, DESCRIPCION, PRECIO, SECTOR, VENDE_ARRIENDA, SUPERFICIE, SUP_CONST, BANOS, ESTACIONAMIENTOS, AMOBLADO, DISPONIBLE, FECHA_DISP, PUBLICADA, FECHA_CREACION, DORMITORIOS)
            VALUES (
                $titulo,
                $descripcion,
                $precio,
                $sector,
                $vende_arrienda,
                $superficie,
                $superficie_cons,
                $banos,
                $estacionamientos,
                $amoblado,
                $disponible,
                $fecha,
                'S',
                NOW(),
                $dormitorios
            )
            ";
        $this->db->query($sql);
        $id_casa = $this->db->insert_id();
        if ($this->input->post('fotos')){
            foreach ($this->input->post('fotos') as $foto){
                $sql = "
                    INSERT INTO FOTOS (NOMBRE, ID_CASA, FECHA)
                    VALUES ('$foto', $id_casa, NOW())
                ";
                $this->db->query($sql);
            }
        }
        return $id_casa;
    }
    
    function modificar_casa()
    {
        $id_casa = $this->input->post('id_casa') == '' ? "NULL" : "".$this->input->post('id_casa')."";
        $titulo = $this->input->post('titulo') == '' ? "NULL" : "'".$this->input->post('titulo')."'";
        $descripcion = $this->input->post('descripcion') == '' ? "NULL" : "'".$this->input->post('descripcion')."'";
        $precio = $this->input->post('precio') == '' ? "NULL" : "".$this->input->post('precio')."";
        $sector = $this->input->post('sector') == '' ? "NULL" : "".$this->input->post('sector')."";
        $vende_arrienda = $this->input->post('vende_arrienda') == '' ? "NULL" : "'".$this->input->post('vende_arrienda')."'";
        $superficie = $this->input->post('superficie') == '' ? "NULL" : "".$this->input->post('superficie')."";
        $superficie_cons = $this->input->post('superficie_cons') == '' ? "NULL" : "".$this->input->post('superficie_cons')."";
        $banos = $this->input->post('banos') == '' ? "NULL" : "".$this->input->post('banos')."";
        $estacionamientos = $this->input->post('estacionamientos') == '' ? "NULL" : "".$this->input->post('estacionamientos')."";
        $amoblado = $this->input->post('amoblado') == '' ? "NULL" : "'".$this->input->post('amoblado')."'";
        $disponible = $this->input->post('disponible') == '' ? "NULL" : "'".$this->input->post('disponible')."'";
        $dormitorios = $this->input->post('dormitorios') == '' ? "NULL" : "".$this->input->post('dormitorios')."";
        $tmp = explode('/', $this->input->post('fecha'));
        $fecha = $this->input->post('fecha') == '' ? "NULL" : "'".$tmp[2].'-'.$tmp[1].'-'.$tmp[0]."'";
        
        $sql = "
            UPDATE CASAS
            SET
                TITULO = $titulo,
                DESCRIPCION = $descripcion,
                PRECIO = $precio,
                SECTOR = $sector,
                VENDE_ARRIENDA = $vende_arrienda,
                SUPERFICIE = $superficie,
                SUP_CONST = $superficie_cons,
                BANOS = $banos,
                ESTACIONAMIENTOS = $estacionamientos,
                AMOBLADO = $amoblado,
                DISPONIBLE = $disponible,
                FECHA_DISP = $fecha,
                DORMITORIOS = $dormitorios
            WHERE ID = $id_casa
            ";
        $this->db->query($sql);
        
        //actualizar las fotos
        $sql = "
            DELETE FROM FOTOS
            WHERE ID_CASA = $id_casa
            ";
        $this->db->query($sql);
        //se insertan las fotos de nuevo
        if ($this->input->post('fotos')){
            foreach ($this->input->post('fotos') as $foto){
                $sql = "
                    INSERT INTO FOTOS (NOMBRE, ID_CASA, FECHA)
                    VALUES ('$foto', $id_casa, NOW())
                ";
                $this->db->query($sql);
            }
        }
    }
    
    function obtener_fotos($id_casa){
        $sql = "
            SELECT NOMBRE, ID_CASA, FECHA
            FROM FOTOS
            WHERE ID_CASA = $id_casa
        ";
        $q = $this->db->query($sql);
        $rows = $q->result_array();
        return $rows;
    }
    
    function obtener_casa($id_casa){
        $sql = "
            SELECT *
            FROM CASAS
            WHERE ID = $id_casa
        ";
        $q = $this->db->query($sql);
        $casa = $q->result_array();
        return $casa[0];
    }
}
