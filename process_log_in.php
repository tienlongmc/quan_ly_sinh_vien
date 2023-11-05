<script>
function showErrorAlert() {
    alert("Đăng nhập không thành công!");
}
function showSuccessAlert() {
    alert("Đăng nhập thành công!");
}
</script>


<?php   
//session_start();
    $user = $_POST['user'];
    $pass = $_POST['password'];
    $connection = mysqli_connect('localhost','root','','student');
    mysqli_set_charset($connection,'utf8');
    $sql = "select * from tbluser
    where username = '$user' and password = '$pass'";
    $result = mysqli_query($connection,$sql);
    $std = mysqli_fetch_array($result);
    $count = mysqli_num_rows($result);
			if($count==1){
				//$_SESSION["loged"] = true;
                // echo '<script type="text/javascript">showSuccessAlert();</script>';
				header("location:sinhvien.php");
			}
			else{
                // echo 'd,ấdasdadad';
                // echo '<script type="text/javascript">showErrorAlert();</script>';
                // sleep(5);
                header("location:form_log_in.php");
                // echo '<script type="text/javascript">showErrorAlert();</script>';
			}

?>