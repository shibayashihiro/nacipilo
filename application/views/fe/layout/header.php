<header class='header'>
    <div class='container'>
        <div class='row'>
            <div class='col-6 logo'>
                <a href="<?php echo base_url();?>">
                    <img src='<?php echo base_url("assets/images/logo.svg");?>'>
                </a>
            </div>
            <div class='col-6 menu'>
                <button class="menu-trigger">
                    <img class='menu-image'
                        src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGlkPSJwcmVmaXhfX21lbnUiIHdpZHRoPSIzNi42MTUiIGhlaWdodD0iMjIuOTkyIiB2aWV3Qm94PSIwIDAgMzYuNjE1IDIyLjk5MiI+CiAgICA8ZGVmcz4KICAgICAgICA8c3R5bGU+CiAgICAgICAgICAgIC5wcmVmaXhfX2Nscy0xe2ZpbGw6IzBjMjM0Nn0KICAgICAgICA8L3N0eWxlPgogICAgPC9kZWZzPgogICAgPHBhdGggaWQ9InByZWZpeF9fUGF0aF8xIiBkPSJNMzUuMDg5IDEyNS43MTlIMS41MjZhMS41MjYgMS41MjYgMCAwIDEgMC0zLjA1MWgzMy41NjNhMS41MjYgMS41MjYgMCAxIDEgMCAzLjA1MXptMCAwIiBjbGFzcz0icHJlZml4X19jbHMtMSIgZGF0YS1uYW1lPSJQYXRoIDEiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDAgLTExMi42OTcpIi8+CiAgICA8cGF0aCBpZD0icHJlZml4X19QYXRoXzIiIGQ9Ik0zNS4wODkgMy4wNTFIMS41MjZhMS41MjYgMS41MjYgMCAwIDEgMC0zLjA1MWgzMy41NjNhMS41MjYgMS41MjYgMCAxIDEgMCAzLjA1MXptMCAwIiBjbGFzcz0icHJlZml4X19jbHMtMSIgZGF0YS1uYW1lPSJQYXRoIDIiLz4KICAgIDxwYXRoIGlkPSJwcmVmaXhfX1BhdGhfMyIgZD0iTTM1LjA4OSAyNDguMzgzSDEuNTI2YTEuNTI2IDEuNTI2IDAgMCAxIDAtMy4wNTFoMzMuNTYzYTEuNTI2IDEuNTI2IDAgMSAxIDAgMy4wNTF6bTAgMCIgY2xhc3M9InByZWZpeF9fY2xzLTEiIGRhdGEtbmFtZT0iUGF0aCAzIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgwIC0yMjUuMzkxKSIvPgo8L3N2Zz4K"
                        alt="menu">
                </button>
            </div>
        </div>
    </div>
    <nav class="navigation">
        <div class='container'>
            <div class='row'>
                <div class='col-6 logo'>
                    <img src='<?php echo base_url("assets/images/logo.svg");?>'>
                </div>
                <div class='col-6 menu'>
                    <button class="navigation_close">
                        <img
                            src="<?php echo base_url('assets/images/close-icon.png');?>"
                            alt="close">
                    </button>
                </div>
            </div>
            <div class='row navigation-detail'>
                <div class='col-md-4 contact-info'>
                    <div class='address'><br></div>
                    <div class='phone'><br></div>
                </div>
                <div class='col-md-8'>
                    <div class="navigation_menu">
                        <ul>
                            <li class="<?php echo ($current == 'Home' ? 'active' : '');?>"><a href="<?php echo base_url('');?>">Home</a></li>
                            <li class="<?php echo ($current == 'AboutUs' ? 'active' : '');?>"><a href="<?php echo base_url('about-us');?>">About Us</a></li>
                            <li class="<?php echo ($current == 'WasteManagement' ? 'active' : '');?>"><a href="<?php echo base_url('waste-management');?>">Waste Management</a></li>
                            <li class="<?php echo ($current == 'RAD' ? 'active' : '');?>"><a href="<?php echo base_url('radiological');?>">RAD & Health Physics</a></li>
                            <li class="<?php echo ($current == 'Tech' ? 'active' : '');?>"><a href="<?php echo base_url('technology');?>">Technology & Innovation</a></li>
                            <li class="<?php echo ($current == 'NORM' ? 'active' : '');?>"><a href="<?php echo base_url('normtenorm');?>">NORM & TENORM</a></li>
                            <li class="<?php echo ($current == 'Resource' ? 'active' : '');?>"><a href="<?php echo base_url('resource');?>">Resources</a></li>
                            <li class="<?php echo ($current == 'Career' ? 'active' : '');?>"><a href="<?php echo base_url('careers');?>">Careers</a></li>
                            <li class="<?php echo ($current == 'ContactUs' ? 'active' : '');?>"><a href="<?php echo base_url('contact-us');?>">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class='navigation-footer'>
                Copyright© 2024 by NAC Philotechnics, Ltd. All rights reserved.
            </div>
        </div>
    </nav>
</header>
