<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php</title>
    <style>
        .st {
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
    $arr = ["ankit", "praveen", "UTF-8"];
    // echo $arr cant do this things
    var_dump($arr);
    echo '<br>';
    print_r($arr);
    echo '<br>';
    echo $arr[0];

    //key value
    $arr1 = [
        "name" => "ankit",
        "work" => "internship",
        "other" => "youtube"
    ];
    // var_dump($arr1);
    // echo $arr1['other'];
    //true 1
    //false 0
    //if and else
    $college = true;
    echo '<br>';
    if ($college) {
        echo 'true';
    } else {
        echo 'pvss';
    }
    // conditional statement
    //conditional operators
    //arithmetic
    //+ - * / % ^
    $num1 = 10;
    $num2 = $num1 / 2;
    echo $num2;

    //constant
    define("GREETING", "Welcome to W3Schools.com!");
    echo GREETING;

    $favcolor = "red";

    switch ($favcolor) {
        case "red":
            echo "Your favorite color is red!";
            break;
        case "blue":
            echo "Your favorite color is blue!";
            break;
        case "green":
            echo "Your favorite color is green!";
            break;
        default:
            echo "Your favorite color is neither red, blue, nor green!";
    }

    //loops
    //1.foreach loop
    foreach ($arr1 as $val) {
        echo "$val <br>";
    }
    $members = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

    foreach ($members as $x => $y) {
        echo "$x : $y <br>";
    }
    //2.while loop
    $i = 1;
    while ($i < 6) {
        echo $i;
        $i++;
    }

    //3.do while loop
    $i = 1;

    do {
        echo $i;
        $i++;
    } while ($i < 6);
    //for loop
    for ($x = 0; $x <= 10; $x++) {
        if ($x == 3) break;
        echo "The number is: $x <br>";
    }

    //functions
    function myMessage()
    {
        echo "Hello world! ";
    }

    myMessage();

    //gloable variable
    $x = 75;

    function myfunction()
    {
        echo $GLOBALS['x'];
    }

    myfunction()

//     echo $_SERVER['PHP_SELF'];
// echo $_SERVER['SERVER_NAME'];
// echo $_SERVER['HTTP_HOST'];
// echo $_SERVER['HTTP_REFERER'];
// echo $_SERVER['HTTP_USER_AGENT'];
// echo $_SERVER['SCRIPT_NAME'];
    ?>

    <h1>my name is <?php echo $arr[0] ?></h1>
</body>

</html>