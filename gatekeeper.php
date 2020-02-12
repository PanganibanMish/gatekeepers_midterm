<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("gatekeepers", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$user_id = $_POST['user_id'];
$username = $_POST['username'];
$password = $_POST['password'];
$date_created_by = $_POST['date_created_by'];

if($user_id !=''||$username !=''){
//Insert Query of SQL
$query = mysql_query("insert into gatekeeper(user_id, username, password, date_created_by) values ('$user_id', '$username', '$password', '$date_created_by')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysql_close($connection); // Closing Connection with Server
?>