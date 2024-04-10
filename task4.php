<?php
if($_POST){
    $sum = $_POST['phy']+$_POST['che']+$_POST['bio']+$_POST['math']+$_POST['com'];
    $precentage = ($sum /500) *100;
    if($precentage >= 90 )
        $grade ="Grade : A";
    else if($precentage>=80 && $precentage <90  ) 
        $grade ="Grade : B"; 
    else if($precentage>=70 && $precentage <80  ) 
        $grade ="Grade : C";
    else if($precentage>=60 && $precentage <70  ) 
        $grade ="Grade : D";
    else if($precentage>=40 && $precentage <60  ) 
        $grade ="Grade : E";
    else{
        $grade ="Grade : F";
    }        
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
            <label >Physics
            <input type="text" name="phy">
        </div>
        <div>
            <label >Chemistry
            <input type="text" name="che">
        </div>
        <div>
            <label >Biology
            <input type="text" name="bio" max=50>
        </div>
        <div>
            <label >Mathematics
            <input type="text" name="math">
        </div>
        <div>
            <label >Computer
            <input type="text" name="com">
        </div>
        <div>
            <button name="btn1"> calculate </button>
        </div>
    </form>   
    <div class="div1">
        <?php if (isset($grade) ) echo ($grade); ?>
    </div>
</body>
</html>