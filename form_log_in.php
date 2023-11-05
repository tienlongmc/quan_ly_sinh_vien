<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <!-- <link rel="stylesheet" href="/themify-icons/themify-icons.css"> -->
    <link rel="stylesheet" href="dangnhap.css">
</head>
<body>
 

    
    <div class="content">
        <form method="POST" action="process_log_in.php">
            <h2>Log In</h2>
            <h4>User</h4>
            <input id="email" type="text" autocomplete="off" required name="user">
            <div class="error"><span id="error_name"></span></div>
            <h4>Password</h4>
            <input id="mk" type="password" autocomplete="off" required name="password">
            
            <div class="button"><button type="submit" >Submit</button>
            <button onclick="signup()">Sign up</button>
            </div>
            <a href="">Forget the password ?</a>
        </form>
       
    </div>
    <script>
        function signup(){
            window.location.href = "form_sign_up.php";
        }
    </script>

    <!-- <script>
        function hienthi(){
            var user = document.getElementById('email').value;
            var pass = document.getElementById("mk").value;
            //let check = flase;

            let regex = /^[a-zA-Z0-9]+(?:\.[a-zA-Z0-9]+)*@[a-zA-Z0-9]+(?:\.[a-zA-Z0-9]+)*$/;
            if(regex.test(user) ==false){
                    
                    document.getElementById('error_name').innerHTML='&emsp; User không hợp lệ &emsp;';
                   check=true;
            }else{
                    document.getElementById('error_name').innerHTML='';
                    check=false;
                    if(pass==''){
                        check = true;
                        // console.log(1);
                    }else{
                        check = false;
                        //console.log(2);
                    }
                }
            if(check == false){
                alert("Log in succession");
            }
        }
    </script> -->
    <!-- <div class="footer">
        <img src="https://downloadlogomienphi.com/sites/default/files/logos/download-logo-vector-fuji-fruit-mien-phi.jpg" alt="">
        <div class="con">
            <h1>Liên hệ </h1>
            <p><i class="ti-home"></i> Địa chỉ:111 Quan Hoa - Cầu Giấy - Hà Nội</p>
            <p><i class="ti-mobile"></i> 0357476358</p>
            <p><i class="ti-email"></i> letienlongmc2003@gmail.com</p>
            <p><i class="ti-facebook"></i> https://www.facebook.com/long.huggies.7</p>
        </div>
        <div class="con">
            <h1>Tin Tức</h1>
            <a href="">Nông dân thảnh thơi nhờ thiết bị thông minh tự "biết" chăm sóc cây</a>
            <a href="">Tại sao trẻ ăn nhiều hoa quả vẫn béo phì?</a>
            <a href="">Biết 5 điều này bạn sẽ không lãng phí vỏ của hoa quả</a>
            <a href="">Thời điểm uống nước cam không tốt cho cơ thể</a>
        </div>
        <div class="con">
            <h1>Về chúng tôi</h1>
            <ul><li>Giới thiệu</li>
            <li>Lĩnh vực hoạt động</li>
            <li>Chính sách chất lượng</li>
            <li>Năng lực - Cơ sỏ vật chất</li></ul>
        </div>
    </div> -->
</body>
</html>