<?php
    if (isset($_POST["num1"]) && isset($_POST["num2"]) && isset($_POST["choice"]))
    {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $op = $_POST["choice"];

        $num2 = $_POST["num2"];
        $op = $_POST["choice"];
        switch ($op) 
        {
            case "ADDITION":
                $res = $num1 + $num2;
                break;
            case "SUBTRACTION":
                $res = $num1 - $num2;
                break;
            case "MULTIPLICATION":
                $res = $num1 * $num2;
                break;
            case "DIVISION":
                $res = $num1 / $num2;
                break;
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
    <style>
        body {
            background-color: gold;
        }

        h1 {
            color: indigo;
            text-align: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        td
        {
            font-family:Verdana, Geneva, Tahoma, sans-serif;
            text-align: center;
        }
        table
        {
            height: 200px;
        }
        .inputs
        {
            background-color: gold;
            border-style: none;
            border-bottom: 1px solid black;
            outline: none;
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>CALCULATOR</h1>
    <form action="calculator.php" method="post">
        <table align="center" border="3" width="40%"><br><br>
            <tr>
                <td>Enter first number</td>
                <td><input class="inputs" type="text" name="num1"></td>
            </tr>

            <tr>
                <td>Enter second number</td>
                <td><input class="inputs" type="text" name="num2"></td>
            </tr>

            <tr>
                <td>Select the operation</td>
                <td>
                    <center>
                        <select name="choice">
                            <option></option>
                            <option>ADDITION</option>
                            <option>SUBTRACTION</option>
                            <option>MULTIPLICATION</option>
                            <option>DIVISION</option>
                        </select>
                    </center>
                </td>
            </tr>

            <tr>
                <td><input class="" type="submit" value="RESULT" name="display"></td>
                <td><input class="inputs" type="text" value="<?php echo @$res; ?>" readonly="true" >
                </td>
            </tr>
        </table>

    </form>
</body>

</html>