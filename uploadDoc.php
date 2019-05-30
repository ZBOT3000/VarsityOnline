<?php
/*
$host = "lamp.ms.wits.ac.za/~s1434995"; 
$port = 22; 
$user = "s1434995"; 
$pass = "s1434995"; 
  
$connection = ssh2_connect($host, $port); 
$passtrue = ssh2_auth_password($connection, 's1434995', 's1434995'); 
if ($passtrue) 
{ 
echo "conected"; 
} 

else 
{ 
echo "no conected"; 
} 
		*/


//$uploaddir = '/home/s1434995/public_html/VarsityOnline/StudentFiles/';
//$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
//$file_tem_Loc = $_FILES['file']['tmp_name'];
	
	//move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);

	//$connection = ssh2_connect('lamp.ms.wits.ac.za', 22);
    //ssh2_auth_password($connection, 's1434995', 's1434995');

   //// ssh2_scp_send($connection, $file_tem_Loc, $uploadfile, 0644);

//echo '<pre>';
//if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
  //  echo "File is valid, and was successfully uploaded.\n";
//} else {
 //   echo "Possible file upload attack!\n";
//}

//echo 'Here is some more debugging info:';
//print_r($_FILES);

//print "</pre>";


	if(isset($_FILES['file'])){

		//file Properties
		$file = $_FILES['file'];
		$file_name = $file['name'];
		$file_tmp =$file['tmp_name'];
		$file_size = $file['size'];
		$file_error = $file['error'];

		//file Extension
		$file_ext = explode('.',$file_name);
		$file_ext = strtolower(end($file_ext));


		$allowed = array('pdf', 'jpg', 'png');

			//check if file type is allowed
		if(in_array($file_ext, $allowed)){
					//Check if file loaded
				if($file_error === 0){
						//Check if file size is the correct one
						if($file_size <= 20971520){

							//make file name unique
							$file_name_new = uniqid('',true). '.' . $file_ext;
							//file destination
							$file_destination = 'studentfiles/' . $file_name_new;

							//check if file was loaded to servre
								if(move_uploaded_file($file_tmp, $file_destination)){

									echo "Success";
								}
						}
							else{
								echo "File Too Large";
							}
				}
				else
				{
					echo "File Upload Error";
				}
		}
		else{

			echo "File Type Not allowed";
		}
		//print_r();
		
		//if(move_uploaded_file($file_tem_Loc, $file_store)){
		
		//echo "Files Uploaded";
		//}
		
		
		
	
	}
?>



