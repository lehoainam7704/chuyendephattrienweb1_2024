<?php
require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = NULL; //Add new user
$id = NULL;
// Hàm hash
function hashId($id) {
    return md5($id);
}
if (!empty($_GET['id'])) {
    $hashedId = $_GET['id'];
    $users = $userModel->getUsers();
    foreach ($users as $user) {
        if (hashId($user['id']) === $hashedId) {
            $id = $user['id'];  // Lấy id gốc khi hash khớp
            break;
        }
    }
    if ($id) {
        // Thực hiện các hành động delete hoặc update với $id thực sự
        // Xóa user
        $userModel->deleteUserById($id);
        echo "User deleted successfully!";
    } else {
        echo "User not found!";
    }
}
header('location: list_users.php');
?>