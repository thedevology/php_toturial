<?php
$show = true;
    if(isset($_GET["name"])){
        if($_GET["name"] == ""){
            echo "<p>plz enter your name</p>" ;
        }elseif($_GET["lastname"]==""){
            echo "<p>plz enter your lastname</p>" ;
        }
        else{
            $show = false;
            echo " your name is : " . $_GET["name"] . "<br>";
            echo " your lastname is : " . $_GET["lastname"] . "<br>";
            echo " your phone number is : " . $_GET["phone"] . "<br>";
            echo " your email is : " . $_GET["email"] . "<br>";
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
            .i1{
                margin-left: 58px;
            }
            .i2{
                margin-left: 35px;
            }
            .i3{
                margin-left: 57px;
            }
            div{
                margin-top: 5px;
                width: 250px;
                text-align: center;
            }
            form{
                <?php
                    if(!$show) echo "display: none;";
                ?>
            }
            p{
                color:red;
            }
    </style>
</head>
<body>
    <form action="#" method="get">
        <label>name:</label>
        <input class="i1" type="text" name="name"> <br>
        <label>lastname:</label>
        <input class="i2" type="text" name="lastname"> <br>
        <label>phone number:</label>
        <input type="text" name="phone"> <br>
        <label>email:</label>
        <input class="i3" type="text" name="email"><br>
        <div>
        <button type="submit">send</button>
        <button type="reset">rest</button>
        </div>
    </form>
</body>
</html>