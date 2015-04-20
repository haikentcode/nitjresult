<?php
//upload.php
$output_dir = "./upload/";
 
if(isset($_FILES["myfile"]))
{
    //Filter the file types , if you want.
    if ($_FILES["myfile"]["error"] > 0)
    {
      echo "Error: " . $_FILES["file"]["error"] . "<br>";
    }
    else
    {
        $file=$output_dir.time(). $_FILES["myfile"]["name"];
        $hk=move_uploaded_file($_FILES["myfile"]["tmp_name"],$file);
      if($hk){

        echo exec('chmod -R 777 upload');

        echo $file;

      }
       else{
         
            echo "error";
       
       }

     
    }
 
}
?>