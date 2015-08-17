<!DOCTYPE html>

<?php
  include "db_connect.php";
  

    mysql_query("set session character_set_connection=euckr;");
    mysql_query("set session character_set_results=utf8;");
    mysql_query("set session character_set_client=euckr;");

?>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/examples/carousel/img/favicon.ico">

    <title>BoB Evalutation reust about test</title>

    <!-- Bootstrap core CSS -->
    <link href="./bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="view-source:http://getbootstrap.com/examples/dashboard/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="http://getbootstrap.com/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head> 
  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="./index.php">Bus Of the Bus<span class="glyphicon glyphicon-star" aria-hidden="true"></span></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">link</a></li>
            <li><a href="./index.php">Home</a></li>
          </ul>
        </div>
      </div>
    </nav>


          <h2 class="sub-header">Section title</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th  width='6%'>분류</th>
                  <th width='6%'>대주제</th>
                  <th width='8%'>소주제</th>
                  <th width=''>점검항목</th>
                  <th width='28%'>결과</th>
                  <th width='4%'>평가</th>
                  <th width="6%">변경</th>
                </tr>
              </thead>
              <tbody>
<?php
  $page=$_GET['page'];

  $theme_list = array("tech", "Manage", "pc", "web"); //check if page is in theme_list

    if (in_array($page, $theme_list)) { // if Not in page don't appear the site any information

    $result=mysql_query("select * from list where theme='".$page."'") or die(mysql_error());
    $result2=mysql_query("select count(*) from list where theme='".$page."'") or die(mysql_error());
    
    $info = mysql_fetch_array($result);
    $count = mysql_fetch_array($result2);

    echo "전체 ".$page." 분류는 ".$count[0]."개 입니다";

    for($i=1;$i<=$count[0];$i++){
      echo "<tr>";
      for($j=1;$j<=6;$j++){
        echo "<td>".$info[$j]."</td>";
        if($j==6)
          if($info[6]==='취약')
          echo "<td><button>양호</button></td>";
          else if($info[6]==='양호')
          echo "<td><button>취약</button></td>";
        $manageSum+=$i;
      }
      echo "</tr>";
    }
  }

  else{
    echo "잘못된 page값입니다.";
  }
?>
              </tbody>
            </table>
          </div>
        </div>
                      
      </div>
    </div>

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