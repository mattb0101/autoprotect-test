<?php
    $col = 12;
    $row = 12;

    if(isset($_POST['row'])) {
        if(is_numeric($_POST['row']) && $_POST['row'] > 0){
            $row = $_POST['row'];
        }
    }

    if(isset($_POST['col'])) {
        if(is_numeric($_POST['col']) && $_POST['col'] > 0){
            $col = $_POST['col'];
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Square Numbers</title>

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
        <h2>Square Numbers</h2>

        <div>
            <form action="squares.php" method="POST">
            Update Row: <input type="number" name="row">
            Update Columns: <input type="number" name="col">
            <input type="submit">
            </form>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered caption-top text-center">
                <caption>Squares up to 12</caption>
                
                <?php  
                    for($i = 1; $i < $row +1; $i++){
                        echo '<tr>';
                            
                            for($j = 1; $j < $col +1; $j++) {
                                if($j == $i){
                                    echo '<td class="fw-bold">' .$i*$j . '</td>';
                                } else{
                                    echo '<td>' .$i*$j . '</td>';
                                }
                            }
                            echo '</tr>';     
                        }
                    ?>
            </table>
        </div>
    </div>
</div>

    

    

    <!-- Boostrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
