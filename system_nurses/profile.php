<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Nurse Profile</title>
    <link href="../logo.jpeg" rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

    <style type="text/css">
        body{
            font-family: "Roboto", sans-serif;
            font-size: 13px;
            color: #626262;
            font-weight: 500;
        }


    </style>
</head>


<body>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
       
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                   
                    <a class="navbar-brand" href="../Medicio/index.html">
                        <b class="logo-icon text-danger">
                            <img src="../logo.jpeg" width="70" alt="homepage" class="dark-logo rounded-circle d-inline-block" style="border:2px solid rgba(63,187,192,255); ;" />
                            <span style="color:rgba(63,187,192,255); font-size: 16px;">Neighbouring Nurse</span>
                        </b>
                    </a>
                   
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
               
                <div class="navbar-collapse collapse" style="background-color:rgba(63,187,192,255) ;" id="navbarSupportedContent" data-navbarbg="skin5">
                    
                
                    <ul class="navbar-nav me-auto mt-md-0 ">
                   
                        <li class="nav-item hidden-sm-down">
                             <!-- <i class="me-3 fa fa-user" aria-hidden="true"></i> -->
                             <span
                                    class="hide-menu" style="color:white;font-size: 20px; padding-left: 30px;">Profile</span></a>
                        </li>
                    </ul>

                 
                    <ul class="navbar-nav">
                     
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="profile.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
                                <a href="completed_services.php" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#moneyModal">1500 Rs.
                            </a>
                            <ul class="dropdown-menu show" aria-labelledby="navbarDropdown"></ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
     
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" >
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" >
                        <!-- User Profile-->
                       <!--  <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="index.html" aria-expanded="false"><i class="me-3 far fa-clock fa-fw"
                                    aria-hidden="true"></i><span class="hide-menu">Dashboard</span></a></li> -->
                        <li class="sidebar-item" > <a class="sidebar-link waves-effect waves-dark sidebar-link" style="color:rgba(63,187,192,255) ;"
                                href="profile.php" aria-expanded="false">
                                <i class="me-3 fa fa-user" aria-hidden="true" style="color:rgba(63,187,192,255) ;"></i><span
                                    class="hide-menu">Profile</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="cert.php" aria-expanded="false"><i class="me-3 fa fa-certificate"
                                    aria-hidden="true"></i><span class="hide-menu">Certificates</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="exp.php" aria-expanded="false"><i class="me-3 fa fa-building" aria-hidden="true"></i><span class="hide-menu">Experience</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="location.php" aria-expanded="false"><i class="me-3 fa fa-globe"
                                    aria-hidden="true"></i><span class="hide-menu">Locations</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="time.php" aria-expanded="false"><i class="me-3 fa fa-columns"
                                    aria-hidden="true"></i><span class="hide-menu">Timing</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="service.php" aria-expanded="false"><i class="me-3 fa fa-info-circle"
                                    aria-hidden="true"></i><span class="hide-menu">Services</span></a></li> 

                          <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="accepted_services.php" aria-expanded="false"><i class="me-3 fa fa-check"
                                    aria-hidden="true"></i><span class="hide-menu">Accepted Services</span></a></li> 

                         <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="completed_services.php" aria-expanded="false"><i class="me-3 fa fa-check-circle"
                                    aria-hidden="true"></i><span class="hide-menu">Completed Services</span></a></li> 

                        <li class="text-center p-20 upgrade-btn">
                            <a href="../Medicio/index.html"
                                class="btn text-white mt-4" target="_blank" style="background-color:rgba(63,187,192,255) ">Log Out</a>
                        </li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
      
        <div class="page-wrapper">

            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0">Profile</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-6 col-4 align-self-center">
                        <div class="text-end upgrade-btn">
                            <a href="https://www.wrappixel.com/templates/monsteradmin/"
                                class="btn btn-success d-none d-md-inline-block text-white" target="_blank">Upgrade to
                                Pro</a>
                        </div>
                    </div>
                </div>
            </div> -->
           
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body profile-card">
                                <center class="mt-4"> <img src="../profile.PNG"
                                        class="rounded-circle" width="150" />
                                    <h4 class="card-title mt-2">Himani Trivedi</h4>
                                    <h6 class="card-subtitle">Female Nurse</h6>
                                    <div class="row justify-content-center">
                                        <div class="col-4">
                                            <a href="Aim4.pdf" target="_blank" class="link">
                                               <i class="fa fa-certificate"></i>
                                                <span class="font-normal">RN Certificate</span>
                                            </a></div>
                                        <!-- <div class="col-4">
                                            <a href="javascript:void(0)" class="link">
                                                <i class="icon-picture" aria-hidden="true"></i>
                                                <span class="font-normal">54</span>
                                            </a></div>
                                    </div> -->
                                </center>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2">
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Full Name</label>
                                        <div class="col-md-12">
                                            <input type="text" 
                                                class="form-control ps-0 form-control-line" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="email"
                                                class="form-control ps-0 form-control-line" name="example-email"
                                                id="example-email">
                                        </div>
                                    </div>
                                   <!--  <div class="form-group">
                                        <label class="col-md-12 mb-0">Password</label>
                                        <div class="col-md-12">
                                            <input type="password" 
                                                class="form-control ps-0 form-control-line">
                                        </div>
                                    </div> -->
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Phone No</label>
                                        <div class="col-md-12">
                                            <input type="text" 
                                                class="form-control ps-0 form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Bio</label>
                                        <div class="col-md-12">
                                            <textarea rows="5" class="form-control ps-0 form-control-line" style="resize:none;"></textarea>
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <div class="col-md-12">
                                            <label>Male</label>
                                            <input type="radio"  class="form-input" name="gender">
                                            <label>Female</label>                                          
                                            <input type="radio" class="form-input" name="gender">

                                        </div>
                                    </div>
                                   <!--  <div class="form-group">
                                        <label class="col-sm-12">Select Country</label>
                                        <div class="col-sm-12 border-bottom">
                                            <select class="form-select shadow-none border-0 ps-0 form-control-line">
                                                <option>London</option>
                                                <option>India</option>
                                                <option>Usa</option>
                                                <option>Canada</option>
                                                <option>Thailand</option>
                                            </select>
                                        </div>
                                    </div> -->
                                    <div class="form-group">
                                        <div class="col-sm-12 d-flex">
                                            <button class="btn btn-success mx-auto mx-md-0 text-white" style="background-color:rgba(63,187,192,255) ; border:0px">Update
                                                Profile</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
               
            </div>
           
            <footer class="footer text-center">
                ?? 2021 Neighboring Nurse <a href="../Medicio/index.html">NN.com</a>
            </footer>    
        </div>
    </div>

    <!-- Modal -->
        <div class="modal fade" id="moneyModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Earned Money</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body" style="font-size:17px;">
                    Do you want to withdraw money or delete account?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Delete</button>
                <button type="button" class="btn" style="background-color:rgba(63,187,192,255) ;">Withdraw</button>
              </div>
            </div>
          </div>
        </div>
</body>

</html>