<?php 
	/**
	* CORE FUNCTIONALITY CLASS
	*/
	class CanCore
	{
		private $host = 'localhost';
		private $user = 'root';
		private $pass = '';
		private $db = 'tech_db';
		public $connection;
		function __construct()
		{
			$this->dbConnect();
		}

		private function dbConnect(){
			$this->connection = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
			
			if ( !$this->connection ) {
				die("Connection failed : " . mysql_error());
			}
		}

		public function loginAuth($user, $pass){
			if($user != '' || $pass != ''){
				$user_arr = array();
				$query = "SELECT tech_users_id, tech_users_username, tech_users_password, tech_users_role FROM tech_users WHERE tech_users_username ='$user' AND tech_users_password = '$pass'";
				$res = mysqli_query($this->connection, $query);
				$count = mysqli_num_rows($res);
	            if($count > 0){
					$row = mysqli_fetch_array($res);
					$this->createSession('user', $row);
					$user_arr['userid'] = $row['tech_users_id'];
					$user_arr['userrole'] = $row['tech_users_role'];
					return $user_arr;
	            }else{
	            	return false;
	            }
	        }else{
	        	return false;
	        }
		}

		private function createSession($key, $value){
			$_SESSION[$key] = $value;
		}

		public function addUserData($data){
			$name = $data['name'];
			$email = $data['email'];
			$mobile = $data['mobile'];
			$gender = $data['gender'];
			$qualification = $data['qualification'];
			$appliedposition = $data['appliedposition'];
			$marital_status = $data['marital_status'];
			$date = $data['date'];
			//$technical_assign = $data['technical_assign'];
			$technical_assign = 3;
			$technical_comment = 'No comments';
			$hr_comment = 'No comments';
			$can_status = 0;
			$meta_data = $data['meta'];
			$query = "INSERT INTO tech_candidates (tech_can_fullname, tech_can_email, tech_can_mobile, tech_can_gender, tech_can_qualification, tech_can_appliedposition, tech_can_maritalstatus, tech_can_dor, tech_can_technical_assign, tech_can_technical_comment, tech_can_hr_comment, tech_can_status) VALUES ('$name','$email','$mobile','$gender','$qualification','$appliedposition','$marital_status','$date','$technical_assign','$technical_comment','$hr_comment','$can_status' )";

			$result = mysqli_query($this->connection, $query);
			$lastuser = mysqli_insert_id($this->connection);

			$status = $this->addUserMeta($lastuser, $meta_data);
			if($status){
				return true;
			}else{
				return false;
			}
		}

		public function addUserMeta($id, $data){
			if($data != '' && $id != ''){
				$count_flag = count($data);
				$i = 0;

				if(empty('user[meta][fresher]')){
					$user[meta][fresher] = '[{"institute":"","technology":"","passout":""}]';
				}

				foreach ($data as $key => $value) {
					$query = "INSERT INTO tech_candidate_meta (tech_can_id,tech_can_meta_key,tech_can_meta_value) VALUES ('$id','$key','$value')";
					$result = mysqli_query($this->connection, $query);
					if($result){
						$i++;
					}
				}

				if($count_flag == $i){
					return true;
				}else{
					return false;
				}
			}
		}

		public function basic_registered_list(){
			
			$sql = "SELECT * FROM tech_candidates WHERE tech_can_status = 0 ";

			$result = mysqli_query($this->connection, $sql);
		
			if($result){
				return $result;
			}else{
				return false;
			}
		}

		public function hr_List(){
			
			$sql = "SELECT * FROM tech_candidates WHERE tech_can_status =0";

			$result = mysqli_query($this->connection, $sql);
		
			if($result){
				return $result;
			}else{
				return false;
			}
		}

		public function tech_List($id){
			
			$sql = "SELECT * FROM tech_candidates WHERE tech_can_technical_assign = '$id' ";
	
			$result = mysqli_query($this->connection, $sql);
		
			if($result){
				return $result;
			}else{
				return false;
			}
		}

		public function basic_view_data($id){

			$query = 
			"SELECT  a.*,
		    b.tech_can_meta_value as exp,
		    c.tech_can_meta_value as fresher,
		    d.tech_can_meta_value as notice_period,
		    e.tech_can_meta_value as notice_type,
		    f.tech_can_meta_value as tech_can_training,
		    g.tech_can_meta_value as tech_can_bond,
		    h.tech_can_meta_value as tech_can_court,
		    i.tech_can_meta_value as tech_can_multishifts,
		    j.tech_can_meta_value as tech_can_skills,
		    k.tech_can_meta_value as tech_can_currentctc,
		    l.tech_can_meta_value as tech_can_expectedctc,
		    m.tech_can_meta_value as tech_can_hearabout
		    
		    FROM tech_candidates as a,
		    tech_candidate_meta as b,
		    tech_candidate_meta as c,
		    tech_candidate_meta as d,
		    tech_candidate_meta as e,
		    tech_candidate_meta as f,
		    tech_candidate_meta as g,
		    tech_candidate_meta as h,
		    tech_candidate_meta as i,
		    tech_candidate_meta as j,
		    tech_candidate_meta as k,
		    tech_candidate_meta as l,
		    tech_candidate_meta as m

		    where a.tech_can_id = $id AND
		    a.tech_can_id = b.tech_can_id AND
		    a.tech_can_id = c.tech_can_id AND
		    a.tech_can_id = d.tech_can_id AND
		    a.tech_can_id = e.tech_can_id AND
		    a.tech_can_id = f.tech_can_id AND
		    a.tech_can_id = g.tech_can_id AND
		    a.tech_can_id = h.tech_can_id AND 
		    a.tech_can_id = i.tech_can_id AND
		    a.tech_can_id = j.tech_can_id AND
		    a.tech_can_id = k.tech_can_id AND
		    a.tech_can_id = l.tech_can_id AND
		    a.tech_can_id = m.tech_can_id AND

		    b.tech_can_meta_key = 'exp' AND
		    c.tech_can_meta_key = 'fresher' AND
		    d.tech_can_meta_key = 'notice_period' AND
		    e.tech_can_meta_key = 'notice_type' AND
		    f.tech_can_meta_key = 'tech_can_training' AND
		    g.tech_can_meta_key = 'tech_can_bond' AND
		    h.tech_can_meta_key = 'tech_can_court' AND
		    i.tech_can_meta_key = 'tech_can_multishifts' AND
		    j.tech_can_meta_key = 'tech_can_skills' AND
		    k.tech_can_meta_key = 'tech_can_currentctc' AND
		    l.tech_can_meta_key = 'tech_can_expectedctc' AND
		    m.tech_can_meta_key = 'tech_can_hearabout' ";

			$result = mysqli_query($this->connection, $query);

			$row = mysqli_fetch_array($result, MYSQLI_ASSOC); 

			if($row){
				return $row;
			}else{
				return false;
			}
		
		}

		public function technical_assign_fetch(){
			
			$sql1 = "SELECT tech_users_id, tech_users_username FROM tech_users WHERE tech_users_role = 2";

			$result1 = mysqli_query($this->connection, $sql1);

			// $tech = mysqli_fetch_array($result1, MYSQLI_ASSOC);
		
			if($result1){
				return $result1;
			}else{
				return false;
			}
		}

		public function addHrComment($data,$val){

		    $technical_assign = $data['technical_hr_assign']; 
		    $hr_update_assign = $data['hr_update_comment'];  

			$query = " UPDATE tech_candidates SET tech_can_technical_assign = '$technical_assign',tech_can_hr_comment = '$hr_update_assign' WHERE tech_can_id = '$val' ";

			$status = mysqli_query($this->connection, $query);

			if($status){
				return true;
			}else{
				return false;
			}
		}

		public function technicalComment($data,$val){

		    $techview_update_comment = $data['techview_update_comment']; 
		    
			$query = "UPDATE tech_candidates SET tech_can_technical_comment = '$techview_update_comment' WHERE tech_can_id = '$val' ";

			$status = mysqli_query($this->connection, $query);

			if($status){
				return true;
			}else{
				return false;
			}
		}

		public function rejectUser($val){

			$query = "UPDATE tech_candidates SET tech_can_status = 1 WHERE tech_can_id = '$val' ";

			$result = mysqli_query($this->connection, $query); 

			if($result){
				return true;
			}else{
				return false;
			}
		
		}

		public function approveUser($val){

			$query = "UPDATE tech_candidates SET tech_can_status = 2 WHERE tech_can_id = '$val' ";

			$result = mysqli_query($this->connection, $query); 

			if($result){
				return true;
			}else{
				return false;
			}
		
		}

		public function hr_approved_list(){
			
			$sql = "SELECT * FROM tech_candidates WHERE tech_can_status =2 ";

			$result = mysqli_query($this->connection, $sql);

			if($result){
				return $result;
			}else{
				return false;
			}
		}

		/*Update*/
		public function updateUserData($data,$val){
			$name = $data['name'];
			$email = $data['email'];
			$mobile = $data['mobile'];
			$gender = $data['gender'];
			$qualification = $data['qualification'];
			$appliedposition = $data['appliedposition'];
			$marital_status = $data['marital_status'];
			$date = $data['date'];

			if(!isset($data['technical_hr_assign'])){
				$technical_assign = 3;
			}
			else{
				$technical_assign = $data['technical_hr_assign'];
			}

			if(empty($data['hr_update_comment'])){
				$hr_comment = 'No comments';
			}
			else{
				$hr_comment = $data['hr_update_comment'];
			}

			$can_status = 0;
			$meta_data = $data['meta'];
			$query = "UPDATE tech_candidates SET 
							tech_can_fullname ='$name',
							tech_can_email ='$email',
							tech_can_mobile ='$mobile',
							tech_can_gender ='$gender',
							tech_can_qualification ='$qualification',
							tech_can_appliedposition ='$appliedposition',
							tech_can_maritalstatus ='$marital_status',
							tech_can_dor ='$date',
							tech_can_technical_assign ='$technical_assign',
							tech_can_hr_comment ='hr_comment',
							tech_can_status  ='$can_status' WHERE tech_can_id = '$val'
							";
			$result = mysqli_query($this->connection, $query);
			$lastuser = $val;

			$status = $this->updateUserMeta($lastuser, $meta_data);
			if($status){
				return true;
			}else{
				return false;
			}
		}

		public function updateUserMeta($id, $data){
			if($data != '' && $id != ''){
				$count_flag = count($data);
				$i = 0;

				if(empty('user[meta][fresher]')){
					$user[meta][fresher] = '[{"institute":"","technology":"","passout":""}]';
				}

				foreach ($data as $key => $value) {
	
					$query = "UPDATE tech_candidate_meta SET 
									tech_can_id = '$id',
									tech_can_meta_key ='$key',
									tech_can_meta_value = '$value' ";	

					$result = mysqli_query($this->connection, $query);
					if($result){
						$i++;
					}
				}

				if($count_flag == $i){
					return true;
				}else{
					return false;
				}
			}
		}

		// public function checkmail(){ 
		// 	if(isset($_POST['email'])){   
		// 		$email =$_POST['email'];
		// 		$checkdata=" SELECT tech_can_email FROM tech_candidates WHERE tech_can_email ='$email' ";

		// 		$query=mysqli_query($this->connection,$checkdata);

		// 		if(mysqli_num_rows($query)>0){
		// 			echo "Email Already Exist";
		// 	  	}
		// 	}	
		// }	
		
	}
?>