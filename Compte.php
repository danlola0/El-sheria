<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Login Form</title>
    <h1>Creating your accounts</h1>
    <!--<h3>Protegez votre compte à tout prix!!!</h3>-->
    <style type="text/css">
    h1 {
        font-size: 40px;
        font-weight: normal;
        text-align: center;
        font-family: Forte;
        margin-bottom: 15px;
    }

    h3 {
        font-size: 60px;
        font-weight: normal;
        text-align: right;
        font-family: Vivaldi;
        margin-bottom: 15px;
        margin-top: 500px;
    }

    body {
        margin: 0;
        padding: 0;
        height: 427px;
        background: no-repeat center center/ cover url(bg.jpg) fixed ;
        background-size: cover;
        font-family: sans-serif;
    }

    .loginBox {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 350px;
        height: 420px;
        padding: 80px 40px;
        box-sizing: border-box;
        background: rgba(0, 0, 0, .5);
    }

    .user {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        overflow: hidden;
        position: absolute;
        top: calc(-100px/2);
        left: calc(50% - 50px);
    }

    h2 {
        margin: 0;
        padding: 0 0 20px;
        color: #efed40;
        text-align: center;
    }

    .loginBox p {
        margin: 0;
        padding: 0;
        font-weight: bold;
        color: #fff;
    }

    .loginBox input {
        width: 100%;
        margin-bottom: 20px;
    }

    .loginBox input[type="text"],
    .loginBox input[type="password"] {
        border: none;
        border-bottom: 1px solid #fff;
        background: transparent;
        outline: none;
        height: 40px;
        color: #fff;
        font-size: 16px;
    }

    ::placeholder {
        color: rgba(255, 255, 255, .5);
    }

    .loginBox input[type="submit"] {
        border: none;
        outline: none;
        height: 40px;
        color: #fff;
        font-size: 16px;
        background: #ff267e;
        cursor: pointer;
        border-radius: 20px;
    }

    .loginBox input[type="submit"]:hover {
        background: #efed40;
        color: #262626;
    }

    .loginBox a {
        color: #fff;
        font-size: 14px;
        font-weight: bold;
        text-decoration: none;
    }
    </style>
</head>

<body>
    <div class="loginBox">
        <img src="user.png" class="user">
        <h2>My account</h2>
        <form action="" method="post">
            <p>E-mail</p>
            <input type="text" name="" placeholder="E-mail">
            <p>Password</p>
            <input type="password" name="" placeholder="••••••">
            <input type="submit" name="" value="Sign In" href="Premier Site.html">
            <a href="Premier Site.html">Forget Password</a>
        </form>
    </div>
</body>

</html>