<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.css" rel="stylesheet" />




  <title>Dashbord</title>
</head>

<body class=" bg-body-secondary">

  <div class="container-fluid  justify-content-center">

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

              <section style="background-color: #eee;">
                <div class="container py-5">

                  <div class="row">

                    <div class="col-md-6 col-lg-5 col-xl-4 mb-4 mb-md-0">

                      <h5 class="font-weight-bold mb-3 text-center text-lg-start">Member</h5>

                      <div class="card">
                        <div class="card-body">

                          <ul class="list-unstyled mb-0">
                            <li class="p-2 border-bottom" style="background-color: #eee;">
                              <a href="#!" class="d-flex justify-content-between">
                                <div class="d-flex flex-row">
                                  <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-8.webp" alt="avatar" class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                                  <div class="pt-1">
                                    <p class="fw-bold mb-0">John Doe</p>
                                    <p class="small text-muted">Hello, Are you there?</p>
                                  </div>
                                </div>
                                <div class="pt-1">
                                  <p class="small text-muted mb-1">Just now</p>
                                  <span class="badge bg-danger float-end">1</span>
                                </div>
                              </a>
                            </li>
                            <li class="p-2 border-bottom">
                              <a href="#!" class="d-flex justify-content-between">
                                <div class="d-flex flex-row">
                                  <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-1.webp" alt="avatar" class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                                  <div class="pt-1">
                                    <p class="fw-bold mb-0">Danny Smith</p>
                                    <p class="small text-muted">Lorem ipsum dolor sit.</p>
                                  </div>
                                </div>
                                <div class="pt-1">
                                  <p class="small text-muted mb-1">5 mins ago</p>
                                </div>
                              </a>
                            </li>
                            <li class="p-2 border-bottom">
                              <a href="#!" class="d-flex justify-content-between">
                                <div class="d-flex flex-row">
                                  <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-2.webp" alt="avatar" class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                                  <div class="pt-1">
                                    <p class="fw-bold mb-0">Alex Steward</p>
                                    <p class="small text-muted">Lorem ipsum dolor sit.</p>
                                  </div>
                                </div>
                                <div class="pt-1">
                                  <p class="small text-muted mb-1">Yesterday</p>
                                </div>
                              </a>
                            </li>
                            <li class="p-2 border-bottom">
                              <a href="#!" class="d-flex justify-content-between">
                                <div class="d-flex flex-row">
                                  <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-3.webp" alt="avatar" class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                                  <div class="pt-1">
                                    <p class="fw-bold mb-0">Ashley Olsen</p>
                                    <p class="small text-muted">Lorem ipsum dolor sit.</p>
                                  </div>
                                </div>
                                <div class="pt-1">
                                  <p class="small text-muted mb-1">Yesterday</p>
                                </div>
                              </a>
                            </li>
                            <li class="p-2 border-bottom">
                              <a href="#!" class="d-flex justify-content-between">
                                <div class="d-flex flex-row">
                                  <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-4.webp" alt="avatar" class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                                  <div class="pt-1">
                                    <p class="fw-bold mb-0">Kate Moss</p>
                                    <p class="small text-muted">Lorem ipsum dolor sit.</p>
                                  </div>
                                </div>
                                <div class="pt-1">
                                  <p class="small text-muted mb-1">Yesterday</p>
                                </div>
                              </a>
                            </li>
                            <li class="p-2 border-bottom">
                              <a href="#!" class="d-flex justify-content-between">
                                <div class="d-flex flex-row">
                                  <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-5.webp" alt="avatar" class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                                  <div class="pt-1">
                                    <p class="fw-bold mb-0">Lara Croft</p>
                                    <p class="small text-muted">Lorem ipsum dolor sit.</p>
                                  </div>
                                </div>
                                <div class="pt-1">
                                  <p class="small text-muted mb-1">Yesterday</p>
                                </div>
                              </a>
                            </li>
                            <li class="p-2">
                              <a href="#!" class="d-flex justify-content-between">
                                <div class="d-flex flex-row">
                                  <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp" alt="avatar" class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                                  <div class="pt-1">
                                    <p class="fw-bold mb-0">Brad Pitt</p>
                                    <p class="small text-muted">Lorem ipsum dolor sit.</p>
                                  </div>
                                </div>
                                <div class="pt-1">
                                  <p class="small text-muted mb-1">5 mins ago</p>
                                  <span class="text-muted float-end"><i class="fas fa-check" aria-hidden="true"></i></span>
                                </div>
                              </a>
                            </li>
                          </ul>

                        </div>
                      </div>

                    </div>

                    <div class="col-md-6 col-lg-7 col-xl-8">

                      <ul class="list-unstyled">
                        <li class="d-flex justify-content-between mb-4">
                          <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp" alt="avatar" class="rounded-circle d-flex align-self-start me-3 shadow-1-strong" width="60">
                          <div class="card">
                            <div class="card-header d-flex justify-content-between p-3">
                              <p class="fw-bold mb-0">Brad Pitt</p>
                              <p class="text-muted small mb-0"><i class="far fa-clock"></i> 12 mins ago</p>
                            </div>
                            <div class="card-body">
                              <p class="mb-0">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua.
                              </p>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex justify-content-between mb-4">
                          <div class="card w-100">
                            <div class="card-header d-flex justify-content-between p-3">
                              <p class="fw-bold mb-0">Lara Croft</p>
                              <p class="text-muted small mb-0"><i class="far fa-clock"></i> 13 mins ago</p>
                            </div>
                            <div class="card-body">
                              <p class="mb-0">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium.
                              </p>
                            </div>
                          </div>
                          <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-5.webp" alt="avatar" class="rounded-circle d-flex align-self-start ms-3 shadow-1-strong" width="60">
                        </li>
                        <li class="d-flex justify-content-between mb-4">
                          <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp" alt="avatar" class="rounded-circle d-flex align-self-start me-3 shadow-1-strong" width="60">
                          <div class="card">
                            <div class="card-header d-flex justify-content-between p-3">
                              <p class="fw-bold mb-0">Brad Pitt</p>
                              <p class="text-muted small mb-0"><i class="far fa-clock"></i> 10 mins ago</p>
                            </div>
                            <div class="card-body">
                              <p class="mb-0">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua.
                              </p>
                            </div>
                          </div>
                        </li>
                        <li class="bg-white mb-3">
                          <div class="form-outline">
                            <textarea class="form-control" id="textAreaExample2" rows="4"></textarea>
                            <label class="form-label" for="textAreaExample2">Message</label>
                          </div>
                        </li>
                        <button type="button" class="btn btn-info btn-rounded float-end">Send</button>
                      </ul>

                    </div>

                  </div>

                </div>
              </section>



            </div>

          </div>

        </div>
      </div>
    </div>


  </div>
  <script src="js/bootstrap.min.js"></script>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.js"></script>
</body>

</html>