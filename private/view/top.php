<?php
use Main\Helper;
$this->import('/layout/header');
?>
<style>
    .logo {
        display: inline-block;
        width: 140px;
    }
    .topMenu {
        display: inline-block;
        float: right;
        right: 50px;
    }
    .topMenu ul li {
        list-style: none;
        display: inline;
        list-style-type: none;
        margin-right: 10px;
        font-size: 16px;
    }
    .divTop {
        vertical-align: middle;
        line-height: 100px;
        background-color: white;
        padding: 20px;
    }
    .mainDivTop {
        border-bottom: #f3f3f3 1px solid;
        /*
        box-shadow: -10px 0 8px -8px #BEBEBE, 10px 0 8px -8px #BEBEBE;
        -moz-box-shadow: -10px 0 8px -8px #BEBEBE, 10px 0 8px -8px #BEBEBE;
        -webkit-box-shadow: -10px 0 8px -8px #BEBEBE, 10px 0 8px -8px #BEBEBE;*/
    }

</style>

<div class="container">
    <div class="mainDivTop row">
        <div class="divTop">
            <div class="logo">
                <img src="holder.js/200x100?text=Logo200x100">
            </div>
            <div class="topMenu">
                <ul>
                    <li><a href="<?php echo Helper\URL::absolute("/")?>">Home</a></li>
                    <li>| &nbsp;&nbsp;&nbsp;<a href="<?php echo Helper\URL::absolute("/product")?>">Product</a></li>
                    <li>| &nbsp;&nbsp;&nbsp;<a href="<?php echo Helper\URL::absolute("/about")?>">About US</a></li>
                    <li>| &nbsp;&nbsp;&nbsp;<a href="<?php echo Helper\URL::absolute("/contact")?>">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>