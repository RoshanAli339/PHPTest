<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <title>Form</title>
</head>

<body>
    <h1 align="center">Attendance form</h1>
    <br><br><br>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //getting data from form
        $name = $_POST['name'];
        $roll = $_POST['roll'];
        $percentage = $_POST['attendance'];

        //server details
        $server = "localhost";
        $username = "root";
        $passwd = "";
        $database = "attendance";

        //connecting to server
        $conn = mysqli_connect($server, $username, $passwd, $database);

        if (!$conn) {
            die("Sorry connection failed" . mysqli_connect_error());
        } else {
            //submitting the data to table
            $sql = "INSERT INTO `students` (`Name`, `Roll No.`, `Percentage`) VALUES('$name', '$roll', '$percentage')";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Your entry has been submitted successfully!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>';
              
            } else {
                // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvenience caused!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>';
            }
        }
    }
    ?>


    <form class="row g-3 m-4" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        <div class="col-6">
            <label for="inputEmail4" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="inputName">
        </div>
        <div class="col-6">
            <label for="inputPassword4" class="form-label">Registered number</label>
            <input type="text" name="roll" class="form-control" id="inputRoll">
        </div>
        <div class="col-6">
            <label for="inputAddress" class="form-label">Attendance Percentage</label>
            <input type="text" name="attendance" class="form-control" id="inputPercentage">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
</body>

</html>