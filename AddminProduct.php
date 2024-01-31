<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
</head>

<body class=" bg-body-secondary">

    <div class="container-fluid  justify-content-center">

        <div class="row">


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
                            
                            <div class="container-fluid  justify-content-center">

                                <div class="row">

                                    <div class="col-lg-12 grid-margin stretch-card mt-2">

                                        <!--serach Bar --->
                                        <div class="col-12 col-lg-6 offset-lg-2 mt-5 ">
                                            <div class="row">
                                                <form class="d-flex" role="search">
                                                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                                    <button class="btn btn-outline-success" type="submit">Search</button>
                                                </form>
                                            </div>

                                        </div>


                                        <!--serach Bar --->

                                        <div class="card mt-5">
                                            <div class="card-body mt-5">
                                                <h4 class="card-title">Product Manage</h4>

                                                </p>
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th> Image </th>
                                                            <th> Product name </th>
                                                            <th> Categorey </th>
                                                            <th> Price </th>
                                                            <th> Color </th>
                                                            <th>
                                                              Status
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="py-1">
                                                                <img src="../../assets/images/faces-clipart/pic-1.png" alt="image" />
                                                            </td>
                                                            <td> Herman Beck </td>
                                                            <td>
                                                                <div class="progress">
                                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                            <td> $ 77.99 </td>
                                                            <td> May 15, 2015 </td>
                                                            <td>  <button class=" btn btn-success" >Active</button></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="py-1  ">
                                                                <img src="../../assets/images/faces-clipart/pic-2.png" alt="image" />
                                                            </td>
                                                            <td> Messsy Adam </td>
                                                            <td>
                                                                <div class="progress">
                                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                            <td> $245.30 </td>
                                                            <td> July 1, 2015 </td>
                                                            <td>  <button class=" btn btn-success" >Active</button></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="py-1">
                                                                <img src="../../assets/images/faces-clipart/pic-3.png" alt="image" />
                                                            </td>
                                                            <td> John Richards </td>
                                                            <td>
                                                                <div class="progress">
                                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                            <td> $138.00 </td>
                                                            <td> Apr 12, 2015 </td>
                                                            <td>  <button class=" btn btn-success" >Active</button></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="py-1">
                                                                <img src="../../assets/images/faces-clipart/pic-4.png" alt="image" />
                                                            </td>
                                                            <td> Peter Meggik </td>
                                                            <td>
                                                                <div class="progress">
                                                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                            <td> $ 77.99 </td>
                                                            <td> May 15, 2015 </td>
                                                            <td>  <button class=" btn btn-success" >Active</button></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="py-1">
                                                                <img src="../../assets/images/faces-clipart/pic-1.png" alt="image" />
                                                            </td>
                                                            <td> Edward </td>
                                                            <td>
                                                                <div class="progress">
                                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                            <td> $ 160.25 </td>
                                                            <td> May 03, 2015 </td>
                                                            <td>  <button class=" btn btn-success" >Active</button></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="py-1">
                                                                <img src="../../assets/images/faces-clipart/pic-2.png" alt="image" />
                                                            </td>
                                                            <td> John Doe </td>
                                                            <td>
                                                                <div class="progress">
                                                                    <div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                            <td> $ 123.21 </td>
                                                            <td> April 05, 2015 </td>
                                                            <td>  <button class=" btn btn-success" >Active</button></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="py-1">
                                                                <img src="../../assets/images/faces-clipart/pic-3.png" alt="image" />
                                                            </td>
                                                            <td> Henry Tom </td>
                                                            <td>
                                                                <div class="progress">
                                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                            <td> $ 150.00 </td>
                                                            <td> June 16, 2015 </td>
                                                            <td>  <button class=" btn btn-success" >Active</button></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!--pagination-->

                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination justify-content-end">
                                                <li class="page-item disabled">
                                                    <a class="page-link">Previous</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">Next</a>
                                                </li>
                                            </ul>
                                        </nav>
                                        <!--pagination-->

                                    </div>


                                </div>


                            </div>


                        </div>

                    </div>

                </div>
            </div>
        </div>


    </div>
    <script src="js/bootstrap.min.js"></script>
    <script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.js"
></script>
</body>


</html>