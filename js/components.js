class manu extends HTMLElement {
    connectedCallback() {
      this.innerHTML = `
    <div class="manu">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="index.php"> <font size="5"> ARIT| </font>  </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
        
            <div class="collapse navbar-collapse" id="navbarColor03">
                <ul class="navbar-nav mr-auto">

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">สำนักฯ</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="abount.php">ข้อมูลสำนักวิทยบริการ</a>
                                        <a class="dropdown-item" href="contact.php">เบอร์ติดต่อภายใน</a>
                                        <a class="dropdown-item" href="qa_about.php">ประกันคุณภาพQA</a>
                                        <a class="dropdown-item" href="qa_report.php">รายงานประจำปี</a>
                                        <a class="dropdown-item" href="statistic_report.php">รายงานสถิติการให้บริการ</a>
                                        <a class="dropdown-item" href="km.php">การจัดการความรู้KM</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="http://www.arit.rbru.ac.th/hotline/">สายตรงผู้บริหาร</a>
                                    </div>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">หน่วยงาน</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="Department_official.php">กลุ่มงานบริหารงานทั่วไป</a>
                                        <a class="dropdown-item" href="Department_IT.php">กลุ่มงานศูนย์เทคโนโลยีสารสนเทศ</a>
                                        <a class="dropdown-item" href="#">กลุ่มงานเทคโนโลยีการศึกษา</a>
                                        <a class="dropdown-item" href="#">หอสมุดกลาง</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="https://www.rbru.ac.th">มหาวิทยาลัยราชภัฏรำไพพรรณี</a>
                                    </div>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">ประชาสัมพันธ์</a>
                                    <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">ข่าวประชาสัมพันธ์</a>
                                    <a class="dropdown-item" href="#">ภาพกิจกรรม</a>
                                    <a class="dropdown-item" href="#">ความรู้ด้านเทคโนโลยีสารสนเทศ</a>
                                    </div>
                                </li>

              
                                <li class="nav-item">
                                    <a class="nav-link" href="#">ระบบสารสนเทศ</a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">ฝึกอบรม</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">หลักสูตร พัฒนาครู ' 2561</a>
                                        <a class="dropdown-item" href="#">หลักสูตร บริการวิชาการ ' 2561 </a>
                                    </div>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">ดาว์โหลด</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">เอกสารแบบฟอร์ม</a>
                                        <a class="dropdown-item" href="#">สารสำนักวิทยบริการ</a>
                                    </div>
                                </li>

                </ul>
                                    <!-- 3สำนัก -->
                                    <div class="badge">
                                        <a href="#"><span class="badge badge-pill badge-primary">IT</span></a> 
                                        <a href="#"><span class="badge badge-pill badge-primary">ET</span></a> 
                                        <a href="#"><span class="badge badge-pill badge-primary">LB</span></a> 
                                    </div>
            </div>
        </nav>
    </div>
      `;
    }
  }

  customElements.define('main-manu', manu);


  class footer extends HTMLElement {
    connectedCallback() {
      this.innerHTML = `
    
      <div class="container">
      <div class="row">
          <div class="col-md-8">
              <div class="row">
                  <div class="col-md-5">
                  <h2 class="footer-heading mb-4">สำนักวิทยบริการและเทคโนโลยีสารสนเทศ</h2>
                  <p>มหาวิทยาลัยราชภัฏรำไพพรรณี</p>
                  <p>41 ม 5 ต ท่าช้าง อ เมือง จ จันทบุรี 22000</p>
                  <p>โทรศัพ์ 039 319111 ต่อ 10900</p>
                  <p>แฟกซ์ 039 471065</p>
                  </div>

                  <div class="col-md-3 ">
                      <h2 class="footer-heading mb-4">ติดต่อ</h2>
                      <ul class="list-unstyled">
                          <li><a href="#">หมายเลขภายใน</a></li>
                          <li><a href="#">สายตรงผู้อำนวยการ</a></li>
                          <li><a href="#">รำไพพรรณี</a></li>
                      </ul>
                  </div>

                  <div class="col-md-4">
                      <a href="#"><img src="img/logo_green.png" alt="Image" class="img-fluid mb-3"></a>
                      <div align="center">
                      <img border="0" src="http://cc.amazingcounters.com/counter.php?i=3218784&amp;c=9656665" alt="AmazingCounters.com">                        <br>
                        27-08-2020
                      </div>
                  </div>

              </div>
          </div>

          <div class="col-md-3 ml-auto">
              <a href="#"><img src="img/footHead.png" alt="Image" class="img-fluid mb-3"></a>
          </div>
      </div>
      <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
              <div class="border-top pt-5">
                  <p>                                                                                                                       
                  Copyright © 2017 - ARIT | RBRU Developed                  
                  </p>
              </div>
          </div>
      </div>
    </div>
      

      `;
    }
  }

  customElements.define('main-footer', footer);










// ส่วนของเพจย่อยทั้งหลายที่เป็นหน้าย่อย



