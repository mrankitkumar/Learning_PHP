<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php</title>
    <style>
        .st{
            color: aqua;
        }
    </style>
</head>
<body>
    <?php
        // echo '<h1 class="st">Ankit Kumar</h1>';
        // echo 2+2;
        // $name='aaa';
        // echo $name;
        // data type 1.string 2.number,boolean
        // $num=100;
        // echo $num; 
        
        //Array
        $arr=["ankit","praveen","UTF-8"];
        // echo $arr cant do this things
        var_dump($arr);
        echo '<br>';
        print_r($arr);
        echo '<br>';
        echo $arr[0];

        //key value
        $arr1=[
            "name"=>"ankit",
            "work"=>"internship",
            "other"=>"youtube"
        ];
        // var_dump($arr1);
        // echo $arr1['other'];
        //true 1
        //false 0
        //if and else
        $college=true;
        echo '<br>';
           if($college)
        {
            echo 'true';
        }
        else
        {
            echo 'pvss';
        }
        // conditional statement
        //conditional operators
        //arithmetic
        //+ - * / % ^
        $num1=10;
        $num2=$num1/2;
        echo $num2;

        //constant
        define("GREETING", "Welcome to W3Schools.com!");
        echo GREETING;
    ?>

    <h1>my name is <?php echo $arr[0] ?></h1>
</body>
</html>
