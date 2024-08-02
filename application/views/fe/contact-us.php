<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="generator" content="Gatsby 2.19.45">
    <title>Contact Us | Mixed and Radioactive Waste Brokerage, USA</title>
    <meta name="title" content="Systone Iterations" data-react-helmet="true">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>?<?php echo time(); ?>">
    <link href="<?php echo base_url('assets/global/plugins/bootstrap-toastr/toastr.min.css');?>" rel="stylesheet" type="text/css" />
    <link rel='stylesheet' href="<?php echo base_url('assets/css/pages/home.css');?>?<?php echo time(); ?>">    
    <link rel="shortcut icon" href="<?php echo base_url('favicon.png');?>" />
    <?php echo $map['js'];?>
</head>

<body>
    <div id='loading'></div>

    <div style='outline:none' tablindex='-1' class='page'>        
        <!-- HEADER BEGIN -->
        <?php 
            $menu['current'] = 'ContactUs';
            $this->load->view('fe/layout/header', $menu);
        ?>
        <!-- HEADER END -->

        <!-- CONTENT BEGIN -->
        <div class='page-content'>
            <div class='main' style='background-image: url("<?php echo base_url('assets/images/contact US.jpg');?>")'>
                <img src='<?php echo base_url('assets/images/contact-white.png');?>'>
                Contact Us
            </div>
            <div class='contact-us'>
                <div class='container'>                        
                    <div class='heading'>contacts</div>
                    <div class='heading-description'>Any Questions? Contact us freely <br>and we will get back to you shortly</div>
                    <div class='line-space'></div>
                    <div class='row'>
                        <div class='col-md-6'>
                            <div class='card'>
                                <div class='logo'>
                                    <img src='<?php echo base_url("assets/images/phone.png");?>'>
                                </div>
                                <div class='title'>Phone Number</div>
                                <div class='content'>
                                    <b>Main: </b><?php echo $Mobile;?><br>
                                    <b>Fax: </b><?= $Fax;?>
                                </div>
                            </div>
                        </div>

                        <div class='col-md-6'>
                            <div class='card'>
                                <div class='logo'>
                                    <img src='<?php echo base_url("assets/images/email.png");?>'>
                                </div>
                                <div class='title'>E-mail</div>
                                <div class='content'>
                                    <b>E-mail: </b>info@nacphilo.com
                                </div>
                            </div>
                        </div>

                        <div class='col-md-12'>
                            <div class='card'>
                                <div class='logo'>
                                    <img src='<?php echo base_url("assets/images/location.png");?>'>
                                </div>
                                <div class='title'>Location</div>
                                <div class='content'>
                                    <b>Corporate Office: </b>201 Renovare Blvd Oak Ridge, TN 37830<br>
                                    <b>San Diego Office: </b>7945 Dunbrook Road, Suite H, San Diego, CA 92126<br>
                                    
                                </div>                            
                            </div>
                        </div>
                    </div> 
                    <div class='line-space'></div>
                    <div class='line-space'></div>                    
                </div>
            </div>
            
            <!-- FOOTER BEGIN -->
            <?php $this->load->view('fe/layout/footer');?>
            <!-- FOOTER END -->
            
        </div>        
        <!-- CONTENT END -->

    </div>

    <script>
        var base_url = "<?php echo base_url();?>";
        var page_name = 'Contact Us';
    </script>
    <!-- SCRIPTS BEGIN -->
    <?php $this->load->view('fe/layout/scripts');?>
    <script src="<?php echo base_url('assets/scripts/contactus.js');?>" type="text/javascript"></script>
    <!-- SCRIPTS END -->
</body>

</html>
