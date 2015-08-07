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
                        <h3 class="panel-title">About Us</h3>
                    </div>
                    <div class="panel-body">
                        บริษัท อลิอันซ์สตีล จำกัด <br>
                        เราคือผู้ผลิตและจำหน่ายเกี่ยวกับโต๊ะสแตนเลส คุณภาพสูงด้วยการออกแบบ และ ผลิตด้วยทีมงาน ที่มีประสบการณ์เฉพาะด้าน ด้วยรูปแบบที่ทันสมัย และมีประสบการณ์มามากกว่า 10ปี
                        ทำให้เราสามารถเป็นที่ยอมรับ รู้จักของคนทั่วไปและไว้วางใจเลือกใช้บริการของรา หวังว่าสินค้าของเราจะไม่ทำให้คุณผิดหวังและสุดท้าย ขอขอบคุณที่ท่านเลือกไว้วางใจเรา
                    </div>
                </div>
            </div>
            <div class="col-lg-3"><?php $this->import("/right");?></div>
        </div>
    </div>
<?php
$this->import('/layout/footer');
?>