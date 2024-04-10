<?php
if($_POST){
    if($_POST['charge']<= 50) $bill= $_POST['charge']*.50;
    else if($_POST['charge']<= 150) $bill= $_POST['charge']*.75;
    else if($_POST['charge']<= 250) $bill= $_POST['charge']*1.20;
    else       $bill= $_POST['charge']*1.50;
    $fbill= $bill+(($bill*20)/100);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .container{
        margin-top: 100px;
        text-align: center;
    }
    div{
        margin-bottom: 20px;
        text-align: center;
    }
    .div1{
        text-align: center;
        margin-top: 100px;
    }
</style>
<body>
    <div class="container">
    <form action="" method="post">
        <div>
            <label >unit charge
            <input type="text" name="charge">
        </div>
    </form>   
    <div class="div1">
        cost : <?php if (isset($fbill) ) echo ($fbill)."$"; ?>
    </div>
</body>
</html>