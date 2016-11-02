<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dataLab extends CI_Model {

public function getDataLab($where=" "){
  $res =$this->db->query('select * from laboratorium '. $where);
  return $res->result_array();
}
public function insert($namaTable,$data){

  $res=$this->db->insert($namaTable,$data);
  return $res;

}

public function update($namaTable,$data,$where){
  $res = $this->db->update($namaTable,$data,$where);

  return $res;
}

public function delete($namaTable,$data){
  $res = $this->db->delete($namaTable,$data);

  return $res;
}


}
?>
