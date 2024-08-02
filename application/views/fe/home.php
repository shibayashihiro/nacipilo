<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="generator" content="Gatsby 2.19.45">
    <title>Mixed and Radioactive Waste Brokerage, USA</title>
    <meta name="title" content="Systone Iterations" data-react-helmet="true">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>?<?php echo time(); ?>">
    <link rel='stylesheet' href="<?php echo base_url('assets/css/pages/home.css');?>?<?php echo time(); ?>">    
    <link rel="shortcut icon" href="<?php echo base_url('favicon.png');?>" />
</head>

<body>
    <div id='loading'></div>

    <div style='outline:none' tablindex='-1' class='page'>         
        <!-- HEADER BEGIN -->
        <?php 
            $menu['current'] = 'Home';
            $this->load->view('fe/layout/header', $menu);
        ?>
        <!-- HEADER END -->
        <div class='page-content'>
            <div class="home-header">           
                <div class="container">                                       
                    <h1 class="home__header--title">Radiological Services and<br>Mixed & Radioactive Waste Brokerage Provider</h1>
                    <h4 class="home__header--services">
                        We are the nation’s premier group of experts that provide a full-scope of services; including but not limited to, decontamination and MARSSIM decommissioning, mixed and LLR waste management, and radiological and health physics services.<br>
                    </h4>
                    <a class="home__header--scroll">
                        <br><p>Scroll down <br> to Learn More</p>
                        <div class="shape"></div>
                    </a>
                </div>
            </div>        

            <div class='fast-link'>
                <div class='container'>
                    <div class='row'>
                        <div class='col-md-4'>
                            <div class='card'>
                                <div class='logo'>
                                    <img src='<?php echo base_url("assets/images/radiological.jpg");?>'>
                                </div>
                                <div class='title'>Radiological & Health Physics</div>
                                <div class='content'><?php echo $Radiological;?></div>
                                <div class='read-more'>
                                    <a href="<?php echo base_url('radiological');?>">Know More</a>
                                </div>
                            </div>
                        </div>

                        <div class='col-md-4'>
                            <div class='card'>
                                <div class='logo'>
                                    <img src='<?php echo base_url("assets/images/waste-management.jpg");?>'>
                                </div>
                                <div class='title'>Waste Management</div>
                                <div class='content'><?php echo $Waste;?></div>
                                <div class='read-more'>
                                    <a href="<?php echo base_url('waste-management');?>">Know More</a>
                                </div>
                            </div>
                        </div>

                        <div class='col-md-4'>
                            <div class='card'>
                                <div class='logo'>
                                    <img src='<?php echo base_url("assets/images/download.png");?>'>
                                </div>
                                <div class='title'>NORM and TENORM</div>
                                <div class='content'><?php echo $Norm;?></div>
                                <div class='read-more'>
                                    <a href="<?php echo base_url('normtenorm');?>">Know More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class='why-us'>
                <div class='container'>
                    <div class='row'>
                        <div class='col-md-6'>
                            <div class='heading'>Why NAC Philotechnics</div>
                            <div class='heading-description'>We provide various services including: </div>
                        </div>
                        <div class='col-md-6'>
                            <div class='heading-content'>
                                <ul>
                                    <?php
                                        foreach ($services as $service)
                                        {
                                            echo "<li>".$service['Content']."</li>";
                                        }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class='our-client'>
                <div class='container'>
                    <div class='line-space'></div>
                    <div class='heading-description' style='color:white; text-align:center;'>Our Clients</div>                
                    <div class='line-space'></div>
                    <div class='see-all'>
                        <a href="<?php echo base_url('about-us');?>">Click here to see more of our clients</a>
                    </div>
                </div>
                <canvas id="canvas" style='height: 300px;'></canvas>
            </div>

            <!-- FOOTER BEGIN -->
            <?php $this->load->view('fe/layout/footer');?>
            <!-- FOOTER END -->

        </div>        
    </div>

    <!-- SCRIPTS BEGIN -->
    <?php $this->load->view('fe/layout/scripts');?>
    <script>
        var base_url = "<?php echo base_url();?>";        
        const Logos = <?php echo json_encode($clients);?>;
        var page_name = 'Home';
    </script>
    <script src="<?php echo base_url('assets/scripts/home.js'); ?>"></script>
    <!-- SCRIPTS END -->
</body>

</html>