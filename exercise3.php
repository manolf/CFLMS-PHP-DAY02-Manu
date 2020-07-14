<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Function with parameters</title>
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <form class="form-inline">
            <a class="btn btn-outline-success" href="http://localhost/codefactory/day2/index.html" role="button">Home</a>
        </form>
    </nav>

    <h2>Division</h2>
    <p>Please enter your numbers for the operation:</p>

    <form action="exercise3.php" method="POST">
        Divident: <input type="text" name="divident" />
        Divisor: <input type="text" name="divisor" />
        <input type="submit" name="submit" />
    </form>

    <?php

    if (isset($_POST['submit'])) {
        if ($_POST["divident"] && $_POST["divisor"]) {

            $divident = ($_POST['divident']);
            $divisor = ($_POST['divisor']);

            divFunction($divident, $divisor);
        }
    }

    function divFunction($num3, $num4)
    { {
            $div = $num3 / $num4;
        }
        echo "The result is $div";
    }


    ?>

</body>

</html>