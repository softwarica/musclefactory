<?php
class ModelCheck extends CI_Model{
	public function forloginTrainer($uname,$pword){
	$this->db->where('uname',$uname);
	$this->db->where('pword',$pword);

	return $this->db->get('tbltrainer');

	}
	public function forloginAdmin($uname,$pword){
	$this->db->where('uname',$uname);
	$this->db->where('pword',$pword);

	return $this->db->get('tblregister');
	}

	public function isUnameAvailable($uname){
		$this->db->where('uname',$uname);
		$query=$this->db->get('tblregister');

		if($query->num_rows() >0){
			return true;
		}else{
			return false;
		}
	}
}
?>