<?php 


if (isset($_POST['submit']) && isset($_FILES['my_video'])) {
	include('db_con.php');
    $video_name = $_FILES['my_video']['name'];
    $tmp_name = $_FILES['my_video']['tmp_name'];
    $error = $_FILES['my_video']['error'];
	$title=$_POST['title'];
	$description=$_POST['description'];

    if ($error === 0) {
    	$video_ex = pathinfo($video_name, PATHINFO_EXTENSION);

    	$video_ex_lc = strtolower($video_ex);

    	$allowed_exs = array("mp4", 'webm', 'avi', 'flv');

    	if (in_array($video_ex_lc, $allowed_exs)) {
    		
    		$new_video_name = uniqid("video-", true). '.'.$video_ex_lc;
    		$video_upload_path = 'upload/'.$new_video_name;
    		move_uploaded_file($tmp_name, $video_upload_path);

    		// Now let's Insert the video path into database
            $sql = "INSERT INTO `videos` VALUES('','$new_video_name','$title','$description')";
                  
            mysqli_query($conn, $sql);
            // header("Location: view.php");
			header("Location: index.php");
    	}else {
    		$em = "You can't upload files of this type";
    		header("Location: index1.php?error=$em");
    	}
    }


}else{
	header("Location: index1.php");
}









// if (isset($_POST['Upload'])){

//     // $file=$_FILES['my_video'];
// 	$video_name = $_FILES['my_video']['name'];
// 	$file_type=$_FILES['my_video']['type'];
// 	$tmp_name = $_FILES['my_video']['tmp_name'];
// 	$file_size=$_FILES['my_video']['size'];
// 	$file_destination="Upload/".$video_name;
// 	$title=$_POST['title'];
// 	$description=$_POST['description'];
//     if(move_uploaded_file($_FILES['file']['tmp_name'],$file_destination)){
// 		$sql= "INSERT INTO `videos`(`video_url`,`title`,`description`)  VALUES('$video_name',$title,$description)";
// 		$query_run=mysqli_query($conn,$sql);
// 		if($query_run){
// 			echo '<script type="text/javascript">alert("file upload")</script>';
// 		}
// 		else{
// 			echo'<script type="text/javascript">alert("file not upload")</script>';
// 		}
// 	}


// }




 


?>
