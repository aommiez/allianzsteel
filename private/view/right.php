<div style="margin-bottom: 10px;">
    <img src="http://kernoxdesigns.com/images/banner/main_right2.jpg">
</div>

<!--
<div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 248px;
        height: 248px;">
    <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 248px; height: 248px;
            overflow: hidden;">
        <div><img src="holder.js/248x248?text=1"></div>
        <div><img src="holder.js/248x248?text=2"></div>
        <div><img src="holder.js/248x248?text=3"></div>
        <div><img src="holder.js/248x248?text=4"></div>
        <div><img src="holder.js/248x248?text=5"></div>
    </div>
</div>
-->
<script>

    jQuery(document).ready(function ($) {
        var options = {

            $AutoPlay: true,                                   //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
            $DragOrientation: 1                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
        };

        var jssor_slider1 = new $JssorSlider$("slider1_container", options);
    });
</script>