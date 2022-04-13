
 <div class="topbar-wrap">
        <div class="topbar is-sticky">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <ul class="topbar-nav d-lg-none">
                        <li class="topbar-nav-item relative">
                            <a class="toggle-nav" href="#">
                                <div class="toggle-icon"><span class="toggle-line"></span><span class="toggle-line"></span><span class="toggle-line"></span><span
                                        class="toggle-line"></span></div>
                            </a>
                        </li>
                        <!-- .topbar-nav-item -->
                    </ul>
                    <!-- .topbar-nav -->
                    <a class="topbar-logo" href="" target="_blank" rel="noopener"><h4 class="text-white">User Server Validate - Admin Dashboard</h4></a>
                    <ul class="topbar-nav">
                        <li class="topbar-nav-item relative"><span class="user-welcome d-none d-lg-inline-block">Hello&nbsp;<?php if(isset($firstname) && isset($lastname)){echo $firstname."&nbsp;".$lastname;}?></span><a class="toggle-tigger user-thumb" href="#"><img src="<?php if(isset($profile_photo) && $profile_photo!==null){echo $profile_photo;}?>"><i class="fa fa--user"></i></a>
                            <div class="toggle-class dropdown-content dropdown-content-right dropdown-arrow-right user-dropdown dds">
                                
                                <ul class="user-links">
                 <li><a href="./edit-profile.php"><i class="fa fa-user"></i> Edit Profile</a>
                                    </li>
                <li><a href="./edit-profile.php"><i class="fa fa-key"></i> Reset Password</a>
                                    </li>
                                </ul>
                                <ul class="user-links bg-light">
                                    <li>
                                        <a href="../logout.php"><i class="fa fa-sign-out-alt"></i>&nbsp;Logout</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- .topbar-nav-item -->
                    </ul>
                    <!-- .topbar-nav -->
                </div>
            </div>
            <!-- .container -->
        </div>
        <!-- .topbar -->
        <div class="navbar">
            <div class="container">
                <div class="navbar-innr">
                    <ul class="navbar-menu">
                       <li><a href="view-admin.php"><span class="icon-s"><i class="fa fa-columns"></i>&nbsp;Dashboard</a></li>

                        <li><a href="wallet-transact.php"><i class="fa fa-wallet"></i>&nbsp;Wallet Records</a></li>
                         <li><a href="xchange-transact.php"><i class="fa fa-file-invoice-dollar"></i>&nbsp;Exchange Records</a></li>
                        
                        <li class="has-dropdown page-links-all">
                            <a class="drop-toggle" href="#"><i class="fa fa-users"></i>&nbsp;Users</a>
                            <ul class="navbar-dropdown">
                                <li><a class="p2pText" href="view-users.php">View Users</a></li>
                                 <li><a class="p2pText" href="add-users.php">Add User</a></li>
                            </ul>
                        </li>

                        <li class="has-dropdown page-links-all">
                            <a class="drop-toggle" href="#"><i class="fa fa-users"></i>&nbsp;Admins</a>
                            <ul class="navbar-dropdown">
                                <li><a class="p2pText" href="view-admin.php">View Admins</a></li>
                                 <li><a class="p2pText" href="add-admin.php">Add Admin</a></li>
                            </ul>
                        </li>

                      <!--   <li class="has-dropdown page-links-all">
                            <a class="drop-toggle" href="#"><i class="fa fa-chart-area"></i>&nbsp;Account Requests</a>
                            <ul class="navbar-dropdown">
                               <li><a class="p2pText" href="funding-requests.php">Trade Requests</a></li>
                                 <li><a class="p2pText" href="transactions.php">Account Transactions</a></li> 
                            </ul>
                        </li> -->

                        <!-- <li><a href="addresses.php"><i class="fa fa-file-invoice-dollar"></i> Addresses</a></li> -->
                      <!--   <li><a href="#" data-toggle="modal" data-target="#withdrawal-modal"><i class="fa fa-hand-holding-usd"></i> Withdrawal</a></li> -->

                      <li><a href="./edit-profile.php"><span class="icon-s"><i class="fa fa-user"></i>&nbsp;Edit Profile</a></li>

                         <li><a href="../logout.php"><i class="fa fa-sign-out-alt"></i>&nbsp;Logout</a></li>
                    </ul>
                    <!-- <ul class="navbar-btns">
                        <li>
                            <a href="#" data-toggle="modal" data-target="#crypto-fund-modal" class="btn btn-sm btn-outline btn-light">
                                <span class="icon-s"><i data-feather="file"></i></span>
                                <span>Fund Account</span>
                            </a>
                        </li>
                    </ul> -->
                </div>
                <!-- .navbar-innr -->
            </div>
            <!-- .container -->
        </div>
        <!-- .navbar -->
    </div>
   