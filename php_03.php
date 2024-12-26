<!DOCTYPE html>
<html>

<head>
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
</head>

<body class="bg-light">
    <div class="container">
    
        <div class="card shadow mt-5 mx-auto" >
            <div class="card-body">
                <h2 class="text-center mb-4">Multiplication Table Generator</h2>
                <form method="post" action="">
                  
                    <div class="mb-3">
                        <label for="number" class="form-label">Enter a Number</label>
                        <input name="detail" type="number" class="form-control" id="number" placeholder="Enter a number" required>
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-success btn-block" type="submit">Generate Table</button>
                    </div>
                </form>
            </div>
        </div>

    
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          
            $data = $_POST['detail'];
        ?>
        <div class="card shadow mt-5">
            <div class="card-header bg-success text-white text-center">
                <h4>Multiplication Table for <?php echo $data; ?></h4>
             
            </div>
            <div class="card-body">
                <?php
                for ($i = 1; $i <= 12; $i++) {
                    ?>
                    <div class="d-flex justify-content-start ">
                        <div class="col-sm-5"></div>
                    <span class="fw-bold h5"><?php  echo $data.' x '. $i."="  ?></span>
                    <span class="fw-bold h5"><?php echo($data * $i) ?> </span>
                    </div>
                <?php }
                ?>
            </div>
        </div>
        <?php } ?>
    </div>
</body>

</html>
