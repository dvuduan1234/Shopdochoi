<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
 <title>Get data</title>
 
</head>
<body>
 <!-- lấy dữ liệu gửi lên phải dùng biến toàn cục $_GET hoăc $_POST -->



<?php
  //Gọi file connection.php ở bài trước
  require_once'db.php';
  // Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
  if(isset($_POST['user'])&& isset($_POST['pass'])) {
    // lấy thông tin người dùng
    $user = $_POST["user"];
    $pass = $_POST["pass"];
    //làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
    //mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
    $user = strip_tags($user);
    $user = addslashes($user);
    $pass = strip_tags($pass);
    $pass = addslashes($pass);
    if ($user == "Admin" && $pass =="1234") {
      $_SESSION['user'] = $user;
      header('Location: admin.php');
    }else{
      $sql = "select * from account where user = '$user' and pass = '$pass' ";
       $rows=query($sql);
      if ($rows==0) {
        echo "</h1>Log in fail. The account aren't exit</h1>";
      }else{
        //tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
        $_SESSION['user'] = $user;
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
                header('Location: VindeFrance2.php');
      }
    }
  }
?>
 
</body>
</html>