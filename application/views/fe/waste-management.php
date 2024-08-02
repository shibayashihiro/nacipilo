<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="generator" content="Gatsby 2.19.45">
    <title>Waste Management | Mixed and Radioactive Waste Brokerage, USA</title>
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
            $menu['current'] = 'WasteManagement';
            $this->load->view('fe/layout/header', $menu);
        ?>
        <!-- HEADER END -->

        <!-- CONTENT BEGIN -->
        <div class="page-content">
            <div class='main' style='background-image: url("<?php echo base_url('assets/images/waste management_3.jpg');?>")'>
                <img src='<?php echo base_url('assets/images/waste-management.png');?>'>
                Waste Management
            </div>
            <div class='container'>            
                <div class='description'>
                    <div class='row'>
                        <div class='col-md-3'>
                            <div class='heading'>Waste Management</div>
                            <div class='heading-description'>Our Waste Management Services include</div>        
                        </div>
                        <div class='col-md-9'>
                            <div class='waste-management-include row'>
                                <?php
                                    $cnt = 0;
                                    $itemClass = array('primary', 'white', 'black');
                                    foreach ($services as $service) {
                                        echo "<div class='item col-xl-3 col-lg-4 col-md-6 col-sm-6 ".$itemClass[$cnt % 3]."'>";
                                            echo $service['Content'];
                                            echo "<div class='number'>".str_pad($cnt + 1, 2, "0", STR_PAD_LEFT)."</div>";
                                        echo "</div>";
                                        $cnt++;
                                    }
                                ?>
                            </div>                
                        </div>
                    </div>
                </div>
                <div class='more-detail'>
                    <a href="<?php echo base_url('assets/resources/more-detail.pdf');?>" target="blank">
                        CLICK HERE TO LEARN MORE ABOUT OUR WASTE PROCESSING IN MORE DETAIL
                    </a>
                </div>
            </div>
            
            <div class='position'>
                <div class='container'>
                    <div class='row'>
                        <div class='col-md-4'>
                            <img src="<?php echo base_url('assets/images/position.png');?>">
                        </div>
                        <div class='col-md-8' style='padding: 0px 32px;'>
                            <p>
                                <?php echo $Title;?>
                            </p>
                            <div class='map-description'>
                                <span>
                                <?php echo $Content;?>
                                </span>
                            </div>                        
                        </div>
                    </div>
                </div>
            </div>

            <div class='waste-stream-back'>
                <div class='over-box'></div>            
                <?php 
                    foreach ($images as $image) {
                        echo "<div class='mySlides fade'>";
                        echo '<img src="'. base_url('assets/resources/'.$image['Attach']).'">';
                        echo '</div>';
                    }
                ?>

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>

                <div style="text-align:center" class='dot-box'>
                    <?php 
                        $cnt = 1;
                        foreach ($images as $image) {
                            echo '<span class="dot" onclick="currentSlide('.$cnt.')"></span>';
                            $cnt++;
                        }                    
                    ?>
                </div>
            </div>

            <div class='waste-stream-info'>
                <div class='container'>
                    <div class='heading-description'>We can assist in the efficient and effective disposal of the following waste streams</div>                
                    <hr>
                    <div class='row'>
                        <?php 
                            foreach ($streams as $stream) {
                                echo "<div class='col-xl-3 col-lg-3 col-md-6 col-sm-6 waste-stream'>";
                                echo "<img src='".base_url('assets/images/check.png')."'>";
                                echo $stream['Content'];
                                echo "</div>";
                            }
                            ?>
                    </div>
                </div>
            </div>
            <!-- CONTENT END -->
            

            <!-- FOOTER BEGIN -->
            <?php $this->load->view('fe/layout/footer');?>
            <!-- FOOTER END -->
        </div>
    </div>

    <!-- SCRIPTS BEGIN -->
    <?php $this->load->view('fe/layout/scripts');?>
    <script>
        var slideIndex = 1;
        var timerID = 0;
        var base_url = "<?php echo base_url();?>";  
        var page_name = "Waste Management";
        showSlides(slideIndex);

        timerID = setInterval(() => {
            plusSlides(1);
        }, 5000);

        // Next/previous controls
        function plusSlides(n) {
            showSlides(slideIndex += n);
            clearInterval(timerID);
            timerID = setInterval(() => {
                plusSlides(1);
            }, 5000);
        }

        // Thumbnail image controls
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
        }
    </script>
    <!-- SCRIPTS END -->
</body>

</html>