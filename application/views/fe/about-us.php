<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="generator" content="Gatsby 2.19.45">
    <title>About Us | Mixed and Radioactive Waste Brokerage, USA</title>
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
            $menu['current'] = 'AboutUs';
            $this->load->view('fe/layout/header', $menu);
        ?>
        <!-- HEADER END -->

        <div class='page-content'>
            
            <!-- CONTENT BEGIN -->
            <div class='main' style='background-image: url("<?php echo base_url('assets/images/Radilogical (5).jpg');?>")'>
                <img src='<?php echo base_url('assets/images/icon1_white.png');?>'>
                About Us
            </div>
            <div class='container'>            
                <div class='description'>
                    <div class='heading'>About Company</div>
                    <div class='heading-description'>Welcome to NAC Philotechnics</div>
                    <div class='content'>
                        <img class='quote' src='<?php echo base_url("assets/images/quote.png");?>'>
                        <div>
                            <?php echo $First;?>
                        </div>                    
                    </div>
                    <div class='content'>
                        <img class='quote' src='<?php echo base_url("assets/images/quote.png");?>'>
                        <div>
                            <?php echo $Second;?>
                        </div>                    
                    </div>
                </div>
            </div>

            <div class='quote-block'>
                <div class='container'>
                “Our People are what set us apart”
                </div>
            </div>

            <div class='slideshow-container'>
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

            <div class='quote-block'>
                <div class='container'>
                We maintain a simplified highly skilled organization, staffed with working managers who have the demonstrated ability to meet your most difficult radiological challenges. Our personnel are fully trained and possess the appropriate credentials to help you accomplish your project goals and objectives.
                </div>
            </div>
            
            <div class='meet-clients'>
                <div class='container'>                                
                    <div class='heading-description'>Our Customers Include:</div>
                    <div class='row clients'>
                        <?php  
                            foreach ($clients as $client) {
                                echo "<div class='col-sm-6 col-md-6 col-lg-4 col-xl-4'>";
                                    echo "<div class='client'>";
                                        echo $client['Content'];
                                    echo "</div>";
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
        var page_name = 'About Us';
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
    <script src="<?php echo base_url('assets/scripts/location.js'); ?>"></script>
</body>

</html>