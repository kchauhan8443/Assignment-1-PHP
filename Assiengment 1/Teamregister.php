<!DOCTYPE html>
<html>
<head>
    <title>Database Connection</title>
</head>
<body>
<?php


// store the form inputs in variables
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$game = $_POST['game'];
$teamname = $_POST['teamname'];


// connect to the db
$db = new PDO('mysql:host=172.31.22.43;dbname=Kapil200440433', 'Kapil200440433', 'gmwt8WqQxw');

// set up the SQL INSERT with placeholders (or "parameters") for the name & email inputs
$sql = "INSERT INTO person (name, email, number, game, teamname) VALUES (:name, :email, :number, :game, :teamname)";

// create a command variable to populate the parameter values
$cmd = $db->prepare($sql);
$cmd->bindParam(':name', $name, PDO::PARAM_STR, 50);
$cmd->bindParam(':email', $email, PDO::PARAM_STR, 50);
$cmd->bindParam(':number', $number, PDO::PARAM_STR, 50);
$cmd->bindParam(':game', $game, PDO::PARAM_STR, 50);
$cmd->bindParam(':teamname', $teamname, PDO::PARAM_STR, 50);


// execute the save method
$cmd->execute();

// disconnect


$db = null;
echo ' User Registered Correctly';
?>
<button onclick="window.location.href = 'Teamview.php';">View Users</button>

</body>
</html>
