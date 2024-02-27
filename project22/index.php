<?php
    require_once './db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>project22</title>
    <link rel="stylesheet" href="assets/css/style22.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div id="container">
        <form class="form" action="" method="post" enctype="multipart/form-data">
            <h2>Account Settings</h2>
           <div class="form-group row">
                <div class = "col-sm-3 col-form-label">
                    <label for="profile">Profile</label>
                    <br>
                    <label for="pass">Password</label>
                    <br>
                    <label for="integration">Integrations</label>
                </div>
                <div class="col-sm-9" for="avatar">
                    <input type="file" name="avatar" accept="images/*">
                    <?php
                        // Check if form is submitted
                        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        // Validate and update user information
                            $errors = [];
                            $user['fullname'] = filter_input(INPUT_POST, 'fullname', FILTER_SANITIZE_SPECIAL_CHARS);
                            $user['email'] = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
                            $user['phonenumber'] = filter_input(INPUT_POST, 'phonenumber', FILTER_SANITIZE_SPECIAL_CHARS);
                            $user['companyname'] = filter_input(INPUT_POST, 'companyname', FILTER_SANITIZE_SPECIAL_CHARS);  
                            // Handle avatar upload (similar to previous exercise)
                            $allowedExtensions = ['jpg', 'jpeg', 'png'];
                            $maxSize = 1048576; // 1MB
                            $targetDir = "assets/images/"; // Adjust directory path
                                if (!empty($_FILES['avatar']['tmp_name'])) {
                                    $fileInfo = pathinfo($_FILES['avatar']['name']);
                                    if (!in_array($fileInfo['extension'], $allowedExtensions)) {
                                        $errors[] = "Only JPG, JPEG, and PNG files are allowed.";
                                    } else if ($_FILES['avatar']['size'] > $maxSize) {
                                        $errors[] = "File size must be less than 1MB.";
                                    } else {
                                        $fileName = uniqid() . "." . $fileInfo['extension'];
                                        $targetFile = $targetDir . $fileName;
                                        if (move_uploaded_file($_FILES['avatar']['tmp_name'], $targetFile))
                                        {
                                            $user['avatar'] = $targetFile; // Update avatar URL in array
                                        } else {
                                            $errors[] = "Failed to upload file.";
                                                        }
                                        }
                                        }
                                    // Handle errors or update profile
                                    if (empty($errors)) {
                                        // echo "Profile updated successfully!";
                                        echo "<br><img class='img' src=\"" . $user['avatar'] . "\" alt=\"Avatar\">";
                                    } else {
                                        echo "Errors:";
                                        foreach ($errors as $error) {
                                        echo "<br> - $error";
                                    }
                                }
                            }
                        ?>
                    <br>
                    <br>
                    <button type="submit" class="btn btn-primary">Update Profile</button>
                </div>
            </div>
            <div class="form-group row">
                <label for="billing" class="col-sm-3 col-form-label">Billing</label>
                <div class="col-sm-9">
                    <label for="billing">Full Name</label>
                    <input type="text" class="form-control" id="billing" value="<?php echo $user['fullname']; ?>">
                    <br>
                    <label for="billing">Email</label>
                    <input type="text" class="form-control" id="billing" value="<?php echo $user['email']; ?>">
                    <br>
                    <label for="billing">Phone Number</label>
                    <input type="text" class="form-control" id="billing" value="<?php echo $user['phonenumber']; ?>">
                    <br>
                    <label for="billing">Company Name</label>
                    <input type="text" class="form-control" id="billing" value="<?php echo $user['companyname']; ?>">
                </div>
            </div>
        </form>
    </div>
</body>
</html>