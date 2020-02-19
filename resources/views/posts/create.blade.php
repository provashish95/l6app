<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

</head>
<body>
<?php   if ($errors->any()):       ?>
<ul>
    <?php foreach ($errors->all() as $error):?>
<li>
    <?php echo $error ; ?>
</li>
    <?php endforeach;?>
</ul>
<?php endif;?>
<form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name">
    <input type="email" name="email">
    <label for="">Select image:<input type="file" name="photo"></label>
    <input type="submit" name="submit">
</form>
</div>
</body>
</html>
