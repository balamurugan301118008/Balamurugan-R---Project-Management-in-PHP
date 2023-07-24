
<?php
require 'Controllers/addProjectLogic.php';
//require 'Controllers/list.php';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="mainContainer">
<div>
    <a href="/addProjects" class="create">Create new project</a>
</div>
<div>
    <h2>All Projects</h2>
    <?php foreach ($result as $values) : ?>
    <form action="/addStoreId" method="post">
            <button class="projects" type="submit" value="<?php echo $values->id ?>" name="projectId"><?php echo $values->id ?>.) <?php echo $values->project_name ?></button>
    </form>
    <?php endforeach; ?>
    <?php foreach ($projectImages as $image) :?>
        <img src="<?php echo $image->image_path ?>" alt="" width="100px" height="100px">
    <?php endforeach; ?>
</div>
<div class="taskContainer">
    <form action="/taskForm" method="post">
        <button name="task" type="submit" class="createTask" value="<?php $i =$_SESSION['id'] ; echo $i;?>">Create Task</button>
    </form>

    <button>Undeleted list (<?php echo $counts; ?>)</button>
    <?php foreach ($singleData as $datum) : ?>
        <form action="/viewMore" method="post">
       <ol>
           <li><?php echo $datum->task_name ?></li>
           <li><?php echo $datum->description ?></li>
       </ol>
       <button type="submit" name="viewMore" class="viewMore" value="<?php echo $datum->id ?>">View more...</button>
        </form>
    <?php endforeach; ?>
</div>
    <div>
        <button name="deletedTask" type="submit">Deleted Task(<?php echo $count; ?>)</button>
        <?php foreach ($fetch as $deletedValues) : ?>
            <h3>Deleted values</h3>
        <ol>
            <?php $_SESSION['imgId'] =  $deletedValues->id ?>
            <li>Task Name :<?php echo $deletedValues->task_name ?></li>
            <li>Description :<?php echo $deletedValues->description?></li>
            <li>Task Status :<?php echo $deletedValues->is_status ?></li>
            <li>Assigner Name :<?php echo $deletedValues->assigned_name?></li>
        </ol>
        <?php endforeach; ?>
    </div>
</div>
<pre>
 </pre>
</body>
</html>