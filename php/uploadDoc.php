<?php



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
									
									echo "YOU HAVE SUCCESSFULLY UPLOADED YOUR DOCUMENTS";
									echo "<p><a href='dashboard.php'>Go back</a></p>";
								}
						}
							else{
								echo "ERROR: File Too Large";
								echo "<p><a href='uploadDoc.html'>Go back</a></p>";
								echo "And Reload page";
							}
				}
				else
				{
					echo "File Upload Error";
					echo "<p><a href='uploadDoc.html'>Go back</a></p>";

				}
		}
		else{

			echo "<h1>File Type Not allowed</h1>";
			echo "<p><a href='uploadDoc.html'>Go back</a></p>";
		}
		//print_r();

		//if(move_uploaded_file($file_tem_Loc, $file_store)){

		//echo "Files Uploaded";
		//}




	}
	else{
			echo "<h1>ERROR: NO FILE</h1>";
			echo "<p><a href='uploadDoc.html'>Go back</a></p>";


	}
?>
