<?php
// $id = $_POST['student_id'];
// $img = $_POST['student_link_img'];
$fullname = $_POST['fullname'];
$username = $_POST['username'];
$password = $_POST['password'];

$connection = mysqli_connect('localhost','root','','student');
mysqli_set_charset($connection,'utf8');

$sql ="insert into tbluser(fullname,username,password)
        values('$fullname','$username','$password')";
mysqli_query($connection,$sql);
mysqli_close($connection);
?>
<a id="autoClickLink" href="form_sign_up.php">Back</a>
<!-- <img src="<php echo $target_file; ?>" alt=""> -->
<script>
        // Lấy thẻ "a" bằng id
        var linkToAutoClick = document.getElementById("autoClickLink");

        // Tự động click thẻ "a" sau khi trang đã tải xong
        window.addEventListener("load", function() {
            linkToAutoClick.click();
        });
</script>