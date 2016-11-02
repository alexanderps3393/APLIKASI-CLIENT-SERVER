<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_member extends CI_Controller {


	public function index()
	{
		$data = $this->m_member->getDataMember();
		$this->load->view('v_member',array('data'=>$data));
	}


	public function filter(){

	}

	public function update(){

	}
	public function delete($id){
		$res = $this->m_member->delete('client',array(

			"id_client"=>$id,
		));

		if($res >=1){
      echo "Berhasil delete";
        redirect(base_url().'index.php/c_member');

    }
		else{
      echo "gagal delete";
    }

	}



}
