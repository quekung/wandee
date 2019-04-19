<!DOCTYPE HTML>
<html dir="ltr" lang="th">
<!-- Top Head -->
<?php @include('incs/header-top.html'); ?>
<!-- /Top Head -->

<body>
<!-- Container -->
<div class="container"> 
  <!-- Header -->
  <?php @include('incs/header.html'); ?>
  <!-- /Header --> 

  <!-- Contents -->      
    <div id="toc">
    <!--<div class="follow-social">
            <ul>
                <li class="yt"><a href="#" title="youtube"><i class="fa-youtube"></i></a></li>
                <li class="fb"><a href="#" title="facebook"><i class="fa-facebook"></i></a></li>
            </ul>
     </div>
     <ul id="breadcrumbs">
        <li><a href="http://www.reedicious.com/">หน้าหลัก</a> <span class="cr">»</span></li>
        <li><a href="http://www.reedicious.com/clipvideo/">อร่อยเลิศแนะนำ</a> <span class="cr">»</span></li>
        <li>ตะบันตำ ตำถาดบันลือโลก สาขาปิ่นเกล้า (ต้นตำรับ)</li>
     </ul>-->
     
     <article class="reader">

        <h1>Contact Us</h1>
        <p>WanDee Co.,Ltd. <small><a href="aboutus.php" title="เกี่ยวกับเรา">เกี่ยวกับเรา</a></small></p>
        <address>123/321 หมู่ 4 ชั้น 2 อาคารปาร์ค ถ.แจ้งวัฒนะ ต.คลองเกลือ อ.ปากเกร็ด จ.นนทบุรี 11120</address>
        <div class="row _chd-cl-xs-12-xsh-06-mt20">
        
        <p><big class="t-black">วิริยะ  วงสิน (เบส)</big><br>
Wiriya Wongsin (Best) <br>
Senior Sale Excutive <br>
Entertainment Tree Co., Ltd. <br>
Tel: <a class="t-blue" href="tel:02502 6623">+66 2502 6623</a><br>
Fax: <a class="t-blue" href="tel:02502 6909">+66 2502 6909 </a><br>
Mob: <a class="t-blue" href="tel:08 5481 3688">+668 5481 3688 </a><br>
E-mail: <a  class="t-blue"href="mailto:wiriya.w@i-mobile.samartcorp.com">wiriya.w@i-mobile.samartcorp.com</a></p>

