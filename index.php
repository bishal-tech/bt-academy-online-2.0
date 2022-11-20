<!doctype html>
<html lang="en">

<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
     <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="assets/style.css">
     <title>Admission System</title>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
     <nav class="navbar navbar-expand-lg bg-light">
          <div class="container-fluid">
               <a class="navbar-brand mr-auto" href="#">
                    <img src="assets/img/logo.png" alt="Bootstrap" width="80" height="40">
               </a>
               <ul class="navbar-nav mb-lg-0">
                    <li class="nav-item">
                         <a class="nav-link" href="#">
                              Welcome <span class="fw-bold">Student</span>
                         </a>
                    </li>
               </ul>
          </div>
     </nav>

     <div class="container mt-5">
          <div class="row">
               <div class="col-8 d-none d-md-block">
                    <img src="assets/img/bg.svg" class="img-fluid" alt="">
                    <!-- <div class="card bg-light text-left">
                    <div class="card-header bg-primary">
                        <h5 class="mt-2 text-light">IMPORTANT INSTRUCTIONS TO CANDIDATES BEFORE APPLYING ONLINE</h5>
                    </div>
                    <div class="card-body">
                        <h2>UG Online Admission</h2>
                        <br>
                        <br>
                        <p><strong>
                                <h3><u>Helpdesk Phone:</u></h3>
                            </strong></p>
                        <br>
                        <p><strong class="text-danger">03340586378 / 8584824065 / 06292218758</strong></p>
                        <p><strong>Report a grievance Email: <p class="text-danger">openuniversity@gmail.com</p>
                            </strong></p>
                    </div>
                </div> -->
               </div>
               <div class="col-md-4">
                    <div class="card">
                         <div class="card-header text-center">
                              <h5>Applicant Login</h5>
                         </div>
                         <div class="card-body text-center">
                              <p>Existing user ?</p>
                              <!-- <strong>Welcome :</strong> <a href="" class="btn btn-success btn-sm">Go Dashboard</a> -->
                              <a href="#" class="btn btn-sm btn-info text-light" data-bs-toggle="modal" data-bs-target="#signin">Sign In</a>
                              <p>Forgot Password? <a href="#">Click Here</a></p>
                              <br>
                              <p>New user ?</p>
                              <a href="registration.php" class="btn btn-sm btn-primary">Registration</a>
                              <br>
                              <br>
                              <a href="account_activate.php" class="btn btn-sm btn-warning">Activate Your Account</a>
                         </div>
                    </div>
               </div>
          </div>
     </div>

     <!-- Modal -->
     <div class="modal fade" id="signin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog">
               <div class="modal-content">
                    <form action="" method="post">
                         <div class="modal-header">
                              <h5 class="modal-title" id="staticBackdropLabel">Applicant Sign In</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                         </div>
                         <div class="modal-body">
                              <div class="form-group">
                                   <label for="">Email Address<span class="text-danger">*</span></label>
                                   <input type="text" class="form-control" name="email" aria-describedby="helpId" placeholder="Email Address">
                                   <small class="form-text text-danger"></small>
                              </div>
                              <div class="form-group mt-4">
                                   <label for="">Password<span class="text-danger">*</span></label>
                                   <input type="password" class="form-control" name="password" id="" aria-describedby="helpId" placeholder="Password">
                                   <small class="form-text text-danger"></small>
                              </div>
                         </div>
                         <div class="modal-footer">
                              <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                              <a href="personal_details.php" class="btn btn-primary">Submit</a>
                         </div>
                    </form>
               </div>
          </div>
     </div>

</body>

</html>