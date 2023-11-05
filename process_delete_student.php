<?php
$id = $_GET['ID'];

$connection = mysqli_connect('localhost','root','','student');
mysqli_set_charset($connection,'utf8');
$sql ="delete from student_infor where ID='$id'";

$result = mysqli_query($connection,$sql);  //duyệt theo mảng


mysqli_close($connection);
?>
<a id="autoClickLink"href="sinhvien.php">Back</a>
    <script>
        // Lấy thẻ "a" bằng id
        var linkToAutoClick = document.getElementById("autoClickLink");

        // Tự động click thẻ "a" sau khi trang đã tải xong
        window.addEventListener("load", function() {
            linkToAutoClick.click();
        });
</script>