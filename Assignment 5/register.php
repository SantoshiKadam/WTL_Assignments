<?php
session_start();

if(isset($_POST['registerbtn'])){
    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $class = $_POST['clss'];
    $email = $_POST['email'];
    $password = $_POST['pws'];


    $con = mysqli_connect('localhost','root','','assignment5');
    $sql = "INSERT INTO student VALUES ('$name','$roll','$class','$email','$password')";
    $sql = "SELECT * from student";
    $result = mysqli_query($con,$sql);
    echo"<table border=5px";
    echo "<tr><th>Roll No</th><th>Name</th><th>Email</th><th>Mobile No.</th><th>Address</th></tr>";
if($result){
while($row=mysqli_fetch_assoc($result)) {
echo "<tr>";
echo "<td>".$row['roll']."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['email']."</td>";
echo "<td>".$row['mob']."</td>";
echo "<td>".$row['pws']."</td>";
echo "</tr>";
}

echo "</table>";

}

else{

echo "No Record";

}

}

    if($result){
        echo "Data inserted successfully";
    }
    else{
        echo "Data not inserted";
        die(mysqli_error($con));
    }


?>