<?php
    include_once 'dbconnect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="phoneBook.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhoneBook</title>
</head>
<body>
    <h1>This is the Phone Book!</h1>
<div class="mainbody">
    <div class="container">
    <?php
        $sql = "SELECT * FROM generalinfo;";
        //send to db and run it in the db
        $results = mysqli_query($conn, $sql); //1st parameter is the connection and 2nd is sql statement we want to query
        $resultsCheck = mysqli_num_rows($results); //Check if we retrieved results
        //Check if results are above 0
        if ($resultsCheck > 0){
            echo "<table>";
            echo "<tr?><th>Id</th> <th>First Name</th> <th>Last Name</th> <th>Phone Number</th> <th>Email</th></tr>";
            //begin displaying data
            while($row = mysqli_fetch_assoc($results)){
                echo "<tr><td>" . $row['id'] . " ". "</td>";
                echo "<td>" . $row['firstName'] . " " . "</td>";
                echo "<td>" . $row['lastName'] . " " . "</td>";
                echo "<td>" . $row['phoneNumber'] . " " . "</td>";
                echo "<td>" . $row['email'] . "</td>" . "</tr>" . "<br>";
            }
        }
        echo "</tr>";
    ?>

</div>
</div>
    

</body>
</html>