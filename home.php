<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="root" >
    <link rel="icon" href="http://getbootstrap.com/examples/carousel/img/favicon.ico">

    <title>ISMS Virtual Auth System</title>

    <!-- Bootstrap core CSS -->
    <link href="./bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="http://getbootstrap.com/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="http://getbootstrap.com/examples/carousel/carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->

  <body>
    <!DOCTYPE html>
<meta charset="utf-8" />
<?php
session_start();
if(!isset($_SESSION['id'])) {
  echo "<meta http-equiv='refresh' content='0;url=index.php'>";
  echo $_SESSION['id'];
  exit;
}
$user_id = $_SESSION['id'];

?>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="http://54.65.37.68/">ISMS Virutal Auth System</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="./index.php">Home</a></li>
                <li><a data-toggle="modal" data-target="#AboutModal">About</a></li>
                <li><a data-toggle="modal" data-target="#ContactModal">Contact</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Link <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-header">Related Sites</li>
                    <li><a href="http://www.kitribob.kr/bob/">BoB</a></li>
                    <li><a href="http://isms.kisa.or.kr/kor/main.jsp">ISMS Official</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-header">Checklists</li>
                    <li><a href="http://isms.kisa.or.kr/kor/intro/intro02.jsp">Standards</a></li>
                    <li><a href="http://isms.kisa.or.kr/kor/notice/dataList.jsp?p_No=48&b_No=48">Guidelines</a></li>
                  </ul>
                </li>
              </ul>

              <ul class="nav navbar-nav navbar-right">
              
                <?php
                if($_SESSION['login'] === 'ok'){
                ?>
                  <li><a href="./logincheck.php?temp=logout">LogOut</a></li>
                <?php
                }
                else{
                ?>
                  <li><a href="./logout.php">Log Out</a></li>
                <?php
                }
                ?>

              </ul>

            </div>
          </div>
        </nav>

      </div>
    </div>

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active" >
          <img class="first-slide" src="http://cdn.playbuzz.com/cdn/8dbfb0e9-d8a6-4581-8556-b9bbed99baf3/f954b478-0698-4122-b7fd-d38a90845004.JPG" width="80%" height="50" align="center" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>BUS OF THE BUS</h1>
              <p>We provide technical and realistic service in terms of ISMS authorization era, by giving out </br>check-lists for risk factors based on ISMS.</p>
              <p><a class="btn btn-lg btn-primary" href="./checkisms.php?page=*" role="button">Show Result</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="http://i1-win.softpedia-static.com/screenshots/Abstract-Heaven-Screensaver_1.png" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>BUS OF THE BUS</h1>
              <p> You can now analyze what threats you contain in your own business by means of security, </br> and find out your own solutions according to checklists. </p>
              <p><a class="btn btn-lg btn-primary" href="./checkisms.php?page=*" role="button">Show Result</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcTB4vIKn_C4cCqXKGnCT7FW6EgQcmJvj-MYZ2Lo-Rjn5i3S62Ev" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>BUS OF THE BUS</h1>
              <p> We provide you permanent Consulting Service, </br> with periodical updates followed by ISMS standards. </p>
              <p><a class="btn btn-lg btn-primary" href="./checkisms.php?page=*" role="button">Show Result</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="https://d30y9cdsu7xlg0.cloudfront.net/png/116910-200.png" alt="Management Security" width="140" height="140">	
          <h2>Management Security</h2>
          <p>인적보안, 운영보안 등의 인증 항목을 기반으로 관리과정 통제에 대한 자가진단 항목 제공</p>

            <!-- Management Detail Text -->
            <p><a class="btn btn-default" href="./checkisms.php?page=manage" role="button">View Details &raquo;</a></p>

            <!-- /END Management Detail Text -->

        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="https://d30y9cdsu7xlg0.cloudfront.net/png/18101-200.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Physical Security</h2>
          <p>물리적보안, IT재해복구 등 물리적 시스템 및 자산 관리에 대한 통제사항에 대해 자가진단 항목 제공</p>
            <p><a class="btn btn-default" href="./checkisms.php?page=physical" role="button">View Details &raquo;</a></p>

            <!-- /END Management Detail Text -->
            
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="https://d30y9cdsu7xlg0.cloudfront.net/png/101641-200.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Techinical Security</h2>
          <p>시스템개발보안, 접근통제 등의 인증항목을 기반으로 총체적 정보보호대책에 대한 자가진단 항목을 제공</p>

                     <!-- Management Detail Text -->
            <p><a class="btn btn-default" href="./checkisms.php?page=tech" role="button">View Details &raquo;</a></p>

            <!-- /END Management Detail Text -->
        </div><!-- /.col-lg-4 -->


      </div><!-- /.row -->
    </div>
