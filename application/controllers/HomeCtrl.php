<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeCtrl extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('UserModel');
	}

	public function index(){
		$data = array();

		if (isset($_POST['submit'])) {
			$this->createUser();
		}

		$data['users'] = $this->UserModel->getUsers();

		$this->load->view('home',$data);
	}

	public function createUser(){

		$userName = $_POST['userName'];
		$userEmail = $_POST['userEmail'];
		$userPhone = $_POST['userPhone'];

		if (empty($userName) || $userName == null) {
			$data = array('status' => 'error', 'msg' => 'Username is empty !', 'data' => null);
			createFormResp($data);	
		}else if (empty($userEmail) || $userEmail == null) {
			$data = array('status' => 'error', 'msg' => 'Useremail is empty !', 'data' => null);
			createFormResp($data);
		}else if (empty($userPhone) || $userPhone == null) {
			$data = array('status' => 'error', 'msg' => 'Userphone is empty !', 'data' => null);
			createFormResp($data);
		}else{
			$resp = $this->UserModel->insertUser($_POST);
			if (!$resp) {
				$data = array('status' => 'error', 'msg' => 'Something went wrong !', 'data' => null);
				createFormResp($data);
			}else{
				$data = array('status' => 'success', 'msg' => 'User Created !', 'data' => null);
				createFormResp($data);
			}
		}



	}
}
