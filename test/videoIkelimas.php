<?php



//echo "nx";

include 'connect.php';




$allowed_extensions = array( "image/png", "image/jpg", "image/gif","image/jpeg", );



     $video_name = $_FILES['video'] ['name'];
         $video_type = $_FILES['video'] ['type'];
         $video_size = $_FILES['video'] ['size'];
        $video_tmp_name = $_FILES['video']['tmp_name'];
     	$filepathV = "uploaded/pratimai/".$video_name;
           
             $image_name = $_FILES['image'] ['name'];
         $image_type = $_FILES['image'] ['type'];
         $image_size = $_FILES['image'] ['size'];
        $image_tmp_name = $_FILES['image']['tmp_name'];
     	$filepathI = "uploaded/pratimai/".$image_name;
           
          $ID=$_POST['text2'];

             // echo $ID;
       // echo $video_name;
      //  echo $video_type;
        //echo $video_size;
      //  echo $video_tmp_name;

               echo $image_name;
        //echo $image_type;
       // echo $image_size;
       //echo $image_tmp_name;

       // echo $filepath;
          move_uploaded_file($video_tmp_name,$filepathV);
       // $sql = "INSERT INTO video (image_name,image_path,image_type,content) VALUES ('$image_name','$filepath','$image_type','$text')";
        $sql = "INSERT INTO video (video_name,video_path,video_type) VALUES ('$video_name','$filepathV','$video_type')";
          //$sql = "update iranga set image_name='$image_name',image_path='$filepath',image_type='$image_type' where id='$ID'";
    if (mysqli_query($db, $sql)) {
        //  echo  	$filepathV;
        echo  '<video width="320" height="240" autoplay>
  <source src='."$filepathV".' type="video/mp4">
  <source src="movie.ogg" type="video/ogg">
Your browser does not support the video tag.
</video>';

    //echo "Naujas irasas sekmingai sukurtas";
      
       
       }            
        else {
               // echo  	$filepath;
    echo "Klaida Error: " . $sql . "<br>" . mysqli_error($db);}




?>

