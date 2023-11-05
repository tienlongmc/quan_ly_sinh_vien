<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Form Update</h1>
<?php
    $id = $_GET['ID'];
    $connection = mysqli_connect('localhost','root','','student');
    mysqli_set_charset($connection,'utf8');
    $sql = "select * from tbluser
            where ID = '$id'";
    $result = mysqli_query($connection,$sql);
    $std = mysqli_fetch_array($result);
    ?>
    <div class="form">
    <form action="updateuser2.php"  method="post" enctype="multipart/form-data">
    <label for="" class="label_form" >ID</label>
        <input type="text" class = "input_form" name="id" value="<?php echo $std['ID'] ?>" readonly>
        <br>
       
        <label for="" class="label_form" >Fullname</label>
        <input type="text" class = "input_form" name="fullname" value="<?php echo $std['fullname']?>">
        <br>
        <label for="" class="label_form" >Username</label>
        <input type="text" class = "input_form" name="username" value="<?php echo $std['username']?>">
        <br>
        <label for="" class="label_form" >Password</label>
       <input type="text"   class = "input_form" name="password" value="<?php echo $std['password']?>">  <!--  step="0.1" min="0.0" max="10.0"  -->
        <br>
        <button id="btn" >Update student information</button>
    </form>
    </div>
    <?php mysqli_close($connection); ?>
</body>
</html>