<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="generator" content="Gatsby 2.19.45">
    <title>Careers | Mixed and Radioactive Waste Brokerage, USA</title>
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
            $menu['current'] = 'Career';
            $this->load->view('fe/layout/header', $menu);
        ?>
        <!-- HEADER END -->

        <div class='page-content'>
            <!-- CONTENT BEGIN -->
            <div class='main' style='background-image: url("<?php echo base_url('assets/images/careers.jpg');?>")'>
                <img src='<?php echo base_url('assets/images/career-white.png');?>'>
                Careers
            </div>
            <div class='container'>            
                <div class='description'>                
                    <div class='content'>
                        <img class='quote' src='<?php echo base_url("assets/images/quote.png");?>'>
                        <div style='color:black'>
                            <?php echo $First;?>
                        </div>                    
                    </div>                
                    <div class='content'>
                        <img class='quote' src='<?php echo base_url("assets/images/quote.png");?>'>
                        <div style='color:black'>
                            <?php echo $Second;?>
                        </div>                    
                    </div>
                </div>
            </div>

            <div class='employees'>
                <div class='container'>
                    <div class='row'>
                        <div class='col-md-6'>
                            <div class='heading'>CAREERS</div>
                            <div class='heading-description'>We offer the following benefits to the regular full-time employees</div>
                        </div>
                        <div class='col-md-6'>
                            <div class='content'>
                                <ul>
                                    <?php 
                                        foreach ($benefits as $benefit) {
                                            echo '<li>'.$benefit['Content'].'</li>';
                                        }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class='open-jobs'>
                <div class='container'>
                    <div class='heading-description'>Our Current Open Jobs</div>
                    <div class='line-space'></div>
                    <?php 
                        foreach ($jobs as $job) {
                            ?>
                            <div class='open-job'>
                                <div class='title'>
                                    <a href='javascript:showDetail(<?php echo $job['ID'];?>);'>- <?php echo $job['Title'];?></a>
                                </div>
                                <div class='apply'>
                                    <a href="mailto:hr@nacphilo.com" target="null"> APPLY NOW </a>
                                </div>
                            </div>
                            <?php
                        }
                    ?>

                    <div class='quote-content'>Please email your Resumes to: <strong>hr@nacphilo.com</strong></div>
                </div>
            </div>

            <div class='modal modal-job' id='job-modal' role='dialog'>
                <div class="modal-dialog">
                    <div class='modal-content'>          
                        <div class='close-modal'>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>                         
                        </div>
                        <div class='title heading-description' id='job-title'>
                        </div>                    
                        <div class='line'></div>
                        <div class='content' id='job-content'>
                        </div>
                    </div>
                </div>        
            </div>
            
            <!-- CONTENT END -->
            

            <!-- FOOTER BEGIN -->
            <?php $this->load->view('fe/layout/footer');?>
            <!-- FOOTER END -->

        </div>
    </div>

    <script>
        var base_url = "<?php echo base_url();?>";
        var page_name = 'Career';
    </script>
    <!-- SCRIPTS BEGIN -->    
    <?php $this->load->view('fe/layout/scripts');?>
    <script src="<?php echo base_url('assets/scripts/careers.js'); ?>?<?php echo time(); ?>"></script>
    <!-- SCRIPTS END -->
</body>

</html>