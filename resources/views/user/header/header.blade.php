<header class="header_area">
    <div class="container-fluid d-flex">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a href="index.php" class="logo"><img src="img/vehicless.png" alt=""></a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="menu_toggle">
                    <span class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                    <span class="hamburger-cross">
                        <span></span>
                        <span></span>
                    </span>
                </span>
            </button>
            <img src="{{asset('assets/usercss/img/vehicless.png')}}">

             <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                <ul class="nav navbar-nav menu mr-auto">
                    <li class="nav-item dropdown submenu active">
                        <a class="nav-link dropdown-toggle" href="index.php" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Home
                        </a>
                       <!--  <ul class="dropdown-menu">
                            <li class="nav-item active"><a class="nav-link" href="index.html">Home V1</a></li>
                            <li class="nav-item"><a class="nav-link" href="index2.html">Home V2</a></li>
                        </ul> -->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="vehicleparking.php">Book Parking</a></li>
                   
                   <!--  <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="service.html">Service</a></li> -->
                   <!--  <li class="nav-item"><a class="nav-link" href="team.html">Team</a></li> -->
                   <!--  <li class="nav-item dropdown submenu">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        News
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="nav-link" href="blog.html">News</a></li>
                            <li class="nav-item"><a class="nav-link" href="blog-details.html">Single News</a></li>
                        </ul>
                    </li> -->
                    <li class="nav-item"><a class="nav-link" href="contact.html">Contacts</a></li>
                    <li class="nav-item"><a class="nav-link" href="help.php">Help</a></li>
                    
                    <?php 
                        if(isset($_SESSION['user_id']))
                        {
                            ?>
                    <li class="nav-item">
                        <a class="nav-link" href="Logout.php">Logout</a>
                    </li>
                    <?php
                        }
                       
                        else
                        {
                            ?>

                         <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <?php
                     }
                    ?>
                    
                    
                    <li class="nav-item">
                        <a class="nav-link" href="registreduser.php">Registration</a>
                    </li>

                   <!--    <li class="nav-item dropdown submenu active">
                     <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Edit Profile
                     </a>
                     <ul class="dropdown-menu">
                         <li class="nav-item active"><a class="nav-link" href="changepassword.php">Change Password</a></li>
                   
                         <li class="nav-item"><a class="nav-link" href="index2.html">Change User Name</a></li>
                          <li class="nav-item"><a class="nav-link" href="login.php">Log Out</a></li>
                     </ul>
                                           </li> -->

                </ul>

               
            </div>
        </nav>
        <div class="menu_btn">
            <div class="search_dropdown">
                <a href="#" class="search_btn"><i class="icon_search"></i></a>
                <div class="search">
                    <form action="#" method="get" class="search-form">
                        <div class="input-group">
                            <input type="search" class="form-control" placeholder="Search for">
                            <span class="input-group-addon">
                                <button type="submit"><i class="icon icon-Search"></i></button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
            <a href="#" class="book_btn">Near By Parking</a>
        </div>
    </div>
</header>