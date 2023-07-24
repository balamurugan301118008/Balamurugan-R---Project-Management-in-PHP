<?php

$conn['db'] = (new Database())->db;

try{
    if (isset($_POST['action'])){
        $modelNameTask = $_POST['model_task_name'];
        $id = $_POST['action'];
        $taskName = $_POST['task_name'];
        $description = $_POST['decription'];
        $status = $_POST['status'];
        $assignedName = $_POST['assigerName'];

        $insertTaskValues = $conn['db']->query("INSERT INTO tasks(task_name,description,project_id,is_status,assigned_name)VALUES ('$taskName','$description','$id','$status','$assignedName')");

        $getTaskId = $conn['db']->query("SELECT * FROM tasks ORDER BY id DESC limit 1");
        $result = $getTaskId->fetch(PDO::FETCH_OBJ);
        $TaskId = $result->id;

        foreach ($_FILES['TaskImages']['name'] as $key=>$img){
            $img_path = $_FILES['TaskImages']['name'][$key];
            $images  = 'Images/'.$img_path;
            move_uploaded_file($_FILES['image']['tmp_name'][$key],$images);
            $insertImages = $conn['db']->query("INSERT INTO images(image_path,model_id,model_name)VALUES('$images','$TaskId','$modelNameTask')");
        }
        header('location:/');
    }
}
catch (Exception $e){
    die("can not insert  the task inputs into db : ".$e->getMessage());
}
