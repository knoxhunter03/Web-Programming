<?php
include 'dbconfig.php';
include 'comments.html';
if(isset($_POST["Submitcomment"])){
    $textareaValue = trim($_POST['comment']);
    $user=$_POST["user"];
    $email=$_POST["email"];
    $sql = "INSERT INTO comments (user, email, comment)
    VALUES ('$user','$email','$textareaValue')";
    if ($conn->query($sql) === TRUE) {
        echo "
        <script type= 'text/javascript'>
        alert('Comments stored successfully');
        </script>";
    } 
    else 
    {
       echo 
       "<script type= 'text/javascript'>
       alert('Error: " . $sql . "<br>" . $conn->error."');
       </script>";
   }
}
$username=$_POST["user"];
$sq ="SELECT user,email,comment FROM comments";
$result = $conn->query($sq);
while($row = $result->fetch_assoc()){ 
   echo "User:";
   echo $row['user'].","; 
   echo $row['email']."<br>";
   echo $row['comment'];
   echo "<br>"; 
}
$conn->close();
?>
