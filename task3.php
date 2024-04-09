<?php  
if($_POST){
    $output = $_POST['n1']**(1/$_POST['r1']);
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
            <label >Num
            <input type="text" name="n1">
        </div>
        <div>
            <label >root
            <input type="text" name="r1">
        </div>
        <div>
            <button name="btn1">Button</button>
        </div>
    </form>   
    <div class="div1">
        <label for="" >OUT
        <input type="text"name="output1" placeholder="<?php if (isset ($output))echo $output; ?>">
    </div>
  
</body>
</html>