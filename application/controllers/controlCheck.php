<?php

class ControlCheck extends CI_Controller{
	public function checkForLogin(){
		$uname=$this->input->post('uname');
		$pword=$this->input->post('pword');

		$this->load->model('modelCheck');
		$resultTrainer=$this->modelCheck->forloginTrainer($uname,$pword);
		$resultAdmin=$this->modelCheck->forLoginAdmin($uname,$pword);

		if($resultTrainer->num_rows() > 0){
			foreach($resultTrainer->result() as $row){
					$dbid=$row->id;
					$dbuname=$row->uname;
					$dbpword=$row->pword;
					
						
						$this->session->set_userdata('sess_uname',$dbuname);
						$this->session->set_userdata('sess_id',$dbid);
					if($dbpword==$pword && $dbuname==$uname){

						redirect('controlWelcome/goToTrainer');
						die();
					}
					
			}
		}else if($resultAdmin->num_rows() > 0){
			foreach($resultAdmin->result() as $row){
					$dbid=$row->id;
					$dbuname=$row->uname;
					$dbpword=$row->pword;

					if($dbpword==$pword && $dbuname==$uname){
					
						$this->session->set_userdata('sess_id',$dbid);
						redirect('controlWelcome/goToAdmin');
						die();
					}
					
			}
		}

		else{
						$this->session->set_flashData('loginmsg','login fail:please try again');
						redirect('controlWelcome/goToLogin');
					}



	}

	public function destroySession(){
		session_destroy();
		$this->session->set_userdata('sess_id','');
		redirect('controlWelcome/goToLogin');
	}

	public function checkUnameAvailability(){
		// if(!filter_val($_POST['uname'], FILTER_VALIDATE_EMAIL)){
		// 	echo 'invalid email';

		// }else{
			$this->load->model('modelCheck');
			if($this->modelCheck->isUnameAvailable($_POST['uname'])){
					echo 'email already register';
			}
			else{
				echo 'email available';
			}
		}
	
}


?>