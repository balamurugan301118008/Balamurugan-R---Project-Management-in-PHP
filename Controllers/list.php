<?php
//echo "<pre>";
$conn['db'] = (new Database())->db;
$id = $_POST['projectId'];
try{
    $id = $_POST['projectId'];
    $statement = $conn['db']->query("SELECT * FROM tasks where deleted_at IS NULL and project_id= '$id'");
    $singleData = $statement->fetchAll(PDO::FETCH_OBJ);
    $counts = count($singleData);
    $_SESSION['id'] = $id;

    $fetchProjectImages = $conn['db']->query("SELECT * FROM images WHERE model_id = $id and model_name ='project' ");
    $projectImages = $fetchProjectImages->fetchAll(PDO::FETCH_OBJ);

    $fetchTaskImages = $conn['db']->query("SELECT * FROM images WHERE model_id = $id and model_name ='tasks' ");
    $taskImages = $fetchTaskImages->fetchAll(PDO::FETCH_OBJ);
//    var_dump($taskImages);
    $deleteCount = $conn['db']->query("SELECT * from tasks WHERE deleted_at IS NOT NULL and project_id = '$id'");
    $result = $deleteCount->fetchAll();
    $count = count($result);

    $fetchDeletedValues = $conn['db']->query("SELECT * FROM tasks WHERE  project_id = $id and deleted_at");
    $fetch = $fetchDeletedValues->fetchAll(PDO::FETCH_OBJ);
    require  'Views/view.home.php';
}
catch (Exception $e){
    die("can not fetch values into the list page : ".$e->getMessage());
}
//echo "</pre>";
?>

