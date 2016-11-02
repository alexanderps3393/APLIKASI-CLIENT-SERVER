<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_dataLab extends CI_Controller {


	public function index(){
    $data = $this->M_dataLab->getDataLab();

		$this->load->view('v_tambahLab',array('data'=>$data));
	}

  public function insert(){
    $nama=$_POST['nama_png'];
    $nama_lab=$_POST['nama_lab'];

    $res = $this->M_dataLab->insert ('laboratorium',array(

      "nama_lab" =>$nama,
      "penanggung_jawab" =>$nama_lab,
      "status " => "0",
    ));

    if($res >=1){
      redirect(base_url().'index.php/C_dataLab');
    }else{
      echo "gagal";
    }

  }

  public function update($id_lab){
$res= $this->M_dataLab->getDataLab("where id_lab= ".$id_lab);


    if($res >=1){
		echo redirect(base_url().'index.php/C_dataLab');
    }else{
      echo "gagal update";
    }


  }

  public function delete($id){
    $res = $this->M_dataLab->delete('laboratorium',array(
      "id_lab"=>$id,
    ));
    if($res >=1){
      echo "Berhasil delete";
        redirect(base_url().'index.php/C_dataLab');

    }else
      echo "gagal delete";
    }
  }
