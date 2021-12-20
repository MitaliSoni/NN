<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Time table</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link href="style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="jquery-3.5.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- jquery Ui -->
     <link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">  
      <script src="https://code.jquery.com/jquery-1.10.2.js"></script>  
      <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script> 

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
               
                <div class="navbar-collapse collapse" style="background-color:rgba(63,187,192,255) ; z-index: 0;" id="navbarSupportedContent" data-navbarbg="skin5">
                    
                 
                    <ul class="navbar-nav me-auto mt-md-0 ">
                      

                        <li class="nav-item hidden-sm-down">
                             <!-- <i class="me-3 fa fa-user" aria-hidden="true"></i> -->
                             <span
                                    class="hide-menu" style="color:white;font-size: 20px; padding-left: 30px;">Time Table</span></a>
                        </li>
                    </ul>

                  
                   <ul class="navbar-nav">
                     
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="profile.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
                                 <a href="completed_services.php" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#moneyModal">1500 Rs.
                            </a>
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
                        <li class="sidebar-item" > <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="profile.php" aria-expanded="false">
                                <i class="me-3 fa fa-user" aria-hidden="true"></i><span
                                    class="hide-menu">Profile</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="cert.php" aria-expanded="false"><i class="me-3 fa fa-certificate"
                                    aria-hidden="true"></i><span class="hide-menu">Certificates</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="exp.php" aria-expanded="false"><i class="me-3 fa fa-building" aria-hidden="true"></i><span class="hide-menu">Experience</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="location.php" aria-expanded="false" ><i class="me-3 fa fa-globe" 
                                    aria-hidden="true"></i><span class="hide-menu">Locations</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="time.php" aria-expanded="false"><i class="me-3 fa fa-columns" style="color:rgba(63,187,192,255) ;"
                                    aria-hidden="true"></i><span class="hide-menu" style="color:rgba(63,187,192,255) ;">Timing</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="service.php" aria-expanded="false"><i class="me-3 fa fa-info-circle" 
                                    aria-hidden="true"></i><span class="hide-menu" >Services</span></a></li> 

                        
                          <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="accepted_services.php" aria-expanded="false"><i class="me-3 fa fa-check"
                                    aria-hidden="true"></i><span class="hide-menu">Accepted Services</span></a></li> 

                         <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="completed_services.php" aria-expanded="false"><i class="me-3 fa fa-check-circle"
                                    aria-hidden="true"></i><span class="hide-menu">Completed Services</span></a></li> 


                        <li class="text-center p-20 upgrade-btn">
                            <a href="https://www.wrappixel.com/templates/monsteradmin/"
                                class="btn text-white mt-4" target="_blank" style="background-color:rgba(63,187,192,255) ">Log Out</a>
                        </li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        
        <div class="page-wrapper">
            <div class="container-fluid">          
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body"><br>
                                <form class="form-horizontal form-material mx-2">
                                    <div class="form-group">
                                        <label>Weekly Schedule</label><br>
                                        <span style="font-size:14px;color: red;">You can only update for next 10 days only</span>
                                    </div>

                                    <div class="form-group">
                                        <label>From</label>
                                        <input type="text" class="form-control" id="from" style="">
                                    </div>

                                    <div class="form-group">
                                        <label>To</label>
                                        <input type="text" class="form-control" id="to">
                                    </div>

                                    <div class="form-group">
                                             <button type="button" class="btn btn-success mx-4 me-md-3 text-white" style="background-color:rgba(63,187,192,255); border:0px" onclick="funEna()">Update </button>                                           
                                    </div>

    <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Remove location</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body" style="font-size:17px;">
                Are you sure yopu want to update timming details ?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Yes</button>
                <button type="button" class="btn" style="background-color:rgba(63,187,192,255) ;">No</button>
              </div>
            </div>
          </div>
        </div>  

                    <fieldset disabled id="time"> 
                        <div class="form-group">
                           <table class="table" id="tabel">
                                  <thead style="background-color:rgba(63,187,192,255); color:white">
                                    <tr id="tabelth" >
                                      <th scope="col">Timing</th>
                                      <th scope="col">Mon</th>
                                      <th scope="col">Tue</th>
                                      <th scope="col">Wed</th>
                                      <th scope="col">Thu</th>
                                      <th scope="col">Fri</th>
                                      <th scope="col">Sat</th>
                                      <th scope="col">Sun</th>                          
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <th scope="row">07:00 To 08:00</th>
                                        <td>
                                          <input type="checkbox" name="mon[]" value="7">
                                        </td>
                                        <td>
                                          <input type="checkbox" name="tue[]" value="7">
                                        </td>
                                        <td>
                                          <input type="checkbox" name="wed[]" value="7">
                                        </td>
                                        <td>
                                          <input type="checkbox" name="thu[]" value="7">
                                        </td>
                                        <td>
                                          <input type="checkbox" name="fri[]" value="7">
                                        </td>
                                        <td>
                                          <input type="checkbox" name="sat[]" value="7">
                                        </td>
                                        <td>
                                          <input type="checkbox" name="sun[]" value="7">
                                        </td>
                                    </tr>

                                        <?php
                                              echo  rows(8);
                                              echo  rows(9);
                                              echo  rows(10);
                                              echo  rows(11);
                                              echo  rows(12);
                                              echo  rows(13);
                                              echo  rows(14);
                                              echo  rows(15);
                                              echo  rows(16);
                                              echo  rows(17);
                                              echo  rows(18);
                                              echo  rows(19);
                                              echo  rows(20);
                                              echo  rows(21);
                                              
                                        ?>  

                                        <tr>
                                            <th scope="row" colspan="7">
                                                
                                            <div class="form-group">
                                             <button type="button" class="btn btn-success mx-4 me-md-3 text-white" style="background-color:rgba(63,187,192,255); border:0px" data-bs-toggle="modal" data-bs-target="#staticBackdrop" >Done </button>                                           
                                            </div> 
                                            </th>
                                        </tr>  
                                    </fieldset>      
                                </form>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
        </tbody>
    </table>

