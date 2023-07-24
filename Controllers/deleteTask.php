<?php
$conn['db'] = (new Database())->db;

$id = $_POST['delete'];
try{
    $deleteTask = $conn['db']->query("UPDATE tasks SET deleted_at = now() where id= $id");
    header("location:/");
}
catch (Exception $e){
    die("Delete failed at the delete logic page : ".$e->getMessage());
}