//   ส่วนของ abount


  
class amenu extends HTMLElement {
    connectedCallback() {
      this.innerHTML = `
      <div class="btn-group-vertical">
      <button type="button" class="btn btn-primary"><a href="abount.php">ประวัติความเป็นมา</a></button>
      <button type="button" class="btn btn-primary"><a href="philosophy.php">ปรัชญา วิสัยทัศน์ พันธกิจ</a></button>
      <button type="button" class="btn btn-primary"><a href="strategic.php">ค่านิยม ยุทธศาสตร์</a></button>
      <button type="button" class="btn btn-primary"><a href="structure.php">โครงสร้างองค์กร</a></button>
      <button type="button" class="btn btn-primary"><a href="personnel.php">บุคลากร</a></button>
      <button type="button" class="btn btn-primary"><a href="board.php">คณะกรรมการประจำสำนัก</a></button>
      <button type="button" class="btn btn-primary"><a href="area.php">พื้นที่การให้บริการ</a></button>
      <button type="button" class="btn btn-primary"><a href="http://www.arit.rbru.ac.th/Document/janya.pdf">คู่มือ จรรยาบรรณวิชาชีพ</a></button>
      <button type="button" class="btn btn-primary"><a href="http://www.arit.rbru.ac.th/Document/ethics.pdf">ประกาศ กพอ. มาตรฐานของจรรยาบรรณ</a></button>
      <button type="button" class="btn btn-primary"><a href="http://www.arit.rbru.ac.th/Document/power_save.pdf">ประกาศ มาตราการประหยัดพลังงานและทรัพยากร สำนักวิทยบริการและเทคโนโลยีสารสนเทศ</a></button>
      <button type="button" class="btn btn-primary"><a href="km.php">การจัดการความรู้ KM</a></button>
      <button type="button" class="btn btn-primary"><a href="qa_about.php">ประกันคุณภาพ QA</a></button>
      <button type="button" class="btn btn-primary"><a href="#">ข่าวประชาสัมพันธ์</a></button>
      <button type="button" class="btn btn-primary"><a href="#">ภาพกิจกรรม </a></button>
  </div>
      
      `;
    }
  }
  customElements.define('main-amenu', amenu);


  class bmenu extends HTMLElement {
    connectedCallback() {
      this.innerHTML = `
      <div class="btn-group-vertical">
      <button type="button" class="btn btn-primary"><a href="qa_about.php">คณะกรรมการประกันคุณภาพ</a></button>
      <button type="button" class="btn btn-primary"><a href="qa_policy.php">นโยบาย คู่มือประกันคุณภาพ</a></button>
      <button type="button" class="btn btn-primary"><a href="qa_plan.php">แผนยุทธศาสตร์สำนัก</a></button>
      <button type="button" class="btn btn-primary"><a href="qa_report.php">รายงานผลประจำปี</a></button>
      </div>
      
      `;
    }
  }
  customElements.define('main-bmenu', bmenu);



// ในส่วนของหน่วยงาน--------------------------
// -------------------กลุ่มงานบริหารทั่วไป
  class ofmenu extends HTMLElement {
    connectedCallback() {
      this.innerHTML = `
      <div class="btn-group-vertical">
      <button type="button" class="btn btn-primary"><a href="Department_official.php">กลุ่มงานบริหารงานทั่วไป </a></button>
      <button type="button" class="btn btn-primary"><a href="#">เกี่ยวกับ</a></button>
      <button type="button" class="btn btn-primary"><a href="#">โครงสร้าง </a></button>
      <button type="button" class="btn btn-primary"><a href="Department_official.php">บุคลากร </a></button>
      <button type="button" class="btn btn-primary"><a href="OF_contact.php">เบอร์ภายใน </a></button>
     </div>
      
      `;
    }
  }
  customElements.define('main-ofmenu', ofmenu);



// -------------------กลุ่มงานศูนย์เทคโนโลยีสารสนเทค

  class itmenu extends HTMLElement {
    connectedCallback() {
      this.innerHTML = `
        
    <div class="btn-group-vertical">
        <button type="button" class="btn btn-primary"><a href="Department_IT.php">ประวัติความเป็นมา</a></button>
        <button type="button" class="btn btn-primary"><a href="IT_vision.php">ปรัชญา วิสัยทัศน์ พันธกิจ</a></button>
        <button type="button" class="btn btn-primary"><a href="IT_strategy.php">ยุทธศาสตร์</a></button>
        <button type="button" class="btn btn-primary"><a href="IT_rule.php">แผนแม่บท / นโยบาย / แนวปฏิบัติ</a></button>
        <button type="button" class="btn btn-primary"><a href="IT_structure.php">โครงสร้างองค์กร</a></button>

    </div>
      
      `;
    }
  }
  customElements.define('main-itmenu', itmenu);

  
  $(document).ready(function() {
    $('[id^=detail-]').hide();
    $('.toggle').click(function() {
        $input = $( this );
        $target = $('#'+$input.attr('data-toggle'));
        $target.slideToggle();
    });
});

