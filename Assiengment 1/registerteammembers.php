<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<div>
    <form method = "post" action="Teamregister.php">
    
            <label for="name"> Name:</label>
            <input type="text" id="name" name="name"><br><br>
        
            
            <label for="email"> Email:</label>
            <input type="email" id="email" name="email"><br><br>
        
           
            <label for="number"> Number:</label>
            <input type="Phone" id="number" name="number"><br><br>

          <label for="Sport">Type of Game</label>
          <select name="game">
          <option value= "football">Football</option>
          <option  value= "cricket">Cricket</option>
          <optio value= "longtennis" >Long Tennis</option>
          <option value= "basketball" >Basketball</option>
          
          
          </select>

           
            <label for="teamname"> Teamname:</label>
            <input type="teamname" id="teamname" name="teamname"><br><br>
        
            <button>Save</button>
     
</form>
</div>
</body>
</html>