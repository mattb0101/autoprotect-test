<?php 

    $col = 12;
    $row = 12;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Protect Code Test</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <div class="table-responsive w-50">
        <table class="table caption-top">
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


    <!-- Boostrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
