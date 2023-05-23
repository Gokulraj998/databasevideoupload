<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM data_users WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title>Index</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="search.css">
    <link rel="stylesheet" href="stylecomment.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    
    <style>
/*   
      .flex-container{
        display:flex;
        background-color:lightgreen;
      }
      .flex-container > div{
       
        margin:10px;
        padding:20px;
        font-size:30px;
      }
      .atag{
        padding-left:530px;
        color:red;
      }
      video{
        width:800px;
        height:450px;
        border-radius:10px;
      }
      .alb{
        display:flex;
        justify-content:center;
        
      }
      .upload-atag{       
        margin:20px;
        font-size:16px;
        color:blue;
        font-size:25px;
        padding-left:20px;
        
      }
      .upload-atag > button{
      
        background-color:lightgreen;
        padding:10px;
        border-radius:20px;
        border:none;
        
      }
      .upload-atag > button >a{
        text-decoration: none;
			  color: #006CFF;
      } */
  
  

    
      </style>
  </head>

  <body>    
    <script src="js/jquery.js"></script>

    <!-- Heading content -->
    <div class="flex-container">
    <div>Welcome <?php echo $row["name"]; ?></div>
    <div><a href="logout.php" class="atag">Logout</a></div>
    </div>
   
   


    <!-- Display and upload videos -->
    <div class="upload-atag">
     <p>Display the all videos</p><hr>
    <button><a href="index1.php" >Upload Videos</a> </button>   
    </div>

   <!-- search link form -->
    <div  class="search-atag">
   <a href="search.php">search form Videos</a>
    </div>
    <div class="alb">
		
         
		<!-- <?php
		
		$sql="SELECT * FROM `videos`";
		$result=mysqli_query($conn,$sql);
		while($row=mysqli_fetch_assoc($result)){
			$id=$row['id'];
			$video_url=$row['video_url'];
			$title=$row['title'];
			$description=$row['description'];
			
			echo '
			      <form>
			      <h3>'.$title.'</h3> 
				  <video src="upload/'.$video_url.' "controls autoplay>
			
			     </video>
			       <p>'.$description.'</p>
                   <p> comments <p>
				   <form>
				  ';

		}
        ?> -->
	</div>

</div>

<div class="container center__display">
	<div class="top">
            <div class="video__container">
              
            <?php
		require 'db_con.php';
		$sql="SELECT * FROM `videos`";
		$result=mysqli_query($conn,$sql);
		while($row=mysqli_fetch_assoc($result)){
			$id=$row['id'];
			$video_url=$row['video_url'];
			$title=$row['title'];
			$description=$row['description'];
			
			echo '
			     
			      <h3>'.$title.'</h3> 
				  <video src="upload/'.$video_url.' "controls autoplay >
			          <source src="upload/'.$video_url.' " type=
					  "video/mp4">
			      </video>
			       <p>'.$description.'</p>
				   <form>
				   <div class="heart__icon center__display">
					   <i class="far fa-heart"></i>
				   </div>
				   <div class="form__info center__display">
					   <input type="text" name="user" id="user" placeholder="Your user name">
					   <input type="text" name="comment" id="comment" placeholder="Add a short comment here">
				   </div>
				   <button type="submit" class="submit__btn">
					   Submit
				   </button>
			   </form>
			 
			   <div class="comments__container center__display">
			   <!-- <div class="comment__card">
				   <div class="pic center__display">
					   A
				   </div>
				   <div class="comment__info">
					   <small class="nickname">
						   UserNameHere
					   </small>
					   <p class="comment">
						   Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, in magnam! Libero?
					   </p>
					   <div class="comment__bottom">
						   <div class="heart__icon--comment">
							   <i class="far fa-heart"></i>
						   </div>
						   <button>
							   Reply
						   </button>
					   </div>
				   </div>
			   </div> -->
		   </div>
				  
				  ';

		}
        ?>
                <!-- <form>
                    <div class="heart__icon center__display">
                        <i class="far fa-heart"></i>
                    </div>
                    <div class="form__info center__display">
                        <input type="text" name="user" id="user" placeholder="Your user name">
                        <input type="text" name="comment" id="comment" placeholder="Add a short comment here">
                    </div>
                    <button type="submit" class="submit__btn">
                        Submit
                    </button>
                </form>
                <div class="likes__count">
                    <i class="far fa-heart"></i>
                    <small class="count">0</small>
                </div>
            </div>
        </div>

        <div class="comments__container center__display">
             <div class="comment__card">
                <div class="pic center__display">
                    A
                </div>
                <div class="comment__info">
                    <small class="nickname">
                        UserNameHere
                    </small>
                    <p class="comment">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, in magnam! Libero?
                    </p>
                    <div class="comment__bottom">
                        <div class="heart__icon--comment">
                            <i class="far fa-heart"></i>
                        </div>
                        <button>
                            Reply
                        </button>
                    </div>
                </div>
            </div> 
        </div> -->
    </div>
    <script src="main.js"></script>
  
  </body>
</html>