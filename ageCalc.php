<?php error_reporting(1);
    $day=0;
    $yr=0;
    $mon=0;

    if(isset($_POST['d1']) && isset($_POST['d2']) && isset($_POST["enter"]))
    {

        $d1=$_POST['d1'];

        $d2=$_POST['d2'];

        $arr=explode("/",$d1);
        $brr=explode("/",$d2);

        if($arr[0]<$brr[0])
        {
            $arr[0]+=30;
            $arr[1]-=1;

        }
        $day=$arr[0]-$brr[0]; 
        if($arr[1]<$brr[1])
        {

            $m1+=12;

            $arr[2]-=1;

        }

        $mon=abs($arr[1]-$brr[1]);

        $yr=abs($arr[2]-$brr[2]);
        $res = $yr.' years '.$mon.' months '.$day.' days ';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, .inputs
        {
            width: 100%;
            height: 40px;
            border: 1px solid;
        }
        #heading
        {
            background-color: blueviolet;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        .inputs
        {
            background-color: aliceblue;
            font-family:Verdana, Geneva, Tahoma, sans-serif;
            text-align: center;
            width: 50%;
        }
        .boxes
        {
            text-align: center;
            border: none;
            background-color: aliceblue;
            border-bottom: 1px solid black;
            outline: none;
            transition: all 100ms ease;
        }
        .submit
        {
            text-align: center;
            margin-left: 470px;
            margin-top: 10px;
            margin-bottom: 10px;
            width: 140px;
            height: 40px;
            font-size: 20px;
            background-color: chartreuse;
            border-radius: 5px;
        }
        .boxes:focus
        {
            border-bottom: 3px solid blue;
        }
    </style>
</head>
<body>
    <form action="ageCalc.php" method="post">
        <table>
            <tr id="heading">
                <td align="center" colspan="2"><h2>AGE CALCULATOR</h2></td>
            </tr>
            <tr>
                <td class="inputs">Enter date of birth</td>
                <td class="inputs"><input type="text" name="d1" class="boxes"></td>
            </tr>
            <tr>
                <td class="inputs">Enter today's date: </td>
                <td class="inputs"><input type="text" name="d2" class="boxes"></td>
            </tr>
            <tr>
                <td colspan="2"><input class="submit" type="submit" name="enter" value="Calculate"></td>
            </tr>
            <tr>
                <td class="inputs">Your age:</td>
                <td class="inputs">
                    <input type="text" name="" class="boxes" value="<?php echo @$res; ?>" readonly>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>