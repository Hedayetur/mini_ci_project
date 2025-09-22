<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Student_model');
        $this->load->helper('url');
    }

    public function index() {
        $data['students'] = $this->Student_model->get_students();
        $this->load->view('student_form', $data);
    }

    public function save() {
        $data = array(
            'name'  => $this->input->post('name'),
            'email' => $this->input->post('email')
        );
        $this->Student_model->insert_student($data);
        redirect('student');
    }

    public function view($id) {
        $this->db->where('id', $id);
        $data['student'] = $this->db->get('students')->row();
        $this->load->view('student_view', $data);
    }
}