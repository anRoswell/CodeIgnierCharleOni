<?php

session_start(); //we need to start session in order to access it through CI

Class LoginController extends CI_Controller {
    public function __construct() {
        echo "Entro por __construct()";
        try {
            parent::__construct();
        } catch (Exception $e) {}

        // Load form helper library
        $this->load->helper('form');

        // Load form validation library
        $this->load->library('form_validation');

        $this->load->database('default');

        // Load session library
        //$this->load->library('session'); //Aparently this line is loaded by default so just commented it

        // Load database
        $this->load->model('loginModel');
    }

    /**
     * Valida si la varible de session existe 
     * lo q indica usuario logueado o no
     * @return bool true o false
     */
    private function user_already_logged() {
        echo "Entro por user_already_logged";
        return isset($this->session->userdata['logged_in']);
    }
        
    // Show login page
    public function index() {
        echo "llego al index";
        //If already logged, continue to admin page
        if ($this->user_already_logged()) {
            $this->load->view('admin_page');
        } else {
            $this->load->view('loginView');
        }
    }

    // Show registration page
    public function user_registration_show() {
        $this->load->view('registration_form');
    }

    // Validate and store registration data in database
    public function new_user_registration() {

        // Check validation for user input in SignUp form
        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('email_value', 'Email', 'trim|required|xss_clean|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('registration_form');
        } else {
            $data = array(
                'user_name' => $this->input->post('username'),
                'user_email' => $this->input->post('email_value'),
                'user_password' => $this->input->post('password')
            );

            //Applying security to the password. Must be encrypted
            $hashed_password = password_hash($data['user_password'], PASSWORD_DEFAULT);
            $data['user_password'] = $hashed_password;

            $result = $this->login_database->registration_insert($data);
            if ($result == TRUE) {
                $data['message_display'] = 'Registration Successfully !';
                $this->load->view('loginView', $data);
            } else {
                $data['message_display'] = 'Username or Email already exist!';
                $this->load->view('registration_form', $data);
            }
        }
    }

    // Check for user login process
    public function user_login_process() {
        echo "Entro por user_login_process";
        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
        
        if ($this->form_validation->run() == FALSE) {
            if(isset($this->session->userdata['logged_in'])){
                $dataResult = $this->VentasZonas();
                $this->load->view('admin_page', $dataResult);
            }else{
                $this->load->view('loginView');
            }
        } else {
            $data = array(
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password')
            );

            $result = $this->loginModel->login($data);

            if (password_verify($data['password'], $result[0]->user_password)) {

                $username = $this->input->post('username');
                $result = $this->loginModel->read_user_information($username);
                if ($result != false) {
                    $session_data = array(
                    'username' => $result[0]->user_name,
                    'email' => $result[0]->user_email,
                    );

                    // Add user data in session
                    $this->session->set_userdata('logged_in', $session_data);
                    $dataResult = $this->VentasZonas();
                    $this->load->view('admin_page', $dataResult);
                    //$this->load->view('admin_page');
                }
            } else {
                $data = array(
                'error_message' => 'Invalid Username or Password'
                // . $data['password'] . ' ' . $result[0]->user_password . ' ' . password_hash($data['password'], PASSWORD_DEFAULT)
                );
                $this->load->view('loginView', $data);
            }
        }
    }

    // Logout from admin page
    public function logout() {

        // Removing session data
        $sess_array = array(
            'username' => ''
        );
        $this->session->unset_userdata('logged_in', $sess_array);
        $this->session->sess_destroy();
        $data['message_display'] = 'Successfully Logout';
        $this->load->view('loginView', $data);
    }

    /**
     * 
     */
    public function VentasZonas()
    {
        $this->db->close();
        // Load database
        $this->load->database('clc');
        $this->load->model('InformesModel');
        $data['titulo'] = 'Informes Uncle Charles';
        $data['VentasZonas'] = $this->InformesModel->queryVentasZonas();
        return $data;
    }

}

?>