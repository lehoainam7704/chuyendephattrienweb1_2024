<?php
// Start the session
session_start();
// if (!isset($_SESSION['form_submitted'])) {
// $_SESSION['form_submitted'] = false;
// }
unset($_SESSION['form_submitted']);
require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = null; //Add new user
$_id = null;

function hashId($id)
    {
        return md5($id); // Hoặc có thể sử dụng hàm băm bảo mật khác
    }
if (!empty($_GET['id'])) {
    $hashId = $_GET['id'];
    $users = $userModel->getUsers();
    foreach ($users as $usr) {
        if (hashId($usr['id']) === $hashId) {
        $_id = $usr['id']; // Lấy id thực nếu khớp
        $user = $userModel->findUserById($_id); // Lấy user bằng id thực
        break;
    }
    }
}

if (!empty($_POST['submit'])) {
    $errors = [];

    // Kiểm tra trường "Name"
    $name = $_POST['name'];
    if (empty($name)) {
        $errors[] = 'Tên là bắt buộc.';
    } elseif (!preg_match('/^[A-Za-z0-9]{5,15}$/', $name)) {
        $errors[] = 'Tên phải có độ dài từ 5 đến 15 ký tự và chỉ bao gồm chữ cái và số.';
    }

    // Kiểm tra trường "Password"
    $password = $_POST['password'];
    if (empty($password)) {
        $errors[] = 'Mật khẩu là bắt buộc.';
    } elseif (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[~!@#$%^&*()]).{5,10}$/', $password)) {
        $errors[] = 'Mật khẩu phải có độ dài từ 5-10 ký tự, bao gồm ít nhất một chữ thường, một chữ HOA, một số, và một ký tự đặc biệt (~!@#$%^&*()).';
    }
    // Kiểm tra nếu không có lỗi mới xử lý form
    if (empty($errors)) {
        // if ($_SESSION['form_submitted'] === false) {
        //     $_SESSION['form_submitted'] = true; // Đánh dấu là đã gửi form

            if (!empty($_id)) {
                $userModel->updateUser($_POST);
            } else {
                $userModel->insertUser($_POST);
            }
            header('location: list_users.php');
            exit(); // Đảm bảo dừng script ở đây
        // } else {
        //     // Nếu form đã được gửi, hiển thị thông báo lỗi
        //     echo '<div class="alert alert-danger" role="alert">Form đã được gửi. Vui lòng chờ!</div>';
        // }
    } else {
        // Hiển thị lỗi nếu có
        foreach ($errors as $error) {
            echo '<div class="alert alert-danger" role="alert">' . $error . '</div>';
        }
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>User form</title>
        <?php include 'views/meta.php'?>
    </head>
    <body>
        <?php include 'views/header.php'?>
        <div class="container">

            <?php if ($user || !isset($_id)) {?>
            <div class="alert alert-warning" role="alert">
                User form
            </div>
            <form method="POST" onsubmit="return validateForm()">
                <input type="hidden" name="id" value="<?php echo $_id ?>">
                <div class="form-group">
                    <label for="name">Tên</label>
                    <input id="name" class="form-control" name="name" placeholder="Tên" value='<?php if (!empty($user[0]['name'])) echo $user[0]['name'] ?>'>
                    <small class="form-text text-muted">Tên phải có độ dài từ 5 đến 15 ký tự và chỉ bao gồm chữ cái và số.</small>
                </div>
                <div class="form-group">
                    <label for="password">Mật khẩu</label>
                    <input id="password" type="password" name="password" class="form-control" placeholder="Mật khẩu">
                    <small class="form-text text-muted">Mật khẩu phải có độ dài từ 5-10 ký tự, bao gồm ít nhất một chữ thường, một chữ HOA, một số và một ký tự đặc biệt (~!@#$%^&*()).</small>
                </div>

                <button type="submit" name="submit" value="submit" class="btn btn-primary">Gửi</button>
            </form>
            <?php } else {?>
            <div class="alert alert-success" role="alert">
                User not found!
            </div>
            <?php }?>
        </div>

        <script>
            function validateForm() {
                var name = document.getElementById('name').value;
                var password = document.getElementById('password').value;          
                var nameRegex = /^[A-Za-z0-9]{5,15}$/;
                var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[~!@#$%^&*()]).{5,10}$/;
                if (name == "") {
                    alert("Tên là bắt buộc.");
                    return false;
                } else if (!nameRegex.test(name)) {
                    alert("Tên phải có độ dài từ 5 đến 15 ký tự và chỉ bao gồm chữ cái và số.");
                    return false;
                }
                if (password == "") {
                    alert("Mật khẩu là bắt buộc.");
                    return false;
                } else if (!passwordRegex.test(password)) {
                    alert("Mật khẩu phải có độ dài từ 5-10 ký tự, bao gồm ít nhất một chữ thường, một chữ HOA, một số và một ký tự đặc biệt (~!@#$%^&*()).");
                    return false;
                }
                return true;
            }
        </script>
    </body>
</html>