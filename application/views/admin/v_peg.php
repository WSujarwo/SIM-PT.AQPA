<!--Counter Inbox-->
<?php 
$query=$this->db->query("SELECT * FROM tbl_inbox WHERE inbox_status='1'");
$jum_pesan=$query->num_rows();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee | Dashboard Aqpa</title>
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
                  <i class="icon-reorder shaded"></i></a><a class="brand" href="index.html">Aqpa-id </a>
                  <div class="nav-collapse collapse navbar-inverse-collapse">
                        <!-- <ul class="nav nav-icons">
                        </ul> -->
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
                                  <li class="active"><a href="<?php echo base_url().'admin/dashboard'?>"><i class="menu-icon icon-dashboard"></i>Home
                                  </a></li>
                                  <li><a href="<?php echo base_url().'admin/inbox'?>"><i class="menu-icon icon-inbox"></i>Inbox <b class="label green pull-right">
                                    <?php echo $jum_pesan;?></b> </a></li>
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

                        <div class="module">
                          <div class="module-head">
                            <h2>Employee Data <a class="btn btn-info " style="float: right; " data-toggle="modal" data-target="#myModal"><span class="fa fa-plus"></span> Add Employee</a></h2> 
                          </div>
                          <div class="float-right">
                            
                          </div>
                          <div class="module-body table">
                            <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display" width="100%">
                              <thead>
                                <tr>
                                  <th>No</th>
                                  <th>Photo </th>
                                  <th>NIP </th>
                                  <th>Nama </th>
                                  <th>Tempat / Tanggal Lahir</th>
                                  <th>Gender </th>
                                  <!-- <th>Photo KTP</th> -->
                                  <!-- <th>Photo KK </th> -->
                                  <th>Action </th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php
                                $no=0;
                                foreach ($data->result_array() as $i) :
                                 $no++;
                                 $id=$i['peg_id'];
                                 $nip=$i['peg_nip'];
                                 $nama=$i['peg_nama'];
                                 $jenkel=$i['peg_jenkel'];
                                 $tmp_lahir=$i['peg_tmp_lahir'];
                                 $tgl_lahir=$i['peg_tgl_lahir'];
                       // $mapel=$i['peg_mapel'];
                                 $photo=$i['peg_photo'];

                                 ?>
                                 <tr class="odd gradeX">
                                  <td><?php echo $no ?></td>
                                  <?php if(empty($photo)):?>
                                    <td><img width="40" height="40" class="img-circle" src="<?php echo base_url().'assets/images/user_blank.png';?>"></td>
                                    <?php else:?>
                                      <td><img width="40" height="40" class="img-circle" src="<?php echo base_url().'assets/images/'.$photo;?>"></td>
                                    <?php endif;?>
                                    <td><?php echo $nip;?></td>
                                    <td><?php echo $nama;?></td>
                                    <td><?php echo $tmp_lahir.', '.$tgl_lahir;?></td>
                                    <?php if($jenkel=='L'):?>
                                      <td>Laki-Laki</td>
                                      <?php else:?>
                                        <td>Perempuan</td>
                                      <?php endif;?>
                                      <!-- <td><?php echo $fc_ktp;?></td> -->
                                      <!-- <td><?php echo $fc_kkk;?></td> -->
                                      <!-- <td><?php echo $mapel;?></td> -->
                                      <td style="text-align:right;">
                                        <a class="btn" data-toggle="modal" data-target="#ModalEdit<?php echo $id;?>"><span class="icon-pencil"></span></a>
                                        <a class="btn" data-toggle="modal" data-target="#ModalHapus<?php echo $id;?>"><span class="icon-trash"></span></a>
                                      </td>
                                    </tr>
                                  <?php endforeach;?>
                                </tbody>
                              </table>
                            </div>
                          </div><!--/.module-->

                        <!--Modal Add Employee-->
                        <div hidden class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                                <h4 class="modal-title" id="myModalLabel">Add Employee</h4>
                              </div>
                              
                              <form class="form-horizontal row-fluid" action="<?php echo base_url().'admin/peg/simpan_peg'?>" method="post" enctype="multipart/form-data">
                                <div class="modal-body">

                                  <div class="control-group">
                                    <label for="inputUserName" class="control-label">NIP</label>
                                    <div class="controls">
                                      <input type="text" name="xnip" class="span8" id="inputUserName" placeholder="NIP" required>
                                    </div>
                                  </div>
                                  
                                  <div class="control-group">
                                    <label for="inputUserName" class="control-label">Nama</label>
                                    <div class="controls">
                                      <input type="text" name="xnama" class="span8" id="inputUserName" placeholder="Nama" required>
                                    </div>
                                  </div>

                                  <div class="control-group">
                                    <label for="inputUserName" class="control-label">Jenis Kelamin</label>
                                    <div class="controls">
                                     <div class="radio">
                                      <input type="radio" id="inlineRadio1" value="L" name="xjenkel" checked>
                                      <label for="inlineRadio1"> Laki-Laki </label>
                                    </div>
                                    <div class="radio">
                                      <input type="radio" id="inlineRadio2" value="P" name="xjenkel">
                                      <label for="inlineRadio2"> Perempuan </label>
                                    </div>
                                  </div>
                                </div>

                                <div class="control-group">
                                  <label for="inputUserName" class="col-sm-4 control-label">Tempat Lahir</label>
                                  <div class="controls">
                                    <input type="text" name="xtmp_lahir" class="span8" id="inputUserName" placeholder="Tempat Lahir" required>
                                  </div>
                                </div>

                                <div class="control-group">
                                  <label for="inputUserName" class="col-sm-4 control-label">Tanggal Lahir</label>
                                  <div class="controls">
                                    <input type="text" name="xtgl_lahir" class="span8" id="inputUserName" placeholder="Contoh: 25 September 1993" required>
                                  </div>
                                </div>

                                      
                                      <div class="control-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Photo</label>
                                        <div class="controls">
                                          <input type="file" name="filefoto"/>
                                        </div>
                                      </div>
                                      

                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                                      <button type="submit" class="btn btn-primary btn-flat" id="simpan">Save</button>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>

                            <!--Modal Edit Employee-->
                            <?php foreach ($data->result_array() as $i) :
                              $id=$i['peg_id'];
                              $nip=$i['peg_nip'];
                              $nama=$i['peg_nama'];
                              $jenkel=$i['peg_jenkel'];
                              $tmp_lahir=$i['peg_tmp_lahir'];
                              $tgl_lahir=$i['peg_tgl_lahir'];
                              $ktp=$i['peg_ktp'];
              // $mapel=$i['peg_mapel'];
                              $photo=$i['peg_photo'];
                              $kk=$i['peg_kk'];
                              ?>
                              
                              <div hidden class="modal fade" id="ModalEdit<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                                      <h4 class="modal-title" id="myModalLabel">Edit Employee</h4>
                                    </div>
                                    <form class="form-horizontal" action="<?php echo base_url().'admin/peg/update_peg'?>" method="post" enctype="multipart/form-data">
                                      <div class="modal-body">       
                                        <input type="hidden" name="kode" value="<?php echo $id;?>"/> 
                                        <input type="hidden" value="<?php echo $photo;?>" name="gambar">
                                        <div class="control-group">
                                          <label for="inputUserName" class="control-label">NIP</label>
                                          <div class="controls">
                                            <input type="text" name="xnip" value="<?php echo $nip;?>" class="form-control" id="inputUserName" placeholder="NIP" required>
                                          </div>
                                        </div>
                                        
                                        <div class="control-group">
                                          <label for="inputUserName" class="control-label">Nama</label>
                                          <div class="controls">
                                            <input type="text" name="xnama" value="<?php echo $nama;?>" class="form-control" id="inputUserName" placeholder="Nama" required>
                                          </div>
                                        </div>

                                        <div class="control-group">
                                          <label for="inputUserName" class="control-label">Jenis Kelamin</label>
                                          <div class="controls">
                                            <?php if($jenkel=='L'):?>
                                             <div class="radio">
                                              <input type="radio" id="inlineRadio1" value="L" name="xjenkel" checked>
                                              <label for="inlineRadio1"> Laki-Laki </label>
                                            </div>
                                            <div class="radio">
                                              <input type="radio" id="inlineRadio2" value="P" name="xjenkel">
                                              <label for="inlineRadio2"> Perempuan </label>
                                            </div>
                                            <?php else:?>
                                              <div class="radio">
                                                <input type="radio" id="inlineRadio1" value="L" name="xjenkel">
                                                <label for="inlineRadio1"> Laki-Laki </label>
                                              </div>
                                              <div class="radio">
                                                <input type="radio" id="inlineRadio2" value="P" name="xjenkel" checked>
                                                <label for="inlineRadio2"> Perempuan </label>
                                              </div>
                                            <?php endif;?>
                                          </div>
                                        </div>

                                        <div class="control-group">
                                          <label for="inputUserName" class="control-label">Tempat Lahir</label>
                                          <div class="controls">
                                            <input type="text" name="xtmp_lahir" value="<?php echo $tmp_lahir;?>" class="form-control" id="inputUserName" placeholder="Tempat Lahir" required>
                                          </div>
                                        </div>

                                        <div class="control-group">
                                          <label for="inputUserName" class="control-label">Tanggal Lahir</label>
                                          <div class="controls">
                                            <input type="text" name="xtgl_lahir" value="<?php echo $tgl_lahir;?>" class="form-control" id="inputUserName" placeholder="Contoh: 25 September 1993" required>
                                          </div>
                                        </div>

                                    <!-- <div class="control-group">
                                        <label for="inputUserName" class="control-label">Mata Pelajaran</label>
                                        <div class="controls">
                                            <input type="text" name="xmapel" value="<?php echo $mapel;?>" class="form-control" id="inputUserName" placeholder="Contoh: PPKN, Matematika" required>
                                        </div>
                                      </div> -->
                                      
                                      <div class="control-group">
                                        <label for="inputUserName" class="control-label">Photo</label>
                                        <div class="controls">
                                          <input type="file" name="filefoto"/>
                                        </div>
                                      </div>
                                      
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                                      <button type="submit" class="btn btn-primary btn-flat" id="simpan">Save</button>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          <?php endforeach;?>
                          <!--Modal Delete Employee-->

                          <?php foreach ($data->result_array() as $i) :
                            $id=$i['peg_id'];
                            $nip=$i['peg_nip'];
                            $nama=$i['peg_nama'];
                            $jenkel=$i['peg_jenkel'];
                            $tmp_lahir=$i['peg_tmp_lahir'];
                            $tgl_lahir=$i['peg_tgl_lahir'];
              // $mapel=$i['peg_mapel'];
                            $photo=$i['peg_photo'];
                            ?>
                            <!--Modal Hapus Pengguna-->
                            <div hidden class="modal fade" id="ModalHapus<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                                    <h4 class="modal-title" id="myModalLabel">Delete Employee</h4>
                                  </div>
                                  <form class="form-horizontal" action="<?php echo base_url().'admin/peg/hapus_peg'?>" method="post" enctype="multipart/form-data">
                                    <div class="modal-body">       
                                      <input type="hidden" name="kode" value="<?php echo $id;?>"/> 
                                      <input type="hidden" value="<?php echo $photo;?>" name="gambar">
                                      <p>Are you sure you want to delete <b><?php echo $nama;?></b> ?</p>
                                      
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                                      <button type="submit" class="btn btn-primary btn-flat" id="simpan">Delete</button>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          <?php endforeach;?>
                          
                          


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
                            
                            <?php elseif($this->session->flashdata('msg')=='success'):?>
                              <script type="text/javascript">
                                $.toast({
                                  heading: 'Success',
                                  text: "Guru Berhasil disimpan ke database.",
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
                                    text: "Guru berhasil di update",
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
                                      text: "Guru Berhasil dihapus.",
                                      showHideTransition: 'slide',
                                      icon: 'success',
                                      hideAfter: false,
                                      position: 'bottom-right',
                                      bgColor: '#7EC857'
                                    });
                                  </script>
                                  <?php else:?>

                                  <?php endif;?>
                                </body>
                                </html>
