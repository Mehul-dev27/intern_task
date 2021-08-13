<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="f_d.css">
    <title>Document</title>
</head>

<body>
    <section class="dashboard" id="dashboard">
        <!-- table container starts -->
        <div class="table-container dashboardItem" id="formTable">
            <h1 class="heading">
                FRUITS IN BASKET
            </h1>
            <?php
            // DB connection
            $connection1 = mysqli_connect("localhost", "root", "", "db_1");
            // if ($connection1 == true) {
            //     echo "database1 Connected Successfully</br>";
            // } else {
            //     die("ERROR: Could not connect " . mysqli_connect_error());
            // }
            $connection2 = mysqli_connect("localhost", "root", "", "db_2");
            // if ($connection2 == true) {
            //     echo "database2 Connected Successfully</br>";
            // } else {
            //     die("ERROR: Could not connect " . mysqli_connect_error());
            // }

            // Query
            $q1 = mysqli_query($connection1, "select * from fruits where is_deleted = 0") or die(mysqli_error($connection1));
            $q2 = mysqli_query($connection2, "select * from tbl_fruits_info where is_deleted = 0    ") or die(mysqli_error($connection2));

            echo "<table class ='table' id='table'>";

            echo "<thead>";
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Fruit Name</th>";
            echo "<th>Color</th>";
            echo "<th>Weight (gms)</th>";
            echo "</tr>";
            echo "</thead>";

            $i = 0;
            while ($row1 = mysqli_fetch_array($q1)) {
                $row2 = mysqli_fetch_array($q2);
                $i++;
                echo "<tr>";
                echo "<td>{$i}</td>";
                // echo "<td>{$row['donor_id']}</td>";
                echo "<td>{$row1['name']}</td>";
                echo "<td>{$row1['color']}</td>";
                echo "<td>{$row2['weight']}</td>";
                echo "</tr>";
            }
            echo "</table>";



            ?>
        </div>
        <!-- table container ends -->

    </section>
</body>

</html>