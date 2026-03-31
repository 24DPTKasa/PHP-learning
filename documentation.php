<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  // <--- php code start with this 
    
    //echo and variables 

    echo "Hello World"; // this command "echo" is used to print or output the text on the web page.
    $variable = "red"; // this is how we use a Variable(peremennaya) in PHP. We use the $ sign followed by the variable name.
    echo "I love $variable"; // example of using a variable

    // var_dump 

    var_dump(5); // this command is used to display the data type and value of a variable. In this case, it will show int(5) 
    var_dump("Hello"); // this will show string(5) "Hello"
    var_dump(true); // this will show bool(true)
    var_dump(null); // this will show NULL
    var_dump(3.14); // this will show float(3.14)
    var_dump([1, 2, 3]); // this will show array(3) { [0]=> int(1) [1]=> int(2) [2]=> int(3) }





    // VARIABLE SCOPE

    // PHP has three types of variable scope: local, global, and static.

    // Global scope (это переменная которая доступна в любой части кода кроме функции)

    // Local scope (это переменная которая доступна только внутри функции)

    // Static scope (это переменная которая сохраняет свое значение между вызовами функции)

    /* проще говоря когда запускаем программу она выполняется и запоминает значение переменной х, а когда мы вновь запускаем программу
    она выполняется и показывает значение переменной х которое было запомнено в первом запуске */
    
function myTest() {
    static $x = 0; // static scope
    echo $x;
    $x++;
    }
    myTest();
    myTest();
    myTest();

    // как использовать глобальную переменную внутри функции
$y = 10; // global scope
function myTest2() {
    global $y; // we need to use the "global" keyword to access the global variable inside the function
    echo $y;
    }


    // $GLOBALS (это суперглобальная переменная которая позволяет нам получить доступ к глобальным переменным из любой части кода, включая функции)
function myTest3() {
    $GLOBALS['y']; // we can access the global variable using the $GLOBALS array
    $GLOBALS['y'] = 3; // we can also change the value of the global variable using the $GLOBALS array
    }

    // echo and print 
    // echo and print are both used to output text on the web page, but echo can take multiple parameters while print can only take one parameter.

    // обычные или двойные кавычки
    $name = "John";
    echo 'Hello ' . $name; /* obichnie kavichki mozno ispolzovat dlya soedineniya teksta i peremennoy,
    no v etom sluchae nado ispolzovat operator tochku(.) dlya soedineniya teksta i peremennoy */

    echo "Hello $name"; // this will output: Hello John (because double quotes parse the variable inside the string)


    

    // DATA TYPES

    // PHP has 8 data types: string, integer, float, boolean, array, object, NULL, and resource.
    // ненужно писать название типа данных перед переменной как в некоторых других языках программирования,
    // автоматически определяет тип данных переменной в зависимости от значения которое мы присоединяем к переменной

    // no dlya array nuzno delat tak 
    $primer = array("apple", "banana", "cherry"); // this is how we create an array in PHP
    var_dump($primer); // this will show all array(3)
    echo $primer[0]; // используя echo можно вывести только один элемент массива, в этом случае "apple" (index 0) 

    // izmenenie tipa dannyh peremennoy
    $var = "Hello"; // this is a string

    $var = 123; // now this variable is an integer


    //kak imzenit tip dannyh peremennoy ne izmeniv ee znachenie
    $var2 = "123"; // this is a string

    $var2 = (int)$var2; // now we are changing the data type of the variable to integer without changing its value




































    ?>  <!--- php code end with this --->
</body>
</html>