<?php
$id = $_POST['student_id'];
// $img = $_POST['student_link_img'];
$name = $_POST['student_name'];
$class = $_POST['student_class'];
$gender = $_POST['gender'];
$address = $_POST['student_address'];
$connection = mysqli_connect('localhost','root','','student');
mysqli_set_charset($connection,'utf8');
//upload file anh
$img = basename($_FILES['student_link_img']['name']);
$target_dir = 'access/image/';
$target_file = $target_dir.$img;
echo $target_file;
if(move_uploaded_file($_FILES['student_link_img']['tmp_name'],$target_file)){
        echo 'da upload hinh';
}
$sql ="insert into student_infor(ID,image,Name,Class,Address,gender)
        values('$id','$target_file','$name','$class','$address','$gender')";
mysqli_query($connection,$sql);
mysqli_close($connection);
?>
<a id="autoClickLink" href="sinhvien.php">Back</a>
<img src="<php echo $target_file; ?>" alt="">
<script>
        // Lấy thẻ "a" bằng id
        var linkToAutoClick = document.getElementById("autoClickLink");

        // Tự động click thẻ "a" sau khi trang đã tải xong
        window.addEventListener("load", function() {
            linkToAutoClick.click();
        });
</script>