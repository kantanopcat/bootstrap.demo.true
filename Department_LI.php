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
                <div class="row">
                    <div class="col-sm-12">

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

                    </div>
                </div>
                
                <div class="row">

                    <div class="col-sm-5">
                        <!--  -->
                        <div class="card" style="width:100%">
                        <div class="card-header">
                            <h4>แนะนำทรัพยากรสารสนเทศใหม่</h4>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                            <div class="mrgauto padd5 row  ">
                                    <span class="col-md-12">
                                    
                                    <div class="row">
                                        <div class="col-sm-4">
                                        <a href="http://www.library.rbru.ac.th/detail_book.php?no=256" target="blank">
                                        <span class="glyphicon glyphicon-off"><img src="img/new_book/work.jpg" style="width:100%"></span>
                                        </a>
                                        </div>
                                        <div class="col-sm-4">
                                        <a href="http://www.library.rbru.ac.th/detail_book.php?no=254" target="blank">
                                        <span class="glyphicon glyphicon-off"><img src="img/new_book/myaner.jpg" style="width:100%"></span>
                                        </a>
                                        </div>
                                        <div class="col-sm-4">
                                        <a href="http://www.library.rbru.ac.th/detail_book.php?no=255" target="blank">
                                        <span class="glyphicon glyphicon-off"><img src="img/new_book/forget.jpg" style="width:100%"></span>
                                        </a>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-4">
                                        <a href="http://opac01.rbru.ac.th/" target="blank">
                                        <span class="glyphicon glyphicon-off"><img src="img/new_book/2017-10-04-71161.jpg" style="width:100%"></span>
                                        </a>
                                        </div>
                                        <div class="col-sm-4">
                                        <a href="http://opac01.rbru.ac.th/" target="blank">
                                        <span class="glyphicon glyphicon-off"><img src="img/new_book/2017-10-04-65532.jpg" style="width:100%"></span>
                                        </a>
                                        </div>
                                        <div class="col-sm-4">
                                        <a href="http://opac01.rbru.ac.th/" target="blank">
                                        <span class="glyphicon glyphicon-off"><img src="img/new_book/2017-10-04-43609.jpg" style="width:100%"></span>
                                        </a>
                                        </div>
                                    </div>
                                    <br>
                                    
                                    <a href="http://www.library.rbru.ac.th/indextem.php?p=bookNewMore" target="blank"> <p style="font-size:12pt">เพิ่มเติม 》</p></a>


                                    </span>
                            </div>    
                            </li>
                        </ul>
                        </div>


                        <div class="card" style="mex-width:100%">
                                <div class="card-header">
                                    <h4>ลิงค์ฐานข้อมูลใน-นอก ประเทศ</h4>
                                </div>
                                
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                    <div class="mrgauto padd5 row  ">
                                            <span class="col-md-12">
                                        <div id="login-online">   
                                 <label> 
                                                <select class="input"  name="select3">
                                                <option value="" selected="selected">ห้องสมุดในต่างประเทศ</option>
                                                <option value="http://www.american.edu/library/">American University  Library</option>
                                                <option value="http://www.bnf.fr">La  Bibliotheque National de Franc  </option>
                                                <option value="http://www.bu.edu/library">Boston University  Libraries</option>
                                                <option value="http://www.lib.cam.ac.uk"> Cambridge  University Library</option>
                                                <option value="http://catalog.cwru.edu">Case Western Reserve University</option>
                                                <option value="http://www.columbia.edu/cu/lweb">  Columbia University  Library</option>
                                                <option value="http://www.andrews.edu/library"> James White Library, Andrews University</option>
                                                <option value="http://www.lasalle.edu/library">La Salle University</option>
                                                <option value="http://www.loc.gov">  Library of Congress</option>
                                                <option value="http://www.uwp.edu/information.services/library">Library  Learning Center</option>
                                                <option value="http://er.lib.msu.edu">  Michigan State University Libraries</option>
                                                <option value="http://libraries.mit.edu">MIT Libraries</option>
                                                <option value="http://www.library.northwestern.edu">Northwestern University Library</option>
                                                <option value="http://www.lib.ohio-state.edu">Ohio State University  libraries</option>
                                                <option value="http://www.ox.ac.uk/libraries">Oxford University Library</option>
                                                <option value="http://www.princeton.edu/index.shtml">Princeton University</option>
                                                <option value="http://sun.iwu.edu/library">Sheean Library</option>
                                                <option value="http://www.libra.titech.ac.jp/welcome_e.html">Tokyo Institute  of Technology Library</option>
                                                <option value="http://library.berkeley.edu"> UC Berkeley  Libraries</option>
                                                <option value="http://lib.bsu.edu">University Libraries, Ball State University</option>
                                                <option value="http://www.library.pitt.edu">University of Pittsburgh</option>
                                                <option value="http://www.grainger.uiuc.edu">University of Illinois  at Urbana-Campaign</option>
                                                <option value="http://www.lib.umich.edu">University of Michigan  University Library</option>
                                                <option value="http://www.ncl.ac.uk/library"> University of Newcastle Libraries</option>
                                                <option value="http://www.library.unsw.edu.au">University of New South Wales</option>
                                                <option value="http://library.wustl.edu"> Washington University Libraries</option>
                                                <option value="http://www.library.yale.edu">Yale University Library</option>
                                                </select>
                                </label>
                                <label>
                                            <select class="input" onchange="window.open(this.options[this.selectedIndex].value,'_blank')" size="1" name="select">
                                                <option value="" selected="selected">ห้องสมุดในประเทศไทย</option>
                                                <option value="http://www.car.chula.ac.th/">จุฬาลงกรณ์มหาวิทยาลัย</option>
                                                <option value="http://cenlibk.bu.ac.th">มหาวิทยาลัยกรุงเทพ</option>
                                                <option value="http://www.lib.ku.ac.th"> มหาวิทยาลัยเกษตรศาสตร์</option>
                                                <option value="http://library.kbu.ac.th">มหาวิทยาลัยเกษมบัณฑิต</option>
                                                <option value="http://www.dpu.ac.th/laic/">มหาวิทยาลัยธุรกิจบัณฑิตย์</option>
                                                <option value="http://www.library.kku.ac.th/library/"> มหาวิทยาลัยขอนแก่น</option>
                                                <option value="http://library.cmu.ac.th/cmul/"> มหาวิทยาลัยเชียงใหม่</option>
                                                <option value="http://www.lib.tsu.ac.th/"> มหาวิทยาลัยทักษิณ</option>
                                                <option value="http://www.lib.kmutt.ac.th">มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าธนบุรี </option>
                                                <option value="http://www.lib.mut.ac.th"> มหาวิทยาลัยเทคโนโลยีมหานคร</option>
                                                <option value="http://library.tu.ac.th">มหาวิทยาลัยธรรมศาสตร์</option>
                                                <option value="http://www.lib.buu.ac.th">สำนักหอสมุด มหาวิทยาลัยบูรพา</option>
                                                <option value="http://www.library.msu.ac.th/"> มหาวิทยาลัยมหาสารคาม</option>
                                                <option value="http://www.li.mahidol.ac.th">มหาวิทยาลัยมหิดล</option>
                                                <option value="http://library.rsu.ac.th/"> มหาวิทยาลัยรังสิต </option>
                                                <option value="http://www.lib.ru.ac.th"> มหาวิทยาลัยรามคำแหง</option>
                                                <option value="http://lib.swu.ac.th/">มหาวิทยาลัยศรีนครินทรวิโรฒ</option>
                                                <option value="http://clm.wu.ac.th/web/">มหาวิทยาลัยวลัยลักษณ์</option>
                                                <option value="http://library.spu.ac.th">  มหาวิทยาลัยศรีปทุม</option>
                                                <option value="http://www.thapra.lib.su.ac.th"> มหาวิทยาลัยศิลปกร วังท่าพระ</option>
                                                <option value="http://www.snamcn.lib.su.ac.th"> มหาวิทยาลัยศิลปกร พระราชวังสนามจันทร์</option>
                                                <option value="http://tanee.psu.ac.th"> มหาวิทยาลัยสงขลานครินทร์ วิทยาเขตปัตตานี</option>
                                                <option value="http://e-library.siam.edu/">มหาวิทยาลัยสยาม</option>
                                                <option value="http://library.stou.ac.th/">มหาวิทยาลัยสุโขทัยธรรมาธิราช</option>
                                                <option value="http://library.utcc.ac.th/onlinethesis/"> มหาวิทยาลัยหอการค้าไทย</option>
                                                <option value="http://www.lib.hcu.ac.th/"> มหาวิทยาลัยหัวเฉียวเฉลิมพระเกียรติ</option>
                                                <option value="http://www.library.au.edu/"> มหาวิทยาลัยอัสสัมชัญ</option>
                                                <option value="http://www.lib.ubu.ac.th"> มหาวิทยาลัยอุบลราชธานี</option>
                                                <option value="http://www.lib.kmitl.ac.th/"> สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารฯ </option>
                                                <option value="http://library.kmutnb.ac.th/">ม.เทคโนโลยีพระจอมเกล้าพระนครเหนือ</option>
                                                <option value="http://library.nida.ac.th/">  สถาบันบัณฑิตพัฒนบริหารศาสตร์</option>
                                                <option value="http://acit.kru.ac.th/"> มหาวิทยาลัยราชภัฏกาญจนบุรี </option>
                                                <option value="http://arit.kpru.ac.th/arit/">มหาวิทยาลัยราชภัฏกำแพงเพชร</option>
                                                <option value="http://arit.chandra.ac.th/"> มหาวิทยาลัยราชภัฏจันทรเกษม</option>
                                                <option value="http://aritc.crru.ac.th/aritc/"> มหาวิทยาลัยราชภัฏเชียงราย </option>
                                                <option value="http://www.cmri.ac.th">มหาวิทยาลัยราชภัฏเชียงใหม่</option>
                                                <option value="http://library.rits.ac.th">มหาวิทยาลัยราชภัฎเทพสตรี ลพบุรี</option>
                                                <option value="http://www.rinp.ac.th/Library/index.html">มหาวิทยาลัยราชภัฏนครปฐม</option>
                                                <option value="http://arc.rint.ac.th">มหาวิทยาลัยราชภัฏนครศรีธรรมราช</option>
                                                <option value="http://www.rink.ac.th/library/Myhomepage/main.html">มหาวิทยาลัยราชภัฏนครสวรรค์</option>
                                                <option value="http://arcbs.bansomdej.ac.th"> มหาวิทยาลัยราชภัฏบ้านสมเด็จเจ้าพระยา</option>
                                                <option value="http://liba.ribr.ac.th">มหาวิทยาลัยราชภัฏบุรีรัมย์</option>
                                                <option value="http://train.ripn.ac.th/library.html">มหาวิทยาลัยราชภัฎพระนคร</option>
                                                <option value="http://www.ripa.ac.th/library.html">มหาวิทยาลัยราชภัฏพระนครศรีอยุธยา</option>
                                                <option value="http://library.rip.ac.th">มหาวิทยาลัยราชภัฏพิบูลสงคราม</option>
                                                <option value="http://gold.rajabhat.edu/thai.htm">มหาวิทยาลัยราชภัฏเพชรบุรี</option>
                                                <option value="http://lib.ripw.ac.th/library/index.asp">มหาวิทยาลัยราชภัฏเพชรบุรีวิทยาลงกรณ์</option>
                                                <option value="http://rbl2.rb.ac.th">มหาวิทยาลัยราชภัฏรำไพพรรณี</option>
                                                <option value="http://www.arc.rilp.ac.th">มหาวิทยาลัยราชภัฏลำปาง</option>
                                                <option value="http://yala.riy.ac.th/~library">มหาวิทยาลัยราชภัฏยะลา</option>
                                                <option value="http://library.rirc.ac.th">มหาวิทยาลัยราชภัฎราชนครินทร์</option>
                                                <option value="http://lib.riska.ac.th">มหาวิทยาลัยราชภัฏสงขลา</option>
                                                <option value="http://libserver.risurin.ac.th/web/library.htm">มหาวิทยาลัยราชภัฎสุรินทร์</option>
                                                <option value="http://library.riss.ac.th">มหาวิทยาลัยราชภัฏสวนสุนันทา</option>
                                                <option value="http://weblibrary.rimc.ac.th">มหาวิทยาลัยราชภัฏหมู่บ้านจอมบึง</option>
                                                <option value="http://library.riudon.ac.th">มหาวิทยาลัยราชภัฏอุดรธานี</option>
                                                <option value="http://library.riu.ac.th">มหาวิทยาลัยราชภัฏอุตรดิตถ์</option>
                                                <option value="http://whodoc.moph.go.th"> ศูนย์เอกสารองค์การอนามัยโลก</option>
                                                <option value="http://rtaf.mi.th/library">หอสมุดกองทัพอากาศ</option>
                                                <option value="http://www.parliament.go.th/library">หอสมุดรัฐสภา</option>
                                                <option value="http://www.span.com.au/nlt">หอสมุดแห่งชาติ</option>
                                                <option value="http://www.krisdika.go.th/html/fslaw.htm">ห้องสมุดกฏหมาย</option>
                                                <option value="http://www.tat.or.th/tat/library">ห้องสมุดการท่องเที่ยวแห่งประเทศไทย</option>
                                                <option value="http://egatlib.egat.or.th">ห้องสมุดการไฟฟ้าฝ่ายผลิตแห่งประเทศไทย</option>
                                                <option value="http://kanchanapisek.or.th/kp1/lib">ห้องสมุดความรู้</option>
                                                <option value="http://thaiastro.nectec.or.th/library/library.html">ห้องสมุดดาราศาสตร์</option>
                                                <option value="http://www.nectec.or.th/org/tab/service/services.htm">ห้องสมุดแถบเสียง</option>
                                                <option value="http://www.geocities.com/thailibrary">ห้องสมุดไทย</option>
                                                <option value="http://www.wphat.com/index_idx.htm">ห้องสมุดวิทยพัฒน์</option>
                                                <option value="http://www.riclib.nrct.go.th">ห้องสมุดศูนย์ข้อสนเทศการวิจัย</option>
                                                <option value="http://elib.fda.moph.go.th/library">ห้องสมุดสำนักงานคณะกรรมการอาหารและยา</option>
                                                <option value="http://server.tiac.or.th/tiacweb/viewj.html">TIAC</option>
                                            </select>
                            </label>
                            <label>

                                                <select name="select2" size="1" class="input" onchange="window.open(this.options[this.selectedIndex].value,'_blank')">
                                                <option>สถาบันการศึกษา</option>
                                                <option value="http://www.chula.ac.th">จุฬาลงกรณ์มหาวิทยาลัย</option>
                                                <option value="http://www.bu.ac.th">มหาวิทยาลัยกรุงเทพฯ</option>
                                                <option value="http://www.ku.ac.th">มหาวิทยาลัยเกษตรศาสตร์</option>
                                                <option value="http://www.kbu.ac.th">มหาวิทยาลัยเกษมบัณฑิต</option>
                                                <option value="http://www.krirk.ac.th">มหาวิทยาลัยเกริก</option>
                                                <option value="http://www.kku.ac.th">มหาวิทยาลัยขอนแก่น</option>
                                                <option value="http://www.chiangmai.ac.th">มหาวิทยาลัยเชียงใหม่</option>
                                                <option value="http://www.stjohn.ac.th">มหาวิทยาลัยเซนต์จอห์น</option>
                                                <option value="http://www.tsu.ac.th">มหาวิทยาลัยทักษิณ</option>
                                                <option value="http://www.kmutt.ac.th">มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าธนบุรี</option>
                                                <option value="http://www.mut.ac.th">มหาวิทยาลัยเทคโนโลยีมหานคร</option>
                                                <option value="http://www.sut.ac.th">มหาวิทยาลัยเทคโนโลยีสุรนารี</option>
                                                <option value="http://www.tu.ac.th">มหาวิทยาลัยธรรมศาสตร์</option>
                                                <option value="http://www.dpu.ac.th">มหาวิทยาลัยธุรกิจบัณฑิตย์</option>
                                                <option value="http://www.nu.ac.th">มหาวิทยาลัยนเรศวร</option>
                                                <option value="http://www.buu.ac.th">มหาวิทยาลัยบูรพา</option>
                                                <option value="http://www.payap.ac.th">มหาวิทยาลัยพายัพ</option>
                                                <option value="http://www.neu.ac.th">มหาวิทยาลัยภาคตะวันออกเฉียงเหนือ</option>
                                                <option value="http://www.msu.ac.th">มหาวิทยาลัยมหาสารคาม</option>
                                                <option value="http://www.mahidol.ac.th">มหาวิทยาลัยมหิดล</option>
                                                <option value="http://www.mju.ac.th">มหาวิทยาลัยแม่โจ้</option>
                                                <option value="http://www.mfu.ac.th">มหาวิทยาลัยแม่ฟ้าหลวง</option>
                                                <option value="http://www.yonok.ac.th">มหาวิทยาลัยโยนก</option>
                                                <option value="http://www.rsu.ac.th">มหาวิทยาลัยรังสิต</option>
                                                <option value="http://www.ru.ac.th">มหาวิทยาลัยรามคำแหง</option>
                                                <option value="http://203.155.27.33">มหาวิทยาลัยวงษ์ชวลิตกุล</option>
                                                <option value="http://www.geocities.com/Athens/8605/index.htm">มหาวิทยาลัยวลัยลักษณ์</option>
                                                <option value="http://www.su.ac.th">มหาวิทยาลัยศิลปากร</option>
                                                <option value="http://www.swu.ac.th">มหาวิทยาลัยศรีนครินทรวิโรฒ</option>
                                                <option value="http://www.spu.ac.th">มหาวิทยาลัยศรีปทุม วิทยาเขตกรุงเทพ</option>
                                                <option value="http://www.psu.ac.th">มหาวิทยาลัยสงขลานครินทร์</option>
                                                <option value="http://www.siamu.ac.th">มหาวิทยาลัยสยาม</option>
                                                <option value="http://www.stou.ac.th">มหาวิทยาลัยสุโขทัยธรรมาธิราช</option>
                                                <option value="http://www.utcc.ac.th">มหาวิทยาลัยหอการค้าไทย</option>
                                                <option value="http://www.hcu.ac.th">มหาวิทยาลัยหัวเฉียวเฉลิมพระเกียรติ</option>
                                                <option value="http://www.au.ac.th">มหาวิทยาลัยอัสสัมชัญ (ABAC)</option>
                                                <option value="http://www.eau.ac.th">มหาวิทยาลัยอิสเทอร์นเอเชีย</option>
                                                <option value="http://www.ubu.ac.th">มหาวิทยาลัยอุบลราชธานี</option>
                                                <option value="http://www.sau.ac.th">มหาวิทยาลัยเอเชียอาคเนย์</option>
                                                <option value="http://www.sau.ac.th">สถาบันเทคโนโลยีพระจอมเกล้าพระนครเหนือ</option>
                                                <option value="http://www.rit.ac.th">สถาบันเทคโนโลยีราชมงคล</option>
                                                <option value="http://www.ait.ac.th">สถาบันเทคโนโลยีแห่งเอเชีย</option>
                                                <option value="http://www.nida.ac.th">สถาบันบัณฑิตพัฒนบริหารศาสตร์(นิด้า)</option>
                                                <option value="http://www.rikc.ac.th">มหาวิทยาลัยราชภัฏกาญจนบุรี</option>
                                                <option value="http://www.rikp.ac.th">มหาวิทยาลัยราชภัฏกำแพงเพชร</option>
                                                <option value="http://www.chandra.ac.th">มหาวิทยาลัยราชภัฏจันทรเกษม</option>
                                                <option value="http://www.ricr.ac.th">มหาวิทยาลัยราชภัฏเชียงราย</option>
                                                <option value="http://www.cmri.ac.th">มหาวิทยาลัยราชภัฏเชียงใหม่</option>
                                                <option value="http://www.rits.ac.th">มหาวิทยาลัยราชภัฏเทพสตรี</option>
                                                <option value="http://www.rinp.ac.th">มหาวิทยาลัยราชภัฏนครปฐม</option>
                                                <option value="http://www.rin.ac.th">มหาวิทยาลัยราชภัฏนครราชสีมา</option>
                                                <option value="http://www.rint.ac.th">มหาวิทยาลัยราชภัฏนครศรีธรรมราช</option>
                                                <option value="http://www.rink.ac.th">มหาวิทยาลัยราชภัฏนครสวรรค์</option>
                                                <option value="http://www.bansomdej.ac.th/html/first_visit.html">มหาวิทยาลัยราชภัฏบ้านสมเด็จเจ้าพระยา</option>
                                                <option value="http://www.ribr.ac.th">มหาวิทยาลัยราชภัฏบุรีรัมย์</option>
                                                <option value="http://www.ripa.ac.th">มหาวิทยาลัยราชภัฏพระนครศรีอยุธยา</option>
                                                <option value="http://www.rajabhat.edu">มหาวิทยาลัยราชภัฏเพชรบุรี</option>
                                                <option value="http://www.ripw.ac.th">มหาวิทยาลัยราชภัฏเพชรบุรีวิทยาลงกรณ์</option>
                                                <option value="http://www.ripb.ac.th">มหาวิทยาลัยราชภัฏเพชรบูรณ์</option>
                                                <option value="http://www.rip.ac.th">มหาวิทยาลัยราชภัฏพิบูลสงคราม</option>
                                                <option value="http://www.ripk.ac.th">มหาวิทยาลัยราชภัฏภูเก็ต</option>
                                                <option value="http://www.rimhk.ac.th">มหาวิทยาลัยราชภัฏมหาสารคาม</option>
                                                <option value="http://www.riy.ac.th">มหาวิทยาลัยราชภัฏยะลา</option>
                                                <option value="http://www.rich.ac.th">มหาวิทยาลัยราชภัฏราชนครินทร์</option>
                                                <option value="http://www.rb.ac.th">มหาวิทยาลัยราชภัฏรำไพพรรณี</option>
                                                <option value="http://www.riloei.ac.th">มหาวิทยาลัยราชภัฏเลย</option>
                                                <option value="http://www.rilp.ac.th">มหาวิทยาลัยราชภัฏลำปาง</option>
                                                <option value="http://www.ris.ac.th">มหาวิทยาลัยราชภัฏสกลนคร</option>
                                                <option value="http://www.riska.ac.th">มหาวิทยาลัยราชภัฏสงขลา</option>
                                                <option value="http://www.dusit.ac.th">มหาวิทยาลัยราชภัฏสวนดุสิต</option>
                                                <option value="http://www.riss.ac.th">มหาวิทยาลัยราชภัฏสวนสุนันทา</option>
                                                <option value="http://www.risurat.ac.th">มหาวิทยาลัยราชภัฎสุราษฎร์ธานี</option>
                                                <option value="http://www.risurin.ac.th">มหาวิทยาลัยราชภัฏสุรินทร์</option>
                                                <option value="http://www.rimc.ac.th">มหาวิทยาลัยราชภัฏหมู่บ้านจอมบึง</option>
                                                <option value="http://www.riudon.ac.th">มหาวิทยาลัยราชภัฏอุดรธานี</option>
                                                <option value="http://www.riu.ac.th">มหาวิทยาลัยราชภัฏอุตรดิตถ์</option>
                                                <option value="http://www.riubon.ac.th">มหาวิทยาลัยราชภัฏอุบลราชธานี</option>
                                                </select>
                            </label>                    
                            </div> 


                                        
                                            </span>
                                    </div>    
                                    </li>
                                </ul>
                                
                                </div>
                        <!--  -->
                    </div>

                    <div class="col-sm-7">
                        <!--  -->
                        <div class="card">
                            <h4 class="card-header"><b>บริการอิเล็กทรอนิกส์</b></h4>
                            <div class="card-body">
                                
                            <div class="container-fluid text-center">
                            
                            <h1>e-Services</h1>
                            <h4>บริการอิเล็กทรอนิกส์</h4>
                            <br>
                            <div class="row">
                                <div class="col-sm-3">
                                <a href="http://opac01.rbru.ac.th/" target="blank">
                                <span class="glyphicon glyphicon-off"><img src="img/icon/search_icon.png" style="width:100%"></span>
                                <h5 style="color:#ff2dbb; font-size:12pt">สืบค้นทรัพยากรหอสมุด</h5>
                                </a>
                                <p style="font-size:10pt">ระบบสืบค้นทรัพยากรสารสนเทศ OPAC 》 <a href="/LI/LI_doc/Chamo Social OPAC.pdf" target="blank"> คู่มือ</a></p>
                                </div>
                                <div class="col-sm-3">
                                <a href="http://tdc.thailis.or.th/tdc/" target="blank">
                                <span class="glyphicon glyphicon-heart"><img src="img/icon/thailis_icon.png" style="width:100%"></span>
                                <h5 style="color:#ff2dbb; font-size:12pt">ฐานข้อมูล ThaiLis</h5>
                                </a>
                                <p style="font-size:10pt">โครงการเครือข่ายห้องสมุดในประเทศไทย ThaiLis</p>
                                </div>
                                <div class="col-sm-3">
                                <a href="http://www.etheses.rbru.ac.th/" target="blank">
                                <span class="glyphicon glyphicon-lock"><img src="img/icon/etheses.png" style="width:100%"></span>
                                <h5 style="color:#ff2dbb; font-size:12pt">RBRU e-Theses</h5>
                                </a>
                                <p style="font-size:10pt">ระบบฐานข้อมูลวิทยานิพนธ์อิเล็กทรอนิกส์</p>
                                </div>
                                <div class="col-sm-3">
                                <a href="http://www.eresearch.rbru.ac.th/" target="blank">
                                <span class="glyphicon glyphicon-lock"><img src="img/icon/eresearch.png" style="width:100%"></span>
                                <h5 style="color:#ff2dbb; font-size:12pt">RBRU e-Research</h5>
                                </a>
                                <p style="font-size:10pt">ระบบฐานข้อมูลวิจัยอิเล็กทรอนิกส์ มหาวิทยาลัยราชภัฏรำไพพรรณี</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                <a href="http://www.elibrary.rbru.ac.th/" target="blank">
                                <span class="glyphicon glyphicon-leaf"><img src="img/icon/rbrulib.png" style="width:100%"></span>
                                <h5 style="color:#ff2dbb; font-size:12pt">RBRU e-Library</h5>
                                </a>
                                <p style="font-size:10pt">ระบบห้องสมุดอิเล็กรอนิกส์ บริการ ยืม-คืน หนังสืออิเล็กทรอนิกส์ 》 <a href="/LI/LI_doc/RBRU e-Library Manual.pdf" target="blank"> คู่มือ</a></p>
                                </div>
                                <div class="col-sm-3">
                                <a href="Department_LI.php?ac=info_ejournal" target="blank">
                                <span class="glyphicon glyphicon-certificate"><img src="img/icon/13ebook.png" style="width:100%"></span>
                                <h5 style="color:#ff2dbb; font-size:12pt">ฐานข้อมูล สกอ.</h5>
                                </a>
                                <p style="font-size:10pt">ฐานข้อมูลอิเล็กทรอนิกส์ต่างประเทศ 13 ฐาน ที่ได้รับการสนับสนุนจาก สกอ.</p>
                                </div>
                                <div class="col-sm-3">
                                <a href="http://portal.igpublish.com/iglibrary/search/main?0" target="blank">
                                <span class="glyphicon glyphicon-wrench"><img src="img/icon/iglibrary.png" style="width:100%"></span>
                                <h5 style="color:#ff2dbb; font-size:12pt">ฐานข้อมูล IG Library</h5>
                                </a>
                                <p style="font-size:10pt">หนังสืออิเล็กทรอนิกส์ภาษาต่างประเทศ e-Book 》 <a href="/LI/LI_doc/RBRU e-Library Manual.pdf" target="blank">คู่มือ</a></p>
                                </div>
                                <div class="col-sm-3">
                                <a href="http://plag.grad.chula.ac.th/" target="blank">
                                <span class="glyphicon glyphicon-wrench"><img src="img/icon/chula.png" style="width:100%"></span>
                                <h5 style="color:#ff2dbb; font-size:12pt">ระบบตรวจสอบผลงานทางวิชาการ</h5>
                                </a>
                                <p style="font-size:10pt">โปรแกรมอักขราวิสุทธิ์ ตรวจสอบการลอกเลียนผลงานทางวิชาการ 》 <a href="/LI/LI_doc/Akarawisutin.pdf" target="blank"> คู่มือ</a></p>
                                </div>
                                </div>  
                            </div>  
                            </div>
                        </div>
                        <!--  -->
                    
                    </div>
                
                </div>

            </div>
            

            <div class="col-sm-3">
                <hr>
                <main-lbmenu></main-lbmenu>
            </div>
          
      </div>
    </div>



    <main-footer></main-footer>






</body>
</html>



