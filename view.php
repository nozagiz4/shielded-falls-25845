<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
   <style>
        .ditt {
            transform: translate(50px, 100px);
        }
        .imgactive:hover{
            transition-delay: 50ms;
            -webkit-box-shadow: 0px 0px 20px 2px rgba(83, 83, 83, 0.59); 
            box-shadow: 0px 0px 20px 2px rgba(122, 122, 122, 0.59);
        }
        * {box-sizing: border-box;}
            body {font-family: Verdana, sans-serif;}
            .mySlides {display: none;}
            img {vertical-align: middle;
        }
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }
        .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }
        .active {
            background-color: #ffa137;
        }
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 0.5s;
            animation-name: fade;
            animation-duration: 4.5s;
        }

        @-webkit-keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
        }

        @keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
        }
        .pad{
            padding: 15px;
            padding-left: 50px;
        }
        
        .image1{
            z-index: 0;
        }
        .lbar{
            width: 200px;
            height: 70px;
            float: right;
        }
        .image{
             width: auto;
             height: 200px;
             margin: 0px 10px 10px 10px;
            }
        .image-content{
             padding: 50px;
            }
        h3{
            padding: 10px;
        }
        section{
            padding: 20px;
        }
        
        .nav-link:hover{
            color: white!important;
        
        }
        .efont{
            text-align: justify;
            margin: 10px;
            font-family: Arial, Helvetica, sans-serif;
        }
        
        .blocktab{
            width: 360px;
            height: 60px;
            background-color: black;
            opacity: 85%;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
        }
        .avatars{
            -webkit-box-shadow: 0px 10px 14px 3px rgba(0,0,0,0.40); 
            box-shadow: 0px 10px 14px 3px rgba(0,0,0,0.40);
            border: solid white 1px;
            border-radius: 50%;
            margin-left: auto;
            margin-right: auto;
            display: block;
        }
        .video{
            margin-left: auto;
            margin-right: auto;
            display: block;
        }
    </style>
    
