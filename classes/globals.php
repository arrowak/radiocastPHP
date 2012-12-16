<?php
	class Globals{
		
		$mysqlservername = "localhost";
		$mysqlusername = "root";
		$mysqlpassword = "admin";
		$mysqldb = "radiocast";
		
		public function login($loginId,$password){
					try{						
						$con = mysql_connect($server = $mysqlservername, $username = $mysqlusername, $password = $mysqlpassword);
						mysql_select_db($mysqldb);
						if($con){
							$query = "SELECT users_id FROM users WHERE login_id = '$loginId' AND password = '$password'";
							$result = mysql_query($query);
							if($result){
								return 1;
								}
							else {
								return 0;		
								}
							}
						else {
							return 0;							
							}
						}
						catch(Exception ex){
							return 0;							
							}
						finally{
							mysql_close($con);							
							}
			}
			
		public function register($loginId,$password,$fullname,$usertype){
					try{						
						$con = mysql_connect($server = $mysqlservername, $username = $mysqlusername, $password = $mysqlpassword);
						mysql_select_db($mysqldb);
						if($con){
							$query = "SELECT users_id FROM users WHERE login_id = '$loginId'";
							$result = mysql_query($query);
							if($result){
								return 2;
								}
							else {
								$hashedPassword = hash('ripemd160', $password);
								$query = "INSERT INTO users (`login_id`,`password`,`fullname`,`user_type`) VALUES ('$loginId','$hashedPassword','$fullname','$usertype')";
								$result = mysql_query($query);	
								if($result){
									return 1;									
									}	
								else {
									return 0;									
									}
								}
							}
						else {
							return 0;							
							}
						}
						catch(Exception ex){
							return 0;							
							}
						finally{
							mysql_close($con);							
							}	
			}	
			
		
	public function newSongRequest($requesterName,$albumName,$songName,$timestamp){
					try{						
						$con = mysql_connect($server = $mysqlservername, $username = $mysqlusername, $password = $mysqlpassword);
						mysql_select_db($mysqldb);
						if($con){	
								$query = "INSERT INTO song_requests (`requester_name`,`album_name`,`song_name`,`timestamp`,`status`) VALUES ('$requester_name','$album_name','$song_name','$timestamp','0')";
								$result = mysql_query($query);	
								if($result){
									return 1;									
									}	
								else {
									return 0;									
									}
								}							
						}
						catch(Exception ex){
							return 0;							
							}
						finally{
							mysql_close($con);							
							}	
			}	
			
	public function getSongRequests(){
					try{						
						$con = mysql_connect($server = $mysqlservername, $username = $mysqlusername, $password = $mysqlpassword);
						mysql_select_db($mysqldb);
						if($con){	
								$query = "SELECT * FROM song_requests WHERE status = '0'";
								$result = mysql_query($query);	
								if($result){
									return json_encode($result);									
									}	
								else {
									return 0;									
									}
								}							
						}
						catch(Exception ex){
							return 0;							
							}
						finally{
							mysql_close($con);							
							}	
			}	
			
			
	public function newDedicationRequest($requesterName,$albumName,$songName,$timestamp,$dedicatedTo){
					try{						
						$con = mysql_connect($server = $mysqlservername, $username = $mysqlusername, $password = $mysqlpassword);
						mysql_select_db($mysqldb);
						if($con){	
								$query = "INSERT INTO dedication_requests (`requester_name`,`album_name`,`song_name`,`timestamp`,`status`,`dedicated_to`) VALUES ('$requester_name','$album_name','$song_name','$timestamp','0','$dedicatedTo')";
								$result = mysql_query($query);	
								if($result){
									return 1;									
									}	
								else {
									return 0;									
									}
								}							
						}
						catch(Exception ex){
							return 0;							
							}
						finally{
							mysql_close($con);							
							}	
			}			
		
	public function getDedicationRequests(){
					try{						
						$con = mysql_connect($server = $mysqlservername, $username = $mysqlusername, $password = $mysqlpassword);
						mysql_select_db($mysqldb);
						if($con){	
								$query = "SELECT * FROM dedication_requests WHERE status = '0'";
								$result = mysql_query($query);	
								if($result){
									return json_encode($result);									
									}	
								else {
									return 0;									
									}
								}							
						}
						catch(Exception ex){
							return 0;							
							}
						finally{
							mysql_close($con);							
							}	
			}	

		
}
		
		
?>