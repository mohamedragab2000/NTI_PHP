<?php
$users = [
    (object)[
        'id' => 1,
        'name' => 'ahmed',
        "gender" => (object)[
            'gender' => 'm'
        ],
        'hobbies' => [
            'football', 'swimming', 'running'
        ],
        
 
    ],
    (object)[
        'id' => 2,
        'name' => 'mohamed',
        "gender" => (object)[
            'gender' => 'm'
        ],
        'hobbies' => [
            'swimming', 'running',
        ],

    ],
    (object)[
        'id' => 3,
        'name' => 'menna',
        "gender" => (object)[
            'gender' => 'f'
        ],
        'hobbies' => [
            'running',
        ],
 
    ], 
];
    $message ="<tr>" ;
    foreach($users as $user){
        foreach($user as $property=>$val){
            $message.="<th>$property</th>";   
        }
        $message.="</tr>";
        break;
    }
    $records="<tr>";
    foreach($users as $user){
        foreach($user as $property=>$value){
            if(is_array($value)){
                $value =implode(' ,' ,$value);
                $records.= "<td> $value</td>";
            }else if(is_object($value)){
                $value =$value->gender;
                if($value=='m'){
                    $value ="male";
                    $records.= "<td> $value</td>";
                }else{
                    $value ="female";
                    $records.= "<td> $value</td>";
                }
            }else{
                $records.= "<td> $value</td>";
            }
        }
        $records.="</tr>";
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
    <table border="1">
        <?php echo $message?>
        <?php echo$records ?>
    </table>
    
</body>
</html>