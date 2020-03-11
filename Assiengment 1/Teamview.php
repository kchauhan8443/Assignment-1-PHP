<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <?php
$db = new PDO('mysql:host=172.31.22.43;dbname=Kapil200440433', 'Kapil200440433', 'gmwt8WqQxw');


$sql = "SELECT * FROM person";
$cmd = $db->prepare($sql);
$cmd->execute();
$Team = $cmd->fetchAll();

echo '<table border = "1">
<thead>
<th>Name</th>
<th>Email</th>
<th>Number</th>
<th>Game</th>
<th>TeamName</th>

</thead>';



foreach($Team as $value){
echo '<tr>
<td>' . $value['name'] . '</td> 
<td>' . $value['email'] . '</td> 
<td>' . $value['number'] . '</td> 
<td>' . $value['game'] . '</td> 
<td>' . $value['teamname'] . '</td> 

</tr>';
}
echo '</table>';
    ?>
<button onclick="window.location.href = 'registerteammembers.php';">Return to User Register</button>

</body>
</html>