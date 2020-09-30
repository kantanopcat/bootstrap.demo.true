<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ARIT | สำนักวิทยบริการและเทคโนโลยีสารสนเทศ</title>
    <LINK REL="SHORTCUT ICON" HREF="http://www.arit.rbru.ac.th/img/ico/RBRU.ico">
    <link href="https://fonts.googleapis.com/css2?family=Athiti:wght@500&display=swap" rel="stylesheet"> <!-- font-family: 'Prompt', sans-serif; เมนู-->
    <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@1,800&display=swap" rel="stylesheet"> <!-- font-family: 'Sriracha', cursive; header-->
    <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@1,800&display=swap" rel="stylesheet"> <!-- font-family: 'Prompt', sans-serif; เนื้อหาทั่วไป-->
    <link rel="stylesheet" href="css/stypesheet.css">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/sketchy/bootstrap.min.css" integrity="sha384-RxqHG2ilm4r6aFRpGmBbGTjsqwfqHOKy1ArsMhHusnRO47jcGqpIQqlQK/kmGy9R" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="js/components.js"></script>



</head>

<body>

    <main-manu></main-manu>
    
    <header>
        <div class="jumbotron">
            <h1 class="display-3">สำนักวิทยบริการและเทคโนโลยีสารสนเทศ</h1>
            <hr class="my-4">
            <p>THE OFFICE OF ACADEMIC RESOURCES AND INFORMATION TECHNOLOGY</p>
        </div>
    </header>

    

    <div class="container">
      <div class="row">

            <div class="col-sm-9">
        
                <div class="container">
                    <center>
                        <div>
                            <button class="tablinks active" onclick="openCity(event, 'info1')" id="defaultOpen"><font color="red">»</font>  ระบบสารสนเทศและเครือข่าย</button>
                            <button class="tablinks" onclick="openCity(event, 'info2')"><font color="red">»</font>   ฐานข้อมูลอิเล็กทรอนิกส์</button>
                            <button class="tablinks" onclick="openCity(event, 'info3')"><font color="red">»</font> ระบบศูนย์ข้อมูลและงานวิจัย </button>
                        </div> 
                    </center>
            <br>
            <div id="info1" class="tabcontent" style="display: block;"> 
                <div class="card">
        <h4 class="card-header">ระบบสารสนเทศเพื่อการบริหาร</h4>
        <div class="card-body">

            <table style="border-collapse:collapse; border:none" border="0">
                <tbody>
                <tr class="light" align="center">
                    <td width="25%"><a href="http://dss.rbru.ac.th/login.php" target="_blank"><img src="img/mis/decide.jpg" width="90%"><br>ศูนย์ข้อมูลเพื่อสนับสนุนการตัดสินใจ<br>สำหนับผู้บริหาร<br><br></a></td>
                    <td width="25%"><a href="http://dservice.rbru.ac.th" target="_blank"><img src="img/mis/driver.jpg" width="90%"><br>ระบบประเมินการให้บริการ<br>ของพนักงานขับรถยนต์<br><br></a></td>
                    <td width="25%"><a href="http://tqf.rbru.ac.th" target="_blank"><img src="img/mis/tqf_tem.jpg" width="90%"><br>ระบบนำส่งข้อมูล TQF-RBRU<br>(สำหรับเจ้าหน้าที่)<br><br></a></td>
                </tr>
                <tr class="light" align="center">
                    <td width="25%"><a href="http://doc.rbru.ac.th/" target="_blank"><img src="img/mis/edoc.jpg" width="90%"><br>ระบบสารบรรณอิเล็กทรอนิกส์<br>และจัดเก็บเอกสาร (E-doc)<br><br></a></td>
                    <td width="25%"><a href="http://personnel.rbru.ac.th" target="_blank"><img src="img/mis/checkstaff.jpg" width="90%"><br>ระบบตรวจสอบ<br>ประวัติบุคลากร<br><br></a></td>
                    <td width="25%"><a href="http://www.tcas.rbru.ac.th/" target="_blank"><img src="img/mis/admis.jpg" width="90%"><br>ระบบรับสมัครนักศึกษา<br>ออนไลน์<br><br></a></td>
                </tr>
                <tr class="light" align="center">
                    <td width="25%"><a href="http://reg.rbru.ac.th/" target="_blank"><img src="img/mis/reg.jpg" width="90%"><br>ระบบบริการการศึกษา<br><br><br></a></td>
                    <td width="25%"><a href="http://assess.rbru.ac.th/assess/" target="_blank"><img src="img/mis/assess.jpg" width="90%"><br>ระบบประเมิน<br>การเรียนการสอนออนไลน์<br><br></a></td>
                    <td width="25%"><a href="http://www.ccg.rbru.ac.th/" target="_blank"><img src="img/mis/ccg.jpg" width="90%"><br>ระบบยื่นคำร้อง<br>ขอสำเร็จการศึกษาออนไลน์<br><br></a></td>

                </tr>
                <tr class="light" align="center">
                    <td width="25%"><a href="https://www.youtube.com/user/ETcenterRBRU" target="_blank"><img src="img/mis/rbru_channel.jpg" width="90%"><br>RBRU Channel<br>(VDO การเรียนการสอน)<br><br></a></td>
                    <td width="25%"><a href="http://www.rbrugoogle.rbru.ac.th/" target="_blank"><img src="img/mis/rbrugoogle.jpg" width="90%"><br>RBRU Google<br>Applications<br><br></a></td>
                    <td width="25%"><a href="http://mail.rbru.ac.th/" target="_blank"><img src="img/mis/rbrumail.jpg" width="90%"><br>RBRU<br>Google Email<br><br></a></td>
                </tr>
                <tr class="light" align="center">
                    <td width="25%"><a href="http://www.job.rbru.ac.th/" target="_blank"><img src="img/mis/job.jpg" width="90%"><br>ระบบภาวะการมีงานทำ<br>ของบัณฑิต<br><br></a></td>
                    <td width="25%"><a href="http://www.rbru.ac.th/guidance" target="_blank"><img src="img/mis/guidance.jpg" width="90%"><br>ระบบฐานข้อมูลการแนะแนว<br>การศึกษาออนไลน์<br><br></a></td>
                </tr>
                </tbody>
            </table>
        </div>
        </div>
            <br>
            
        <div class="card">
            <h4 class="card-header">ระบบอินเตอร์เน็ตและเครือข่าย</h4>
            <div class="card-body">

                <table style="border-collapse:collapse; border:none" border="0">
                    <tbody>
                    <tr class="light" align="center">
                        <td width="25%"><a href="http://www.regismac.rbru.ac.th/" target="_blank"><img src="img/mis/mac.jpg" width="90%"><br>ลงทะเบียนใช้งาน<br>เครือข่ายไร้สาย<br><br></a></td>
                        <td width="25%"><a href="http://eduroam.rbru.ac.th/" target="_blank"><img src="img/mis/eduroam.jpg" width="90%"><br>ระบบลงทะเบียน<br>Eduroam<br><br></a></td>
                        <td width="25%"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <br>
        
            </div> 
            <div id="info2" class="tabcontent" style="display: none;"> 
                <div class="card">
        <h4 class="card-header">ฐานข้อมูลอิเล็กทรอนิกส์</h4>
        <div class="card-body">

                <div class="card">
                                    <h4 class="card-header">ฐานข้อมูลอิเล็กทรอนิกส์</h4>
                                    <div class="card-body">
                                        <p>
                                            <h7> <a href="Document/condition2018.pdf" target="_blank"><strong>ข้อกำหนดในการเข้าใช้ฐานข้อมูลอิเล็กทรอนิกส์เพื่อการสืบค้น</strong></a></h7>
                                        </p>

                                        <table style="border-collapse:collapse; border:none" border="1">
                                        <thead>
                                            <tr>
                                                <th colspan="3" style="background-color:#93cdde">&nbsp;&nbsp;RBRU Library Search : ระบบการสืบค้นหนังสือ</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="light">
                                                <td style="background-color:#f7d6ff" width="25%"><center><img src="img/rbru.png" width="80"></center></td>
                                                <td width="75%">
                                                <font size="3">&nbsp;&nbsp;&nbsp;&nbsp;RBRU Library Search : ฐานข้อมูลเพื่อการสืบค้นทรัพยากรสารสนเทศ หอสมุด&nbsp;&nbsp;</font>
                                                <div id="login-online">

                                                <form name="ASRCHFORM" >
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="" id="inputDefault">
                                                    </div>
                                                    <div class="form-group">
                                                        <select class="custom-select">
                                                            <option selected="">Open this select menu</option>
                                                            <option value="1">Anywhere</option>
                                                            <option value="2">Author</option>
                                                            <option value="3">Title</option>
                                                            <option value="4">Subject</option>
                                                            <option value="5">ISBN</option>
                                                            <option value="6">ISSN</option>
                                                            <option value="7">Bib ID</option>
                                                        </select>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Search</button>
                            
                                                </form>

                                                </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        
                                        <br>

                                        <table style="border-collapse:collapse; border:none" border="1">
                                        <thead>
                                            <tr>
                                                <th colspan="3" style="background-color:#93cdde">&nbsp;&nbsp;ระบบการสืบค้น RBRU Search</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="light">
                                                <td style="background-color:#c0f3ce" width="25%"><center><img src="img/rbru.png" width="80"></center></td>
                                                <td width="75%">

                                                <form action="http://search.ebscohost.com/login.aspx" onsubmit="getURL()" method="get" target="blank">  

                                                <font size="3">&nbsp;&nbsp;&nbsp;&nbsp;RBRU Search : Discovery Service for Rambhaibarni Rajabhat University&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>
                                                
                                                <br>
                                                <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="" id="inputDefault">
                                                </div>
                                                
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" class="custom-control-input" id="defaultInline1" name="inlineDefaultRadiosExample">
                                                    <label class="custom-control-label" for="defaultInline1">Keyword</label>
                                                    </div>

                                                    <!-- Default inline 2-->
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" class="custom-control-input" id="defaultInline2" name="inlineDefaultRadiosExample">
                                                    <label class="custom-control-label" for="defaultInline2">Title</label>
                                                    </div>

                                                    <!-- Default inline 3-->
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" class="custom-control-input" id="defaultInline3" name="inlineDefaultRadiosExample">
                                                    <label class="custom-control-label" for="defaultInline3">Author</label>
                                                </div>
                                                
                                                <button type="submit" class="btn btn-primary">Search</button>

                                                </form>

                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                    



                <br>

            <table style="border-collapse:collapse; border:none" border="1">
            <thead>
                <tr>
                    <th colspan="3" style="background-color:#93cdde">&nbsp;&nbsp;ฐานข้อมูลอิเล็กทรอนิกส์ (ในไทย)</th>
                </tr>
                </thead>
                <tbody>
                <tr class="light">
                    <td width="30%"><center><img alt="ThaiLISlogo" src="img/logo_download/thailit.png" width="95" height="90"></center></td>
                    <td style="font-size:10pt;padding-left:5px;"><div align="left"><a href="http://tdc.thailis.or.th/tdc/" target="_blank"><strong>โครงการเครือข่ายระบบห้องสมุดในประเทศไทย (ThaiLIS) : </strong></a><br>
                    ให้บริการสืบค้นฐานข้อมูลเอกสารฉบับเต็ม ซึ่งเป็นเอกสารฉบับเต็มของ วิทยานิพนธ์ รายงานการวิจัยของอาจารย์ รวบรวมจากมหาวิทยาลัยต่าง ๆ ทั่วประเทศ นักศึกษา อาจารย์ และบุคลากร ในการเข้าใช้บริการนั้นจะต้องเข้าใช้งานจากคอมพิวเตอร์ ภายในห้องสมุดสมาชิก ดูรายละเอียดห้องสมุดสมาชิก ได้จากทางเลือกมหาวิทยาลัย/สถาบัน</div></td>
                </tr>
                </tbody>
            </table>
        <br>

            <table style="border-collapse:collapse; border:none" border="1">
                <thead>
                <tr>
                    <th colspan="3" style="background-color:#93cdde">&nbsp;&nbsp;ฐานข้อมูลอิเล็กทรอนิกส์ (ต่างประเทศ ที่ได้รับการสนับสนุนจาก สกอ.)</th>
                </tr>
                </thead>
                <tbody>
                <tr class="light">
                    <td width="25%"><img src="img/database_icon/ABI.png" width="100%"></td>
                    <td style="font-size:10pt;padding-left:5px;"><div align="left"><a href="http://search.proquest.com/abicomplete/ " target="_blank"><strong>ABI/INFORM Complete : </strong></a><a href="/Document/database_manual/ABI-Infromcollection2017.pdf" target="_blank">คู่มือการใช้งาน</a><br>
                    ฐานข้อมูลทางด้านธุรกิจ การโฆษณา การตลาด <br>
                    เศรษฐศาสตร์ การจัดการทรัพยากรมนุษย์ การเงิน <br>
                    ภาษี คอมพิวเตอร์ มากกว่า 1,100 รายชื่อ <br>
                    รวมถึงสารสนเทศของบริษัทฯ ต่างๆ มากกว่า 60,000 บริษัท และสามารถสืบค้น บทความฉบับเต็มได้จากวารสารทั่วโลกกว่า
                    800 รายชื่อ</div></td>
                </tr>
                <tr class="dark">
                    <td><img src="img/database_icon/ACM.png" width="100%"></td>
                    <td style="font-size:10pt;padding-left:5px;"><div align="left"><a href="http://dl.acm.org/dl.cfm" target="_blank"><strong>ACM Digital Library :</strong></a> <a href="/Document/database_manual/ACMDigitalLibrary2017.pdf" target="_blank">คู่มือการใช้งาน</a><br>
                    ฐานข้อมูลทางด้านคอมพิวเตอร์และเทคโนโลยีสารสนเทศ<br>
                    จากสิ่งพิมพ์ต่อเนื่อง จดหมายข่าว และเอกสารในการประชุมวิชาการ 
                    จัดทำโดย Association for Computing Machinery (ACM ) ให้ข้อมูลตั้งแต่ปี 1985 - ปัจจุบัน</div></td>
                </tr>
                <tr class="light">
                    <td><img src="img/database_icon/Proquest.png" width="100%"></td>
                    <td style="font-size:10pt;padding-left:5px;"><div align="left"><a href="http://search.proquest.com/pqdtglobal/ " target="_blank"><strong>ProQuest Dissertation &amp; Thesis</strong></a><a href="/Document/database_manual/ProQuest2017.pdf" target="_blank"> : คู่มือการใช้งาน</a><br>
                    ฐานข้อมูลวิทยานิพนธ์ฉบับเต็มระดับปริญญาโท
                    และปริญญาเอก ของสถาบันการศึกษาที่ได้รับการรับรอง
                    จากประเทศสหรัฐอเมริกาและแคนาดา รวมถึงบางสถาบันจาก
                    ทวีปยุโรป  เอเชีย มากกว่า 1,000 แห่ง ให้ข้อมูลวิทยานิพนธ์
                    ตั้งแต่ปี 1997 -ปัจจุบัน</div></td>
                </tr>
                <tr class="dark">
                    <td><img src="img/database_icon/springerlink.png" width="100%"></td>
                    <td style="font-size:10pt;padding-left:5px;"><div align="left"><a href="http://link.springer.com/" target="_blank"><strong>SpingerLink-Journal</strong></a> :<a href="http://www.library.rbru.ac.th/doc/ThaiLIS_TIPS/SpingerLink2017.pdf" target="_blank">คู่มือการใช้งาน</a><br>
                    ฐานข้อมูลวารสารอิเล็กทรอนิกส์ วิทยาศาสตร์เทคโนโลยีและวิทยาศาสตร์สุขภาพ ครอบคลุมวารสาร <br>
                    จำนวนเอกสารฉบับเต็ม 1,130 ชื่อ ข้อมูลปี 1997 - ปัจจุบัน </div></td>
                </tr>
                <tr class="light">
                    <td><img src="img/database_icon/web%20of%20sci.png" width="100%"></td>
                    <td style="font-size:10pt;padding-left:5px;"><div align="left"><a href="http://webofknowledge.com/" target="_blank"><strong>Web of Science</strong></a><a href="/Document/database_manual/Webofscience2017.pdf" target="_blank"> : คู่มือการใช้งาน</a><br>
                    ฐานข้อมูลบรรณานุกรมและสาระสังเขป<br>
                    พร้อมการอ้างอิงและอ้างถึง ครอบคลุมสาขาวิชาหลัก<br>
                    ทั้งวิทยาศาสตร์ สังคมศาสตร์ และ มนุษย์ศาสตร์ <br>
                    จากวารสารประมาณ 9,200 รายชื่อ <br>
                    ให้ข้อมูลตั้งแต่ปี 2001 - ปัจจุบัน</div></td>
                </tr>
                <tr class="dark">
                    <td><img src="img/database_icon/acs.png" width="100%"></td>
                    <td style="font-size:10pt;padding-left:5px;"><div align="left"><a href="http://pubs.acs.org/" target="_blank"><strong>American Chemical Society Jounal</strong></a><a href="/Document/database_manual/Webofscience2017.pdf" target="_blank"> : คู่มือการใช้งาน</a><br>
                    ฐานข้อมูลรวบรวมบทความและงานวิจัย <br>
                    จากวารสารทางด้านเคมีและวิทยาศาสตร์ที่เกี่ยวข้อง<br>
                    โดยรวบรวมจากวารสารทั้งที่พิมพ์เป็นรูปเล่น วารสารอิเล็กทรอนิกส์ (Electronic Journals)ย้อนหลังตั้งแต่ปี 1996</div></td>
                </tr>
                <tr class="light">
                    <td><img src="img/database_icon/asc.png" width="100%"></td>
                    <td style="font-size:10pt;padding-left:5px;"><div align="left"><a href="http://search.ebscohost.com/login.aspx?authtype=ip,uid&amp;profile=ehost&amp;defaultdb=a9h" target="_blank"><strong>Academic Search Complete</strong></a><br>   
                    ฐานข้อมูลสหสาขาวิชาที่มีขนาดใหญ่และดีที่สุด ครอบคลุมสาขาวิชาจำนวนมากที่สุด ประกอบด้วยวารสารที่มีข้อมูลฉบับเต็มมากกว่า 8,500ชื่อเรื่อง และครอบคลุมทุกสาขาวิชา</div></td>
                </tr>
                <tr class="dark">
                    <td><img src="img/database_icon/casc.png" width="100%"></td>
                    <td style="font-size:10pt;padding-left:5px;"><div align="left"> <a href="http://search.ebscohost.com/login.aspx?authtype=ip,uid&amp;group=main&amp;profile=ehost&amp;defaultdb=iih" target="_blank"><strong>Computers &amp; Applied Sciences Complete</strong></a><br>
                    เป็นฐานข้อมูลที่ครอบคลุมขอบเขตการ    วิจัยและการพัฒนาในสาขาวิทยาการคอมพิวเตอร์และวิทยาศาสตร์ประยุกต์ CASC มีการจัดดัชนีและสาระสังเขปของวารสารเชิง    วิชาการ สิ่งพิมพ์โดยมืออาชีพ และแหล่งอ้างอิงอื่น ๆ จากรายการทรัพยากรอันหลากหลายมากกว่า 2,000 รายการ นอกจากนี้ ยังให้    บริการข้อมูลฉบับเต็มของวารสารอีกกว่า 950 ฉบับ</div></td>
                </tr>
                <tr class="light">
                    <td><img src="img/database_icon/edu.png" width="100%"></td>
                <td style="font-size:10pt;padding-left:5px;"><div align="left"><a href="http://search.ebscohost.com/login.aspx?authtype=ip,uid&amp;group=main&amp;profile=ehost&amp;defaultdb=ehh" target="_blank"><strong>Education Research Complete</strong></a><br>
                    แหล่งทรัพยากรออนไลน์ที่น่าเชื่อถือ<br>
                    สำหรับงานวิจัยด้านการศึกษา โดยครอบคลุมหัวข้อเกี่ยวกับการศึกษา<br>
                    ในทุกระดับตั้งแต่ปฐมวัยไปจนถึงการศึกษาระดับที่สูงขึ้น </div></td>
                </tr>

                <tr class="light">
                    <td><img src="img/database_icon/ebsco.png" width="100%"></td>
                <td style="font-size:10pt;padding-left:5px;"><div align="left"><a href="http://search.ebscohost.com/login.aspx?authtype=ip,uid&amp;group=main&amp;profile=ehost&amp;defaultdb=nlebk" target="_blank"><strong>eBooks on EBSCOhost </strong></a><br>
                    หนังสืออนไลน์ที่ผสานฟังก์ชันที่เป็นประโยชน์เพื่อการใช้งานอย่างง่ายของ EBSCOhost ทำให้ eBooks on EBSCOhost สามารถตอบสนองการใช้งานได้อย่างสะดวกสบาย  </div></td>
                </tr>


                <tr class="dark">
                    <td><img src="img/database_icon/willson.png" width="100%"></td>
                    <td style="font-size:10pt;padding-left:5px;"><div align="left"><a href="http://search.ebscohost.com/login.aspx?authtype=ip,uid&amp;groupid=main&amp;profile=ehost&amp;defaultdb=asf,aft,bai,eft,gft,hft,lft,llf,ofm,rgm,ssf" target="_blank"><strong>H.W. Wilson (12 Subjects)</strong></a><a href="http://search.ebscohost.com" target="_blank"></a><br>
                    ฐานข้อมูลดรรชนี สาระสังเขป และเอกสารฉบับเต็มของบริษัท H.W. Wilson ครอบคลุมทุกสาขาวิชา ได้แก่ วิทยาศาสตร์ประยุกต์และเทคโนโลยี ศิลปะ ธุรกิจ การศึกษา วิทยาศาสตร์ทั่วไป การศึกษา มนุษยศาสตร์ บรรณารักษ์และสารสนเทศศาสตร์ สังคมศาสตร์ กฎหมาย วิทยาศาสตร์ชีวภาพ และวิทยาศาสตร์เกษตร  </div></td>
                </tr>
                <tr class="light">
                    <td><img src="img/database_icon/emerald.png" width="100%"></td>
                    <td style="font-size:10pt;padding-left:5px;"><div align="left"><a href="http://www.emeraldinsight.com" target="_blank"><strong>Emerald Management (EM92)</strong></a><a href="/Document/database_manual/Emerald2017.pdf" target="_blank">: คู่มือการใช้งาน</a><br>
                    เป็นฐานข้อมูลครอบคุลมสาขาวิชาทางด้านการจัดการ ได้แก่ การเงินและบัญชี ระบบอัตโนมัติขั้นสูง กฏหมายและจริยธรรมทางธุรกิจ คณิตศาสตร์คอมพิวเตอร์ เศรษฐศาสตร์การศึกษา การผลิตและการบรรจุภัณฑ์อิเล็กทรอนิกส์ บริษํทและนวัตกรรม การดูแลสุขภาพ การจัดการทรัพยากรมนุษย์ ฯลฯ </div></td>
                </tr>
                <tr class="dark">
                    <td><img src="img/database_icon/sciDirect.png" width="100%"></td>
                    <td style="font-size:10pt;padding-left:5px;"><div align="left"><a href="http://www.sciencedirect.com" target="_blank"><strong>ScienceDirect</strong></a><a href="http://www.sciencedirect.com/" target="_blank"></a><br>
                    เป็นฐานข้อมูลบรรณานุกรมและเอกสารฉบับเต็ม หนังสือวารสารด้านวิทยาศาสตร์ เทคโนโลยีและวิทยาศาสตร์การแพทย์ สามารถดูข้อมูลย้อนหลังตั้งแต่ปี 1995 - ปัจจุบัน</div></td>
                </tr>
                <tr class="light">
                    <td><img src="img/database_icon/Discovery%20Service.png" width="100%"></td>
                    <td style="font-size:10pt;padding-left:5px;"><div align="left"><a href="http://search.ebscohost.com/login.aspx?authtype=ip,guest,uid&amp;custid=ns016751&amp;groupid=main&amp;profile=eds" target="_blank"><strong>EBSCO Discovery Service (EDS)</strong></a><a href="https://search.ebscohost.com" target="_blank"></a><br>
                    เป็นฐานข้อมูลที่ครอบคลุมสหสาขาวิชา เช่น ศึกษาศาสตร์ ครุศาสตร์ ศิลปศาสตร์ นิเทศศาสตร์ วิทยาการจัดการ </div></td>
                </tr>

            <tr class="light">
                    <td><img src="img/database_icon/cmmc.png" width="100%"></td>
                    <td style="font-size:10pt;padding-left:5px;"><div align="left"><a href="http://search.ebscohost.com/login.aspx?authtype=ip,uid&amp;profile=ehost&amp;defaultdb=ufh" target="_blank"><strong>Communication &amp; Mass Media Complete </strong></a><a href="https://search.ebscohost.com" target="_blank"></a><br>
                ซึ่งเป็นฐานข้อมูลชั้นนำระดับโลก เพื่องานวิจัยที่มีคุณภาพที่เกี่ยวข้องกับสาขาวิชาวารสารศาสตร์ นิเทศศาสตร์ การสื่อสารมวลชนและภาษาศาสตร์ CMMC ประกอบด้วยเนื้อหาของ CommSearch </div></td>
                </tr>

                </tbody>
            </table>
        <br>

            <table style="border-collapse:collapse; border:none" border="1">
                <thead>
                <tr>
                    <th colspan="3" style="background-color:#93cdde">&nbsp;&nbsp;ฐานข้อมูลหนังสืออิเล็กทรอนิกส์ Ebook</th>
                </tr>
                </thead>
                <tbody>
                <tr class="light">
                    <td width="25%"><a href="http://portal.igpublish.com/iglibrary/search/" target="_blank"><strong>iG Library</strong></a></td>
                    <td><div align="left"><a href=".Document/database_manual/iGLibraryManual2016.pdf" target="_blank"><strong>: คู่มือการใช้งาน</strong></a></div></td>
                </tr>
                <tr class="dark">
                    <td><img src="img/database_icon/IGLib.png" width="100%"></td>
                    <td style="font-size:10pt;padding-left:5px;"><div align="left"> <a href=".Document/database_manual/iGLibraryManual2016.pdf" target="_blank"> <strong>iG Library</strong></a> ฐานข้อมูลหนังสืออิเล็กทรอนิกส์ (e-Book) <br>
                    ของ iG Publishing มีเนื้อหาครอบคลุมสาขาวิชาการบริหารและจัดการธุรกิจ เศรษฐศาสตร์ การเมืองการปกครอง ธรรมาภิบาล กฎหมาย ศึกษาศาสตร์ ศาสตร์ว่าด้วยการจัดการ<br>
                    ห้องสมุด ภาษาและภาษาศาสตร์ วิทยาศาสตร์<br>
                    และเทคโนโลยี เป็นต้น สามารถ Copy, Print, Download, แปลเป็นภาษาต่าง ๆ ได้ พร้อมทั้ง Dictionary และ Function การใช้งานอื่น ๆ</div></td>
                </tr>
                </tbody>
                <tbody>
                <tr class="light">
                    <td width="25%"><a href="http://site.ebrary.com/lib/rbrulib/home.action" target="_blank"><strong>e ebrary</strong></a></td>
                    <td><div align="left"><a href=".Document/database_manual/ebrary_brochure(Thai).pdf" target="_blank"><strong>: คู่มือการใช้งาน</strong></a></div></td>
                </tr>
                    <tr class="dark">
                    <td><img src="img/database_icon/ebrary.png" width="100%"></td>
                    <td style="font-size:10pt;padding-left:5px;"><div align="left"> <a href="http://site.ebrary.com/lib/rbrulib/home.action" target="_blank"> <strong>e ebrary</strong></a> เป็นฐานข้อมูลหนังสืออิเล็กทรอนิกส์( e-Book )ก่อตั้งขึ้นในปี 1999 ที่มีเนื้อหาครอบคลุมสาขาวิชาศึกษาศาสตร์ ศิลปกรรมศาสตร์ ภาษาและวรรณคดี การท่องเที่ยว มนุษย์และสังคมศาสตร์ การเมืองการปกครอง กฎหมาย โลจิสติกส์ อาหาร เกษตรศาสตร์ วิทยาศาสตร์และเทคโนโลยี แบบ Perpetual สามารถ Print, Copy และมีพร้อม Function การทำงาน อาทิ พจนานุกรม สารานุกรม แปลภาษาต่าง ๆ</div></td>
                </tr>
                </tbody>        
                        
                
            </table>
        <br>

            <table style="border-collapse:collapse; border:none" border="1">
                <thead>
                <tr>
                    <th colspan="3" style="background-color:#93cdde">&nbsp;&nbsp;ฐานข้อมูลอิเล็กทรอนิกส์ (ทดลองใช้งาน)</th>
                </tr>
                </thead>
                <tbody>          
                <tr class="light">
                    <td width="25%"><img src="img/database_icon/1Academic-focus.jpg" width="100%"></td>
                    <td style="font-size:10pt;padding-left:5px;"><div align="left"><a href="http://cstm.cnki.net/stmt" target="_blank"><strong>ฐานข้อมูล Academic Focus :</strong></a><br>
                    เป็นฐานข้อมูลที่รวบรวมวารสารที่จัดพิมพ์ด้วยภาษาอังกฤษเป็นต้นฉบับในประเทศจีน 136 ชื่อเรื่อง วารสารโดดเด่นที่แปลภาษาจีนเป็นภาษาอังกฤษ 132 ชื่อเรื่อง และงานประชุมวิชาการนานาชาติที่จัดการประชุมในประเทศจีน 27,300 บทความ เป็นฐานข้อมูลที่ให้บริการด้านจีนศึกษาสำหรับบุคคลที่ไม่รู้จักภาษาจีน</div></td>
                </tr>
                <tr class="dark">
                    <td width="25%"><img src="img/database_icon/2CAJ.jpg" width="100%"></td>
                    <td style="font-size:10pt;padding-left:5px;"><div align="left"><a href="http://oversea.cnki.net/kns55/brief/result.aspx?dbPrefix=CJFD" target="_blank"><strong>China Academic Journals Full-Text Database :</strong></a><br>
                    รวบรวมวารสารวิชาการดีเด่นของประเทศจีนทุกสาขาวิชา มีวารสาร 1 หมื่นกว่าชื่อเรื่อง/61 ล้านบทความ</div></td>
                </tr>          
                <tr class="dark">
                    <td width="25%"><img src="img/database_icon/sci.jpg" width="100%"></td>
                    <td style="font-size:10pt;padding-left:5px;"><div align="left"><a href="http://search.ebscohost.com/login.aspx?authtype=ip,uid&amp;profile=ehost&amp;defaultdb=sch" target="_blank"><strong>ฐานข้อมูล Science Reference Center</strong></a> :<br>ประกอบไปด้วยบทความฉบับเต็มจำนวนหลายร้อยบทความ จากสารานุกรมทางวิทยาศาสตร์ หนังสืออ้างอิง วารสารและแหล่งข้อมูลที่น่าเชื่อถือได้อื่น ๆ นอกจากนี้ฐานข้อมูลยังประกอบไปด้วยคอลเลกชันภาพขนาดใหญ่ที่มีคุณภาพสูงมากกว่า 275,000 ภาพ จากแหล่งต่าง ๆ เช่น UPI, Getty, NASA, Nature Picture Library<div></div></div></td>
                </tr>
                <tr class="light">
                    <td width="25%"><img src="img/database_icon/3CMT.jpg" width="100%"></td>
                    <td style="font-size:10pt;padding-left:5px;"><div align="left"><a href="http://oversea.cnki.net/kns55/brief/result.aspx?dbPrefix=CMFD" target="_blank"><strong>China Master's Theses Full-Text Database</strong></a> :<br>เป็นฐานข้อมูลที่รวบรวมวิทยานิพนธ์ระดับปริญญาโทของสถาบันการศึกษาที่ได้รับการรับรองจากประเทศจีน มากกว่า 740 แห่ง ประกอบไปด้วยข้อมูล 3.2 ล้านบทความ<div></div></div></td>
                </tr>
                <tr class="dark">
                    <td width="25%"><img src="img/database_icon/4CDoctor.jpg" width="100%"></td>
                    <td style="font-size:10pt;padding-left:5px;"><div align="left"><a href="http://oversea.cnki.net/kns55/brief/result.aspx?dbPrefix=CDFD" target="_blank"><strong>China Doctoral Dissertations Full-Text Database</strong></a> :<br>เป็นฐานข้อมูลที่รวบรวมวิทยานิพนธ์ระดับปริญญาเอกของสถาบันการศึกษาที่ได้รัยการรับรองจากประเทศจีน มากกว่า 450 แห่ง ประกอบไปด้วยข้อมูล 3 แสนบทความ<div></div></div></td>
                </tr>          
                </tbody>
            </table>
            <br>
            
            <table style="border-collapse:collapse; border:none" border="1">
                <thead>
                <tr>
                    <th colspan="3" style="background-color:#93cdde">&nbsp;&nbsp;ห้องสมุดมารวย ตลาดหลักทรัพย์แห่งประเทศไทย</th>
                </tr>
                </thead>
                <tbody>
                <tr class="light">
                    <td width="25%"><img src="img/database_icon/maruay.jpg" width="100%"></td>
                    <td style="font-size:10pt;padding-left:5px;"><div align="left"><a href="http://maruey.2ebook.com/library/login_user" target="_blank"><strong>Maruey eLibrary : </strong></a><br>
                    Maruey eLibrary อ่านหนังสือออนไลน์ได้ทุกที่ทุกเวลา มารู้ที่มารวย ขอเชิญทดลองอ่านหนังสือออนไลน์ของห้องสมุดมารวย ตลาดหลักทรัพย์แห่งประเทศไทย Maruey eLibrary อ่านหนังสือออนไลน์ได้ทุกที่ทุกเวลา มารู้ที่มารวย โดยคลิกที่ ชื่อหนังสือ และเลือก อ่านหนังสือ มีหนังสือห้องสมุดมารวยและหนังสือลิขสิทธิ์สำนักพิมพ์ให้เลือกอ่านมากกว่า 400 เรื่อง</div></td>
                </tr>
                </tbody>
            </table>
            </div>  
            </div>  

            
            <br>

        <center>
            <h7><a href=".Document/database_manual/Database Online Report2017.pdf"><strong>สถิติการใช้งานฐานข้อมูลอิเล็กทรอนิกส์ มหาวิทยาลัยราชภัฏรำไพพรรณี 2560 </strong></a></h7>
        </center>
        <br>
        <br>
        
            </div> 
            <div id="info3" class="tabcontent" style="display: none;"> 
                
        <div class="card">
            <h4 class="card-header">🗐 <u>ระบบศูนย์ข้อมูลและงานวิจัย</u></h4>
            <div class="card-body">

                <table style="border-collapse:collapse; border:none" border="0">
                    <tbody>
                    <tr class="light" align="center">
                        <td width="25%"><a href="http://www.etheses.rbru.ac.th/" target="_blank"><img src="img/mis/ethesis.jpg" width="90%"><br><strong>RBRU eTheses</strong><br>ฐานข้อมูลวิทยานิพนธ์ อิเล็กทรอนิกส์<br><br></a></td>
                        <td width="25%"><a href="http://www.eresearch.rbru.ac.th/" target="_blank"><img src="img/mis/eresearch.jpg" width="90%"><br><strong>RBRU eResearch</strong><br>ฐานข้อมูลวิจัย อิเล็กทรอนิกส์<br><br></a></td>
                        <td width="25%"><a href="http://www.learning.rbru.ac.th/" target="_blank"><img src="img/mis/learning.jpg" width="90%"><br><strong>RBRU eLearning</strong><br>การเรียนการสอนอิเล็กทรอนิกส์<br><br></a></td>
                    </tr>
                    <tr class="light" align="center">
                        <td width="25%"><a href="http://www.eculture.rbru.ac.th/" target="_blank"><img src="img/mis/eculture.jpg" width="90%"><br><strong>RBRU eCulture</strong><br>ฐานข้อมูลท้องถิ่นจังหวัดจันทบุรี<br><br></a></td>
                        <td width="25%"><a href="http://www.rbru.ac.th/sbk/" target="_blank"><img src="img/mis/sbk.jpg" width="90%"><br>หอจดหมายเหตุ<br>มหาวิทยาลัยราชภัฏรำไพพรรณี<br><br></a></td>
                        <td width="25%"><a href="http://www.rbl.rbru.ac.th/" target="_blank"><img src="img/mis/vtls.jpg" width="90%"><br>ระบบสืบค้นหนังสือ<br>VTLS<br><br></a></td>
                    </tr>
                    <tr class="light" align="center">
                        <td width="25%"><a href="http://rbru.vlcloud2.net/" target="_blank"><img src="img/mis/digitalLibrary.jpg" width="90%"><br>ระบบห้องสมุดดิจิตอล<br>Digital Library<br><br></a></td>
                        <td width="25%"><a href="http://www.academy.rbru.ac.th/" target="_blank"><img src="img/mis/rbruacademy.jpg" width="90%"><br><strong>RBRU Academy</strong><br>การจัดการสื่อการเรียนรู้แบบมีส่วนร่วม<br>ผ่านสื่อสังคมออนไลน์<br><br></a></td>
                        <td width="25%"><a href="http://www.vod.rbru.ac.th" target="_blank"><img src="img/mis/vod.jpg" width="90%"><br><strong>RBRU VOD</strong><br>วีดีโอบันทึกการเรียนการสอน<br>ย้อนหลัง<br><br></a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

       
        
            </div> 
            <br>
            <h5>สอบถามปัญหาแก้ใช้งานระบบ ได้ที่ :</h5>
            <ul>
            <p><b>งานสารสนเทศ :</b> โทร.<br><b>งานระบบเครือข่าย :</b> โทร.<br><b>งานบริการและซ่อมบำรุง :</b> โทร.<br><b>งานวิทยพัฒนา หอสมุด :</b> โทร.</p>
            </ul>
            <br> 


            <script>
            function openCity(evt, cityName) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }
                document.getElementById(cityName).style.display = "block";
                evt.currentTarget.className += " active";
            }
            
            document.getElementById("defaultOpen").click();
            </script>

            </div>

            </div>
            

            <div class="col-sm-3">
                <hr>
                <main-cccmenu></main-cccmenu>
            </div>
          
      </div>
    </div>



    <main-footer></main-footer>






</body>
</html>



