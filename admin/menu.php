<nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center user-image-back">
                        <img src="assets/img/primecore.png" class="img-responsive" />
                     
                    </li>


                    <li>
                        <a href="admin1.php"><i class="fa fa-desktop "></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-user"></i>Profile<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                              <a href="profile.php"><i class="fa fa-user"></i>View Profile</a>
                            </li>
                            <li>
                                <a href="update.php?id=<?php echo $row['ID']?>"><i class="fa fa-user"></i>Update Profile</a>
                            </li>
                            <li>
                               <a href="changepass.php"><i class="fa fa-gear fa-fw"></i>Change Password</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="laptop_reg.php"><i class="fa fa-edit"></i>Register Product</a>
                    </li>
                     <li>
                        <a href="veiw.php"><i class="fa fa-eye"></i>View Products</a>
                    </li>
                    <li>
                  <!--      <a href="#"><i class="fa fa-sitemap "></i>Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>

                                </ul>

                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-qrcode "></i>Tabs & Panels</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o"></i>Mettis Charts</a>
                    </li>
                    <li>
                        <a href="blank.html"><i class="fa fa-table "></i>Blank Page</a>
                    </li>-->
                </ul>

            </div>

        </nav>


   <?php
include('footer.php');
?>     
   
