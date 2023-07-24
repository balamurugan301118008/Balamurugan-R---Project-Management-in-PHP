<?php
require 'connections.php';

$conn['db'] = (new Database())->db;
//
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
session_start();
require 'router.php';

$router  = new router();
$router->get('/','Controllers/home.php');
$router->get('/addProjects','Controllers/addProjects.php');
$router->post('/addProjectLogic','Controllers/addProjectLogic.php');
$router->post('/addStoreId','Controllers/list.php');
$router->post('/taskForm','Controllers/taskForm.php');
$router->post('/addTaskLogic','Controllers/storeTaskData.php');
$router->post('/viewMore','Controllers/viewMoreDetails.php');
$router->post('/delete','Controllers/deleteTask.php');
//$router->get("/listOfUndeleted",'Controllers/list.php');
//$router->post('/deletedTask','Controllers/fetchDeletedTask.php');
 require $router->check();