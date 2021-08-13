<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruits</title>
</head>

<body>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            height: 100vh;
            background-image:
                linear-gradient(rgba(0, 0, 0, 0.70), rgba(0, 0, 0, 0.70)),
                url(./image1.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        h2 {
            text-align: center;
            padding-top: 9%;
            text-decoration: underline;
            color: #f1f1f1;

        }

        h3 {
            margin-left: 20px;
        }

        form {
            width: 380px;
            height: 330px;
            margin: 5% auto;
            background-color: rgba(192, 238, 255, 0.22);
            border-radius: 10px;
            color: #f1f1f1;
        }

        .container table {
            padding-top: 30px;

        }

        .container table tbody tr td {
            padding: 18px;
            border-radius: 15px;
        }

        .submit-btn {
            width: 40%;
            padding: 10px 30px;
            cursor: pointer;
            display: block;
            margin: 30px auto;
            background: linear-gradient(to right, #33ccff, #00ffff);
            border: 0;
            outline: none;
            border-radius: 30px;
        }
    </style>


    <?php
    $connection1 = mysqli_Connect("localhost", "root", "", "db_1");
    $connection2 = mysqli_Connect("localhost", "root", "", "db_2");

    if ($_POST) {
        $fruitName = $_POST['fruitName'];
        $fruitColor = $_POST['fruitColor'];
        $weight = $_POST['weight'];

        $q1 = mysqli_query($connection1, "insert into fruits (name,color) values('{$fruitName}','{$fruitColor}')")
            or die(mysqli_error($connection1));
        $q2 = mysqli_query($connection2, "insert into tbl_fruits_info (weight) values('{$weight}')")
        or die(mysqli_error($connection2));

        if ($q1 && $q2) {
            echo "<script>alert('Data uploaded')</script>";
        }
    }


    ?>









    <div class="container">
        <h2>Enter Information of Fruits: </h2>

        <form action="" method="POST">
            <table>
                <tbody>
                    <tr>
                        <td>
                            <h3>Name : </h3>
                        </td>
                        <td><input type="text" name="fruitName" id=""></td>

                    </tr>
                    <tr>
                        <td>
                            <h3>Color : </h3>
                        </td>
                        <td><input type="text" name="fruitColor" id=""></td>
                    </tr>
                    <tr>
                        <td>
                            <h3>Weight : </h3>
                        </td>
                        <td><input type="text"  name="weight">
                        </td>


                    </tr>


                </tbody>

            </table>
            <button type="submit" class="submit-btn"> Submit</button>
        </form>
    </div>
</body>

</html>