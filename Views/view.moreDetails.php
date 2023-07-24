<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>More details</title>
</head>
<body>
<form action="/delete" method="post">
    <?php foreach ($fetchMoreData as $value) :?>
    <ul>
        <li>Task Name : <?php echo $value->task_name ?></li>
        <li>Assigned Name : <?php echo $value->assigned_name ?></li>
        <li>Description : <?php echo $value->description ?></li>
        <li>status : <?php echo $value->is_status ?></li>
<!--        --><?php //foreach ($taskImage as $img) : ?>
<!--        <img src="--><?php //echo $taskImage->image_path ?><!--"  width="100px" height="100px">-->
<!--        --><?php //endforeach; ?>
        <button type="submit" name="delete" class="delete" value="<?php echo $value->id ?>">Delete</button>
    </ul>
    <?php  endforeach; ?>
    <a href="/">Back to home</a>
</form>
</body>
</html>