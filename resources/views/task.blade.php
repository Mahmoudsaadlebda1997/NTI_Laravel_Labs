<!DOCTYPE html>
<html lang="en">

<head>
    <title>Create New Blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

<div class="container">
    <h2>Create New Task</h2>

    <form   method="POST" action="<?php echo url('posts/store')?>" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleInputName">Title</label>
            <input type="text" class="form-control"  id="exampleInputName" aria-describedby="" name="title"
                   placeholder="Enter Title">
        </div>


        <div class="form-group">
            <label for="exampleInputEmail">Content</label>
            <input type="text" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp"
                   name="content" placeholder="Enter Content">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>

</body>
</html>
