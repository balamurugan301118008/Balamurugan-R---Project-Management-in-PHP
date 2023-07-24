<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add projects</title>
</head>
<body>
<form action="/addProjectLogic" method="post" enctype="multipart/form-data">
<div>
    <div>
        <label>Project Name : </label>
        <input type="hidden" name="project" id="" value="project">
        <input type="text" name="projectName" placeholder="Enter the project name">
    </div>
    <div>
        <label>Add some more images :</label>
        <input type="file" name="image[]" multiple>
    </div>
    <div>
        <button type="submit" name="addProject">Add project</button>
    </div>
</div>
</form>
</body>
</html>