<?php $directory = "./userfiles"; 
    $File_name = $_FILES["userfile"]["name"]; 
    $Type = $_FILES["userfile"]["type"] ; 
    $Size = ($_FILES["userfile"]["size"] / 1024); 
    $File_temp_name = $_FILES["userfile"]["tmp_name"]; 
    if($Size<= 0){
    
            die('cant not upload a file ');
            }
    
if (file_exists($directory . " / " . $_FILES["userfile"]["name"])) 
        {
        die($_FILES["userfile"]["name"] . " already exists. "); 
        } 
    
    if(is_uploaded_file($_FILES["userfile"]["tmp_name"])){ 
    
            if(!move_uploaded_file($File_temp_name,$directory."/".$File_name)){
                     die('cant not file'.$File_name); 
                     
                }
            } 
            else 
            { 
              die('attack on file'); 
                    } 
                    echo $File_name . " is sucessfully uploaded " . " <br/> " ; 
                    echo "file size : " .$Size. " <br/> "; 
                    echo"type :".$Type." <br/> "; ?>
