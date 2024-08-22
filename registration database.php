
<?php

$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
if(!empty($email)|| !empty($password)||!empty($confirm_password)){
$host="localhost";
$db_username="root";
$db_password="";
$dbname="picture";
$conn = mysqli_connect($host, $db_username, $db_password, $dbname);
if(mysqli_connect_error()){
    die('connect error('. mysqli_connect_errno().')'.mysqli_connect_error());
}else{
    $SELECT="SELECT email FROM registrations WHERE email= ? Limit 1";
    $INSERT= "INSERT Into registrations(username, email ,password) values(?,?,?)";

    $stmt =$conn->preoare($SELECT);
    $Stmt->bind_param("s",$email);
    $stmt->store_resut();
    $rnum=$stmt->num_rows;
    if($rnum==0){
        $stmt->close();
        $stmt =$conn->prepare($INSERT);
        $stmt->bind_param("sss",$username,$email,$password);
        $stmt->execute();
        echo "new record inserted sucessfully";
    }else{
        echo"someone already register";
    }
    $stmt->close();
    $conn->close();
}
}else{
    echo"all field are required";
    die();
}
?>