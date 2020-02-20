<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

</head>
<body>
<?php if (Session::has('message')){
    echo "<p>".Session::get('message')."</p>";
}?>


<form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    Name:  <input type="text" name="name" value="name">
    <?php foreach ($errors->get('name') as $error):?>
    <?php echo $error ; ?>
    <?php endforeach;?>
    <br><br>
    <input type="text" name="email" value="<?php echo old('email') ;?>">
    <br>
    <?php if ($errors->has('email')):?>
    <?php foreach ($errors->get('email') as $error):?>
    <p><?php echo  $error; ?></p>
    <?php endforeach;?>
    <?php endif; ?>
<br><br>
    <label for="">computer:<input type="checkbox" name="check['computer']['id']" value="computer"></label>
    <label for="">civil:<input type="checkbox" name="check['computer']['id']" value="civil"></label>
    <label for="">bangla:<input type="checkbox" name="check['bangla']['id']" value="bangla"></label>
    <label for="">english:<input type="checkbox" name="check['english']['id']" value="english"></label>
    <?php foreach ($errors->get('check') as $error):?>
    <?php echo $error ; ?>
    <?php endforeach; ?>
    <br><br>
    <label for="">Accept TOS:<input type="checkbox" name="tos" value="0"></label>
    <?php foreach ($errors->get('tos') as $error):?>
    <?php echo $error ; ?>
    <?php endforeach;?>
    <br><br>
    <label for="">Start Date:<input type="date" name="start_date"></label>
    <?php foreach ($errors->get('start_date') as $error):?>
    <?php echo $error ; ?>
    <?php endforeach;?>
    <br>
    <br>
    <label for="">End Date:<input type="date" name="end_date"></label>
    <?php foreach ($errors->get('end_date') as $error):?>
    <?php echo $error ; ?>
    <?php endforeach;?>
    <br>
    <br>


    <label for="">website url:<input type="url" name="website"></label>
    <?php foreach ($errors->get('website') as $error):?>
    <?php echo $error ; ?>
    <?php endforeach;?>
    <br>
    <input type="submit" name="submit">
</form>
</div>
</body>
</html>
