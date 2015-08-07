<?php
$this->import('/top');
?>
    <style>
        .mainDiv {
            background-color: white;
            padding: 20px;
            box-shadow: -60px 0px 100px -90px #000000, 60px 0px 100px -90px #000000;
            -webkit-box-shadow: -60px 0px 100px -90px #000000, 60px 0px 100px -90px #000000;
            -moz-box-shadow: -60px 0px 100px -90px #000000, 60px 0px 100px -90px #000000;
        }
        .font-Big {
            font-size: 18px;
        }
    </style>
    <div class="container font-Big">
        <div class="mainDiv row">
            <div class="col-lg-9">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Contact</h3>
                    </div>
                    <div class="panel-body">
                        Allianz steel<br>
                        Head Office<br>
                        1125 m.3  Bangpoon<br>
                        Maung ,Patumthanee 12000<br>
                        Tel : 02-529-1265<br>
                        Fax : 02-529-1265<br>
                        <br>
                        M : 087-501-6091<br>
                        : 086-816-5233<br>
                        Website : <a href="www.allianzsteel.com">www.allianzsteel.com</a>

                    </div>
                </div>
            </div>
            <div class="col-lg-3"><?php $this->import("/right");?></div>
        </div>
    </div>
<?php
$this->import('/layout/footer');
?>