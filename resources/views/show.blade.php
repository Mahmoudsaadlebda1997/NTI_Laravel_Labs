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
    <h2>Ur Posts Task</h2>

<h2 class="container">
    Title is {{$form_data['title']}}
</h2><br>
<h2 class="container">
    Content is {{$form_data['content']}}
</h2>
<div class="container">

    <img style="width:600px;height:292px text-align:center; margin-left:90px;" src="{{asset('images/'.$form_data['image'])}}"> 
</div>
{{-- <img src="app/public/images/{{$form_data['image']}}"> --}}

    {{-- <?php echo '<img src="app/public/images/'.$form_data['image'].'" alt="HTML5 Icon" style="width:200px;height:92px text-align:center; margin-left:90px;">';?> --}}

</div>

</body>
</html>
