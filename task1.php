<?php  
if($_POST){
    $max=$_POST['n3'];
    if($_POST['n1']<$max && $_POST['n2']<$max){
        $max=$_POST['n3'];
    }
    else{
        if($_POST['n1']>$_POST['n2']){
            $max =$_POST['n1'];
        }else{
            $max =$_POST['n2'];
        }
    }
    $min =$_POST['n3'];
    if($_POST['n1']>$min && $_POST['n2']>$min){
        $min=$_POST['n3'];
    }
    else{
        if($_POST['n1']>$_POST['n2']){
            $min =$_POST['n2'];
        }else{
            $min =$_POST['n1'];
        }
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
            <label >Num1
            <input type="text" name="n1">
        </div>
        <div>
            <label >Num2
            <input type="text"name="n2">
        </div>
        <div>
            <label >Num3
            <input type="text" name="n3">
        </div>
        <div>
            <Button name="btn1">Calculate</Button> 
        </div>
    </div> 

      
    </form>   
    <div class="div1">
        <label for="Max" >MAX
        <input type="text"name="output1" placeholder="<?php echo $max; ?>">
    </div>
    <div >
        <label for="Max" >MIN
        <input type="text"name="output2" placeholder="<?php echo $min;?>">
    </div>
</body>
</html>