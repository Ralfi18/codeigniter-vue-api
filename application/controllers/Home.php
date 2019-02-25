<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
  public function __construct() {
    parent::__construct();
    $this->load->model('user_model');
    $this->load->model('tests_model');
    $this->load->model('results_model');

  }

	public function index()
	{
    // $data['user'] = $this->user_model->getAll('users');
    $data['tests'] = $this->tests_model->getAll('tests');
    $data['question'] = $this->tests_model->getAll('quetsions', true, 'ID, testID, name');
    $data['varinats'] = $this->tests_model->getAll('varinats');
    // echo "<pre>";
    // var_dump($this->tests_model->getSelectedTest(1, 1)) ; die();

		$this->load->view('home', $data);
	}

  public function addTest() {
    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->form_validation->set_rules('title', 'Title', 'required');
    $data['title'] = 'Add new test.';

    if ($this->form_validation->run()) {
        $postData= $this->input->post();
        echo "<pre>";
        foreach($postData as $key => $vale) {
          print_r($key);
          echo "<br>";
        }

        // $this->session->set_flashdata('msg', 'Test added');
        // $this->tests_model->add_test(['name'=>$title]);
        // redirect('home/addTest');
    }
    $this->load->view('add_test', $data);
  }

  public function api() {
    $data = json_decode(file_get_contents('php://input'));
    echo json_encode($data);
  }

  public function result() {
    // results_model
    $results = $this->results_model->getResultForUser(1, 1);
    var_dump($results);
  }
}
