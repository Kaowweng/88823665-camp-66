<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class = " container">
    <div class="card shadow mt-5">
        <?php $data = 2 ?>
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
        <?php  ?>
    </div>
</body>
</html>