<?php

class ModelExercise extends CI_Model{
		public function saveEquipment($eqname,$eqcat,$eqimage,$eqdetails,$eqvideo){
			$arr=array(
				'eqname'=>$eqname,
				'eqcat'=>$eqcat,
				'eqimage'=>$eqimage,
				'eqdetails'=>$eqdetails,
				'eqvideo'=>$eqvideo

				);
			$this->db->insert('tblexercise',$arr);

		}

		public function retriveCategory(){
		return $this->db->get('tblexcategory');
		}

		public function retriveExercise(){

			return $this->db->get('tblexercise');
		}
		public function retriveExerciseById($id){
			$this->db->where('id',$id);
			return $this->db->get('tblexercise');
		}


		public function retriveChestExercise(){
			$this->db->where('eqcat','chest');
			return $this->db->get('tblexercise');

		}
		// public function retriveChestVideo($id){
		// 	$this->db->where('id',$id);
		// 	return $this->db->get('tblexercise');

		// }
		public function retriveSearchExercise($forsearch){
			$this->db->like('eqname',$forsearch);
			return $this->db->get('tblexercise');
		}
		public function deleteExercise($id){
			$this->db->where('id',$id);
			$this->db->delete('tblexercise');
		}
		public function updateImage($id,$image){
	$arr=array(
		'id'=>$id,
		'eqimage'=>$image
		);
	$this->db->where('id',$id);
	$this->db->update('tblexercise',$arr);
}

public function updateExercise($id,$eqname,$eqcat,$eqdetails){
$arr=array(
'id'=>$id,
'eqname'=>$eqname,
'eqcat'=>$eqcat,
'eqdetails'=>$eqdetails
	);
$this->db->where('id',$id);
$this->db->update('tblexercise',$arr);

}
}

?>