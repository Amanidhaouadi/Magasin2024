<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            background-color: #f6f8fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            display: flex;
            width: 900px;
            height: 500px;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        .left {
            width: 50%;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #fff;
        }

        .right {
            width: 50%;
            background: linear-gradient(rgba(255, 0, 0, 0.5), rgba(255, 0, 0, 0.5)), url('image/yazaki1.jpg') no-repeat center center;
            background-size: cover;
            color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .logo {
            width: 120px;
            height: auto;
            margin: 0 300px 10px 0;
        }

        h1 {
            margin-bottom: 20px;
            color: #343a40;
            font-size: 24px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #495057;
            text-align: left;
            width: 100%;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .button-1 {
            background-color: #ff3b3f;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            width: 100%;
            font-size: 16px;
        }

        .button-1:hover {
            background-color: #e62e31;
        }

        .signup {
            color: #ff3b3f;
            margin-top: 20px;
        }

        .signup a {
            color: #ff3b3f;
            text-decoration: none;
        }

        .social-login {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .social-login img {
            width: 40px;
            height: 40px;
            margin: 0 10px;
            cursor: pointer;
        }

        .right h2 {
            font-size: 32px;
            margin-bottom: 20px;
        }

        .right p {
            max-width: 80%;
            line-height: 1.5;
        }

        footer {
            width: 100%;
            text-align: center;
            padding: 10px 0;
            background-color: #f6f8fa;
            position: absolute;
            bottom: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left">
            <img src="image/logo.png" alt="Logo" class="logo">
            <img src="image/login.png" alt="Logo" style="width: 120px; margin: 0 0 -20px 0 ">
            <h1>Welcome to Yazaki</h1>
            <form action="login.php" method="post">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                
                <button type="submit" class="button-1">Sign In</button>
            </form>
        </div>
        <div class="right">
            <h2>Yazaki</h2>
            <p>One For All, All For One!</p>
        </div>
    </div>
    <footer>
        <p>&copy; 2024 Yazaki IT Store. All rights reserved.</p>
    </footer>
</body>
</html>
