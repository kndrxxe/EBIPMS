<?php
http_response_code(404);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Error 404 Not Found | EBIPMS</title>
    <link rel="icon" href="kanlurangbukal.png" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <!--Main Navigation-->
    <header>
        <style>
            .navbar .nav-link {
                color: #fff !important;
            }

            footer.bg-dark {
                position: fixed;
                left: 0;
                bottom: 0;
                width: 100%;
            }
        </style>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="z-index: 2000">
            <div class="container-fluid">
                <!-- Navbar brand -->
                <a class="navbar-brand nav-link">
                    <img src="kanlurangbukal.png" width="30" />
                    <b>E-BIPMS</b>
                </a>
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                    data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </nav>
        <!-- Navbar -->
        <div class="container animate__animated animate__bounceIn">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-md-7 mt-5 mb-5">
                    <div class="bg-white rounded shadow-5-strong p-4 mt-5 text-center">
                        <h1 class="text-warning animate__animated animate__tada" style="font-size: 120px">404</h1>
                        <h2>Page Not Found</h2>
                        <p>The page you are looking for might have been removed, had its name changed or is temporarily
                            unavailable.</p>
                        <button onclick="goBack()" class="btn btn-warning">Back to Previous Page</button>

                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--Main Navigation-->
    <footer class="bg-dark text-lg-start">
        <div class="text-center p-3 text-light">
            © 2023 Copyright
        </div>
    </footer>
    <script type="text/javascript" src="js/mdb.min.js"></script>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>

</html>