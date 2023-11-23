<?php

$servername = "localhost";

$username = "root";

$password

$dbname = "iplab";

 $conn = new mysql($servername, $username, $password, $dbname);

 $firstname-isset($_POST['firstname']) ? $_POST['firstname']'; 
 $lastname= isset($_POST['lastname']) ? $_POST['lastname']:
 $password= isset($_POST['password']) ? $_POST['password']

$sql = "INSERT INTO schedule(firstname,lastname, time) VALUES (?, ?, ?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param("sss", $fn, $ln, $pwd);

if ($stmt->execute()) {

$template = file_get_contents('schedule.html');

$template = str_replace('Schedule Exam", "Scheduled!!!', $template);

echo ($template);
}

$stmt->close();

$conn->close();

?>
