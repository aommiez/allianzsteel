<?php
use Main\Helper;
$bg = Helper\URL::absolute("/public/images/footer.jpg");
echo <<<HTML
<style>
    .footerBar {
        background: url({$bg}) repeat-x;
        color: whitesmoke;
        text-align: center;
        padding-top: 10px;
        padding-bottom: 10px;
        height: 30px;
        line-height: 10px;
    }
</style>
HTML;
?>

<div class="container">
    <div class="footerBar row">
        <div class="footer_left">Copyright
            <script language="JavaScript">
                <!--
                document.write('&copy;&nbsp;' );
                document.write(new Date().getFullYear());
                //-->
            </script>?&nbsp; AllianzSteel.Com</div>
    </div>
</div>

<script>
    $(document).ready(function() {
        // This command is used to initialize some elements and make them work properly
        $.material.init();
    });
</script>
</body>
</html>