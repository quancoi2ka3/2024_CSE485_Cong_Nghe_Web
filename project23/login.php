<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Project23</title>
</head>

<body>
   <?php
   $users = [
      [
         "username" => "johndoe",         "password" => password_hash("123", PASSWORD_DEFAULT),
         "name" => "John Doe",         "email" => "johndoe@example.com"
      ],
   ];
   ?>
   <form action="process_login.php" method="post"> Username: <input type="text" name="username" required> <br> Password:
      <input type="password" name="password" required> <br> <button type="submit">Login</button>
   </form>

</body>

</html>