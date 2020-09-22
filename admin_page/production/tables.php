<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>관리자 페이지 - 윈플</title>

  <!-- Bootstrap -->
  <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- iCheck -->
  <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  <!-- Datatables -->

  <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
  <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
  <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
          <a href="http://wincare.kr" class="site_title"><span>Window Care Plus+</span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
            </div>

          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>관리자</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i>조회 <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="tables.php">고객 조회</a></li>
                    <li><a href="#">업체 조회</a></li>
                    <li><a href="#">준비중</a></li>
                  </ul>
                </li>

              </ul>
            </div>

          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
          </div>
        </div>
      </div>
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>고객 조회</h3>

            </div>
          </div>

          <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
              <div class="x_content">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="card-box table-responsive">
                    <table id="datatable-responsive" class="jambo_table table table-striped table-bordered nowrap" cellspacing="0" width="100%">
                        <thead>
                          <tr class="headings">
                            <th style="min-width: 100px;" class="column-title">수정 / 삭제</th>
                            <th style="min-width: 100px;" class="column-title">연락처</th>
                            <th style="min-width: 80px;" class="column-title">건물유형</th>
                            <th style="min-width: 100px;" class="column-title">공사희망일</th>
                            <th style="min-width: 400px;" class="column-title">주소</th>
                            <th style="min-width: 100px;" class="column-title">작성날짜</th>
                            <th style="min-width: 104px;" class="column-title">가로사이즈1</th>
                            <th style="min-width: 104px;" class="column-title">세로사이즈1</th>
                            <th style="min-width: 80px;" class="column-title">위치1</th>
                            <th style="min-width: 104px;" class="column-title">가로사이즈2</th>
                            <th style="min-width: 104px;" class="column-title">세로사이즈2</th>
                            <th style="min-width: 80px;" class="column-title">위치2</th>
                            <th style="min-width: 104px;" class="column-title">가로사이즈3</th>
                            <th style="min-width: 104px;" class="column-title">세로사이즈3</th>
                            <th style="min-width: 80px;" class="column-title">위치3</th>
                            <th style="min-width: 104px;" class="column-title">가로사이즈4</th>
                            <th style="min-width: 104px;" class="column-title">세로사이즈4</th>
                            <th style="min-width: 80px;" class="column-title">위치4</th>
                            <th style="min-width: 104px;" class="column-title">가로사이즈5</th>
                            <th style="min-width: 104px;" class="column-title">세로사이즈5</th>
                            <th style="min-width: 80px;" class="column-title">위치5</th>
                            <th style="min-width: 104px;" class="column-title">가로사이즈6</th>
                            <th style="min-width: 104px;" class="column-title">세로사이즈6</th>
                            <th style="min-width: 80px;" class="column-title">위치6</th>
                            <th style="min-width: 104px;" class="column-title">가로사이즈7</th>
                            <th style="min-width: 104px;" class="column-title">세로사이즈7</th>
                            <th style="min-width: 80px;" class="column-title">위치7</th>
                            <th style="min-width: 104px;" class="column-title">가로사이즈8</th>
                            <th style="min-width: 104px;" class="column-title">세로사이즈8</th>
                            <th style="min-width: 80px;" class="column-title">위치8</th>
                            <th style="min-width: 104px;" class="column-title">가로사이즈9</th>
                            <th style="min-width: 104px;" class="column-title">세로사이즈9</th>
                            <th style="min-width: 80px;" class="column-title">위치9</th>
                            <th style="min-width: 104px;" class="column-title">가로사이즈10</th>
                            <th style="min-width: 104px;" class="column-title">세로사이즈10</th>
                            <th style="min-width: 80px;" class="column-title">위치10</th>
                            <th style="min-width: 104px;" class="column-title">가로사이즈11</th>
                            <th style="min-width: 104px;" class="column-title">세로사이즈11</th>
                            <th style="min-width: 80px;" class="column-title">위치11</th>
                            <th style="min-width: 104px;" class="column-title">가로사이즈12</th>
                            <th style="min-width: 104px;" class="column-title">세로사이즈12</th>
                            <th style="min-width: 80px;" class="column-title">위치12</th>
                            <th style="min-width: 104px;" class="column-title">가로사이즈13</th>
                            <th style="min-width: 104px;" class="column-title">세로사이즈13</th>
                            <th style="min-width: 80px;" class="column-title">위치13</th>
                            <th style="min-width: 104px;" class="column-title">가로사이즈14</th>
                            <th style="min-width: 104px;" class="column-title">세로사이즈14</th>
                            <th style="min-width: 80px;" class="column-title">위치14</th>
                            <th style="min-width: 104px;" class="column-title">가로사이즈15</th>
                            <th style="min-width: 104px;" class="column-title">세로사이즈15</th>
                            <th style="min-width: 80px;" class="column-title">위치15</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <?php
															$con = mysqli_connect("localhost", "roocam", "DB_PASSWORD_REMOVED", "roocam") or die("MySQL 안들어가짐!!");

															$sql = "SELECT * FROM UserData";
															$ret = mysqli_query($con, $sql);
															while($row = mysqli_fetch_array($ret)) {
                                echo "<td>", "<a href= '../production/update.php?userNumber=", $row['userNumber'], "'>수정 </a> ", "/" , " <a href= '../production/delete.php?userNumber=", $row['userNumber'], "'>삭제 </a></td>";
																echo '<td style="min-width: 100px;">', $row['userNumber'],"</TD>";
                                echo '<td style="min-width: 80px;">', $row['userBuilding'],"</TD>";
                                echo '<td style="min-width: 100px;">', $row['userHope'], "</TD>"; //공사 희망일
																echo '<td style="min-width: 400px;">', "(",$row['userAddr1'],")", $row['userAddr2'], $row['userAddr3'], "</TD>"; // 시/도
																echo '<td style="min-width: 100px;">', $row['mDate'], "</TD>"; // 견적서 작성날짜 
                                echo '<td style="min-width: 104px;">', $row['size_horizon'],"cm", "</TD>";
                                echo '<td style="min-width: 104px;">', $row['size_vertical'],"cm", "</TD>";
                                echo '<td style="min-width: 104px;">', $row['size_position'], "</TD>";
                                echo '<td style="min-width: 104px;">', $row['size_horizon2'],"cm", "</TD>";
                                echo '<td style="min-width: 104px;">', $row['size_vertical2'],"cm", "</TD>";
                                echo '<td style="min-width: 104px;">', $row['size_position2'], "</TD>";
                                echo '<td style="min-width: 104px;">', $row['size_horizon3'],"cm", "</TD>";
                                echo '<td style="min-width: 104px;">', $row['size_vertical3'],"cm", "</TD>";
                                echo '<td style="min-width: 104px;">', $row['size_position3'], "</TD>";
                                echo '<td style="min-width: 104px;">', $row['size_horizon4'],"cm", "</TD>";
                                echo '<td style="min-width: 104px;">', $row['size_vertical4'],"cm", "</TD>";
                                echo '<td style="min-width: 104px;">', $row['size_position4'], "</TD>";
                                echo '<td style="min-width: 104px;">', $row['size_horizon5'],"cm", "</TD>";
                                echo '<td style="min-width: 104px;">', $row['size_vertical5'],"cm", "</TD>";
                                echo '<td style="min-width: 104px;">', $row['size_position5'], "</TD>";
                                echo '<td style="min-width: 104px;">', $row['size_horizon6'],"cm", "</TD>";
                                echo '<td style="min-width: 104px;">', $row['size_vertical6'],"cm", "</TD>";
                                echo '<td style="min-width: 104px;">', $row['size_position6'], "</TD>";
                                echo '<td style="min-width: 104px;">', $row['size_horizon7'],"cm", "</TD>";
                                echo '<td style="min-width: 104px;">', $row['size_vertical7'],"cm", "</TD>";
                                echo '<td style="min-width: 104px;">', $row['size_position7'], "</TD>";
                                echo '<td style="min-width: 104px;">', $row['size_horizon8'],"cm", "</TD>";
                                echo '<td style="min-width: 104px;">', $row['size_vertical8'],"cm", "</TD>";
                                echo '<td style="min-width: 104px;">', $row['size_position8'], "</TD>";
                                echo '<td style="min-width: 104px;">', $row['size_horizon9'],"cm", "</TD>";
                                echo '<td style="min-width: 104px;">', $row['size_vertical9'],"cm", "</TD>";
                                echo '<td style="min-width: 104px;">', $row['size_position9'], "</TD>";
                                echo '<td style="min-width: 104px;">', $row['size_horizon10'],"cm", "</TD>";
                                echo '<td style="min-width: 104px;">', $row['size_vertical10'],"cm", "</TD>";
                                echo '<td style="min-width: 104px;">', $row['size_position10'], "</TD>";
                                echo '<td style="min-width: 104px;">', $row['size_horizon11'],"cm", "</TD>";
                                echo '<td style="min-width: 104px;">', $row['size_vertical11'],"cm", "</TD>";
                                echo '<td style="min-width: 104px;">', $row['size_position11'], "</TD>";
                                echo '<td style="min-width: 104px;">', $row['size_horizon12'],"cm", "</TD>";
                                echo '<td style="min-width: 104px;">', $row['size_vertical12'],"cm", "</TD>";
                                echo '<td style="min-width: 104px;">', $row['size_position12'], "</TD>";
                                echo '<td style="min-width: 104px;">', $row['size_horizon13'],"cm", "</TD>";
                                echo '<td style="min-width: 104px;">', $row['size_vertical13'],"cm", "</TD>";
                                echo '<td style="min-width: 104px;">', $row['size_position13'], "</TD>";
                                echo '<td style="min-width: 104px;">', $row['size_horizon14'],"cm", "</TD>";
                                echo '<td style="min-width: 104px;">', $row['size_vertical14'],"cm", "</TD>";
                                echo '<td style="min-width: 104px;">', $row['size_position14'], "</TD>";
                                echo '<td style="min-width: 104px;">', $row['size_horizon15'],"cm", "</TD>";
                                echo '<td style="min-width: 104px;">', $row['size_vertical15'],"cm", "</TD>";
                                echo '<td style="min-width: 104px;">', $row['size_position15'], "</TD>";
																echo"</tr>";
														}
														mysqli_close($con);
														?>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- /page content -->

  <!-- footer content -->
  <footer>
    <div class="pull-right">
      <a href="http://wincare.kr">Window Care Plus+ by roocam </a>
    </div>
    <div class="clearfix"></div>
  </footer>
  <!-- /footer content -->
  </div>
  </div>

  <!-- jQuery -->
  <script src="../vendors/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- FastClick -->
  <script src="../vendors/fastclick/lib/fastclick.js"></script>
  <!-- NProgress -->
  <script src="../vendors/nprogress/nprogress.js"></script>
  <!-- iCheck -->
  <script src="../vendors/iCheck/icheck.min.js"></script>
  <!-- Datatables -->
  <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
  <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
  <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
  <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
  <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
  <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
  <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
  <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
  <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
  <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
  <script src="../vendors/jszip/dist/jszip.min.js"></script>
  <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
  <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

  <!-- Custom Theme Scripts -->
  <script src="../build/js/custom.min.js"></script>

</body>

</html>