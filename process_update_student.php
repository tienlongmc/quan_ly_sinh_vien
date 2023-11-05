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
    $sql = "select * from student_infor
            where ID = '$id'";
    $result = mysqli_query($connection,$sql);
    $std = mysqli_fetch_array($result);
    ?>
    <div class="form">
    <form action="update2.php"  method="post" enctype="multipart/form-data">
    <label for="" class="label_form" >ID</label>
        <input type="text" class = "input_form" name="student_id" value="<?php echo $std['ID'] ?>" readonly>
        <br>
        <label for="" class="label_form">Ảnh</label>
        <input type="file" class = "input_form" name="student_link_img" autocomplete="off" value="<?php echo $std['image']?>">
        <input type="text" class = "input_form" name="student_link_img_p" value="<?php echo $std['image'] ?>" readonly>
        <br>
        <label for="" class="label_form" >Name</label>
        <input type="text" class = "input_form" name="student_name" value="<?php echo $std['Name']?>">
        <br>
        <label for="" class="label_form" >Class</label>
        <input type="text" class = "input_form" name="student_class" value="<?php echo $std['Class']?>">
        <br>
        <label for="" class="label_form" >Address</label>
       <input type="text"   class = "input_form" name="student_address" value="<?php echo $std['Address']?>">  <!--  step="0.1" min="0.0" max="10.0"  -->
        <br>
        <br>
        <label for="" class="label_form">Giới Tính</label>
        <input type="radio" name="gender" value="1"  <?php if ($std['gender'] == 1) echo "checked"; ?>>Nam
        <input type="radio" name="gender" value="0"  <?php if ($std['gender'] == 0) echo "checked"; ?>>Nữ
        <br>
        <button id="btn" >Update student information</button>
    </form>
    </div>
    <?php mysqli_close($connection); ?>
</body>
</html>