<?php

    $limit = 100;

    if(isset($_POST['limit'])) {
        if(is_numeric($_POST['limit']) && $_POST['limit'] > 0){
            $limit = $_POST['limit'];
        }
    }

    function isPrime($i)
    { /**
        * function to iterate over every number smaller than $i 
        * to determine if this is divisible by more than itself and one
        * to return a 0 if not prime, 1 if prime.
         */
        for($n = 2; $n < $i; $n++){
            if ($i % $n == 0){
                return 0;
            }
        }
        return 1;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Values up to 1000</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<div class="container-fluid d-flex justify-content-center">
    <h1>Maths support for students!</h1>
</div>
<div class="container-fluid d-flex justify-content-center">
    <a class="btn btn-light btn-lg p-3 m-2" href="squares.php">Square values</a>
    <a class="btn btn-light btn-lg p-3 m-2" href="primes.php">Prime values</a>
</div>   

<div class="container-fluid d-flex justify-content-center">
    <div>
        <h2>Prime Numbers</h2>
        <div>
            <form action="primes.php" method="POST">
            Update limit (maximum 1000): <input type="number" name="limit" max="1000">
            <input type="submit">
            </form>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered caption-top text-center">
                <caption>Prime Numbers up to 1000</caption>

                <?php 

                    for($i = 1; $i <= $limit; $i++) {
                        if (($i -1) % 10 == 0)
                            echo '<tr>';

                            $j = isPrime($i);
                            if ($j == 0)
                            echo '<td>' . $i. '<td>';
                            else
                            echo '<td class="fw-bold">' . $i. '</td>';            

                        if ($i % 10 == 0)
                            echo '</tr>';
                    }

                ?>
        </div>
    </div>
</div>
    

    <!-- Boostrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $("td:empty").remove();
    </script>
</body>
</html>
