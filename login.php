<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Picture Perfect</title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
</head>

<body class="body">
    <header class="navbar">
        <div class="logo-cont">
            <img class="logo" src="./assets/logo.png">
            <span class="logo-text">Picture Perfect</span>
        </div>
        <ul class="nav-list">
            <li><a class="list-item" href="index.html">Home</a></li>
            <li><a class="list-item" href="About.html">About</a></li>
            <li><a class="list-item" href="Gallery.html">Gallery</a></li>
            <li><a class="list-item" href="PriceList.html">Price-List</a></li>
            <li><a class="list-item active" href="login.php">Login</a></li>
            <li><a class="list-item" href="Contact.html">Contact Us</a></li>
            
        </ul>
    </header>

    <div class="main">
        <div class="wrapper active">

            <div class="form-box login overlay">
                <h2>Login</h2>

                <form action="login database.php" method="post">

                    <div class="input-box">
                        <span class="icon"><ion-icon name="email"></ion-icon></span>
                        <input type="email" required name="email">
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input type="password" required name="password">
                        <label>Password</label>
                    </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox">Remember me</label>
                        <a href="forgot-password.html">Forgot password?</a>
                    </div>
                    <BUtton type="submit" class="btn">Login</BUtton>
                    <div class="login-register">
                        <p>Don't have an account? <a href="#" class="register-link">Register</a></p>
                    </div>
                </form>
            </div>
            <div class="form-box register">
                <h2>Registeration</h2>

                <form action="registration database.php" method="post">

                    <div class="input-box">
                        <span class="icon"><ion-icon name="person"></ion-icon></span>
                        <input type="text" required name="username">
                        <label>Username</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="email"></ion-icon></span>
                        <input type="email" required name="email">
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input type="password" required name="password">
                        <label>Password</label>
                    </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox">I agree to terms & conditions</label>

                    </div>
                    <BUtton type="submit" class="btn">Register</BUtton>
                    <div class="login-register">
                        <p>Already have an account? <a href="#" class="login-link">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <style>
        .body {
            margin: 0;
            background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.1)),
                url("./assets/bg.png");
            background-size: cover;
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
            padding: 0 50px;
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
        }

        .navbar {
            width: 95%;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav-list {
            display: flex;
            flex: 0.6;
            justify-content: space-evenly;
            padding: 10px;
            list-style: none;
            text-align: center;
        }

        .list-item {
            text-decoration: none;
            color: white;
            font-size: 1.2rem;
            margin: 0 10px;
            font-family: cursive;

        }

        .active {
            text-decoration: none;
            color: #cc9f5b;
            font-size: 1.2rem;
            margin: 0 10px;
        }

        .logo-cont {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo {
            width: 17%;
        }

        .logo-text {
            font-family: cursive;
            color: #cc9f5b;
            font-size: 1.5rem;
        }

        .main {
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 90%;
            height: 500px;
        }

        .wrapper {
            position: relative;
            margin: 0;
            padding: 0;
            width: 400px;
            height: 440px;
            background: transparent;
            border: 2px solid rgba(255, 255, 255, 5);
            border-radius: 20px;
            border-top-right-radius: 20px;
            backdrop-filter: blur(10px);
            background: rgba(254, 252, 252, 0);
            box-shadow: 0 0 30px rgba(101, 99, 99, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            transition: height .2s ease;
            overflow: hidden;
        }

        .wrapper.active {
            height: 520px;
        }

        .wrapper .form-box {
            padding: 10px;
            width: 85%;
        }

        .wrapper .form-box.login {
            transition: transform .18s ease-in-out;
            transform: translateX(0);
            opacity: 1;

        }

        .wrapper.active .form-box.login {
            transition: none;
            transform: translateX(-400px);
            opacity: 0.3;

        }

        .wrapper .form-box.register {
            position: absolute;
            transition: none;
            transform: translatex(400px);
            opacity: 0.3;

        }

        .wrapper.active .form-box.register {
            transition: transform .18s ease-in-out;
            transform: translateX(0);
            opacity: 1;
        }

        .form-box h2 {
            font-size: 2em;
            color: wheat;
            text-align: center;
        }

        .input-box {
            position: relative;
            width: 100%;
            height: 50px;
            border-bottom: 2px solid whitesmoke;
            margin: 40px 0;
        }

        .input-box label {
            position: absolute;
            top: 50%;
            left: 5px;
            transform: translateY(-50%);
            font-size: 1em;
            color: wheat;
            font-weight: 500;
            pointer-events: none;
            transition: .5s;
        }

        .input-box input:focus~label,
        .input-box input:valid~label {
            top: -5px;

        }

        .input-box input {
            width: 100%;
            height: 100%;
            background: transparent;
            border: none;
            outline: none;
            font-size: 1em;
            color: bisque;
            font-weight: 600;
            padding: 0 35px 0 5px;
        }

        .input-box .icon {
            position: absolute;
            right: 8px;
            color: wheat;
            font-size: 1.2rem;
            line-height: 57px;
        }

        .remember-forgot {
            font-size: 1em;
            color: wheat;
            font-weight: 500;
            margin: -15px 0 15px;
            display: flex;
            justify-content: space-between;
        }

        .remember-forgot label input {
            accent-color: wheat;
            margin-right: 3px;
        }

        .remember-forgot a {
            color: wheat;
            text-decoration: none;
        }

        .remember-forgot a:hover {
            text-decoration: underline;
            color: wheat;
        }

        .btn {
            width: 100%;
            height: 45px;
            background: wheat;
            border: none;
            outline: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1em;
            font-weight: 700;
        }

        .login-register {
            font-size: 1em;
            color: wheat;
            text-align: center;
            font-weight: 500;
            margin: 25px 0 10px;
        }

        .login-register p a {
            color: wheat;
            text-decoration: none;
            font-weight: 600;
        }

        .login-register p a:hover {
            text-decoration: underline;
        }

        .wrapper .icon-close {
            position: absolute;
            top: 0;
            right: 0;
            width: 45px;
            height: 45px;
            background: wheat;
            font-size: 2em;
            color: black;
            display: flex;
            justify-content: center;
            align-items: center;
            border-bottom-left-radius: 20px;
            cursor: pointer;
            z-index: 1;
        }
    </style>

</body>
<script src="script.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</html>