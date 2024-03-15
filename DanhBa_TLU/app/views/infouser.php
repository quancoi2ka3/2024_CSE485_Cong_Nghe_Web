<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        body {
            font-family: "Times New Roman", sans-serif;
            font-size: 25px;
            margin: 0;
            padding: 20px;
            background-image: url("https://reviewedu.net/wp-content/uploads/2021/11/thuy-loi.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }

        .container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .profile-container {
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            bottom: 0;
            right: 0;
            opacity: 0.8;
        }

        .user-list {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .user-card {
            width: 100%;
            max-width: 300px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            cursor: pointer;
            background-color: #fff;
            transition: transform 0.3s ease;
            opacity: 0.8;
        }

        .user-card:hover {
            transform: scale(1.05);
            background-color: #985656;

        }


        .user-card img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .user-card h3 {
            margin-top: 10px;
            font-size: 20px;
        }

        .user-card p {
            margin-bottom: 5px;
            font-size: 14px;
        }

        .profile-info {
            margin-top: 20px;
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .profile-info img {

            width: 50px;
            height: 60px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 10px;
        }
        h2{
            text-align: center;
            margin-bottom: 20px;
        }


    </style>
</head>

<body>
<div class="container">
    <div class="profile-container">
        <img class="header-image" src="../../public/assets/images/banner.png" alt="Banner Image">
        <h2>Thông tin người dùng</h2>
        <div class="profile-info" id="profile-info">
            <p>Vui lòng chọn </p>
        </div>
    </div>

    <div class="user-list">
        <!-- User 1 -->
        <div class="user-card" onclick="selectUser('John Doe', '123456789', 'avatar.jpg', '1990-01-01', 'Male', 'john.doe@example.com', 'Manager', 'Sales')">
            <img src="../DBDT/image/avt.jpg" alt="Avatar">
            <h3>John Doe</h3>
            <p>Phone: 123456789</p>
        </div>

        <!-- User 2 -->