<!--Group Item -->
<h3>ISMS 관리과정에 따른 분류</h3>
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          관리적 보안 점검 항목
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        1.1 정보보호정책</br>
  - 정책의 승인 및 공표</br>
  - 정책의 체계</br>
  - 정책의 유지 관리</br>
</br>
1.2 정보보호조직도</br>
  - 조직 체계</br>
  - 역활 및 책임</br>
</br>
1.3 정보자산 분류</br>
  - 정보자산 식별 및 책임</br>
  - 정보자산의 분류 및 취급</br>
</br>
1.4 정보보호교육</br>
  - 교육 프로그램 수립</br>
  - 교육 시행 및 평가</br>
  </br>
1.5 IT재해복구</br>
  - 체계 구축</br>
  - 대책 구현</br>

      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          물리적 보안 점검 항목
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">

2.1 인적 보안</br>
  - 정보보호 책임</br>
  - 인사규정</br>
</br>
2.2 물리적 보안</br>
  - 물리적 보호구역</br>
  - 시스템 보호</br>
</br>
2.3 외부자 보안</br>
  - 보안요구사항 정의</br>
  - 외부자 보안 이행</br>


      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          기술적 보안 점검 항목
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
      3.1 시스템 개발 보안 </br>
  - 분석 및 설계 보안관리</br> 
  - 구현 및 이관 보안</br>
  - 외주개발 보안</br></br>

3.2 암호 통제</br>
  - 암호 정책</br>
  - 암호키 관리</br></br>

3.3 접근통제</br>
  - 접근통제 정책</br>
  - 접근권한 관리</br>
  - 사용자 인증 및 식별</br>
  - 접근통제 영역</br></br>

3.4 운영 보안</br>
  - 운영 절차 및 변경 관리</br>
  - 시스템 및 서비스 운영 보안</br>
  - 정보 전송 보안</br>
  - 저장매체 보안</br>
  - 악성코드 관리</br>
  - 로그관리 및 모니터링</br></br>
3.5 침해사고 관리</br>
  - 절차 및 체계 수립</br>
  - 대응 및 복구</br>
  - 사후 관리</br>
      </div>
    </div>
  </div>
</div>

	<!-- /END GROUP ITEM -->

      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="./index.php">Back to top</a></p>
        <p>&copy; 2015 Bus of the Bus Team &middot; <a data-toggle="modal" data-target="#PrivacyModal">Privacy</a> &middot; 
        <a data-toggle="modal" data-target="#TermsModal">Terms</a></p>
      </footer>

      <!-- Modal -->
              <div class="modal fade" id="PrivacyModal" tabindex="-1" role="dialog" aria-labelledby="Privacy">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">Privacy</h4>
                    </div>
                    <div class="modal-body">
                      Copyright@Bus of the Bus in BoB Consulting Team</br></br>
                      Developer - Taekyung Han </br>
                      Sub Developer - Jiwon Lee </br>
                      Project Manager - Junghwan Choi </br>
                      Management Analyst - Seoyun Choi </br>
                      Technology Analyst - Jungrae Kim </br>
                      Physical Analyst - Bosun Kang </br>
                      Document Manager - Eunhee Ahn </br></br>

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="close" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="modal fade" id="TermsModal" tabindex="-1" role="dialog" aria-labelledby="Terms">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">Terms</h4>
                    </div>
                    <div class="modal-body">
                      <font color = "skyblue">Based on ISMS Authorization Standards for Business </font></br></br>
                      Five Management Process </br>
                      Thirteen Information Security Solution </br></br>

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="close" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="modal fade" id="AboutModal" tabindex="-1" role="dialog" aria-labelledby="About">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">About</h4>
                    </div>
                    <div class="modal-body">
                      <font color = "red">BUS of the BUS </font></br></br>
                      We provide technical and realistic service in terms of ISMS authorization era, by giving out </br>check-lists for risk factors based on ISMS. </br>
                      You can now analyze what threats you contain in your own business by means of security, </br> and find out your own solutions according to checklists. </br>
                      We provide you permanent Consulting Service, </br> with periodical updates followed by ISMS standards. </br></br>

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="close" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="modal fade" id="ContactModal" tabindex="-1" role="dialog" aria-labelledby="Contact">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">Contact</h4>
                    </div>
                    <div class="modal-body">
                      <font color = "red">Contact US </font></br></br>
                        Addr: 서울특별시 강남구 역삼동 미림타워 3층 BoB센터 </br>
                        Tel: 010-2573-4949 </br>
                        E-mail: busofthebus@kitribob.kr </br></br>

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="close" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
                <!--/END Modal -->  

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>