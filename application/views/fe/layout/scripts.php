<script src="<?php echo base_url('assets/vendor/bootstrap/js/jquery.min.js');?>"></script>
<script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js'); ?>?<?php echo time(); ?>"></script>
<script src="<?php echo base_url('assets/global/plugins/bootstrap-toastr/toastr.min.js');?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/layouts/layout3/scripts/pages/config.js');?>" type="text/javascript"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZD5TBmWVwYbd3bA3mXk8zWjby6CmRwn8&sensor=false"></script>
<script src="<?php echo base_url('assets/scripts/location.js'); ?>"></script>

<!-- Google tag (gtag.js) --> 
<script async src=https://www.googletagmanager.com/gtag/js?id=G-T7QBSW1CR2></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-T7QBSW1CR2'); </script>


<script>
    $('.menu-trigger').click(function() {
        $('.navigation').css('display', 'block');
    });

    $('.navigation_close').click(function() {
        $('.navigation').css('display', 'none');
    });

    function setVisible(selector, visible) {
        document.querySelector(selector).style.display = visible ? 'block' : 'none';
    }

</script>

<!-- Default Statcounter code for nacphilo.com

http://nacphilo.com -->

<script type="text/javascript">

var sc_project=12824206;

var sc_invisible=1;

var sc_security="8ece541a";

</script>

<script type="text/javascript"

src="https://www.statcounter.com/counter/counter.js"

async></script>

<noscript><div class="statcounter"><a title="site stats"

href="https://statcounter.com/" target="_blank"><img

class="statcounter"

src="https://c.statcounter.com/12824206/0/8ece541a/1/"

alt="site stats"

referrerPolicy="no-referrer-when-downgrade"></a></div></noscript>

<!-- End of Statcounter Code -->


<script type="text/javascript">
$('.main').ready(function()
{    
    setInterval(() => {
        setVisible('.page', true); 
        setVisible('#loading', false);         
    }, 1000);
});
</script>
