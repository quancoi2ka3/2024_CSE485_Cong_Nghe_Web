<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];
    $user_name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $allowedExtensions = ['jpg', 'jpeg', 'png'];
    $maxSize = 1048576; 
    $targetDir = "/BTTH/Project22/assets/images"; 
    if (!empty($_FILES['avatar']['tmp_name'])) {
        echo "Hình ảnh chưa được cập nhật";
        $fileInfo = pathinfo($_FILES['avatar']['name']);
        if (!in_array($fileInfo['extension'], $allowedExtensions)) {
            $errors[] = "Only JPG, JPEG, and PNG files are allowed.";
        } else if ($_FILES['avatar']['size'] > $maxSize) {
            $errors[] = "File size must be less than 1MB.";
        } else {
            $fileName = uniqid() . "." . $fileInfo['extension'];
            $targetFile = $targetDir . $fileName;
            if (move_uploaded_file($_FILES['avatar']['tmp_name'], $targetFile)) {
                $user_avatar = $targetFile; // 
            } else {
                $errors[] = "Failed to upload file.";
            }
        }
    }
}
// Xử lý lỗi hoặc cập nhật hồ sơ
if (empty($errors)) {
    echo "Profile updated successfully!";
} else {
    echo "Errors:";
    foreach ($errors as $error) {
        echo "<br> - $error"; // Sử dụng biến $error
    }
}
?>
