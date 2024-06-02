
<?php 
$db = new mysqli("localhost" , "root" , "" , "fbb");
if($db->connect_error){
    echo "Connection Problem";
}
else{
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $creatTable = "INSERT INTO user (username , password) VALUES ('$username' , '$password')";
        if ($db->query($creatTable)) {
            exit;
            // echo "Data created successfully";
        } else {
            // echo "Data not created";
        }
        exit;
    }
    else{
        // echo "Not a post";
    }
}


?> 