</head>
<body>   
    
        <a name="home"></a>
        <nav class=" navbar navbar-expand-lg navbar-light fixed-top bg-dark " id="mainNav">
            
            <a class="navbar-brand" href="#home"><img src="logo.png" alt="" class="responsive" style="width: 300px;height: auto;margin-left: 30px;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
              </button>
          <div class="container">
          <div class="collapse navbar-collapse " id="collapsibleNavbar"  >
            <ul class="navbar-nav ">
              <li class="nav-item">
                <a class="nav-link" href="#home" style="font-weight: bold; font-size: medium; color: gray;">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#course" style="font-weight: bold; font-size: medium; color: gray;">Course</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-weight: bold; font-size: medium; color: gray;">
                  Facility
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#ITCoworking">IT Co-working</a>
                  <a class="dropdown-item" href="#classroom">Classroom</a>
                  <a class="dropdown-item" href="#tooldevice">Tool & Device</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#jobs" style="font-weight: bold; font-size: medium; color: gray;">Job</a>
              </li>
              
            </ul>
        </div>
      </nav> 
    
        <div class="image1">
                      <img src="Group4.png" alt="" style="width: 100%;height: auto;">
                  </div>
        <section class=" text-center container">
            <div class="row lg-5">
              <div class="col-lg-6 col-md-8 mx-auto">
                
                <h1 style="font-size: 50px;">ITD</h1>
                <h2  style="color: black; font-weight:bold; font-size: 25px; padding-bottom: 5px;">Information Technology and Digital Innovation<h2>
                <p style="font-family: Arial, Helvetica, sans-serif; font-size: 20px;padding-bottom: 20px">หลักสูตรเทคโนโลยีสารสนเทศและนวัตกรรมดิจิทัล</p>
                  <a href="https://web.facebook.com/it.walailak" class="btn btn-primary my-2" style="width: 170px;">Facebook Group</a>
                  <a href="https://entry.wu.ac.th/new/apply1.asp" class="btn btn-danger my-2" style="width: 170px;">Apply</a>
                </p>
              </div>
            </div>
          
        </section>
        <a name="course"></a>
        
        
        <section>
            <div class="mySlides fade">
                <img src="001.jpg" style="width:100%;">
              </div>
              
              <div class="mySlides fade">
                
                <img src="002.png" style="width:100%">
                
              </div>
              
              <div class="mySlides fade">
                
                <img src="003.png" style="width:100%">
                
              </div>
              
              </div>
              <br>
              
              <div style="text-align:center">
                <span class="dot"></span> 
                <span class="dot"></span> 
                <span class="dot"></span> 
              </div>
        </section>
        <section>
            <h3 style="padding-left: 30px; padding-top: 40px;">ITD คืออะไร? และเขาทำอะไรกันบ้าง?</h3>
        <div style="padding-bottom: 20px;" class="row efont ">
            
                <div class="col-6 " >
                <p >
                    หลักสูตรเทคโนโลยีสารสนเทศและนวัตกรรมดิจิทัลหรือที่หลายๆคนเรียกและรู้จักกันในนามของ ITD โดยสังกัดสาขาวิชาเทคโนโลยีสารสนเทศ สำนักวิชาสารสนเทศศาสตร์ ม.วลัยลักษณ์ มีปรัชญาในการมุ่งเน้นผลิตนักเทคโนโลยีสารสนเทศที่มีคุณภาพ สามารถทำงานได้จริงในสาขาอาชีพ
                </p>
                </div>    
                <div class="col-6">
                    <p> 
                        ซึ่ง ITD เป็นหลักสูตรใหม่ที่ถูกปรับปรุงมาจาก IT โดยเราจะเน้นการเรียนการสอนที่เข้มข้น และตรงกับความต้องการของตลาดแรงงานในปัจจุบัน ซึ่งเราจะสอนให้นักศึกษาเป็นนักแก้ไขปัญหา (Problem Solver)
                    รู้ปัญหา เก็บข้อมูล วิเคราะห์และออกแบบระบบ สอนให้สร้างสิ่งใหม่ๆ ทำการทดลอง และใช้งานจริง 
                    </p>           
                </div>
            </div>
            
        </section>
        <section style="padding-bottom: 50px;">
            <h3 style="padding-left: 30px;padding-bottom: 35px;">มารับชมวิดีโอเพิ่มเติมกันเถอะ...ลุยยย!!</h3>
            <div class="row">
                <div class="col-6">
                    <iframe class="video" width="560" height="315" src="https://www.youtube.com/embed/6F2zODXLhMM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                
                <div class="col-6">
                    <iframe class="video" width="560" height="315" src="https://www.youtube.com/embed/4RpeG2SZ_1E" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                
            </div>
        </section>
        <hr></hr><br></br>
          <a name="ITCoworking"></a>
          <!--IT Co-working space-->
          <h3 style="color: white;" class="blocktab rounded">IT Co-working</h3>
        <section >
                <div style="padding-top: 10px;" class="row" >
                    <div class="col-sm-3">
                        <a target="_blank" href="co-6.jpg">
                        <img src="co-6.jpg" class="rounded img-fluid imgactive" style="width: 100%; height: auto;" ></a>
                    </div>
                    <div class="col-sm-3">
                        <a target="_blank" href="co-10.jpg">
                        <img src="co-10.jpg" class="rounded img-fluid imgactive" style="width: 100%; height: auto;" ></a>
                    </div>
                    <div class="col-sm-3">
                        <a target="_blank" href="co-8.jpg">
                        <img src="co-8.jpg" class="rounded img-fluid imgactive" style="width: 100%; height: auto;" ></a>
                    </div>
                    <div class="col-sm-3">
                        <a target="_blank" href="co-7.jpg">
                        <img src="co-7.jpg" class="rounded img-fluid imgactive" style="width: 100%; height: auto;" ></a>
                    </div>
                </div>
        </section>
        <section style="padding-bottom: 50px;">
                <div class="row">
                    <div class="col-sm-3">
                        <a target="_blank" href="co-5.jpg">
                        <img src="co-5.jpg" class="rounded img-fluid imgactive" style="width: 100%; height: auto;" ></a>
                    </div>
                    <div class="col-sm-3">
                        <a target="_blank" href="co-11.jpg">
                        <img src="co-11.jpg" class="rounded img-fluid imgactive" style="width: 100%; height: auto;" ></a>
                    </div>
                    <div class="col-sm-3">
                        <a target="_blank" href="co-9.jpg">
                        <img src="co-9.jpg" class="rounded img-fluid imgactive" style="width: 100%; height: auto;" ></a>
                    </div>
                    <div class="col-sm-3">
                        <a target="_blank" href="co-4.jpg">
                        <img src="co-4.jpg" class="rounded img-fluid imgactive" style="width: 100%; height: auto;" ></a>
                    </div>
                </div>
        </section>
        <hr></hr><br></br>
        <!--This is classroom-->
        <a name="classroom"></a>
        <h3 style="color: white;" class="blocktab rounded">Classroom</h3>
        <section>
            <div style="padding-top: 10px;" class="row">
                <div class="col-sm-3">
                    <a target="_blank" href="cls03.jpg">
                    <img src="cls03.jpg" class="rounded img-fluid imgactive" style="width: 100%; height: auto;"></a>
                </div>
                <div class="col-sm-3">
                    <a target="_blank" href="cls05.jpg">
                  <img src="cls05.jpg" class="rounded img-fluid imgactive" style="width: 100%; height: auto;"></a>
              </div>
              <div class="col-sm-3">
                <a target="_blank" href="cls09.jpg">
                  <img src="cls09.jpg" class=" rounded img-fluid imgactive" style="width: 100%; height: auto;" ></a>
              </div>
              <div class="col-sm-3">
                <a target="_blank" href="cls08.jpg">
                  <img src="cls08.jpg" class="rounded img-fluid imgactive" style="width: 100%; height: auto;"></a>
              </div>
          </div> 
          </section>
          <section style="padding-bottom: 50px;"> 
              <div class="row">
                <div class="col-sm-3">
                    <a target="_blank" href="cls06.jpg">
                    <img src="clas06.jpg" class="rounded img-fluid imgactive" style="width: 100%; height: auto;"></a>
                </div>
                <div class="col-sm-3">
                    <a target="_blank" href="cls07.jpg">
                    <img src="cls07.jpg" class="rounded img-fluid imgactive" style="width: 100%; height: auto;"></a>
                </div>
                <div class="col-sm-3">
                    <a target="_blank" href="cls01.jpg">
                    <img src="cls01.jpg" class="rounded img-fluid imgactive" style="width: 100%; height: auto;"></a>
                </div>
                <div class="col-sm-3">
                    <a target="_blank" href="cls02.jpg">
                    <img src="cls02.jpg" class="rounded img-fluid imgactive" style="width: 100%; height: auto;"></a>
                </div>
              </div>
          </section>
          <hr></hr><br></br>
        <a name="tooldevice"></a>
        <!--This is device or tools for study-->
        <h3 style="color: white;" class="blocktab rounded">Device for study</h3>
        <section style="padding-bottom: 50px;">
            <div style="padding-top: 10px;" class="row">
                <div class="col-sm-3">
                    <a target="_blank" href="dv-1.jpg">
                    <img src="dv-1.jpg" class="rounded img-fluid imgactive" style="width: 100%; height: auto;" ></a>
                </div>
                <div class="col-sm-3">
                    <a target="_blank" href="dv-2.jpg">
                    <img src="dv-2.jpg" class="rounded img-fluid imgactive" style="width: 100%; height: auto;" ></a>
                </div>
                <div class="col-sm-3">
                    <a target="_blank" href="dv-3.jpg">
                    <img src="dv-3.jpg" class="rounded img-fluid imgactive" style="width: 100%; height: auto;" ></a>
                </div>
                <div class="col-sm-3">
                    <a target="_blank" href="dv-4.jpg">
                    <img src="dv-4.jpg" class="rounded img-fluid imgactive" style="width: 100%; height: auto;" ></a>
                </div>
                
            </div>
    </section>
    <hr></hr><br></br>
    <!--JOB!!!!!!!!!!!!-->
    <a name="jobs"></a>
    <h3 style="color: white;" class="blocktab rounded">Job</h3>
    <section>
        <div style="padding-top: 50px;padding-bottom: 50px;" class="row">
            <div  class="col-sm-4">
                <img src="2avt1.png" alt="" class="responsive avatars" style="width: 200px;">
                <h3 style="padding-top: 50px;text-align: center;">Frontend Developer</h3>
                <p style="padding-left: 30px;text-align: justify;"> 
                    Frontend Developer เป็นงานที่ต้องมีความรู้ในการพัฒนาโปรแกรมในส่วนติดต่อกับผู้ใช้ ด้วยเทคโนโลยีต่างๆไม่ว่าจะเป็น Web Application โปรแกรมสำหรับมือถือ Android, IOS
                       เครื่องมือสำหรับการพัฒนาโปรแกรมได้แก่ HTML5, CSS3, JavaScript, Bootstrap, AngularJS, ReactJS, Android, Swift, Flutter, .Net Technology
                     รายวิชาที่หลักสูตรเปิดสอนคือ Problem Solving, Basic Pregramming, UX/UI Design, Frontend Framework Developer, Mobile Application Development
                </p>
            </div>
            <div class="col-sm-4">
                <img src="2avt3.png" alt="" class="responsive avatars" style="width: 200px;">
                <h3 style="padding-top: 50px;text-align: center;">Backend Developer</h3>
                <p style="padding-left: 20px;text-align: justify;">
                    
                    Backend Developer เป็นงานที่เกี่ยวข้องกับการพัฒนาระบบเบื้องหลัง เช่น การจัดการฐานข้อมูล โครงสร้างเว็บไซต์ การเขียนโค้ดควบคุม XML, Text file, Java, PHP, C#, C++
                        และจะมีไว้สำหรับ Admin หรือผู้ที่ได้รับอนุญาตเพื่อทำการ เพิ่ม ลบ แก้ไขหรือ เปลี่ยนแปลงสิ่งต่างๆ รายวิชาที่หลักสูตรเปิดสอนคือ Backend Framework Developer 
                </p>
            </div>
            <div class="col-sm-4">
                <img src="2avt6.png" alt="" class="responsive avatars" style="width: 200px;">
                <h3 style="padding-top: 50px;text-align: center;">System Analytics</h3>
                <p style="padding-left: 20px;text-align: justify;">
                    
                       System Analttics หรือ SA เป็นอาชีพที่เน้นถึงการศึกษาวิธีการดำเนินงานของระบบเพื่อหาแนวทางในการแก้ไขปัญหาของระบบนั้น ๆ ให้ดียิ่งขึ้น รายวิชาที่หลักสูตรเปิดสอนคือ System analysis
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-1"><p></p></div>
            <div class="col-sm-4">
                <img src="2avt7.png" alt="" class="responsive avatars" style="width: 200px;">
                <h3 style="padding-top: 50px;text-align: center;">Software Tester</h3>
                <p style="padding-left: 20px;text-align: justify;"> 
                 Software Tester เป็นอาชีพที่เกี่ยวข้องกับการทดสอบส่วนต่าง ๆ ของระบบ หรือจะเรียกง่ายๆว่า คนที่ต้องหา Bug หรือ Error ของโปรแกรมที่ถูกพัฒนาขึ้น ซึ่งคนที่จะเป็น Tester 
                 ได้จะต้องเป็นคนที่ชั่งสังเกตนิดนึง สำหรับรายวิชาที่เปิดสอนได้แก่ Software Testing เป็นต้น
                </p>
            </div>
            <div class="col-sm-2"><p></p></div>
            <div class="col-sm-4">
                <img src="2avt9.png" alt="" class="responsive avatars" style="width: 200px;">
                <h3 style="padding-top: 50px;text-align: center;">Business Analytics</h3>
                <p style="padding-left: 30px;text-align: justify;">
                    
                    Business Analytics หรือ BA เป็นอีกหนึ่งอาชีพที่มาแรงและเป็นที่ต้องการในตลาดแรงงาน เป็นงานกึ่งๆ เป็นคนกลางระหว่าง Business และ Technical
                     และต้องใช้ความรู้ทางวิเคราะห์ เอามาประมวลผล และนำข้อมูลไปใช้ให้มีประโยชน์สูงสุด รายวิชาที่หลักสูตรเปิดสอนคือ Data Analysis, Statistics
                </p>
            </div>
            <div class="col-sm-1"><p></p></div>
        </div>
     </section>
    
    </div>
<section style="width: auto;height: 90px;background-color: rgb(27, 27, 27);">
        <p style="color: white;text-align: center;padding-top: 10px;font-size: x-large;"></p>
    </section>
    <script>
    
        var slideIndex = 0;
        showSlides();
        
        function showSlides() {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display ="none";  
          }
          slideIndex++;
          if (slideIndex > slides.length) {slideIndex = 1}    
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
          setTimeout(showSlides, 4000); 
        }
        </script>
      
</body>
</html>
