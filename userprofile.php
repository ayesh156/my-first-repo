

<!DOCTYPE html>

<html>

<head>
    <title>eShop|User Profile</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="resources/logo.svg" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
  
   
</head>

<body class="bg-primary">

    

        <div class="container-fluid bg-white rounded mt-4 mb-4">
            <div class="row">
                <div class="col-md-3 border-end">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                        
                            <img class="rounded mt-5" width="150px" src="resourse/img/profile.png" />
                        
                        <span class="font-weight-bold"></span>
                        <span class="text-black-50"> </span>
                        <input class="d-none" type="file" id="profileimg" accept="img/*" />
                        <label class="btn btn-primary mt-3" for="profileimg">Update Profile Image</label>
                    </div>
                </div>
                <div class="col-md-5 border-end">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4>Profile Settings</h4>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <label class="form-label">Name</label>
                                <input type="text" id="fname" class="form-control" placeholder="first name"  />
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Surname</label>
                                <input type="text" id="lname" class="form-control" placeholder="last name" />
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12 mb-3">
                                <label class="form-label">Mobile Number</label>
                                <input type="text" id="mobile" class="form-control" placeholder="enter phone number" />
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="form-label">Password</label>
                                <input type="text" id="password" class="form-control" placeholder="enter password"  />
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="form-label">Email Address</label>
                                <input type="text" id="email" class="form-control" placeholder="enter email id"  />
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="form-label">Registered Date</label>
                                <input type="text" class="form-control" placeholder="registerd date" />
                            </div>

                            
                                <div class="col-md-12 mb-3">
                                    <label class="form-label">Address Line 01</label>
                                    <input type="text" id="line1" class="form-control" placeholder="enter address line 01"  />
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label class="form-label">Address Line 02</label>
                                    <input type="text" id="line2" class="form-control" placeholder="enter address line 02" value="" />
                                </div>

                                <div class="col-md-6">



                                


                                    <label class="form-label">Province</label>
                                    
                                    <div class="col-12 mb-3">
                                        <select class="form-select" id="pro">
                                            <option ></option></option>
                                            
                                                <option ></option>
                                           
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">District</label>
                                    <div class="col-12 mb-3">
                                        <select class="form-select" id="dis">
                                            <option ></option>
                                           
                                                <option ></option>
                                            
                                        </select>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <label class="form-label">City</label>
                                        <div class="col-12 mb-3">
                                            <select class="form-select" id="city">
                                                <option ></option>
                                                
                                                    <option ></option>
                                             
                                                

                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label ms-3">Postal Code</label>
                                        <input type="text" id="ps_code" class="form-control ms-3" placeholder="Enter Your Postal Code"  />
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Gender</label>

                                        

                                        <input type="text" class="form-control" placeholder="gender" >
                                    </div>

                                </div>
                            
                           

                            <div class="mt-3 text-center">
                                <button class="btn btn-primary">Update Profile</button>
                            </div>
                        </div>
                    </div>
                </div>





            <div class="col-md-4">
                <div class="p-3 py-5">
                    <div class="col-md-12">
                        <span class="header">User Rating</span>
                        <span class="fa fa-star fs-4 text-warning"></span>
                        <span class="fa fa-star fs-4 text-warning"></span>
                        <span class="fa fa-star fs-4 text-warning"></span>
                        <span class="fa fa-star fs-4 text-warning"></span>
                        <span class="fa fa-star fs-4 text-black-50"></span>
                        <p>4.1 average based on 254 reviews.</p>
                        <hr class="hrbreak1" />
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 side">
                                <span>5 Star</span>
                            </div>
                            <div class="col-12">
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-12 text-end">
                                <span>150</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 side">
                                <span>4 Star</span>
                            </div>
                            <div class="col-12">
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-12 text-end">
                                <span>63</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 side">
                                <span>3 Star</span>
                            </div>
                            <div class="col-12">
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 15%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-12 text-end">
                                <span>15</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 side">
                                <span>2 Star</span>
                            </div>
                            <div class="col-12">
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 5%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-12 text-end">
                                <span>6</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 side">
                                <span>1 Star</span>
                            </div>
                            <div class="col-12">
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 30%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-12 text-end">
                                <span>20</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <hr class="hr-break-1"/>
            <!-- footer -->
            
            <!-- footer -->
            </div>
        </div>


        
        <script src="js/bootstrap.min.js"></script>
        
</body>

</html>