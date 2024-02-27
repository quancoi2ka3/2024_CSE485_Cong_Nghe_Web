<?php
    $users = [
        [
        "username" => "anhnguyen",
        "password" => password_hash("123", PASSWORD_DEFAULT),
        "name" => "anh",
        "email" => "anhnguyen@example.com",
        "role" => "user"
        ],
        [
            "username" => "phuongnguyen",
            "password" => password_hash("000", PASSWORD_DEFAULT),
            "name" => "phuong",
            "email" => "phuongnguyen@example.com",
            "role" => "user"
        ],
        [
            "username" => "quannguyen",
            "password" => password_hash("000", PASSWORD_DEFAULT),
            "name" => "quan",
            "email" => "quannguyen@example.com",
            "role" => "user"
        ],
        [
        "username" => "quynhpham",
        "password" => password_hash("456", PASSWORD_DEFAULT),
        "name" => "quynh",
        "email" => "quynhpham@example.com",
        "role" => "admin"
        ],
        [
            "username" => "minhnguyen",
            "password" => password_hash("000", PASSWORD_DEFAULT),
            "name" => "minh",
            "email" => "minhnguyen@example.com",
            "role" => "admin"
            ],
       ];
       $authorization_levels = [
        "user" => [
            "access_profile" => true,
            "edit_profile" => true,
            "access_admin_panel" => false,
        ],
        "admin" => [
            "access_profile" => true,
            "edit_profile" => true,
            "access_admin_panel" => true,
            "manage_users" => true,
        ],
       ];
?>