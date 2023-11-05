<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Student Information</h1>
    <h2>Add Student</h2>
    <!-- <img src="./access/image/avt.jpg" alt=""> -->
    <div class="form">
    <form action="process_input_student.php" method="post" enctype="multipart/form-data">
        <label for="" class="label_form" >Mã sinh viên</label>
        <input type="text" class = "input_form" autocomplete="off" name="student_id">
        <br>
        <label for="" class="label_form">Ảnh</label>
        <input type="file" class = "input_form" name="student_link_img" autocomplete="off">
        <br>
        <label for="" class="label_form" >Họ Tên</label>
        <input type="text" class = "input_form" autocomplete="off" name="student_name">
        <br>
        <label for="" class="label_form" >Lớp</label>
        <input type="text" class = "input_form" autocomplete="off" name="student_class">
        <br>
        <label for="" class="label_form" >Quê Quán</label>
       <input type="text"   class = "input_form" autocomplete="off" name="student_address">  <!--  step="0.1" min="0.0" max="10.0"  -->
        <br>
        <label for="" class="label_form">Giới Tính</label>
        <input type="radio" name="gender" value="1">Nam
        <input type="radio" name="gender" value="0">Nữ
        <br>
        <br>
        
        <button id="btn" type="submit">Add new student</button>
    </form>
    
    <!-- <script>
        document.getElementById("btn").addEventListener("click", function() {
     location.reload(); // Tải lại trang khi nút được ấn.
     loadForm();
});
    </script> -->
    </div>
    <?php
    $connection = mysqli_connect('localhost','root','','student');

    $sql = "select * from student_infor";
    $result = mysqli_query($connection,$sql);
    ?>
    <table border="1">
        <tr>
            <th>Mã sinh viên</th>
            <th>Ảnh</th>
            <th>Họ Tên</th>
            <th>Giới Tính</th>
            <th>Lớp</th>
            <th>Quê Quán</th>
            <th colspan="2">Funtion</th>
        </tr>
       
        <?php foreach($result as $each_std){ ?>
                <tr>
                    <td>
                        <?php echo $each_std['ID'] ?>
                    </td>
                    <td>
                        <img src="./<?php echo $each_std['image'] ?>" style="width:100px" alt="">
                    </td>
                    <td>
                        <?php echo $each_std['Name'] ?>
                    </td>
                    <td>
                         <?php if($each_std['gender']==1){ echo 'Nam';
                        }else{
                            echo 'Nữ';
                        }
                         ?>
                    </td>
                    <td>
                        <?php echo $each_std['Class'] ?>
                    </td>
                    <td>
                        <?php echo $each_std['Address'] ?>
                    </td>
                    <td>
                        <a href="process_update_student.php?ID=<?php echo$each_std['ID'] ?>">
                        Update</a>
                    </td>
                    <td>
                        <a  href="process_delete_student.php?ID=<?php echo$each_std['ID'] ?>">
                        Delete</a>
                    </td>
                </tr>

          <?php } ?>
    </table>
            
    <?php mysqli_close($connection); ?>
</body>
</html>