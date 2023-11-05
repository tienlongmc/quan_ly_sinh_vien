<?php   
 $connection = mysqli_connect('localhost','root','','student');
 mysqli_set_charset($connection,'utf8');
    $a = $_POST['student_name'];
    $b = $_POST['student_class'];
    $c = $_POST['student_address'];
    $d = $_POST['student_id'];
    $e = $_POST['gender'];
    // $f = $_POST['student_link_img'];
    $oldAvatarPath= $_POST['student_link_img_p'];
    // echo  $oldAvatarPath;
    //upload file anh
    $img = basename($_FILES['student_link_img']['name']);
    $target_dir = 'access/image/';
    $target_file = $target_dir.$img;
    // echo $target_file;
    if(move_uploaded_file($_FILES['student_link_img']['tmp_name'],$target_file)){
            echo 'da upload hinh';
    }

    if ($_FILES["student_link_img"]["error"] == 0) {
        // Lấy đường dẫn của avatar mới
        $newAvatarPath = 'access/image/' . $_FILES["student_link_img"]["name"];
        // Lưu đường dẫn của avatar mới vào cơ sở dữ liệu
        // ...
        // Xóa avatar cũ (nếu cần)
        unlink('$target_file');
        $sql = "update student_infor
        set Name='$a',Class='$b',Address='$c',gender='$e',image='$newAvatarPath'
        where ID='$d'";
       // echo $newAvatarPath;
        // ...
    } else {
        // Sử dụng đường dẫn avatar cũ từ cơ sở dữ liệu
        // $oldAvatarPath = '$target_file'; // Thay đổi thành đường dẫn thực tế
        // Lưu đường dẫn avatar cũ vào cơ sở dữ liệu
        // ...
        // $oldAvatarPath= $_POST['student_link_img_p'];

        $sql = "update student_infor
        set Name='$a',Class='$b',Address='$c',gender='$e',image='$oldAvatarPath'
        where ID='$d'";
    }

    
    $result = mysqli_query($connection,$sql);
    mysqli_close($connection);?>

    <a id="autoClickLink"href="sinhvien.php">Back</a>
    <script>
        // Lấy thẻ "a" bằng id
        var linkToAutoClick = document.getElementById("autoClickLink");

        // Tự động click thẻ "a" sau khi trang đã tải xong
        window.addEventListener("load", function() {
            linkToAutoClick.click();
        });
</script>