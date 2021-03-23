<?php

$conn = mysqli_connect('cjm-capstonedb.c9glmfvid2ev.us-east-1.rds.amazonaws.com', 'CJM00948910', '1Eyeball', 'Capstone', '3306');

if (isset($_POST['submit'])) {
    
    if (!empty($_POST['content']) && !empty($_POST['email'])) {
        
        $content = $_POST['content'];
        $email = $_POST['email'];
        
        $query = "insert into questions (content, email) values('$content', '$email')";
        
        $run = mysqli_query($conn, $query) or die(mysqli_error());
        
        if($run) {
            echo "form submitted successfully";
            mysqli_close($conn);
        }
        else {
            echo "Form not submitted";
        }
    }
    else {
        echo "all fields required";
        mysqli_close($conn);
    }
}

?>