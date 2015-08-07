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
        .productList ul li {
            list-style: none;
            border-bottom: #f3f3f3 2px solid;
            margin-bottom: 6px;
        }
        .productImg {
            border: #f3f3f3 2px solid;
            padding: 1px;
            display: inline-block;
            margin-bottom: 6px;
        }
        .productDetail {
            display: inline-block;
            vertical-align: top;
            padding: 4px;
            width: 570px;
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
                        <h3 class="panel-title">จุดเด่นของผลิตภัณท์</h3>
                    </div>
                    <div class="panel-body">
                        นวัตกรรมใหม่สำหรับคุณ โต๊ะพับสเตนเลสเอนกประสงค์รูปแบบสวยงาม ประณีต แข็งแรง ทนทาน ดูดีมีราคา เหมาะสำหรับใช้งานทั่วไป ร้านอาหาร ภัตตาคารหรือบ้านเรือน ที่ต้องการความหรูหราและความแข็งแรงทนทานเป็นพิเศษ ต่อการขีดข่วน ไม่กลัวน้ำ ทนทานความร้อน และอีกทั้งยังน้ำหนักเบา โยกย้ายสะดวก เมื่อเทียบกับโต๊ะประเภทอื่นๆ ท่านจึงมั่นใจได้ว่าท่านจะได้สินค้าคุณภาพที่ดีที่สุดในราคาที่คุ้มค่าที่สุด
                    </div>
                </div>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">รายละเอียดสินค้า </h3>
                    </div>
                    <div class="panel-body">
                        <div class="productList">
                            <ul>
                                <li>
                                    <div>
                                        <div class="productImg">
                                            <img src="holder.js/150x130">
                                        </div>
                                        <div class="productDetail">
                                            แผ่นหน้าโต๊ะโค้งมลใช้สเตนเลสเกรด304 หนา 0.7 มม. ลายขนแมว
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <div class="productImg">
                                            <img src="holder.js/150x130">
                                        </div>
                                        <div class="productDetail">
                                            โครงสร้างขาเป็นสเตนเลสเหลี่ยม 1.2นิ้วเกรด 201 หนา 1 มม.
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <div class="productImg">
                                            <img src="holder.js/150x130">
                                        </div>
                                        <div class="productDetail">
                                            บานพับโต๊ะขนาดใหญ่ใช้สเตเลสเกรด304 หนา 1.5มม. พร้อมสลักสเตนเลส
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <div class="productImg">
                                            <img src="holder.js/150x130">
                                        </div>
                                        <div class="productDetail">
                                            ด้านใต้โต๊ะเสริมกระดูกโดยใช้สเตนเลสเกรด 304 หนา 0.7 มม. เพื่อเสริมความแข็งแรง
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <div class="productImg">
                                            <img src="holder.js/150x130">
                                        </div>
                                        <div class="productDetail">
                                            ขาโต๊ะ สามารถปรับระดับได้ กรณ๊พื้นที่วางไมได้ระดับ
                                            สามารถรองรับ น้ำหนักได้ 50 กก. โดยการกระจายน้ำหนัก
                                            รับประกันคุณภาพ 1 ปี
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3"><?php $this->import("/right");?></div>
        </div>
    </div>
<?php
$this->import('/layout/footer');
?>