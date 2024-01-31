<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Font Awesome -->
    <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.css"
  rel="stylesheet"
/>




    <title>Dashbord</title>
</head>

<body class=" bg-body-secondary">

    <div class="container-fluid  justify-content-center ">

        <div class="row ">


     


            <!--Dashbord-->
            <?php
            require 'dashbord.php';
            ?>
            <!--Dashbord-->


            <div class="col-lg-10 bg-white gap-3 mt-5">

                <div class="row">
                    <!--navbar-->
                    <div class=" col-12 ">
                        <div class="row">
                            <nav class="navbar navbar-dark  fixed-top col-lg-10 offset-lg-2 mt-2" style=" background-color: #3e4676; ">

                                <?php
                                require 'navBar.php';
                                ?>

                            </nav>
                        </div>

                    </div>
                    <!--navbar-->

                    <div class=" col-12 mt-4" id="main">
                        <div class="row">
                            <p>hello</p>


                        </div>

                    </div>

                </div>
            </div>
        </div>


    </div>
    <script src="js/bootstrap.min.js"></script>
    <!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.js"
></script>
</body>

</html>