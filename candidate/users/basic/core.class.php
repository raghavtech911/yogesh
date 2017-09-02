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
			$technical_assign = $data['technical_assign'];
			$technical_comment = $data['technical_comment'];
			$hr_comment = $data['hr_comment'];
			$can_status = $data['can_status'];
			
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

		
	}
?>