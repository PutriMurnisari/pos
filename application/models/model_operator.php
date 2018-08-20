<?php
class model_operator extends CI_MODEL {
		
		

		function login($username,$password){
			$chek= $this->db->get_where('operator',array('username'=>$username,'password'=>  md5($password)));
			if ($chek->num_rows()>0) 
			{
				
				return 1;

			}
			else{
				return 0;
			}

		}
		function logout(){
			$this->session->session_destroy();
			redirect('auth/login');
		}
	}