<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>User Information</h1>
    <h2>Add User</h2>
    <!-- <img src="./access/image/avt.jpg" alt=""> -->
    <div class="form">
    <form action="process_input_user.php" method="post" enctype="multipart/form-data">
        
        <label for="" class="label_form" >Fullname</label>
        <input type="text" class = "input_form" autocomplete="off" name="fullname">
        <br>
        <label for="" class="label_form" >Username</label>
        <input type="text" class = "input_form" autocomplete="off" name="username">
        <br>
        <label for="" class="label_form" >Password</label>
       <input type="text"   class = "input_form" autocomplete="off" name="password">  <!--  step="0.1" min="0.0" max="10.0"  -->
       
        <br>
        
        <button id="btn" type="submit">Add new user</button>
    </form>
    </div>
    <?php
    $connection = mysqli_connect('localhost','root','','student');

    $sql = "select * from tbluser";
    $result = mysqli_query($connection,$sql);
    ?>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Fullname</th>
            <th>Username</th>
            <th>Password</th>
            <th colspan="2">Funtion</th>
        </tr>
       
        <?php foreach($result as $each_std){ ?>
                <tr>
                    <td>
                        <?php echo $each_std['ID'] ?>
                    </td>
                   
                    <td>
                        <?php echo $each_std['fullname'] ?>
                    </td>
                   
                    <td>
                        <?php echo $each_std['username'] ?>
                    </td>
                    <td>
                        <?php echo $each_std['password'] ?>
                    </td>
                    <td>
                        <a href="process_update_user.php?ID=<?php echo$each_std['ID'] ?>">
                        Update</a>
                    </td>
                    <td>
                        <a  href="process_delete_user.php?ID=<?php echo$each_std['ID'] ?>">
                        Delete</a>
                    </td>
                </tr>

          <?php } ?>
    </table>
            
    <?php mysqli_close($connection); ?>
</body>
</html>