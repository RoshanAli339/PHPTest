<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>
        .heading
        {
            font-family: 'Trebuchet MS', Arial, sans-serif;
            text-align: center;
            text-decoration: underline;
            color: chocolate;
        }

        form
        {
            display: grid;
            justify-content: center;
            margin-left: 150px;
            background-color: crimson;
            width: 70%;
            height: 150px;
        }

        form label
        {
            font-family: 'Century Gothic', sans-serif;
            font-weight: 200;
            color: #e9f62a;
        }

        #number
        {
            border-style: none;
            box-shadow: 0 2px 1px 0 #DDD;
            box-sizing: border-box;
            outline: none;
            background-color: crimson;
            border-bottom: 0 solid black;
            transition: 100ms ease-in;
            text-align: center;
            color: azure;
        }

        form .submit
        {
            width: 30%;
            height: 35%;
            margin-left: 100px;
            border-radius: 5px;
            background-color: silver;
        }

        #number:focus
        {
            border-bottom: 3px solid blue;
        }

        .output
        {
            border-style: double;
            font-family: 'Trebuchet MS', Arial, sans-serif;
            font-size: larger;
            margin-top: 20px;
            margin-left: 150px;
            text-align: center;
            width: 70%;
        }
    </style>
</head>
<body>
    <h1 class="heading">PALINDROME</h1>
    <form action="palindrome.php" method="post">
        <p><label for="number"><strong>Enter the number:</strong> </label>
            <input type="text" name="number" id="number"></p>
        <input class="submit" type="submit" value="Submit">
    </form>

    <?php
        $num = $_POST["number"];
        $rev = 0;
        $temp = $num;
        while ($temp > 0)
        {
            $rev = ($rev * 10) + ($temp % 10);
            $temp = intdiv($temp, 10);
        }
        if ($rev == $num)
        {
            echo '<div class="output">'.$num.' is a Palindrome number</div>';
        }
        else
        {
            echo '<div class="output">'. $num .' is not Palindrome number </div>';
        }
    ?>
</body>
</html>