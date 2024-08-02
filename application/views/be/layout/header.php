<div class="page-header">
    <!-- BEGIN HEADER TOP -->
    <div class="page-header-top">
        <div class="container">
            <!-- BEGIN LOGO -->
            <div class="page-logo" style='z-index: 1000;'>
                <a href="<?php echo base_url('');?>">                            
                    <img src="<?php echo base_url('assets/images/logo-black.png');?>" alt="logo" class="logo-default" style='width: 220px; margin-top: 0px;'>
                </a>
            </div>
            <!-- END LOGO -->
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a href="javascript:;" class="menu-toggler"></a>
            <!-- END RESPONSIVE MENU TOGGLER -->
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">                                                        
                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <li class="dropdown dropdown-user dropdown-dark">
                        <a href="<?php echo base_url('admin/logout');?>" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <img alt="" class="img-circle" src="<?php echo base_url('assets/layouts/global/img/avatar.jpg');?>">
                            <span class="username username-hide-mobile">Admin</span>
                        </a>                                
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->
                    <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                    <li class="dropdown-extended quick-sidebar-toggler">    
                        <a href="<?php echo base_url('admin/logout');?>" style="padding: 0px; font-size: 20px; color: #8ea3b6;">                   
                            <i class="icon-logout"></i>
                        </a>
                    </li>
                    <!-- END QUICK SIDEBAR TOGGLER -->
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
    </div>
    <!-- END HEADER TOP -->
    <!-- BEGIN HEADER MENU -->
    <div class="page-header-menu">
        <div class="container">                    
            <!-- BEGIN MEGA MENU -->
            <!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
            <!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->            
            <div class="hor-menu">                
                <ul class="nav navbar-nav">
                    <li class="menu-dropdown classic-menu-dropdown <?php echo ($parent == 'home' ? 'active' : '');?>">
                        <a href="javascript:;"> Home
                            <span class="arrow"></span>
                        </a>
                        <ul class="dropdown-menu pull-left">
                            <li class="<?php echo ($current == 'summary' ? 'active' : '');?>">
                                <a href="<?php echo base_url('admin/home/summary');?>" class="nav-link">Home Summary</a>
                            </li>
                            <li class="<?php echo ($current == 'services' ? 'active' : '');?>">
                                <a href="<?php echo base_url('admin/home/services');?>" class="nav-link">Services</a>
                            </li>                                    
                            <li class="<?php echo ($current == 'log' ? 'active' : '');?>">
                                <a href="<?php echo base_url('admin/home/log');?>" class="nav-link">Log</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-dropdown classic-menu-dropdown <?php echo ($parent == 'about-us' ? 'active' : '');?>">
                        <a href="javascript:;"> About Us </a> 
                        <ul class="dropdown-menu pull-left">
                            <li class="<?php echo ($current == 'summary' ? 'active' : '');?>">
                                <a href="<?php echo base_url('admin/about-us/summary');?>" class="nav-link">Summary</a>
                            </li>
                            <li class="<?php echo ($current == 'portfolios' ? 'active' : '');?>">
                                <a href="<?php echo base_url('admin/about-us/portfolios');?>" class="nav-link">Portfolios</a>
                            </li>
                            <li class="<?php echo ($current == 'clients' ? 'active' : '');?>">
                                <a href="<?php echo base_url('admin/about-us/clients');?>" class="nav-link">Clients</a>
                            </li>                                    
                        </ul>                               
                    </li>
                    <li class="menu-dropdown classic-menu-dropdown <?php echo ($parent == 'waste' ? 'active' : '');?>">
                        <a href="javascript:;"> Waste Management </a>
                        <ul class="dropdown-menu pull-left">
                            <li class="<?php echo ($current == 'summary' ? 'active' : '');?>">
                                <a href="<?php echo base_url('admin/waste-management/summary');?>" class="nav-link">Summary</a>
                            </li>
                            <li class="<?php echo ($current == 'portfolios' ? 'active' : '');?>">
                                <a href="<?php echo base_url('admin/waste-management/portfolios');?>" class="nav-link">Portfolios</a>
                            </li>
                            <li class="<?php echo ($current == 'services' ? 'active' : '');?>">
                                <a href="<?php echo base_url('admin/waste-management/services');?>" class="nav-link">Services</a>
                            </li>
                            <li class="<?php echo ($current == 'streams' ? 'active' : '');?>">
                                <a href="<?php echo base_url('admin/waste-management/streams');?>" class="nav-link">Waste Streams</a>
                            </li>                                    
                        </ul>  
                    </li>
                    <li class="menu-dropdown classic-menu-dropdown <?php echo ($parent == 'radiological' ? 'active' : '');?>">
                        <a href="javascript:;?>"> RADIOLOGICAL & HEALTH PHYSICS</a>
                        <ul class="dropdown-menu pull-left">
                            <li class="<?php echo ($current == 'summary' ? 'active' : '');?>">
                                <a href="<?php echo base_url('admin/radiological/summary');?>" class="nav-link">Summary</a>
                            </li>
                            <li class="<?php echo ($current == 'capabilities' ? 'active' : '');?>">
                                <a href="<?php echo base_url('admin/radiological/capabilities');?>" class="nav-link">Capabilities</a>
                            </li>
                        </ul>  
                    </li>
                    <li class="menu-dropdown classic-menu-dropdown <?php echo ($parent == 'norm' ? 'active' : '');?>">
                        <a href="javascript:;?>"> NORM & TENORM</a>
                        <ul class="dropdown-menu pull-left">
                            <li class="<?php echo ($current == 'summary' ? 'active' : '');?>">
                                <a href="<?php echo base_url('admin/norm/summary');?>" class="nav-link">Summary</a>
                            </li>
                            <li class="<?php echo ($current == 'capabilities' ? 'active' : '');?>">
                                <a href="<?php echo base_url('admin/norm/solutions');?>" class="nav-link">Solutions</a>
                            </li>
                        </ul>  
                    </li>
                    <li class="menu-dropdown classic-menu-dropdown <?php echo ($parent == 'resources' ? 'active' : '');?>">
                        <a href="<?php echo base_url('admin/resources');?>">Resources</a>
                    </li>
                    <li class="menu-dropdown classic-menu-dropdown <?php echo ($parent == 'career' ? 'active' : '');?>">
                        <a href="javascript:;?>"> Career</a>
                        <ul class="dropdown-menu pull-left">
                            <li class="<?php echo ($current == 'summary' ? 'active' : '');?>">
                                <a href="<?php echo base_url('admin/career/summary');?>" class="nav-link">Summary</a>
                            </li>
                            <li class="<?php echo ($current == 'benefits' ? 'active' : '');?>">
                                <a href="<?php echo base_url('admin/career/benefits');?>" class="nav-link">Benefits</a>
                            </li>
                            <li class="<?php echo ($current == 'jobs' ? 'active' : '');?>">
                                <a href="<?php echo base_url('admin/career/jobs');?>" class="nav-link">Jobs</a>
                            </li>
                        </ul>  
                    </li>
                    <li class="menu-dropdown classic-menu-dropdown <?php echo ($parent == 'contact-us' ? 'active' : '');?>">
                        <a href="<?php echo base_url('admin/contact-us');?>">Contact Us</a>
                    </li>
                </ul>
            </div>
            <!-- END MEGA MENU -->
        </div>
    </div>
    <!-- END HEADER MENU -->
</div>