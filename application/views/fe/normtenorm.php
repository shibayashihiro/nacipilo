<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="generator" content="Gatsby 2.19.45">
    <title>NORM & TENORM | Mixed and Radioactive Waste Brokerage, USA</title>
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
            $menu['current'] = 'NORM';
            $this->load->view('fe/layout/header', $menu);
        ?>
        <!-- HEADER END -->

        <!-- CONTENT BEGIN -->
        <div class='page-content'>
            <div class='main' style='background-image: url("<?php echo base_url('assets/images/Radilogical (7).jpg');?>")'>
                <img src='<?php echo base_url('assets/images/norm-white.png');?>'>
                NORM & TENORM
            </div>
            <div class='container'>
                <div class='description'>
                    <div class='heading'>NORM AND TENORM</div>
                    <div class='heading-description'>Technologically Enhanced Naturally occurring Radioactive Materials</div>
                    <div class='content' style='margin-top: 40px!important'>
                        <img class='quote' src='<?php echo base_url("assets/images/quote.png");?>'>
                        <div style='color:black'>
                            <?php echo $First;?>
                        </div>
                    </div>
                    <div class='content norm-description'>
                        <ul>
                            <?php
                                foreach ($solutions as $solution) {
                                    echo '<li>'.$solution['Content'].'</li>';
                                }
                            ?>
                        </ul>
                    </div>
                    <div class='content'>
                        <img class='quote' src='<?php echo base_url("assets/images/quote.png");?>'>
                        <div style='color:black'>
                        <?php echo $Second;?>
                        </div>
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
        var page_name = 'NORM & TENORM';
    </script>
    <!-- SCRIPTS BEGIN -->
    <?php $this->load->view('fe/layout/scripts');?>
    <!-- SCRIPTS END -->
</body>

</html>