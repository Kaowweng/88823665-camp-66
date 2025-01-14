<!DOCTYPE html>
<html>

<head>
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
</head>

<body class="bg-light">
    <div class="container">
    
        <div class="card shadow mt-5 mx-auto" >
            <div class="card-body">
                <h2 class="text-center mb-4">Multiplication11</h2>
                <form method="post" action="{{url('/mylaravel')}}">
                  
                    <div class="mb-3">
                        <label for="number" class="form-label">Enter a Number</label>
                        <input name="detail" type="number" class="form-control" id="number"  required>
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-primary btn-block" type="submit">Sumbit</button>
                    </div>
                </form>
            </div>
        </div>

    
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          
            $data = $_POST['detail'];
        ?>
        <div class="card shadow mt-5">
            <div class="card-header bg-primary text-white text-center">
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