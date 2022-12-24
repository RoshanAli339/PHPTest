<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .heading
        {
            text-align: center;
            font-family:'Arial Narrow Bold', sans-serif;
        }
        table
        {
            background-color:aqua;
            border: 2px solid;
            border-collapse: collapse;
        }
        td
        {
            border: 2px solid;
            height: 50px;
            width: 100px;
            text-align: center;
            font-weight: bold;
        }
        .classes
        {
            background-color:chartreuse;
        }
    </style>
</head>
<body>
    <h1 class="heading">TIME TABLE</h1>
    <table cellspacing="0" align="center">
        <tr>
            <td>Day/Period</td>
            <td>I<br>8:00-9:00</td>
            <td>II<br>9:00-10:00</td>
            <td>III<br>10:00-11:00</td>
            <td>11:00-12:00</td>
            <td>IV<br>12:00-1:00</td>
            <td>V<br>1:00-2:00</td>
            <td>VI<br>2:00-3:00</td>
        </tr>
        <tr>
            <td>Monday</td>
            <td class="classes">DMS</td>
            <td class="classes">OOP</td>
            <td class="classes">DS</td>
            <td rowspan="6">
                L<br>U<br>N<br>C<br>H
            </td>
            <td class="classes" colspan="3">OOP LAB</td>
        </tr>
        <tr>
            <td>Tuesday</td>
            <td class="classes" colspan="3">P&S LAB</td>
            <td class="classes">OOP</td>
            <td class="classes">P&S</td>
            <td class="classes">DS</td>
        </tr>
        <tr>
            <td>Wednesday</td>
            <td class="classes" colspan="2">SOC LAB</td>
            <td class="classes">OOP</td>
            <td class="classes">DS</td>
            <td class="classes">CO</td>
            <td class="classes">DMS</td>
        </tr>
        <tr>
            <td>Thursday</td>
            <td class="classes">CO</td>
            <td class="classes">DT&PI</td>
            <td class="classes">DMS</td>
            <td class="classes" colspan="3">DS LAB</td>
        </tr>
        <tr>
            <td>Friday</td>
            <td class="classes">CO</td>
            <td class="classes">DT&PI</td>
            <td class="classes">P&S</td>
            <td class="classes">DS</td>
            <td class="classes">DMS</td>
            <td class="classes">CO</td>
        </tr>
        <tr>
            <td>Saturday</td>
            <td class="classes" colspan="2">CC LAB</td>
            <td class="classes">DS</td>
            <td class="classes">SOC</td>
            <td class="classes">OOP</td>
            <td class="classes">P&S</td>
        </tr>
    </table>
</body>
</html>