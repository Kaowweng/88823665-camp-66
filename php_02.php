<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <?php 
    $start = 1;
    $end = 100
    ?>
    <div class="container" ">
        <div class=" card shadow mt-5">
            <div class="card-header bg-success text-white text-center">
                <h4>Multiplication Table from <?php echo $start; ?> to <?php echo $end; ?></h4>
            </div>
            <div class="card-body">
                <?php
                for ($number = $start; $number <= $start + 1; $number++) {
                    echo '<div class="mb-4">';
                    echo '<h5 class="px-5 text-primary">Number: ' . ' (' . ($number % 2  == 0 ? 'Even' : 'Odd') . ')</h5>';
                    for ($i = $number; $i <= $end; $i += 2) {
                        echo '<div class="d-flex ">';
                        echo '<span  class = "col-sm-1">'.'</span>';
                        echo '<span class="fw-bold h6 col-sm-10   ">' . ($i) . '</span>';
                        echo '<span class="fw-bold h6">' . ($number % 2  == 0 ? 'Even' : 'Odd') . '</span>';

                        echo '</div>';
                    }
                }
                echo '</div>';

                ?>
            </div>
        </div>
    </div>
</body>

</html>