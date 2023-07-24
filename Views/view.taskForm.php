<?php
$id = $_SESSION['task'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adding a task page</title>
</head>
<body>
<form action="/addTaskLogic" method="post" enctype="multipart/form-data">
    <div>
        <input type="hidden" name="model_task_name" value="tasks">
        <input type="hidden" name="action" value="<?php echo $_POST['task']; ?>">
        <label>TaskName : </label>
        <input type="text" name="task_name" placeholder="Enter a task name">
    </div>
    <div>
        <label>Description :</label>
        <input type="text" name="decription" placeholder="Enter the description">
    </div>
    <div>
        <select name="status">
            <option value="none">None</option>
            <option value="Not yet to start">Not yet to start</option>
            <option value="In progress">In progress</option>
            <option value="completed">Completed</option>
        </select>
    </div>
    <div>
        <input type="file" name="TaskImages[]" multiple>
    </div>
    <div>
        <label>Assigner Name</label>
        <input type="text" name="assigerName" placeholder="Enter the assigner name">
    </div>
    <div>
        <button type="submit" name="submitTask">Submit Task</button>
    </div>
</form>
</body>
</html>