<p><big class="t-black">วราภรณ์ ช่างบรรจง (เอ๋)</big><br>
Waraporn Changbanjong<br>
Senior Account Excutive <br>
Entertainment Tree Co., Ltd. <br>
Tel: <a class="t-blue" href="tel:02502 6537">+66 2502 6537</a><br>
Fax: <a class="t-blue" href="tel:02502 6909">+66 2502 6909 </a><br>
Mob: <a class="t-blue" href="tel:08 8653 2528">+668 8653 2528</a><br>
E-mail: <a class="t-blue" href="mailto:Waraporn.Ch@i-mobile.samartcorp.com">Waraporn.Ch@i-mobile.samartcorp.com</a></p>
</div>
        <!--<p>Email: <a href="mailto:reeddicious@gmail.com">reeddicious@gmail.com</a></p>-->
        
        <div class="contact-form">
            <ul class="idTabs">
                <li><a class="selected" href="#form1" title="ติดต่อโฆษณา">ติดต่อโฆษณา</a></li>
                <li><a href="#form2" title="แนะนำร้านอร่อย">แนะนำร้านอร่อย</a></li>
            </ul>
            <div class="contentTab">
                <div id="form1" class="bx-tab">
                	
                    <form method="post" action="#" class="form-post">
                     <p>
                        <label>หัวเรื่อง<span style="color:red">*</span></label>
                        <input name="question" class="txt-box" required="" type="text">
                     </p>
                     <p>
                        <label>รายละเอียด<span style="color:red">*</span></label>
                        <textarea name="desc" rows="3" class="txt-area" required></textarea>
                     </p>
                     <p>
                        <label>ชื่อ-นามสกุล<span style="color:red">*</span></label>
                        <input name="name" class="txt-box" required="" type="text"> 
                     </p>
                     <p>
                        <label>เบอร์โทร<span style="color:red">*</span></label>     
                        <input name="tel" class="txt-box" pattern="[0-9]{10}" maxlength="10" required="" type="tel">
                     </p>
                     <p>
                        <label>อีเมล์<span style="color:red">*</span></label>     
                        <input name="email" class="txt-box" required="" type="email">
                     </p>
                     
                     <div class="ctrl-btn">
                        <button type="submit" formmethod="post" class="ui-btn-gray">ตกลง</button> <button type="reset" class="ui-btn-border">ยกเลิก</button>
                     </div>
                   </form>
                
                </div>
                <div id="form2" class="bx-tab">
                
                <form class="form-post" id="join-reedicious" method="post" action="http://www.reedicious.com/ajaxfile/rec-save" enctype="multipart/form-data">
                    <fieldset>
                        <legend class="_self-mb10 t-black"><b>JOIN my REEDicous</b> กรุณากรอกรายละเอียดของท่านเพื่อการติดต่อกลับ</legend>
                        <ul>
                            <li>
                                <label for="text_001" class="requir">ชื่อร้าน</label>
                                <input id="text_001" name="text_001" class="txt-box" placeholder="กรอกข้อมูล" type="text">
                            </li>
                            <li>
                                <label for="text_002" class="requir">ที่อยู่ร้าน</label>
                                <input id="text_002" name="text_002" class="txt-box" placeholder="กรอกข้อมูล" type="text">
                            </li>
    
                            <li><label for="text_004">จังหวัด</label>
                                <select id="text_004" name="text_004" class="select-box m">
                                
                                    <option value="64">กระบี่</option>
                                
                                    <option value="1">กรุงเทพมหานคร</option>
                                
                                    <option value="56">กาญจนบุรี</option>
                                
                                    <option value="34">กาฬสินธุ์</option>
                                
                                    <option value="49">กำแพงเพชร</option>
                                
                                    <option value="28">ขอนแก่น</option>
                                
                                    <option value="13">จันทบุรี</option>
                                
                                    <option value="15">ฉะเชิงเทรา</option>
                                
                                    <option value="11">ชลบุรี</option>
                                
                                    <option value="9">ชัยนาท</option>
                                
                                    <option value="25">ชัยภูมิ</option>
                                
                                    <option value="69">ชุมพร</option>
                                
                                    <option value="45">เชียงราย</option>
                                
                                    <option value="38">เชียงใหม่</option>
                                
                                    <option value="72">ตรัง</option>
                                
                                    <option value="14">ตราด</option>
                                
                                    <option value="50">ตาก</option>
                                
                                    <option value="17">นครนายก</option>
                                
                                    <option value="58">นครปฐม</option>
                                
                                    <option value="36">นครพนม</option>
                                
                                    <option value="19">นครราชสีมา</option>
                                
                                    <option value="63">นครศรีธรรมราช</option>
                                
                                    <option value="47">นครสวรรค์</option>
                                
                                    <option value="3">นนทบุรี</option>
                                
                                    <option value="76">นราธิวาส</option>
                                
                                    <option value="43">น่าน</option>
                                
                                    <option value="77">บึงกาฬ</option>
                                
                                    <option value="20">บุรีรัมย์</option>
                                
                                    <option value="4">ปทุมธานี</option>
                                
                                    <option value="62">ประจวบคีรีขันธ์</option>
                                
                                    <option value="16">ปราจีนบุรี</option>
                                
                                    <option value="74">ปัตตานี</option>
                                
                                    <option value="5">พระนครศรีอยุธยา</option>
                                
                                    <option value="44">พะเยา</option>
                                
                                    <option value="65">พังงา</option>
                                
                                    <option value="73">พัทลุง</option>
                                
                                    <option value="53">พิจิตร</option>
                                
                                    <option value="52">พิษณุโลก</option>
                                
                                    <option value="61">เพชรบุรี</option>
                                
                                    <option value="54">เพชรบูรณ์</option>
                                
                                    <option value="42">แพร่</option>
                                
                                    <option value="66">ภูเก็ต</option>
                                
                                    <option value="32">มหาสารคาม</option>
                                
                                    <option value="37">มุกดาหาร</option>
                                
                                    <option value="46">แม่ฮ่องสอน</option>
                                
                                    <option value="24">ยโสธร</option>
                                
                                    <option value="75">ยะลา</option>
                                
                                    <option value="33">ร้อยเอ็ด</option>
                                
                                    <option value="68">ระนอง</option>
                                
                                    <option value="12">ระยอง</option>
                                
                                    <option value="55">ราชบุรี</option>
                                
                                    <option value="7">ลพบุรี</option>
                                
                                    <option value="40">ลำปาง</option>
                                
                                    <option value="39">ลำพูน</option>
                                
                                    <option value="30">เลย</option>
                                
                                    <option value="22">ศรีสะเกษ</option>
                                
                                    <option value="35">สกลนคร</option>
                                
                                    <option value="70">สงขลา</option>
                                
                                    <option value="71">สตูล</option>
                                
                                    <option value="2">สมุทรปราการ</option>
                                
                                    <option value="60">สมุทรสงคราม</option>
                                
                                    <option value="59">สมุทรสาคร</option>
                                
                                    <option value="18">สระแก้ว</option>
                                
                                    <option value="10">สระบุรี</option>
                                
                                    <option value="8">สิงห์บุรี</option>
                                
                                    <option value="51">สุโขทัย</option>
                                
                                    <option value="57">สุพรรณบุรี</option>
                                
                                    <option value="67">สุราษฎร์ธานี</option>
                                
                                    <option value="21">สุรินทร์</option>
                                
                                    <option value="31">หนองคาย</option>
                                
                                    <option value="27">หนองบัวลำภู</option>
                                
                                    <option value="6">อ่างทอง</option>
                                
                                    <option value="26">อำนาจเจริญ</option>
                                
                                    <option value="29">อุดรธานี</option>
                                
                                    <option value="41">อุตรดิตถ์</option>
                                
                                    <option value="48">อุทัยธานี</option>
                                
                                    <option value="23">อุบลราชธานี</option>
                                
                                </select>
                            </li>
    
                            <li><label for="text_003">อำเภอ</label>
                                <select id="text_003" name="text_003" class="select-box m">
                                
                                    <option value="คลองเตย">คลองเตย</option>
                                
                                    <option value="คลองสาน">คลองสาน</option>
                                
                                    <option value="คลองสามวา">คลองสามวา</option>
                                
                                    <option value="คันนายาว">คันนายาว</option>
                                
                                    <option value="จตุจักร">จตุจักร</option>
                                
                                    <option value="จอมทอง">จอมทอง</option>
                                
                                    <option value="ดอนเมือง">ดอนเมือง</option>
                                
                                    <option value="ดินแดง">ดินแดง</option>
                                
                                    <option value="ดุสิต">ดุสิต</option>
                                
                                    <option value="ตลิ่งชัน">ตลิ่งชัน</option>
                                
                                    <option value="ทวีวัฒนา">ทวีวัฒนา</option>
                                
                                    <option value="ทุ่งครุ">ทุ่งครุ</option>
                                
                                    <option value="ธนบุรี">ธนบุรี</option>
                                
                                    <option value="บางกอกน้อย">บางกอกน้อย</option>
                                
                                    <option value="บางกอกใหญ่">บางกอกใหญ่</option>
                                
                                    <option value="บางกะปิ">บางกะปิ</option>
                                
                                    <option value="บางขุนเทียน">บางขุนเทียน</option>
                                
                                    <option value="บางเขน">บางเขน</option>
                                
                                    <option value="บางคอแหลม">บางคอแหลม</option>
                                
                                    <option value="บางแค">บางแค</option>
                                
                                    <option value="บางซื่อ">บางซื่อ</option>
                                
                                    <option value="บางนา">บางนา</option>
                                
                                    <option value="บางบอน">บางบอน</option>
                                
                                    <option value="บางพลัด">บางพลัด</option>
                                
                                    <option value="บางรัก">บางรัก</option>
                                
                                    <option value="บ้านทะวาย">บ้านทะวาย</option>
                                
                                    <option value="บึงกุ่ม">บึงกุ่ม</option>
                                
                                    <option value="ปทุมวัน">ปทุมวัน</option>
                                
                                    <option value="ประเวศ">ประเวศ</option>
                                
                                    <option value="ป้อมปราบศัตรูพ่าย">ป้อมปราบศัตรูพ่าย</option>
                                
                                    <option value="พญาไท">พญาไท</option>
                                
                                    <option value="พระโขนง">พระโขนง</option>
                                
                                    <option value="พระนคร">พระนคร</option>
                                
                                    <option value="ภาษีเจริญ">ภาษีเจริญ</option>
                                
                                    <option value="มีนบุรี">มีนบุรี</option>
                                
                                    <option value="ยานนาวา">ยานนาวา</option>
                                
                                    <option value="ราชเทวี">ราชเทวี</option>
                                
                                    <option value="ราษฎร์บูรณะ">ราษฎร์บูรณะ</option>
                                
                                    <option value="ลาดกระบัง">ลาดกระบัง</option>
                                
                                    <option value="ลาดพร้าว">ลาดพร้าว</option>
                                
                                    <option value="วังทองหลาง">วังทองหลาง</option>
                                
                                    <option value="วัฒนา">วัฒนา</option>
                                
                                    <option value="สวนหลวง">สวนหลวง</option>
                                
                                    <option value="สะพานสูง">สะพานสูง</option>
                                
                                    <option value="สัมพันธวงศ์">สัมพันธวงศ์</option>
                                
                                    <option value="สาทร">สาทร</option>
                                
                                    <option value="สายไหม">สายไหม</option>
                                
                                    <option value="หนองแขม">หนองแขม</option>
                                
                                    <option value="หนองจอก">หนองจอก</option>
                                
                                    <option value="หลักสี่">หลักสี่</option>
                                
                                    <option value="ห้วยขวาง">ห้วยขวาง</option>
                                
                                </select>
                            </li>
    
                            <li><label for="text_003-b">รหัสไปรษณีย์</label> <input id="text_003-b" name="text_003-b" class="txt-box s" value="" title="" type="text"></li>
    
                            <li class="map">
                                	<div id="map_canvas" class="map_canvas _self-cl-xs-12" style="width:100%; height:300px;"></div>
                                    <p class="row _chd-cl-xs-12 _chd-cl-sm _self-cl-xs-12">
                                    <label class="txt-r">Latitude </label><input name="lat_value" id="lat_value" value="0" class="txt-box" size="10" type="text">
                                    <label class="txt-r">Longitude</label><input name="lon_value" id="lon_value" value="0" class="txt-box" size="10" type="test">
                                    </p>
                                    <!--Zoom    <input name="zoom_value" type="text" id="zoom_value" value="0" size="5" />-->
                                
                                <div id="address"></div>
                            </li>
    
    
                            <li><label for="text_005">เบอร์ติดต่อ</label> <input id="text_005" name="text_005" class="txt-box" placeholder="กรอกข้อมูล" type="text"></li>
                            <li><label for="text_006">เมนูดังของร้าน</label> <input id="text_006" name="text_006" class="txt-box" placeholder="กรอกข้อมูล" type="text"></li>
                            <li class="line-sec">&nbsp;</li>
                            <li><label for="text_007" class="requir">ชื่อผู้แนะนำ</label> <input id="text_007" name="text_007" class="txt-box" placeholder="กรอกข้อมูล" type="text"></li>
                            <li><label for="text_008">เบอร์ติดต่อ</label> <input id="text_008" name="text_008" class="txt-box" placeholder="กรอกข้อมูล" type="text"></li>
                            <li><label for="text_009">ที่อยู่</label> <input id="text_009" name="text_009" class="txt-box" placeholder="กรอกข้อมูล" type="text"></li>
                            <li>
                            <label for="text_010">จังหัวด</label> 
                                <select id="text_010" name="text_010" class="select-box m">
                                
                                    <option value="64">กระบี่</option>
                                
                                    <option value="1">กรุงเทพมหานคร</option>
                                
                                    <option value="56">กาญจนบุรี</option>
                                
                                    <option value="34">กาฬสินธุ์</option>
                                
                                    <option value="49">กำแพงเพชร</option>
                                
                                    <option value="28">ขอนแก่น</option>
                                
                                    <option value="13">จันทบุรี</option>
                                
                                    <option value="15">ฉะเชิงเทรา</option>
                                
                                    <option value="11">ชลบุรี</option>
                                
                                    <option value="9">ชัยนาท</option>
                                
                                    <option value="25">ชัยภูมิ</option>
                                
                                    <option value="69">ชุมพร</option>
                                
                                    <option value="45">เชียงราย</option>
                                
                                    <option value="38">เชียงใหม่</option>
                                
                                    <option value="72">ตรัง</option>
                                
                                    <option value="14">ตราด</option>
                                
                                    <option value="50">ตาก</option>
                                
                                    <option value="17">นครนายก</option>
                                
                                    <option value="58">นครปฐม</option>
                                
                                    <option value="36">นครพนม</option>
                                
                                    <option value="19">นครราชสีมา</option>
                                
                                    <option value="63">นครศรีธรรมราช</option>
                                
                                    <option value="47">นครสวรรค์</option>
                                
                                    <option value="3">นนทบุรี</option>
                                
                                    <option value="76">นราธิวาส</option>
                                
                                    <option value="43">น่าน</option>
                                
                                    <option value="77">บึงกาฬ</option>
                                
                                    <option value="20">บุรีรัมย์</option>
                                
                                    <option value="4">ปทุมธานี</option>
                                
                                    <option value="62">ประจวบคีรีขันธ์</option>
                                
                                    <option value="16">ปราจีนบุรี</option>
                                
                                    <option value="74">ปัตตานี</option>
                                
                                    <option value="5">พระนครศรีอยุธยา</option>
                                
                                    <option value="44">พะเยา</option>
                                
                                    <option value="65">พังงา</option>
                                
                                    <option value="73">พัทลุง</option>
                                
                                    <option value="53">พิจิตร</option>
                                
                                    <option value="52">พิษณุโลก</option>
                                
                                    <option value="61">เพชรบุรี</option>
                                
                                    <option value="54">เพชรบูรณ์</option>
                                
                                    <option value="42">แพร่</option>
                                
                                    <option value="66">ภูเก็ต</option>
                                
                                    <option value="32">มหาสารคาม</option>
                                
                                    <option value="37">มุกดาหาร</option>
                                
                                    <option value="46">แม่ฮ่องสอน</option>
                                
                                    <option value="24">ยโสธร</option>
                                
                                    <option value="75">ยะลา</option>
                                
                                    <option value="33">ร้อยเอ็ด</option>
                                
                                    <option value="68">ระนอง</option>
                                
                                    <option value="12">ระยอง</option>
                                
                                    <option value="55">ราชบุรี</option>
                                
                                    <option value="7">ลพบุรี</option>
                                
                                    <option value="40">ลำปาง</option>
                                
                                    <option value="39">ลำพูน</option>
                                
                                    <option value="30">เลย</option>
                                
                                    <option value="22">ศรีสะเกษ</option>
                                
                                    <option value="35">สกลนคร</option>
                                
                                    <option value="70">สงขลา</option>
                                
                                    <option value="71">สตูล</option>
                                
                                    <option value="2">สมุทรปราการ</option>
                                
                                    <option value="60">สมุทรสงคราม</option>
                                
                                    <option value="59">สมุทรสาคร</option>
                                
                                    <option value="18">สระแก้ว</option>
                                
                                    <option value="10">สระบุรี</option>
                                
                                    <option value="8">สิงห์บุรี</option>
                                
                                    <option value="51">สุโขทัย</option>
                                
                                    <option value="57">สุพรรณบุรี</option>
                                
                                    <option value="67">สุราษฎร์ธานี</option>
                                
                                    <option value="21">สุรินทร์</option>
                                
                                    <option value="31">หนองคาย</option>
                                
                                    <option value="27">หนองบัวลำภู</option>
                                
                                    <option value="6">อ่างทอง</option>
                                
                                    <option value="26">อำนาจเจริญ</option>
                                
                                    <option value="29">อุดรธานี</option>
                                
                                    <option value="41">อุตรดิตถ์</option>
                                
                                    <option value="48">อุทัยธานี</option>
                                
                                    <option value="23">อุบลราชธานี</option>
                                
                                </select>
                            </li>
                            <li><label for="text_009-b">รหัสไปรษณีย์</label> <input id="text_009-b" name="text_009-b" class="txt-box s" value="" title="" type="text"></li>
    
                            <li><label for="text_011">อีเมล์</label> <input id="text_011" name="text_011" class="txt-box" placeholder="กรอกข้อมูล" type="text"></li>
                            <li id="text_011"></li>
                                                    <li>
                                <label for="text_012">รูปภาพ</label> 
                                <input class="txt-box" size="30" id="photoimg_0" name="photoimg_0" type="file"> 
                            </li>
                                                    <!--<li>
                                <label for="text_012">รูปภาพ</label> 
                                <span class="bwfile">
                                    <input class="fake-bw" onchange="document.getElementById('fakefilepc_1').value = this.value;$('#fakefilepc_1').addClass('success ');" size="30" id="photoimg_1" name="photoimg_1" type="file"> 
                                    <input class="txt-box" onclick="$('#photoimg_1').click();" id="fakefilepc_1" name="fakefilepc_1" type="text"> 
                                    <label class="ui-btn btn-browse"><a title="Browse Photo" onclick="$('#photoimg_1').click();" href="javascript:;">Browse Photo</a></label> 
                                </span>
                            </li>
                                                    <li>
                                <label for="text_012">รูปภาพ</label> 
                                <span class="bwfile">
                                    <input class="fake-bw" onchange="document.getElementById('fakefilepc_2').value = this.value;$('#fakefilepc_2').addClass('success ');" size="30" id="photoimg_2" name="photoimg_2" type="file"> 
                                    <input class="txt-box" onclick="$('#photoimg_2').click();" id="fakefilepc_2" name="fakefilepc_2" type="text"> 
                                    <label class="ui-btn btn-browse"><a title="Browse Photo" onclick="$('#photoimg_2').click();" href="javascript:;">Browse Photo</a></label> 
                                </span>
                            </li>
                                                    <li>
                                <label for="text_012">รูปภาพ</label> 
                                <span class="bwfile">
                                    <input class="fake-bw" onchange="document.getElementById('fakefilepc_3').value = this.value;$('#fakefilepc_3').addClass('success ');" size="30" id="photoimg_3" name="photoimg_3" type="file"> 
                                    <input class="txt-box" onclick="$('#photoimg_3').click();" id="fakefilepc_3" name="fakefilepc_3" type="text"> 
                                    <label class="ui-btn btn-browse"><a title="Browse Photo" onclick="$('#photoimg_3').click();" href="javascript:;">Browse Photo</a></label> 
                                </span>
                            </li>
                                                    <li>
                                <label for="text_012">รูปภาพ</label> 
                                <span class="bwfile">
                                    <input class="fake-bw" onchange="document.getElementById('fakefilepc_4').value = this.value;$('#fakefilepc_4').addClass('success ');" size="30" id="photoimg_4" name="photoimg_4" type="file"> 
                                    <input class="txt-box" onclick="$('#photoimg_4').click();" id="fakefilepc_4" name="fakefilepc_4" type="text"> 
                                    <label class="ui-btn btn-browse"><a title="Browse Photo" onclick="$('#photoimg_4').click();" href="javascript:;">Browse Photo</a></label> 
                                </span>
                            </li>-->
                                                    <li class="ctrl-btn"><span><input class="ui-btn-green2-submit" value="SEND" type="submit"></span></li>
                        </ul>
                    </fieldset>
                 </form>
                
                </div>
            </div>
        </div>




        
	</article>
    
    <div class="ads_728">
         <div class="inner">
            <div class="b728 hidden-xs">
                <img src="https://tpc.googlesyndication.com/simgad/3226514100057045023" alt="ติดต่อที่นี่" title="ติดต่อที่นี่">
             </div>
             <div class="ads_320x100 visible-xs">
                <img src="di/ads_300x100.jpg">
             </div>
        </div>
    </div>
    
      <!-- /toc -->
    </div>
<!-- /Container -->

<!-- Footer -->
<?php @include('incs/footer.html'); ?>
<!-- /Footer -->

<!-- Java Script -->
<?php @include('incs/js.html'); ?>
<!-- /Java Script -->

<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?v=3.2&amp;sensor=false&amp;language=th"></script> 
<script type="text/javascript" src="http://www.aroilert.com/static/js/local-map.js"></script>

</body>
</html>
