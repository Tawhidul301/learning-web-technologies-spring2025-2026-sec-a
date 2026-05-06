<?php
    include 'auth_guard.php';


    if(isset($_POST['submit'])){
        if(isset($_FILES['picture'])&& $_FILES['picture']['error']== 0){

            $tmpPath  = $_FILES['picture']['tmp_name'];
            $mimeType = mime_content_type($tmpPath);


            $allowed = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];


            if(!in_array($mimeType, $allowed)){
                echo "<p style='color:red'>Invalid file type. Please upload an image.</p>";
                echo "<a href='change_picture.php'>Go Back</a>";
                
                exit();
            }

            $imageData   = file_get_contents($tmpPath);
            $base64Image = 'data:' . $mimeType . ';base64,' . base64_encode($imageData);

            $idx = $_SESSION['current_user_index'];
            $_SESSION['users'][$idx]['picture'] = $base64Image;



            header('location: profile.php');
            exit();

        }
        
        else{
            echo "<p style='color:red'>Please choose an image file to upload.</p>";
            
            echo "<a href='change_picture.php'>Go Back</a>";
            exit();
        }
    }
    
    
    else{
        header('location: change_picture.php');
        exit();
    }
?>