</div>
</body>
<script type="text/javascript">

    let from,to;

    function funEna(){
        document.getElementById('time').disabled=false;
        from=document.getElementById('from').value;
        to=document.getElementById('to').value;

        var f=new Date(from.slice(6,10),from.slice(3,5),from.slice(0,2));
        var t=new Date(to.slice(6,10),to.slice(3,5),to.slice(0,2));

        calcDate(f,t);
    }

     function calcDate(f,t){
         // To calculate the time difference of two dates
            var Difference_In_Time = t.getTime() - f.getTime() ;
              
            // To calculate the no. of days between two dates
            var Difference_In_Days = Difference_In_Time / (1000 * 3600 * 24);
              
            console.log(Difference_In_Days);    
    }


    $(function(){
        $('#from').datepicker({
            dateFormat:"dd-mm-yy",
            minDate:1,
            maxDate:10,
            onClose: function( selectedDate ) {
            $( "#to" ).datepicker( "option", "minDate", selectedDate );
            }
        });

        $('#to').datepicker({
            dateFormat:"dd-mm-yy",
            maxDate:10,
             onClose: function( selectedDate ) {
            $( "#from" ).datepicker( "option", "maxDate", selectedDate );
            }
        });

    });
</script>
<?php

    function rows($i){
        $j=$i+1;
       echo  $html="
             <tr>
                                              <th scope='row'>0$i:00 To $j:00</th>
                                                <td>
                                                  <input type='checkbox' name='mon[]' value=$i>
                                                </td>
                                                <td>
                                                  <input type='checkbox' name='tue[]' value=$i>
                                                </td>
                                                <td>
                                                  <input type='checkbox' name='wed[]' value=$i>
                                                </td>
                                                <td>
                                                  <input type='checkbox' name='thu[]' value=$i>
                                                </td>
                                                <td>
                                                  <input type='checkbox' name='fri[]' value=$i>
                                                </td>
                                                <td>
                                                  <input type='checkbox' name='sat[]' value=$i>
                                                </td>
                                                <td>
                                                  <input type='checkbox' name='sun[]' value=$i>
                                                </td>
                                            </tr>

        ";
    }

?>


</html>