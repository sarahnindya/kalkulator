//Sarah Nindya Pramesthi
//2200013
//4A

<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Sederhana</title>
    <?php
$cookie_nama1="num";
$cookie_value1="";
$cookie_nama2="op";
$cookie_value2="";

if(isset($_POST['num']))
{
    $num=$_POST['input'].$_POST['num'] ;  
}
else {
    $num="";
}
if(isset($_POST['op']))
{
    $cookie_value1 = $_POST['input'];
    setcookie($cookie_nama1, $cookie_value1, time()+(86400*30), "/");

    $cookie_value2 = $_POST['op'];
    setcookie($cookie_nama2, $cookie_value2, time()+(86400*30), "/");
    $num="";
}
$result = 0;
if(isset($_POST['equal']))
{
    $num=$_POST['input'];
    switch($_COOKIE['op'])
    {
        case "+":
        $result = $_COOKIE['num']+$num;
        break;
        case "-":
        $result = $_COOKIE['num']-$num;
        break;
        case "*":
        $result = $_COOKIE['num']*$num;
        break;
        case "/":
        $result = $_COOKIE['num']/$num;
        break;
    }
    $num = $result;
}
?>
</head>
<body>
    <div class="cal">
    <form action="" method="post"> <br><br>
        <input type="text" class="main" name="input" value="<?php echo @$num ?>"> <br><br>
        <input type="submit" class="c" name="op" value="C">
        <input type="submit" class="calc" name="op" value="%">
        <input type="submit" class="calc" name="op" value="/"> <br>
        <input type="submit" class="number" name="num" value="7">
        <input type="submit" class="number" name="num" value="8">
        <input type="submit" class="number" name="num" value="9">
        <input type="submit" class="calc" name="op" value="*"> <br>
        <input type="submit" class="number" name="num" value="4">
        <input type="submit" class="number" name="num" value="5">
        <input type="submit" class="number" name="num" value="6">
        <input type="submit" class="calc" name="op" value="-"> <br>
        <input type="submit" class="number" name="num" value="1">
        <input type="submit" class="number" name="num" value="2">
        <input type="submit" class="number" name="num" value="3">
        <input type="submit" class="calc" name="op" value="+"> <br>
        <input type="submit" class="number" name="num" value="0">
        <input type="submit" class="number" name="num" value=",">
        <input type="submit" class="equal" name="equal" value="=">
</form> </body>
</html>
<style> 
    .main{
        font-size: 80px;
        color: #f7f7f7;
        font-weight: 400;
    }
    .cal{
        margin: auto;
        background-color: #0f0e0e;
        border: 2px solid #f7f7f7;
        width: 25%;
        height: 600px;
        border-radius: 30px;
        box-shadow: 10px 10px 50px;
    }
    .main{
        background-color: #0f0e0e;
        border: 1px solid #f7f7f7;
        height: 95px;
        width: 98.5%;
    }
    .number{
        padding: 32px 37px;
        border-radius: 50px;
        font-wight: 400;
        font-size: small;
        background-color: #dc6177;
    }
    .number:hover{
       background-color: #f7f7f7;
    }
    .calc{
        padding: 32px 36px;
        border-radius: 50px;
        font-wight: 400;
        font-size: small;
        background-color: #ccc;
    }
    .calc:hover{
       background-color: #f9a947;
    }
    .c{
        padding: 32px 36px;
        border-radius: 50px;
        font-wight: 400;
        font-size: small;
        background-color: #f7f7f7;
    }
    .c:hover{
       background-color: #84abed;
       color: #0f0e0e;
    }
    .equal{
        padding: 32px 36px;
        border-radius: 50px;
        font-wight: 400;
        font-size: small;
        background-color: #f7f7f7;
    }
    .equal:hover{
        background-color: #84abed;
       color: #0f0e0e;
    }
</style>