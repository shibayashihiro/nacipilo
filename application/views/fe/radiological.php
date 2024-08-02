<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="generator" content="Gatsby 2.19.45">
    <title>Radiological | Mixed and Radioactive Waste Brokerage, USA</title>
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
            $menu['current'] = 'RAD';
            $this->load->view('fe/layout/header', $menu);
        ?>
        <!-- HEADER END -->

        <!-- CONTENT BEGIN -->
        <div class='page-content'>
            <div class='main' style='background-image: url("<?php echo base_url('assets/images/IMG_5979.JPG');?>")'>
                <img src='<?php echo base_url('assets/images/radiological-white.png');?>'>
                RADIOLOGICAL & HEALTH PHYSICS
            </div>
            <div class='container'>            
                <div class='description'>
                    <div class='heading'>RADIOLOGICAL & HEALTH PHYSICS</div>
                    <div class='heading-description'>The full scope of our D&D/HP capabilities includes:</div>
                    <div class='line-space'></div>
                    <div class='row'>    
                        <?php 
                            $cnt = 0;
                            foreach ($capabilities as $capability) {
                                echo "<div class='col-sm-6 col-md-6 col-lg-4 col-xl-3'>";
                                    echo "<div class='radiological-capability'>";
                                        echo "<div class='number'>". ($cnt + 1) ."</div>";
                                        echo $capability['Content'];
                                    echo "</div>";
                                echo "</div>";
                                $cnt ++;
                            }
                            ?>
                    </div>
                    <div class='row'>
                        <div class='col-md-12'>
                            <p class='quote-content'><?php echo $Highlight;?></p>
                        </div>
                    </div>                                                
                </div>
            </div>

            <div class='meet-leaders'>            
                <div class='container'>                                
                    <div class='heading-description' style='color:white; text-shadow: 1px 1px black;'><?php echo $Title;?></div>
                    <p class='quote-content' style='color:#ccc'><?php echo $Content;?></p>
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
        var page_name = 'Radiological & Health Physics';
    </script>
    <!-- SCRIPTS BEGIN -->
    <?php $this->load->view('fe/layout/scripts');?>
    <!-- SCRIPTS END -->
</body>

</html>