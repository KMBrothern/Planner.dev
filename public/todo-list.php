<?php
	var_dump($_POST);
?>

<!Doctype html>
<link rel="stylesheet" href="/css/todo.css">
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

        <br>
        <br>
        <br>


        I  have no purpose for this paragraph other than attempting to add a background image to coincide with it's space. Are here are some random ramblings to continue to test said purpose: For this exercise, you will be adding some style to your todo list application. Start by opening your todo list php file and then please follow the instructions below.

Create an external stylesheet and link it to your todo list page.
Add a style to change the color of the headers on your page and make them underlined.
Add a style to change the background color of the page.
Add a style to change the list-style to something other than the default.
Add a style to change the font for the entire page.
Continue experimenting with styles to increase the visual appeal of the todo list
</p>


<p>
    For this exercise, you will be adding some style to your todo list application. Start by opening your todo list php file and then please follow the instructions below.

Create an external stylesheet and link it to your todo list page.
Add a style to change the color of the headers on your page and make them underlined.
Add a style to change the background color of the page.
Add a style to change the list-style to something other than the default.
Add a style to change the font for the entire page.
Continue experimenting with styles to increase the visual appeal of the todo list

</p>


<p>
For this exercise, you will be adding some style to your todo list application. Start by opening your todo list php file and then please follow the instructions below.

Create an external stylesheet and link it to your todo list page.
Add a style to change the color of the headers on your page and make them underlined.
Add a style to change the background color of the page.
Add a style to change the list-style to something other than the default.
Add a style to change the font for the entire page.
Continue experimenting with styles to increase the visual appeal of the todo list
</p>
		

	</form>
	</body>
	</html>