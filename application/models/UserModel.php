<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

	public function getUsers(){
		$data = $this->db->get('user');
		if ($data->num_rows() > 0) {
			return $data->result();
		}
	}

	public function insertUser($formData){
		$userName = $formData['userName'];
		$userEmail = $formData['userEmail'];
		$userPhone = $formData['userPhone'];

		$data_arr = array(
		    'user_name' => $userName,
		    'user_email' => $userEmail,
		    'user_phone' => $userPhone
		);

		return $this->db->insert('user',$data_arr);

	}
	

}

/* End of file UserModel.php */
/* Location: ./application/models/UserModel.php */