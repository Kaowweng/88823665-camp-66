<!DOCTYPE html>
<html>

<head>
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
</head>

<body class="bg-light">
    <div class="container">
        <!-- Form Section -->
        <div class="card shadow mt-5 mx-auto">
            <div class="card-body">
                <h2 class="text-center mb-4">Multiplication Table Generator</h2>
                <form method="post" action="">
                    <div class="mb-3">
                        <label for="start" class="form-label">Enter Start Number</label>
                        <input name="start" type="number" class="form-control" id="start" placeholder="Enter start number" required>
                    </div>
                    <div class="mb-3">
                        <label for="end" class="form-label">Enter End Number</label>
                        <input name="end" type="number" class="form-control" id="end" placeholder="Enter end number" required>
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-success btn-block" type="submit">Generate Table</button>
                    </div>
                </form>
            </div>
        </div>

    
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $start = intval($_POST['start']);
            $end = intval($_POST['end']);

        
                ?>
                <div class="card shadow mt-5">
                    <div class="card-header bg-success text-white text-center">
                        <h4>Multiplication Table from <?php echo $start; ?> to <?php echo $end; ?></h4>
                    </div>
                    <div class="card-body">
                        <?php
                        for ($number = $start; $number <= $start+1 ; $number++) {
                            echo '<div class="mb-4">';
                            echo '<h5 class="text-primary">Number: ' .' (' . ($number % 2  == 0 ? 'Even' : 'Odd') . ')</h5>';
                            for ($i = $number; $i <= $end; $i+=2) {
                                echo '<div class="d-flex justify-content-between">';
                               
                                echo '<span class="fw-bold h6">' . ( $i) . '</span>';
                               
                                echo '</div>';
                            }
                            }
                            echo '</div>';
                        
                        ?>
                    </div>
                </div>
                <?php
            
                    }
        ?>
    </div>
</body>

</html>
