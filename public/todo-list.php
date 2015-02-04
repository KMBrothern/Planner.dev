<?php
	var_dump($_POST);
?>

<!Doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>My To Do List</title>
	</head>

<body>
	<h1>TODO List</h1>
	<ul>
		<li>Study</li>
		<li>Workout</li>
		<li>Not Clean Up</li>
		<li>Chill like a Vill(ian)</li>
	</ul>

	<h3>Add Item To TODO List</h3>
    
	<form method="POST" action="/todo-list.php">
        <label for="todo">Todo Item</label>
        <input type="text" id="todo" name="item">
        <input type="submit" value="Add to list">

	<p>
		<label for="todo_list">Add Item to ToDo List</label>
		<select id ="todo" name="todo">
            <option>Mow Grass</option>
            <option>Wash Car</option>
            <option>Make Bed</option>
            <option>Do Nothing!</option>
        <input type="submit" value="Add to List">

	</p>
		

	</form>
	</body>
	</html>