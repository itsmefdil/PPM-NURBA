<?php 

$role = $this->session->userdata('role');
		if ($role != 'Administrator') {
			include 'menu_staff.php';
		}else{
			include 'menu_admin.php';
		}

		
