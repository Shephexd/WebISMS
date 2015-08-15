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
              <a class="navbar-brand" href="#">ISMS Virutal Auth System</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Link <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="http://www.kitribob.kr/bob/">BoB</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
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
              <p>We provide technical and realistic service in terms of ISMS authorization era, by giving out <br/>check-lists for risk factors based on ISMS.</p>
              <p><a class="btn btn-lg btn-primary" href="./checkisms.php" role="button">Show Result</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="http://cdn.playbuzz.com/cdn/8dbfb0e9-d8a6-4581-8556-b9bbed99baf3/f954b478-0698-4122-b7fd-d38a90845004.JPG" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
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
            <p><button type="button" class="btn btn-default" data-toggle="modal" data-target="#ManageModal">View details &raquo;</button></p>

                <!-- Modal -->
              <div class="modal fade" id="ManageModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">Management Security</h4>
                    </div>
                    <div class="modal-body">
                      아아 마이크 테스트 
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary">Close</button>
                    </div>
                  </div>
                </div>
              </div>
                <!--/END Modal -->
            <!-- /END Management Detail Text -->

        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="https://d30y9cdsu7xlg0.cloudfront.net/png/18101-200.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Physical Security</h2>
          <p>물리적보안, IT재해복구 등 물리적 시스템 및 자산 관리에 대한 통제사항에 대해 자가진단 항목 제공</p>
            <p><button type="button" class="btn btn-default" data-toggle="modal" data-target="#PhysicalModal">View details &raquo;</button></p>




              <!-- Modal -->
              <div class="modal fade" id="PhysicalModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">Physical Security</h4>
                    </div>
                    <div class="modal-body">
                      이런거 시키지 말아요
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary">Close</button>
                    </div>
                  </div>
                </div>
              </div>
            <!-- /END Management Detail Text -->
            
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="https://d30y9cdsu7xlg0.cloudfront.net/png/101641-200.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Techinical Security</h2>
          <p>시스템개발보안, 접근통제 등의 인증항목을 기반으로 총체적 정보보호대책에 대한 자가진단 항목을 제공</p>

                     <!-- Management Detail Text -->
            <p><button type="button" class="btn btn-default" data-toggle="modal" data-target="#TechModal">View details &raquo;</button></p>

                <!-- Modal -->
              <div class="modal fade" id="TechModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">Technical Security</h4>
                    </div>
                    <div class="modal-body">
                      제발 
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary">Close</button>
                    </div>
                  </div>
                </div>
              </div>
                <!--/END Modal -->
            <!-- /END Management Detail Text -->
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

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

      <!-- START THE FEATURETTES -->


      
      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="http://getbootstrap.com/assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>