<?php require "connection/connect.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social NetWork</title>
    <link rel="stylesheet" href="assets/bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
    <script src="assets/js/jquery-3.6.0.js"></script>
    <script src="assets/bootstrap5/js/bootstrap.min.js"></script>
    <script src="assets/fontawesome/js/all.min.js"></script>
   
</head>

<body>
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Menu</span>
                </a>
                <ul class="nav  flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="#" class="nav-link align-middle px-0 text-warning">
                        <i class="fas fa-home"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link align-middle px-0 text-warning">
                        <i class="fas fa-home"></i> <span class="ms-1 d-none d-sm-inline">ประเภทร้านอาหาร</span>
                        </a>
                    </li>
                    <li>
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-warning">
                        <i class="fas fa-hamburger"></i> <span class="ms-1 d-none d-sm-inline">ร้านอาหาร</span> </a>
                        <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="#" class="nav-link px-0 text-warning"> <span class="d-none d-sm-inline">ผู้ใช้งาน</span>  </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0 text-warning"> <span class="d-none d-sm-inline">ข้อมูลร้านอาหาร</span>  </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-warning">
                        <i class="fas fa-user-secret"></i> <span class="ms-1 d-none d-sm-inline">ผู้ส่งอาหาร</span> </a>
                        <ul class="collapse show nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="#" class="nav-link px-0 text-warning"> <span class="d-none d-sm-inline">ผู้ใช้งาน</span>  </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0 text-warning"> <span class="d-none d-sm-inline">ข้อมูลผู้ส่งอาหาร</span>  </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-warning">
                        <i class="fas fa-users"></i> <span class="ms-1 d-none d-sm-inline">สมาชิก</span> </a>
                        <ul class="collapse show nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="#" class="nav-link px-0 text-warning"> <span class="d-none d-sm-inline">ผู้ใช้งาน</span>  </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0 text-warning"> <span class="d-none d-sm-inline">ข้อมูลสมาชิก</span>  </a>
                            </li>
                        </ul>
                    </li>                    
                    
                   
                </ul>
                <hr>               
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none ">                        
                    <i class="fas fa-sign-out-alt"></i><span class="d-none d-sm-inline mx-1">Logout</span>
                    </a>
               
            </div>
        </div>
        <div class="col py-3">
            <h3>Left Sidebar with Submenus</h3>
            <p class="lead">
                An example 2-level sidebar with collasible menu items. The menu functions like an "accordion" where only a single 
                menu is be open at a time. While the sidebar itself is not toggle-able, it does responsively shrink in width on smaller screens.</p>
            <ul class="list-unstyled">
                <li><h5>Responsive</h5> shrinks in width, hides text labels and collapses to icons only on mobile</li>
            </ul>
        </div>
    </div>
</div>
</body>

</html>