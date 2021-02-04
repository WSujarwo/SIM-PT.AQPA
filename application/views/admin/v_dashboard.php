<!--Counter Inbox-->
<?php 
$query=$this->db->query("SELECT * FROM tbl_inbox WHERE inbox_status='1'");
$jum_unread=$query->num_rows();

$query=$this->db->query("SELECT * FROM tbl_inbox");
$jum_pesan=$query->num_rows();

$query=$this->db->query("SELECT * FROM tbl_pengguna");
$jum_user=$query->num_rows();

$query=$this->db->query("SELECT * FROM tbl_team");
$jum_team=$query->num_rows();

$query=$this->db->query("SELECT * FROM tbl_portofolio");
$jum_porto=$query->num_rows();

$query=$this->db->query("SELECT * FROM tbl_galeri");
$jum_galeri=$query->num_rows();

$query=$this->db->query("SELECT * FROM tbl_tulisan");
$jum_post=$query->num_rows();

$query=$this->db->query("SELECT * FROM tbl_thermal");
$jum_thermal=$query->num_rows();

$query=$this->db->query("SELECT * FROM tbl_expansion");
$jum_ejf=$query->num_rows();

$query=$this->db->query("SELECT * FROM tbl_glandpacing");
$jum_gland=$query->num_rows();

$query=$this->db->query("SELECT * FROM tbl_swg");
$jum_swg=$query->num_rows();

$query=$this->db->query("SELECT * FROM tbl_graphite");
$jum_ring=$query->num_rows();

$query=$this->db->query("SELECT * FROM tbl_line");
$jum_line=$query->num_rows();

$query=$this->db->query("SELECT * FROM tbl_mep");
$jum_mep=$query->num_rows();

$query=$this->db->query("SELECT * FROM tbl_pipe");
$jum_pipe=$query->num_rows();

$query=$this->db->query("SELECT * FROM tbl_customer");
$jum_cust=$query->num_rows();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home | Dashboard Aqpa</title>
  <link type="text/css" href="<?php echo base_url().'template/edmin/bootstrap/css/bootstrap.min.css'?>" rel="stylesheet">
  <link type="text/css" href="<?php echo base_url().'template/edmin/bootstrap/css/bootstrap-responsive.min.css'?>" rel="stylesheet">
  <link type="text/css" href="<?php echo base_url().'template/edmin/css/theme.css'?>" rel="stylesheet">
  <link type="text/css" href="<?php echo base_url().'template/edmin/images/icons/css/font-awesome.css'?>" rel="stylesheet">
  <link type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
  rel="sstylesheet">
  <?php foreach($visitor as $result){
    $bulan[] = $result->tgl; //ambil bulan
    $value[] = (float) $result->jumlah; //ambil nilai
  }
  ?>

