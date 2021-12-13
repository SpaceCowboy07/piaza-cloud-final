<!DOCTYPE html>
<html lang="en">
    
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
	<h1>TO-DO LIST</h1>
</head>

<body>

<?php
/*
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'todo';
    
    $conn = mysqli_connect($servername, $username, $password, $db);
    
    if (!conn) {
        die("connection failed: " . mysqli_connect_error());
    }
    
$sql = "
    CREATE TABLE ToDoList(
        id INT(6) AUTO_INCREMENT,
        shopping varchar(255) NOT NULL,
        power varchar(255) NOT NULL,
        visit varchar(255) NOT NULL,
        school varchar(255) NOT NULL,
        email varchar(255) NOT NULL,
        dish varchar(255) NOT NULL,
        dog varchar(255) NOT NULL,
        PRIMARY KEY(id)
    );
    ";
    if ($conn->query($sql)){
        echo "Successfully created table employees";
    } else {
        echo "Error with the query" . $conn->error;
    }
*/    
?>

<form action="list.php" method="POST">
        <div>
            <label for="shopping">Go Shopping:</label>
            <input id="shopping" type="checkbox" name="shopping">
        </div>
        <div>
            <label for="power">Cut Off Power:</label>
            <input id="power" type="checkbox" name="power">
        </div>
        <div>
            <label for="visit">Visit Gma:</label>
            <input id="visit" type="checkbox" name="visit">
        </div>
        <div>
            <label for="school">Do Homework:</label>
            <input id="school" type="checkbox" name="school">
        </div>
        <div>
            <label for="email">Send Email:</label>
            <input id="email" type="checkbox" name="email">
        </div>
        <div>
            <label for="dish">Do Dishes:</label>
            <input id="dish" type="checkbox" name="dish">
        </div>
        <div>
            <label for="dog">Take Dog for Walk:</label>
            <input id="dog" type="checkbox" name="dog">
        </div>
        <button type="submit">Submit</button>
    </form>


</body>

</html>
