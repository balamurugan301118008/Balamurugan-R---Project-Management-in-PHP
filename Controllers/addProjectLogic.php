<?php
$conn['db'] = (new Database())->db;
try {
        if (isset($_POST['projectName'])) {

            $projectName = $_POST['projectName'];
            $project = $_POST['project'];
            $insertValues = $conn['db']->query("INSERT INTO projects (project_name)VALUES ('$projectName')");

            $getProjectId = $conn['db']->query("SELECT * FROM projects ORDER BY id DESC limit 1");
            $result = $getProjectId->fetch(PDO::FETCH_OBJ);
            $projectID = $result->id;

            foreach ($_FILES['image']['name'] as $key=>$img){
                $img_path = $_FILES['image']['name'][$key];
                $images  = 'Images/'.$img_path;
                move_uploaded_file($_FILES['image']['tmp_name'][$key],$images);
                $insertImages = $conn['db']->query("INSERT INTO images(image_path,model_id,model_name)VALUES('$images','$projectID','$project')");
            }
            header("location:/");
    }
}
catch (Exception $e){
    die("insert failed on the add project logic page : ".$e->getMessage());
}

try {
    $fetchProjects = $conn['db']->query("SELECT * FROM projects");
    $fetchProjects->execute();
    $result = $fetchProjects->fetchAll(PDO::FETCH_OBJ);
}
catch (Exception $e)
{
    die("can not fetch the values in the fetch project part : ".$e->getMessage());
}
