<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
        <style>
            body {
                font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            }
        </style>
    </head>
    <body class="antialiased bg-light">
        <div class="d-flex justify-content-center align-items-center " style="padding-top: 3cm">
            <div class="container text-center" style="margin-left: 20%;">
                <div class="row">
                    <div class="col-md-3" style="font-size: 100px;">
                        <?php 
                            $code = $__env->yieldContent('code');
                            $type_text_code = [
                                "404" => "text-warning",
                                "500" => "text-danger"
                            ];
                            $type_btn_code = [
                                "404" => "btn btn-warning",
                                "500" => "btn btn-danger"
                            ];
                        ?>
                        <div class="{{$type_text_code[$code]}}">
                            @yield('code')
                        </div>
                    </div>
                    <div class="col-md-9 text-start">
                        <h2>
                            <i class="bi bi-exclamation-triangle-fill {{$type_text_code[$code]}}"></i>
                            <?php
                            if ($code == '404') {
                                echo "Oops! Page not found.";
                            } elseif ($code == '500') {
                                echo "Oops! Internal server error.";
                            }
                            ?>
                        </h2>
                        <?php
                        if ($code == '404') {
                            echo "<p>We could not find the page you were looking for. Meanwhile, <br>you may <a href='/' class='text-primary'>return to dashboard</a> or try using the search form.</p>";
                        } elseif ($code == '500') {
                            echo "<p>We will work on fixing that right away. Meanwhile, you may <br><a href='/' class='text-primary'>return to dashboard</a> or try using the search form.</p>";
                        }
                        ?>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search" style="max-width: 50%;">
                            <button class="{{$type_btn_code[$code]}}">
                                <i class="bi bi-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>