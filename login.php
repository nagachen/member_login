<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            box-sizing: border-box;
        }
        .container {
            border: 1px solid black;
            display: flex;
            justify-content: center;
            
            margin:     250px;
            width: 30%;
            height: 30%;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="check.php" method="post">
            <div>
                <label for="acc">帳號：</label>
                <input type="text" name="acc">
            </div>
            <div>
                <label for="pw">密碼：</label>
                <input type="password" name="pw">
            </div>
            <div><input type="submit" value="送出"><input type="reset" value="取消"></div>
        </form>
    </div>
<?php
if(isset($_GET['error'])){
    echo "<span style='color:red'>";
    switch($_GET['error']){
        case 1:
            echo "帳號或密碼錯誤";
            break;
        case 2:
            echo "無法連線，請稍候再試";
            break;
        case 3:
            echo "其他錯誤，請聯係管理員";
            break;
    }
    echo "</span>";
}
?>
</body>

</html>