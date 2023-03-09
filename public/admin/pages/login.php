<?php
if (isset($_POST['uname']) && isset($_POST['password'])) {
    function validate($data){
        $data =trim($data);
        $data= stripslashes($data);
        $data= htmlspecialchars($data);
        return $data;
    }
    $uname = validate($_POST['uname']);
    $pass=validate($_POST ['password']);
    if (empty($unum)){
        header("Location:login.blade.php?error=User Name is required");
        exit();
    }elseif (empty($pass)){
        header("Location:login.blade.php?error=Password is required");
        exit();

    }else {
        echo "Valid input";
    }
} else{
    header("Location:login.blade.php");
        exit();

}