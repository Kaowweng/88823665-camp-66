<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-lg p-4">
        <h2 class="text-center text-primary mb-4">Multiplication Form</h2>
        <form action="{{url('/mylaravel')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label fw-bold">Email Address</label>
                <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com" required>
            </div>
            <div class="mb-3">
                <label for="myinput" class="form-label fw-bold">Enter a Number</label>
                <input name="myinput" type="number" class="form-control" id="myinput" placeholder="Enter a number" required>
            </div>
            <div class="d-grid">
                <button class="btn btn-success btn-lg" type="submit">Generate Table</button>
            </div>
        </form>
    </div>

    <?php if(isset($_POST["email"]) && !empty($_POST["myinput"]) && !empty($_POST["email"])) { ?>
    <div class="mt-4">
        <div class="alert alert-info text-center fw-bold">Email: <?php echo $_POST["email"]; ?></div>
        <div class="card shadow-lg">
            <div class="card-header bg-success text-white text-center">
                <h4>Multiplication Table for <?php echo $_POST["myinput"]; ?></h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <?php for($i = 1; $i <= 12; $i++) { ?>
                        <div class="col-md-4 text-center p-2">
                            <span class="fw-bold text-primary h5"><?php echo $_POST["myinput"] . " x " . $i . " = "; ?></span>
                            <span class="fw-bold h5 text-dark"> <?php echo ($_POST["myinput"] * $i); ?></span>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
</div>

</body>
</html>