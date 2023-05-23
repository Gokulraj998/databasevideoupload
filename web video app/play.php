<?php

include("db_con.php");

?>
<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>play video</title>
	<style>
		video{
          
            width:700px;
            height:400px;
        }
	
	</style>
</head>
<body>
  <div >
    <a href="index.php">Home Page</a>
    <!-- <?php
    $fetchvideos=mysqli_query($conn,"SELECT * FROM `videos` ORDER BY ID desc");
    while($row=mysqli_fetch_assoc($fetchvideos)){

        $video_url=$row['video_url'];
        echo "<div>";
        echo "<video src='".$video_url."' controls width='500px' height='300px'></video>";
        echo "</div>";
    }
?> -->




<?php
		
		$sql="SELECT * FROM `videos` ORDER BY ID DESC ";
		$result=mysqli_query($conn,$sql);
		while($row=mysqli_fetch_assoc($result)){
			$id=$row['id'];
			$video_url=$row['video_url'];
			$title=$row['title'];
			$description=$row['description'];
			
			echo '
			      <form>
			      <h3>'.$title.'</h3> 
				  <video src="upload/'.$video_url.'" controls  >
			
			      </video>
			       <p>'.$description.'</p>
                  <form>
				  ';

		}
        ?>

  </div>
			 
</body>
</html>

