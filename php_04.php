<!DOCTYPE html>
<html>

<head>
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body class="bg-light">
    <div class="container">
       
        <div class="card shadow mt-5 mx-auto">
            <div class="card-body">
                <h2 class="text-center mb-4">Multiplication  Generator</h2>
                <form method="post" action="">
                    <div class="mb-3">
                        <label for="start" class="form-label">Enter Start Number</label>
                        <input name="start" type="number" class="form-control" id="start"required>
                    </div>
                    <div class="mb-3">
                        <label for="end" class="form-label">Enter End Number</label>
                        <input name="end" type="number" class="form-control" id="end"required>
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-primary btn-block" type="submit">Generate Table</button>
                    </div>
                </form>
            </div>
        </div>

        
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $start = intval($_POST['start']);
            $end = intval($_POST['end']);

        
            if ($start > $end) {
                echo '<div class="alert alert-danger mt-3 text-center">Start number must be less than or equal to end number.</div>';
            } else {
                ?>
                <div class="card shadow mt-5">
                    <div class="card-header bg-primary text-white text-center">
                        <h4>Numbers from <?php echo $start; ?> to <?php echo $end; ?></h4>
                    </div>
                    <div class="card-body">
                        <?php
                        for ($i = $start; $i <= $end; $i++) {
                            echo '<div class="d-flex justify-content-between">';
                            echo '<span class="fw-bold h6">' . $i . ' is ' . ($i % 2 == 0 ? 'Even' : 'Odd') . '</span>';
                            echo '</div>';
                        }
                        ?>
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </div>
</body>

</html>
