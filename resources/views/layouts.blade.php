<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>UAB SENDER.LT</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        .card:hover {
            -webkit-box-shadow: 0px 0px 25px -10px rgba(0,0,0,0.75);
            -moz-box-shadow: 0px 0px 25px -10px rgba(0,0,0,0.75);
            box-shadow: 0px 0px 25px -10px rgba(0,0,0,0.75);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="mb-5">
                    <center>
                        <h4>
                            UAB SENDER.LT JUNIOR PHP DEVELOPER
                        </h4>
                    </center>
                </div>
                <div class="card">
                    <div class="card-body">
                        @yield('content')
                    </div>
                </div>
                <small>@ <b>Edvinas Valentinovicius</b></small>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#gopage').click(function () {
                var x = document.getElementById('gopagevalue');
                var val = x.value;
                window.location.href = "/"+val;
            });
        });
    </script>
</body>
</html>
