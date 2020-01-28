<?php

session_start(); //we need to start session in order to access it through CI

Class InformesController extends CI_Controller {
    public function __construct() {
        try {
            parent::__construct();
        } catch (Exception $e) {}

        // Load form helper library
        $this->load->helper('form');

        // Load form validation library
        $this->load->library('form_validation');

        // Load form helper library
        $this->load->helper('form');

        // Load form validation library
        $this->load->library('form_validation');

        // Load session library
        //$this->load->library('session'); //Aparently this line is loaded by default so just commented it

        $this->load->database('clc');

        // Load database
        $this->load->model('InformesModel');
    }

     public function index()
    {
        //$this->GetResumenClc();
        $dataForm = array(
            'lapso' => $this->input->post('lapso'),
        );

        $diaEfectivo = $this->input->post('diaHabil');
        $diaHabil = $this->input->post('diaEfectivo');

        $data['titulo'] = 'Informes Uncle Charles';
        $data['user_entrys'] = $this->InformesModel->queryResumenClc($diaEfectivo, $diaHabil);
        $this->load->view('main', $data);
    }
}