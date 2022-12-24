<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:aqua;
        }
        .heading{
            font-family: 'Franklin Gothic Medium', sans-serif;
            text-align: center;
            font-size: 40px;
        }
        .inputs
        {
            font-size: 20px;
            font-family: 'Trebuchet MS', sans-serif;
            display: flex;
            justify-content: center;
        }
        .inputs label
        {
            margin-right: 20px;
        }
        .inputs .input-box
        {
            display: table-column;
            outline: none;
            border-style: none;
            background-color: aqua;
            border-bottom: 1px solid black;
        }
        .inputs #submit
        {
            width: 100px;
        }
        .output
        {
            display: flex;
            justify-content: center;
            font-family: 'Arial Narrow Bold', sans-serif;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <h1 class="heading">BIO DATA</h1>
    <form action="biodata.php" method="post">
        <p class="inputs"><label for="name">Name:</label>
            <input class="input-box" type="text" name="name" id="name">
        </p>
        <p class="inputs">
            <label for="address">Addres:</label>
            <input class="input-box" type="text" name="addr" id="addr">
        </p>
        <p class="inputs">
            <label for="age">Age:</label>
            <input class="input-box" type="number" name="age" id="age">
        </p>
        <p class="inputs">
            <label for="phone">Phone:</label>
            <input class="input-box" type="text" name="phone" id="phone">
        </p>
        <p class="inputs">
            <label for="email">Email:</label>
            <input class="input-box" type="email" name="email" id="email">
        </p>
        <p class="inputs">
            <label for="quali">Qualification:</label>
            <input class="input-box" type="text" name="quali" id="quali">
        </p>
        <p class="inputs"><input type="submit" name="submit" id="submit" value="Submit"></p>
    </form>

    <?php
        if (isset($_POST["name"]) && isset($_POST["age"]) && isset($_POST["phone"]) && 
            isset($_POST["email"]) && isset($_POST["addr"]) && isset($_POST["quali"]) && isset($_POST["submit"]))
        {
            echo '<p class="output">Name: '. $_POST["name"] . '</p>';    
            echo '<p class="output">Address: '. $_POST["addr"] . '</p>';    
            echo '<p class="output">Age: '. $_POST["age"] . '</p>';    
            echo '<p class="output">Mobile: '. $_POST["phone"] . '</p>';    
            echo '<p class="output">Email: '. $_POST["email"] . '</p>';    
            echo '<p class="output">Qualification: '. $_POST["quali"] . '</p>';    
        }
    ?>

</body>
</html>