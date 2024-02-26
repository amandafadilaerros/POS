<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .profile-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 300px;
        }

        .profile-header {
            background-color: #3498db;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        .profile-image {
            border-radius: 50%;
            width: 120px;
            height: 120px;
            object-fit: cover;
            margin: 0 auto;
            margin-bottom: 15px;
        }

        .profile-name {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .profile-role {
            color: #95a5a6;
            font-size: 14px;
            margin-bottom: 20px;
        }
    </style>
    <title>Profile</title>
</head>
<body>
    <div class="profile-container">
        <div class="profile-header">
            <div class="profile-name">Nama : {{$nama}}</div>
            <div class="profile-role">ID : {{$id}}</div>
        </div>
    </div>
</body>
</html>
