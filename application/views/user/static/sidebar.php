<div class="layout-main" >
    <div class="layout-sidebar" >
        <div class="layout-sidebar-backdrop" <!--style="background-color: #253449; color;#fff; "-->></div>
        <div class="layout-sidebar-body" >
            <div class="custom-scrollbar">
                <nav id="sidenav" class="sidenav-collapse collapse">
                    <ul class="sidenav">
                        <li class="sidenav-search hidden-md hidden-lg">
                            <form class="sidenav-form" action="http://demo.naksoid.com/">
                                <div class="form-group form-group-sm">
                                    <div class="input-with-icon">
                                        <input class="form-control" type="text" placeholder="Search…">
                                        <span class="icon icon-search input-icon"></span>
                                    </div>
                                </div>
                            </form>
                        </li>
                        <li class="sidenav-heading">Go to..</li>
                        <li class="sidenav-item has-subnav">
                            <a href="#" aria-haspopup="true">
                                <span class="sidenav-icon icon icon-user"></span>
                                <span class="sidenav-label">My Profile</span>
                            </a>

                        <ul class="sidenav-subnav collapse">
                            <li class="sidenav-subheading">Admin Menu</li>
                            <li><a href="<?php echo base_url().'user/picture'?>" >My Picture</a></li>
                            <li><a href="<?php echo base_url().'user/header'?>" >My Header</a></li>
                            <li><a href="<?php echo base_url().'user/about'?>" >About me</a></li>
                            <li><a href="<?php echo base_url().'user/education'?>" >My Education</a></li>
                            <li><a href="<?php echo base_url().'user/experience'?>" >My Experience</a></li>
                            <li><a href="<?php echo base_url().'user/awards'?>" >My Awards</a></li>
                            <li><a href="<?php echo base_url().'user/communities'?>" >My Communities</a></li>
                            <li><a href="<?php echo base_url().'user/hobbies'?>" >My Hobbies</a></li>
                            <li><a href="<?php echo base_url().'user/passion'?>" >My Passions</a></li>
                            <li><a href="<?php echo base_url().'user/gallery'?>" >My Gallery</a></li>

                        </ul>
                        </li>
                        <li class="sidenav-item has-subnav">
                            <a href="#" aria-haspopup="true">
                                <span class="sidenav-icon icon icon-cogs"></span>
                                <span class="sidenav-label">My Network</span>
                            </a>

                            <ul class="sidenav-subnav collapse">
                                <li><a href="<?php echo base_url().'user/referred_by'?>" >Referred By</a></li>
                                <li><a href="<?php echo base_url().'user/refers'?>" >My Refers </a></li>
                                <li><a href="<?php echo base_url().'user/updates'?>" >Updates</a></li>
                                <li><a href="<?php echo base_url().'user/network_id'?>" >Network ID</a></li>

                            </ul>
                        </li>
                        <li class="sidenav-item ">
                            <a href="<?php echo base_url().'user/earnings'?>" aria-haspopup="true">
                                <span class="sidenav-icon icon icon-money"></span>
                                <span class="sidenav-label">My Earnings</span>
                            </a>

                        </li>
                        <li class="sidenav-item has-subnav">
                            <a href="#" aria-haspopup="true">
                                <span class="sidenav-icon icon icon-wrench"></span>
                                <span class="sidenav-label">My Account</span>
                            </a>

                            <ul class="sidenav-subnav collapse">
                                <li><a href="<?php echo base_url().'user/change_password'?>" >Change Password</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
