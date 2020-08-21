class manu extends HTMLElement {
    connectedCallback() {
      this.innerHTML = `
    <div class="manu">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">ARIT |</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
        
            <div class="collapse navbar-collapse" id="navbarColor03">
                <ul class="navbar-nav mr-auto">

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">สำนักฯ</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">ข้อมูลสำนักวิทยบริการ</a>
                                        <a class="dropdown-item" href="#">เบอร์ติดต่อภายใน</a>
                                        <a class="dropdown-item" href="#">ประกันคุณภาพQA</a>
                                        <a class="dropdown-item" href="#">รายงานประจำปี</a>
                                        <a class="dropdown-item" href="#">รายงานสถิติการให้บริการ</a>
                                        <a class="dropdown-item" href="#">การจัดการความรู้KM</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">สายตรงผู้บริหาร</a>
                                    </div>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">หน่วยงาน</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">กลุ่มงานบริหารงานทั่วไป</a>
                                        <a class="dropdown-item" href="#">กลุ่มงานศูนย์เทคโนโลยีสารสนเทศ</a>
                                        <a class="dropdown-item" href="#">กลุ่มงานเทคโนโลยีการศึกษา</a>
                                        <a class="dropdown-item" href="#">หอสมุดกลาง</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">มหาวิทยาลัยราชภัฏรำไพพรรณี</a>
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
            </div>
        </nav>
    </div>
      `;
    }
  }

  customElements.define('main-manu', manu);


