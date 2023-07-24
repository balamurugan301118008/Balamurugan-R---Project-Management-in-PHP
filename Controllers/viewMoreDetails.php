
<!--<pre>-->
<?php
$conn['db'] = (new Database())->db;
try{
    $id = $_POST['viewMore'];
    $fetchMoreDetails = $conn['db']->query("SELECT * FROM tasks where id = $id");
    $fetchMoreData = $fetchMoreDetails->fetchAll(PDO::FETCH_OBJ);

    $fetchTaskImages = $conn['db']->query("SELECT * FROM images WHERE model_id = $id and model_name ='tasks' ");
    $taskImage = $fetchTaskImages->fetchAll(PDO::FETCH_OBJ);
    require 'Views/view.moreDetails.php';
}
catch (Exception $e){
    die("can not fetch the values into the view more logic file : ".$e->getMessage());
}

?>
<!--</pre>-->
