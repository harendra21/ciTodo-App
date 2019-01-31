<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function formResp($data){
	
	$status = $data['status'];
	$msg = $data['msg'];
	$data = $data['data'];

	if ($status == 'error') { ?>
		<div class="alert alert-danger" role="alert">
		  <?= $msg; ?>
		</div>
	<?php }else if($status == 'success'){ ?>
		<div class="alert alert-success" role="alert">
		  <?= $msg; ?>
		</div>
	<?php }
}

function createFormResp($data){
	$CI =& get_instance();
	$CI->session->set_flashdata('formResp', $data);
	redirect($_SERVER['HTTP_REFERER']);
}