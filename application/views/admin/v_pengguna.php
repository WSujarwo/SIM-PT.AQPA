<!--Counter Inbox-->
<?php 
$query=$this->db->query("SELECT * FROM tbl_inbox WHERE inbox_status='1'");
$jum_pesan=$query->num_rows();
?>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Users | Dashboard Aqpa</title>
  <link type="text/css" href="<?php echo base_url().'template/edmin/bootstrap/css/bootstrap.min.css'?>" rel="stylesheet">
  <link type="text/css" href="<?php echo base_url().'template/edmin/bootstrap/css/bootstrap-responsive.min.css'?>" rel="stylesheet">
  <link type="text/css" href="<?php echo base_url().'template/edmin/css/theme.css'?>" rel="stylesheet">
  <link type="text/css" href="<?php echo base_url().'template/edmin/images/icons/css/font-awesome.css'?>" rel="stylesheet">
  <link type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
  rel="sstylesheet">
  
  
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
                <span class="label label-success"><?php echo $jum_pesan;?></span></a></li>

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
                                  <li ><a href="<?php echo base_url().'admin/dashboard'?>"><i class="menu-icon icon-dashboard"></i>Home
                                  </a></li>
                                  <li><a href="<?php echo base_url().'admin/inbox'?>"><i class="menu-icon icon-inbox"></i>Inbox <b class="label green pull-right">
                                    <?php echo $jum_pesan;?></b> </a></li>
                                    <li class="active"><a href="<?php echo base_url().'admin/pengguna'?>"><i class="menu-icon icon-user"></i>User </a></li>
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
                            <div class="module">
                              <div class="module-head">
                                <h2>All Users <a class="btn btn-info" style="float: right; " data-toggle="modal" data-target="#myModal"><span class="fa fa-user-plus"></span> Add User</a></h2>
                              </div>
                              <?php foreach ($data->result_array() as $i) :
                               $pengguna_id=$i['pengguna_id'];
                               $pengguna_nama=$i['pengguna_nama'];
                               $pengguna_jenkel=$i['pengguna_jenkel'];
                               $pengguna_email=$i['pengguna_email'];
                               $pengguna_username=$i['pengguna_username'];
                               $pengguna_password=$i['pengguna_password'];
                               $pengguna_nohp=$i['pengguna_nohp'];
                               // $pengguna_level=$i['pengguna_level'];
                               $pengguna_photo=$i['pengguna_photo'];
                               ?>
                              <div class="module-option clearfix">
                              </div>
                              <div class="module-body">
                                <div class="row-fluid">
                                  <div class="span6">
                                  
                                    <div class="media user">
                                      <a class="media-avatar pull-left" href="#">
                                        <img src="<?php echo base_url().'assets/images/'.$pengguna_photo;?>">
                                      </a>
                                      <div class="media-body">
                                        <h3 class="media-title">
                                          <?php echo $pengguna_nama;?>
                                        </h3>
                                        <p>
                                          Username: <?php echo $pengguna_username; ?><br>
                                          Email: <?php echo $pengguna_email;?><br>
                                          No. Hp: <?php echo $pengguna_nohp;?>
                                        </p>
                                        
                                        <div class="media-option btn-group shaded-icon" >
                                          <!-- <button class="btn btn-small" data-toggle="modal" data-target="#ModalEdit<?php echo $pengguna_id;?>">
                                            <i class="icon-pencil"></i>
                                          </button>
                                          <button class="btn btn-small" href="<?php echo base_url().'admin/pengguna/reset_password/'.$pengguna_id;?>" >
                                            <i class="icon-refresh"></i> -->
                                          </button>
                                          <button class="btn btn-small" data-toggle="modal" data-target="#ModalHapus<?php echo $pengguna_id;?>">
                                            <i class="icon-trash"></i>
                                          </button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <?php endforeach;?>
                            </div>
                            <!--/.row-fluid-->
                            
                          </div>
                        </div>
                      </div>
                      <!--/.content-->
                    </div>
                    <!--/.span9-->

                    

                    <!--Modal Add Pengguna-->
                    <div hidden class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                            <h4 class="modal-title" id="myModalLabel">Add User</h4>
                          </div>
                          <form class="form-horizontal" action="<?php echo base_url().'admin/pengguna/simpan_pengguna'?>" method="post" enctype="multipart/form-data">
                            <div class="modal-body">
                              
                              <div class="control-group">
                                <label for="inputUserName" class="control-label">Name</label>
                                <div class="controls">
                                  <input type="text" name="xnama" class="form-control" id="inputUserName" placeholder="Nama Lengkap" required>
                                </div>
                              </div>
                              <div class="control-group">
                                <label for="inputEmail3" class="control-label">Email</label>
                                <div class="controls">
                                  <input type="email" name="xemail" class="form-control" id="inputEmail3" placeholder="Email" required>
                                </div>
                              </div>
                              <div class="control-group">
                                <label for="inputUserName" class="control-label">Gender</label>
                                <div class="controls">
                                 <div class="radio radio-info radio-inline">
                                  <input type="radio" id="inlineRadio1" value="L" name="xjenkel" checked>
                                  <label for="inlineRadio1"> Laki-Laki </label>
                                </div>
                                <div class="radio radio-info radio-inline">
                                  <input type="radio" id="inlineRadio2" value="P" name="xjenkel">
                                  <label for="inlineRadio2"> Perempuan </label>
                                </div>
                              </div>
                            </div>
                            <div class="control-group">
                              <label for="inputUserName" class="control-label">Username</label>
                              <div class="controls">
                                <input type="text" name="xusername" class="form-control" id="inputUserName" placeholder="Username" required>
                              </div>
                            </div>
                            <div class="control-group">
                              <label for="inputPassword3" class="control-label">Password</label>
                              <div class="controls">
                                <input type="password" name="xpassword" class="form-control" id="inputPassword3" placeholder="Password" required>
                              </div>
                            </div>
                            <div class="control-group">
                              <label for="inputPassword4" class="control-label">Re-type Password</label>
                              <div class="controls">
                                <input type="password" name="xpassword2" class="form-control" id="inputPassword4" placeholder="Ulangi Password" required>
                              </div>
                            </div>
                            <div class="control-group">
                              <label for="inputUserName" class="control-label">Kontak Person</label>
                              <div class="controls">
                                <input type="text" name="xkontak" class="form-control" id="inputUserName" placeholder="Kontak Person" required>
                              </div>
                            </div>
                            <div class="control-group">
                              <label for="inputUserName" class="control-label">Level</label>
                              <div class="controls">
                                <select class="form-control" name="xlevel" required>
                                  <option value="1">Administrator</option>
                                  <option value="2">Author</option>
                                </select>
                              </div>
                            </div>
                            <div class="control-group">
                              <label for="inputUserName" class="control-label">Photo</label>
                              <div class="controls">
                                <input type="file" name="filefoto" required/>
                              </div>
                            </div>
                            

                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary btn-flat" id="simpan">Save</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>


                  <?php foreach ($data->result_array() as $i) :
                    $pengguna_id=$i['pengguna_id'];
                    $pengguna_nama=$i['pengguna_nama'];
                    $pengguna_jenkel=$i['pengguna_jenkel'];
                    $pengguna_email=$i['pengguna_email'];
                    $pengguna_username=$i['pengguna_username'];
                    $pengguna_password=$i['pengguna_password'];
                    $pengguna_nohp=$i['pengguna_nohp'];
                    $pengguna_level=$i['pengguna_level'];
                    $pengguna_photo=$i['pengguna_photo'];
                    ?>
                    <!--Modal Edit Pengguna-->
                    <div hidden class="modal fade" id="ModalEdit<?php echo $pengguna_id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                            <h4 class="modal-title" id="myModalLabel">Edit User</h4>
                          </div>
                          <form class="form-horizontal" action="<?php echo base_url().'admin/pengguna/update_pengguna'?>" method="post" enctype="multipart/form-data">
                            <div class="modal-body">
                              
                              <div class="control-group">
                                <label for="inputUserName" class="control-label">Name</label>
                                <div class="controls">
                                 <input type="hidden" name="kode" value="<?php echo $pengguna_id;?>"/> 
                                 <input type="text" name="xnama" class="form-control" id="inputUserName" value="<?php echo $pengguna_nama;?>" placeholder="Nama Lengkap" required>
                               </div>
                             </div>
                             <div class="control-group">
                              <label for="inputEmail3" class="control-label">Email</label>
                              <div class="controls">
                                <input type="email" name="xemail" class="form-control" value="<?php echo $pengguna_email;?>" id="inputEmail3" placeholder="Email" required>
                              </div>
                            </div>
                            <div class="control-group">
                              <label for="inputUserName" class="control-label">Gender</label>
                              <div class="controls">
                                <?php if($pengguna_jenkel=='L'):?>
                                 <div class="radio">
                                  <input type="radio" id="inlineRadio1" value="L" name="xjenkel" checked>
                                  <label for="inlineRadio1"> Laki-Laki </label>
                                </div>
                                <div class="radio ">
                                  <input type="radio" id="inlineRadio2" value="P" name="xjenkel">
                                  <label for="inlineRadio2"> Perempuan </label>
                                </div>
                                <?php else:?>
                                 <div class="radio ">
                                  <input type="radio" id="inlineRadio1" value="L" name="xjenkel">
                                  <label for="inlineRadio1"> Laki-Laki </label>
                                </div>
                                <div class="radio ">
                                  <input type="radio" id="inlineRadio2" value="P" name="xjenkel" checked>
                                  <label for="inlineRadio2"> Perempuan </label>
                                </div>
                              <?php endif;?>
                            </div>
                          </div>
                          <div class="control-group">
                            <label for="inputUserName" class="control-label">Username</label>
                            <div class="controls">
                              <input type="text" name="xusername" class="form-control" value="<?php echo $pengguna_username;?>" id="inputUserName" placeholder="Username" required>
                            </div>
                          </div>
                          <div class="control-group">
                            <label for="inputPassword3" class="control-label">Password</label>
                            <div class="controls">
                              <input type="password" name="xpassword" class="form-control" id="inputPassword3" placeholder="Password">
                            </div>
                          </div>
                          <div class="control-group">
                            <label for="inputPassword4" class="control-label">Re-Type Password</label>
                            <div class="controls">
                              <input type="password" name="xpassword2" class="form-control" id="inputPassword4" placeholder="Ulangi Password">
                            </div>
                          </div>
                          <div class="control-group">
                            <label for="inputUserName" class="control-label">Kontak Person</label>
                            <div class="controls">
                              <input type="text" name="xkontak" class="form-control" value="<?php echo $pengguna_nohp;?>" id="inputUserName" placeholder="Kontak Person" required>
                            </div>
                          </div>
                          <div class="control-group">
                            <label for="inputUserName" class="control-label">Level</label>
                            <div class="controls">
                              <select class="form-control" name="xlevel" required>
                               <?php if($pengguna_level=='1'):?>
                                <option value="1" selected>Administrator</option>
                                <option value="2">Author</option>
                                <?php else:?>
                                  <option value="1">Administrator</option>
                                  <option value="2" selected>Author</option>
                                <?php endif;?>
                              </select>
                            </div>
                          </div>
                          <div class="control-group">
                            <label for="inputUserName" class="control-label">Photo</label>
                            <div class="controls">
                              <input type="file" name="filefoto"/>
                            </div>
                          </div>
                          

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Cancel</button>
                          <button type="submit" class="btn btn-primary btn-flat" id="simpan">Update</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              <?php endforeach;?>

              <?php foreach ($data->result_array() as $i) :
                $pengguna_id=$i['pengguna_id'];
                $pengguna_nama=$i['pengguna_nama'];
                $pengguna_jenkel=$i['pengguna_jenkel'];
                $pengguna_email=$i['pengguna_email'];
                $pengguna_username=$i['pengguna_username'];
                $pengguna_password=$i['pengguna_password'];
                $pengguna_nohp=$i['pengguna_nohp'];
                $pengguna_level=$i['pengguna_level'];
                $pengguna_photo=$i['pengguna_photo'];
                ?>
                <!--Modal Hapus Pengguna-->
                <div hidden class="modal fade" id="ModalHapus<?php echo $pengguna_id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Delete User</h4>
                      </div>
                      <form class="form-horizontal" action="<?php echo base_url().'admin/pengguna/hapus_pengguna'?>" method="post" enctype="multipart/form-data">
                        <div class="modal-body">       
                         <input type="hidden" name="kode" value="<?php echo $pengguna_id;?>"/> 
                         <p>Are you sure you want to delete <b>User <?php echo $pengguna_nama;?></b> ?</p>
                         
                       </div>
                       <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Delete</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            <?php endforeach;?>

            <!--Modal Reset Password-->
            <div class="modal fade" id="ModalResetPassword" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                    <h4 class="modal-title" id="myModalLabel">Reset Password</h4>
                  </div>
                  
                  <div class="modal-body">
                    
                    <table>
                      <tr>
                        <th style="width:120px;">Username</th>
                        <th>:</th>
                        <th><?php echo $this->session->flashdata('uname');?></th>
                      </tr>
                      <tr>
                        <th style="width:120px;">Password Baru</th>
                        <th>:</th>
                        <th><?php echo $this->session->flashdata('upass');?></th>
                      </tr>
                    </table>                     
                    
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
  <!-- page script -->
  <script>
    $(function () {
      $("#example1").DataTable();
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false
      });
    });
  </script>
  <?php if($this->session->flashdata('msg')=='error'):?>
    <script type="text/javascript">
      $.toast({
        heading: 'Error',
        text: "Password dan Ulangi Password yang Anda masukan tidak sama.",
        showHideTransition: 'slide',
        icon: 'error',
        hideAfter: false,
        position: 'bottom-right',
        bgColor: '#FF4859'
      });
    </script>
    <?php elseif($this->session->flashdata('msg')=='warning'):?>
      <script type="text/javascript">
        $.toast({
          heading: 'Warning',
          text: "Gambar yang Anda masukan terlalu besar.",
          showHideTransition: 'slide',
          icon: 'warning',
          hideAfter: false,
          position: 'bottom-right',
          bgColor: '#FFC017'
        });
      </script>
      <?php elseif($this->session->flashdata('msg')=='success'):?>
        <script type="text/javascript">
          $.toast({
            heading: 'Success',
            text: "Pengguna Berhasil disimpan ke database.",
            showHideTransition: 'slide',
            icon: 'success',
            hideAfter: false,
            position: 'bottom-right',
            bgColor: '#7EC857'
          });
        </script>
        <?php elseif($this->session->flashdata('msg')=='info'):?>
          <script type="text/javascript">
            $.toast({
              heading: 'Info',
              text: "Pengguna berhasil di update",
              showHideTransition: 'slide',
              icon: 'info',
              hideAfter: false,
              position: 'bottom-right',
              bgColor: '#00C9E6'
            });
          </script>
          <?php elseif($this->session->flashdata('msg')=='success-hapus'):?>
            <script type="text/javascript">
              $.toast({
                heading: 'Success',
                text: "Pengguna Berhasil dihapus.",
                showHideTransition: 'slide',
                icon: 'success',
                hideAfter: false,
                position: 'bottom-right',
                bgColor: '#7EC857'
              });
            </script>
            <?php elseif($this->session->flashdata('msg')=='show-modal'):?>
              <script type="text/javascript">
                $('#ModalResetPassword').modal('show');
              </script>
              <?php else:?>

              <?php endif;?>
            </body>
            </html>
