<?php

$con = mysqli_connect("database-1.ctieyy8iwrv0.us-east-1.rds.amazonaws.com", "admin", "12345678", "my_db");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello world!</h1>
    
    <?php

        $sql = "SELECT * FROM persons";
        $result = mysqli_query($con, $sql);

        while ($row = mysqli_fetch_array($result)) {
            printf("%s %s (%s)<br>", $row["FirstName"], $row["LastName"], $row["Age"]);
        }

    ?>
</body>
</html>


<?php

mysqli_free_result($result);
mysqli_close($con);

?>
