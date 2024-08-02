<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="generator" content="Gatsby 2.19.45">
    <title>Resource | Mixed and Radioactive Waste Brokerage, USA</title>
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
            $menu['current'] = 'Resource';
            $this->load->view('fe/layout/header', $menu);
        ?>
        <!-- HEADER END -->

        <!-- CONTENT BEGIN -->
        <div class='page-content'>
            <div class='main' style='background-image: url("<?php echo base_url('assets/images/Resources.jpg');?>")'>
                <img src='<?php echo base_url('assets/images/resource-white.png');?>'>
                Resource
            </div>
            <div class='container'>            
                <div class='description'>                
                    <div class='heading-description'>RESOURCES & CUSTOMER DOWNLOADS</div>
                    <div class='line-space'></div>
                    <div class='row'>
                        <?php 
                            foreach ($documents as $document) 
                            {
                                ?>
                                <div class='col-lg-3 col-md-4 col-sm-6 col-xl-2'>
                                    <div class='document'>
                                        <div class='doc-type'>
                                            <img src='<?php echo base_url('assets/images/pdf.png');?>'>
                                        </div>
                                        <div class='info'>
                                            <div class='title'><?php echo $document['Title'];?></div>
                                            <div class='desc'><?php echo $document['Description'];?></div>
                                        </div>
                                        <div class='action'>
                                            <a href='<?php echo base_url('assets/resources/'.$document['Attach']);?>' target='blank'>
                                                <img src='<?php echo base_url('assets/images/download-icon.png');?>'>
                                                Download
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>

                    </div>                
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
        var page_name = "Resource";
    </script>
    <!-- SCRIPTS BEGIN -->
    <?php $this->load->view('fe/layout/scripts');?>
    <!-- SCRIPTS END -->
</body>

</html>