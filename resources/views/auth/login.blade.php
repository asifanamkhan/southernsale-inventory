<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Arial Narrow", sans-serif;
        }

        body{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #23242a;
        }
        .box{
            position: relative;
            width: 380px;
            height: 420px;
            background-color: #1c1c1c;
            border-right: 8px;
            overflow: hidden;
        }

        .box::before{
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 380px;
            height: 420px;
            background: linear-gradient(0deg, transparent,
            transparent,#45f3ff,#45f3ff,#45f3ff);
            z-index: 1;
            animation: animate 6s linear infinite;
            transform-origin: bottom right;
        }

        .box::after{
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 380px;
            height: 420px;
            background: linear-gradient(0deg, transparent,
            transparent,#45f3ff,#45f3ff,#45f3ff);
            z-index: 1;
            animation: animate 6s linear infinite;
            transform-origin: bottom right;
            animation-delay: -3s;
        }

        .borderLine{
            position: absolute;
            top: 0;
            inset: 0;
        }

        .borderLine::before{
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 380px;
            height: 420px;
            background: linear-gradient(0deg, transparent,
            transparent,#ff2770,#ff2770,#ff2770);
            z-index: 1;
            animation: animate 6s linear infinite;
            transform-origin: bottom right;
            animation-delay: -1.5s;
        }

        .borderLine::after{
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 380px;
            height: 420px;
            background: linear-gradient(0deg, transparent,
            transparent,#ff2770,#ff2770,#ff2770);
            z-index: 1;
            animation: animate 6s linear infinite;
            transform-origin: bottom right;
            animation-delay: -4.5s;
        }

        @keyframes animate {
            0%{
                transform: rotate(0deg);
            }
            100%{
                transform: rotate(360deg);
            }
        }

        .box form{
            position: absolute;
            inset: 3px;
            background-color: #222;
            padding: 50px 40px;
            border-radius: 8px;
            z-index: 2;
            display: flex;
            flex-direction: column;
        }
        .box form h2{
            color: #fff;
            font-weight: 500;
            text-align: center;
            letter-spacing: 0.1em;
        }

        .box form .inputBox{
            position: relative;
            width: 300px;
            margin-top: 35px;
        }

        .box form .inputBox input{
            position: relative;
            width: 100%;
            padding: 20px 10px 10px;
            background: transparent;
            outline: none;
            box-shadow: none;
            color: #23242a;
            font-size: 1em;
            letter-spacing: 0.05em;
            transition: 0.5s;
            z-index: 10;
            border: none;
        }

        .box form .inputBox span{
            position: absolute;
            left: 0;
            padding: 20px 0 10px;
            pointer-events: none;
            color: #8f8f8f;
            font-size: 1em;
            letter-spacing: 0.05em;
            transition: 0.5s;
        }

        .box form .inputBox input:valid ~ span,
        .box form .inputBox input:focus ~ span
        {
            color: #fff;
            font-size: 0.75em;
            transform: translateY(-34px);
        }

        .box form .inputBox i{
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 2px;
            background: #fff;
            border-radius: 4px;
            overflow: hidden;
            transition: 0.5s;
            pointer-events: none;
        }

        .box form .inputBox input:valid ~ i,
        .box form .inputBox input:focus ~ i
        {
            height: 44px;
        }

        .box form input[type=submit]{
            margin-top: 30px;
            border: none;
            outline: none;
            padding: 9px 25px;
            background: #fff;
            cursor: pointer;
            font-size: 0.9em;
            border-radius: 4px;
            font-weight: 600;
            width: 100px;
        }

        .box form input[type=submit]:active {
            opacity: 0.8;
        }
    </style>
</head>
<body>
<div class="box">
    <span class="borderLine"></span>
    <form action="{{ route('login') }}" method="post">
        @csrf
        <h2><b>Log In</b></h2>
        <div class="inputBox">
            <input type="text" required name="email">
            <span>email</span>
            <i></i>
        </div>
        <div class="inputBox">
            <input type="text" required name="password">
            <span>password</span>
            <i></i>
        </div>
        <input type="submit" value="login">
    </form>
</div>
</body>
</html>
