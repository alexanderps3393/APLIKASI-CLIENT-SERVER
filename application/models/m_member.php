<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_member extends CI_Model {

public function getDataMember($where =" "){
  $res = $this->db->query('select * from client '. $where);
  return $res->result_array();


}

public function delete($namaTable,$data){
  $res = $this->db->delete($namaTable,$data);
  return $res;
}






}
?>