</head>
<body>
  <div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
          <i class="icon-reorder shaded"></i></a><a class="brand" href="<?php echo base_url().'admin/dashboard'?>" style=" margin: 0px 0px 0px 0px; padding-top: 10px; padding-bottom: 0px;"><img style="width: 150px; margin: 0px 0px 0px 0px;" class="" src="<?php echo base_url().'template/imperial/img/aqpamenu.png'?>" alt=""> </a>
          <div class="nav-collapse collapse navbar-inverse-collapse">
            <ul class="nav pull-right">
              <li class=""><a href="<?php echo base_url().'admin/inbox'?>"><i class="icon-envelope"></i>
                <span class="label label-success"><?php echo $jum_unread;?></span></a></li>

                <?php
                $id_admin=$this->session->userdata('idadmin');
                $q=$this->db->query("SELECT * FROM tbl_pengguna WHERE pengguna_id='$id_admin'");
                $c=$q->row_array();
                ?>
                <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span style="font-size: 18px"><?php echo $c['pengguna_nama'];?>&nbsp;</span>
                  <img src="<?php echo base_url().'assets/images/'.$c['pengguna_photo'];?>" class="nav-avatar" />
                  <b class="caret"></b></a>
                  <ul class="dropdown-menu " style="">
                    <!-- <li><a href="#">See All Users</a></li> -->
                    <img style="width: 100%" src="<?php echo base_url().'assets/images/'.$c['pengguna_photo'];?>" alt="">
                                <!-- <li><a href="#">Edit Profile</a></li>
                                  <li><a href="#">Account Settings</a></li> -->
                                  <li class="divider"></li>
                                  <li style="padding: 0px 15px 0px 15px;" class=""><span><a type="button" style="float: left" class="btn btn-group btn-success" href="<?php echo base_url().'admin/pengguna'?>">Users</a>&nbsp;<a type="button" style="float: right" class="btn btn-group btn-success" href="<?php echo base_url().'administrator/logout'?>">Logout</a></li>
                                  </ul></span>
                                </li>

                              </ul>
                            </div>
                            <!-- /.nav-collapse -->
                          </div>
                        </div>
                        <!-- /navbar-inner -->
                      </div>

                      <div class="wrapper">
                        <div class="container">
                          <div class="row">
                            <div class="span3">
                              <div class="sidebar">
                                <ul class="widget widget-menu unstyled">
                                  <li class="active"><a href="<?php echo base_url().'admin/dashboard'?>"><i class="menu-icon icon-dashboard"></i>Home
                                  </a></li>
                                  <li><a href="<?php echo base_url().'admin/inbox'?>"><i class="menu-icon icon-inbox"></i>Inbox <b class="label green pull-right">
                                    <?php echo $jum_unread;?></b> </a></li>
                                    <li><a href="<?php echo base_url().'admin/pengguna'?>"><i class="menu-icon icon-user"></i>User </a></li>
                                    <li><a href="<?php echo base_url().'admin/team'?>"><i class="menu-icon icon-group"></i>Team </a></li>
                                    <!-- <li><a href="<?php echo base_url().'admin/peg'?>"><i class="menu-icon icon-tasks"></i>Employee <b class="label orange pull-right"> -->
                                    </b> </a></li>
                                  </ul>
                                  <!--/.widget-nav-->


                                  <ul class="widget widget-menu unstyled">
                                    <li><a href="<?php echo base_url().'admin/portofolio'?>"><i class="menu-icon icon-briefcase"></i>Portofolio </a></li>
                                    <li><a class="collapsed" data-toggle="collapse" href="#aqpagallery"><i class="menu-icon icon-camera">
                                    </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                    </i>Gallery </a>
                                    <ul id="aqpagallery" class="collapse unstyled">
                                      <li><a href="<?php echo base_url().'admin/album'?>"><i class="icon-copy"></i> Album </a></li>
                                      <li><a href="<?php echo base_url().'admin/galeri'?>"><i class="icon-picture"></i> Photo </a></li>
                                    </ul>
                                  </li>
                                  <li><a class="collapsed" data-toggle="collapse" href="#news"><i class="menu-icon icon-paste">
                                  </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                  </i>News </a>
                                  <ul id="news" class="collapse unstyled">
                                    <li><a href="<?php echo base_url().'admin/tulisan'?>"><i class="icon-list"></i> List </a></li>
                                    <li><a href="<?php echo base_url().'admin/tulisan/add_tulisan'?>"><i class="icon-bar-chart"></i> Post </a></li>
                                    <li><a href="<?php echo base_url().'admin/kategori'?>"><i class="icon-wrench"></i> Kategori </a></li>
                                  </ul>
                                </li>
                              </ul>
                              <ul class="widget widget-menu unstyled">
                                <li><a class="collapsed" data-toggle="collapse" href="#gteproducts"><i class="menu-icon icon-th">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>GTE Products </a>
                                <ul id="gteproducts" class="collapse unstyled">
                                  <li><a href="<?php echo base_url().'admin/thermal'?>"><i class="icon-cogs"></i> Removable Thermal Insulation </a></li>
                                  <li><a href="<?php echo base_url().'admin/expansion'?>"><i class="icon-cogs"></i> Expansion Joint </a></li>
                                  <li><a href="<?php echo base_url().'admin/gland'?>"><i class="icon-cogs"></i> Gland packing </a></li>
                                  <li><a href="<?php echo base_url().'admin/swg'?>"><i class="icon-cogs"></i> Spiral Wound Gasket</a></li>
                                  <li><a href="<?php echo base_url().'admin/graphite'?>"><i class="icon-cogs"></i> Graphite Ring </a></li>
                                  <li><a href="<?php echo base_url().'admin/line'?>"><i class="icon-cogs"></i> PTFE / PFA Lined Pipe & Fitting </a></li>
                                </ul>
                              </li>
                              <li><a href="<?php echo base_url().'admin/mep'?>"><i class="menu-icon icon-tasks"></i>MEP Products <b class="label orange pull-right">
                              </b> </a></li>
                              <li><a href="<?php echo base_url().'admin/pipe'?>"><i class="menu-icon icon-tasks"></i>Steel Products <b class="label orange pull-right">
                              </b> </a></li>
                              <li><a href="<?php echo base_url().'admin/customer'?>"><i class="menu-icon icon-book"></i>Customer List</a></li>
                            </ul>
                            <ul class="widget widget-menu unstyled">
                              <li><a href="<?php echo base_url().'administrator/logout'?>"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                          </div>
                          <!--/.sidebar-->
                        </div>
                        <!--/.span3-->
                        <div class="span9">
                          <div class="content">
                            <div class="btn-controls">
                              <div class="btn-box-row row-fluid">
                                <a href="<?php echo base_url().'admin/inbox'?>" class="btn-box big span3"><h4 class="text-muted" >INBOX</h4><i class="icon-envelope"></i><b><?php echo $jum_pesan;?></b>
                                  <p class="text-muted">
                                  Messages</p>
                                </a>
                                <a href="<?php echo base_url().'admin/pengguna'?>" class="btn-box big span3"><h4 class="text-muted" >USER</h4><i class="icon-user"></i><b><?php echo $jum_user; ?></b>
                                  <p class="text-muted">
                                  Member</p>
                                </a>
                                <a href="<?php echo base_url().'admin/team'?>" class="btn-box big span3"><h4 class="text-muted" >GREAT TEAM</h4><i class="icon-group"></i><b><?php echo $jum_team; ?></b>
                                  <p class="text-muted">
                                  Member</p>
                                </a>
                                <a href="<?php echo base_url().'admin/portofolio'?>" class="btn-box big span3"><h4 class="text-muted" >PORTOFOLIO</h4><i class=" icon-briefcase"></i><b><?php echo $jum_porto; ?></b>
                                  <p class="text-muted">
                                  Pictures</p>
                                </a>
                              </div>

                              <div class="btn-box-row row-fluid">
                                <a href="<?php echo base_url().'admin/galeri'?>" class="btn-box big span3"><h4 class="text-muted" >GALLERY</h4><i class="icon-picture"></i><b><?php echo $jum_galeri; ?></b>
                                  <p class="text-muted">
                                  Photo</p>
                                </a>
                                <a href="<?php echo base_url().'admin/tulisan'?>" class="btn-box big span3">
                                  <h4 class="text-muted" >NEWS / ARTICEL</h4><i class="icon-paste"></i><b><?php echo $jum_post; ?></b>
                                  <p class="text-muted">
                                  Post</p>
                                </a>
                                <a href="<?php echo base_url().'admin/thermal'?>" class="btn-box big span3">
                                  <h6 class="text-muted">REMOVABLE THERMAL INSULATION</h6><i class=" icon-cog"></i><b><?php echo $jum_thermal; ?></b>
                                  <p class="text-muted">Pictures </p>
                                </a>
                                <a href="<?php echo base_url().'admin/expansion'?>" class="btn-box big span3"><h4 class="text-muted" >EXPANSION JOINT</h4><i class="icon-cogs"></i><b><?php echo $jum_ejf; ?></b>
                                  <p class="text-muted">
                                  Pictures</p>
                                </a>
                              </div>

                              <div class="btn-box-row row-fluid">
                                <a href="<?php echo base_url().'admin/gland'?>" class="btn-box big span3"><h4 class="text-muted">GLAND PACKING</h4><i class="icon-th-list"></i><b><?php echo $jum_gland; ?></b>
                                  <p class="text-muted">
                                  Pictures</p>
                                </a>
                                <a href="<?php echo base_url().'admin/swg'?>" class="btn-box big span3">
                                  <h4 class="text-muted">SPIRAL WOUND GASKET</h4><i class=" icon-random"></i><b><?php echo $jum_swg; ?></b>
                                  <p class="text-muted">Pictures </p>
                                </a>
                                <a href="<?php echo base_url().'admin/graphite'?>" class="btn-box big span3">
                                  <h4 class="text-muted" >GRAPHITE RING</h4><i class="icon-circle-blank"></i><b><?php echo $jum_ring ?></b>
                                  <p class="text-muted">
                                  Pictures</p>
                                </a>
                                <a href="<?php echo base_url().'admin/line'?>" class="btn-box big span3"><h5 class="text-muted">PTFE LINE PIPE & FITTING</h5><i class="icon-road"></i><b><?php echo $jum_line; ?></b>
                                  <p class="text-muted">
                                  Pictures</p>
                                </a>
                              </div>

                              <div class="btn-box-row row-fluid">
                                <a href="<?php echo base_url().'admin/mep'?>" class="btn-box big span4"><h5 class="text-muted">
                                MECHANICAL, ELECTRICAL, PLUMBING</h5><i class=" icon-bolt"></i><b><?php echo $jum_mep; ?></b>
                                <p class="text-muted">
                                Pictures </p>
                              </a>
                              <a href="<?php echo base_url().'admin/pipe'?>" class="btn-box big span4"><h4 class="text-muted" >PIPE & STEEL</h4><i class="icon-sort"></i><b><?php echo $jum_pipe; ?></b>
                                <p class="text-muted">
                                Pictures</p>
                              </a>
                              <a href="<?php echo base_url().'admin/customer'?>" class="btn-box big span4"><h4 class="text-muted">CUSTUMERS</h4><i class="icon-link"></i><b><?php echo $jum_cust; ?></b>
                                <p class="text-muted">
                                Clients</p>
                              </a>
                            </div>

                            <h3>Most Favorite Posts</h3>
                            <div class="module">
                              <div class="module-body table">
                                <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display"
                                width="100%">
                                <thead>
                                  <tr>
                                    <th>
                                      Post Title
                                    </th>
                                    <th>
                                      Views
                                    </th>
                                  </tr>
                                </thead>
                                <!-- <table class="table"> -->
                                  <?php 
                                  $query=$this->db->query("SELECT * FROM tbl_tulisan ORDER BY tulisan_views DESC");
                                  foreach ($query->result_array() as $i) :
                                    $tulisan_id=$i['tulisan_id'];
                                    $tulisan_judul=$i['tulisan_judul'];
                                    $tulisan_views=$i['tulisan_views'];
                                    ?>


                                    <tr class="gradeC">
                                      <td>
                                        <?php echo $tulisan_judul;?>
                                      </td>
                                      <td>
                                        <?php echo $tulisan_views.' Views';?>
                                      </td>
                                    </tr>
                                  <?php endforeach;?>
                                </table>
                              </div>
                            </div>



                            <h3>Visitors</h3>
                            <div class="btn-box-row row-fluid">
                              <ul class="widget widget-usage unstyled ">
                                <?php 
                                $query=$this->db->query("SELECT * FROM tbl_pengunjung WHERE pengunjung_perangkat='Safari'");
                                $jml=$query->num_rows();
                                ?>
                                <li>
                                  <p>
                                    <strong>Safari</strong> <span class="pull-right small muted"><?php echo number_format($jml);?></span>
                                  </p>
                                  <div class="progress tight">
                                    <div class="bar" style="width: <?php echo number_format($jml);?>% ;" value="<?php echo number_format($jml);?>" >
                                    </div>
                                  </div>
                                </li>
                                <?php 
                                $query=$this->db->query("SELECT * FROM tbl_pengunjung WHERE pengunjung_perangkat='Other' OR pengunjung_perangkat='Internet Explorer'");
                                $jml=$query->num_rows();
                                ?>
                                <li>
                                  <p>
                                    <strong>Interner Explorer</strong> <span class="pull-right small muted"><?php echo number_format($jml);?></span>
                                  </p>
                                  <div class="progress tight">
                                    <div class="bar bar-success" style="width: <?php echo number_format($jml);?>%;">
                                    </div>
                                  </div>
                                </li>
                                <?php 
                                $query=$this->db->query("SELECT * FROM tbl_pengunjung WHERE DATE_FORMAT(pengunjung_tanggal,'%m%y')=DATE_FORMAT(DATE_SUB(CURDATE(), INTERVAL 1 MONTH),'%m%y')");
                                $jml=$query->num_rows();
                                ?>
                                <li>
                                  <p>
                                    <strong>Last Month's Visitors</strong> <span class="pull-right small muted"><?php echo number_format($jml);?></span>
                                  </p>
                                  <div class="progress tight">
                                    <div class="bar bar-warning" style="width: <?php echo number_format($jml);?>%;">
                                    </div>
                                  </div>
                                </li>
                                <?php 
                                $query=$this->db->query("SELECT * FROM tbl_pengunjung WHERE DATE_FORMAT(pengunjung_tanggal,'%m%y')=DATE_FORMAT(CURDATE(),'%m%y')");
                                $jml=$query->num_rows();
                                ?>
                                <li>
                                  <p>
                                    <strong>This Month's Visitors</strong> <span class="pull-right small muted"><?php echo number_format($jml);?></span>
                                  </p>
                                  <div class="progress tight">
                                    <div class="bar bar-danger" style="width: <?php echo number_format($jml);?>%;">
                                    </div>
                                  </div>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="span4">
            &copy; 2019 <b class=""> <strong>AQPA INDONESIA</strong> - aqpa.id </b>All rights reserved.  
          </div>
          <div class="span4"></div>
          <div class="span4">
            <img style="width: 50%" class="pull-right" src="<?php echo base_url().'template/imperial/img/authorized-gte.png'?>" alt="">
          </div>
        </div>
      </div>

      <script src="<?php echo base_url().'template/edmin/scripts/jquery-1.9.1.min.js'?>" type="text/javascript"></script>
      <script src="<?php echo base_url().'template/edmin/scripts/jquery-ui-1.10.1.custom.min.js'?>" type="text/javascript"></script>
      <script src="<?php echo base_url().'template/edmin/bootstrap/js/bootstrap.min.js'?>" type="text/javascript"></script>
      <script src="<?php echo base_url().'template/edmin/scripts/flot/jquery.flot.js'?>" type="text/javascript"></script>
      <script src="<?php echo base_url().'template/edmin/scripts/flot/jquery.flot.resize.js'?>" type="text/javascript"></script>
      <script src="<?php echo base_url().'template/edmin/scripts/datatables/jquery.dataTables.js'?>" type="text/javascript"></script>
      <script src="<?php echo base_url().'template/edmin/scripts/common.js'?>" type="text/javascript"></script>

      <script>

        var lineChartData = {
          labels : <?php echo json_encode($bulan);?>,
          datasets : [

          {
            fillColor: "rgba(60,141,188,0.9)",
            strokeColor: "rgba(60,141,188,0.8)",
            pointColor: "#3b8bba",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(152,235,239,1)",
            data : <?php echo json_encode($value);?>
          }

          ]

        }

        var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);

        var canvas = new Chart(myLine).Line(lineChartData, {
          scaleShowGridLines : true,
          scaleGridLineColor : "rgba(0,0,0,.005)",
          scaleGridLineWidth : 0,
          scaleShowHorizontalLines: true,
          scaleShowVerticalLines: true,
          bezierCurve : true,
          bezierCurveTension : 0.4,
          pointDot : true,
          pointDotRadius : 4,
          pointDotStrokeWidth : 1,
          pointHitDetectionRadius : 2,
          datasetStroke : true,
          tooltipCornerRadius: 2,
          datasetStrokeWidth : 2,
          datasetFill : true,
          legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].strokeColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
          responsive: true
        });

      </script>

    </body>
    </html>
