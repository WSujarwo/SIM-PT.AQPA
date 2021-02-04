<!--Counter Inbox-->
<?php 
$query=$this->db->query("SELECT * FROM tbl_inbox WHERE inbox_status='1'");
$jum_pesan=$query->num_rows();
?>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery | Dashboard Aqpa</title>
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
                                    <li><a href="<?php echo base_url().'admin/pengguna'?>"><i class="menu-icon icon-user"></i>User </a></li>
                                    <li><a href="<?php echo base_url().'admin/team'?>"><i class="menu-icon icon-group"></i>Team </a></li>
                                    <!-- <li><a href="<?php echo base_url().'admin/peg'?>"><i class="menu-icon icon-tasks"></i>Employee <b class="label orange pull-right"> -->
                                    </b> </a></li>
                                  </ul>
                                  <!--/.widget-nav-->


                                  <ul class="widget widget-menu unstyled">
                                    <li><a href="<?php echo base_url().'admin/portofolio'?>"><i class="menu-icon icon-briefcase"></i>Portofolio </a></li>
                                    <li><a style="background: #fff; color: #000; " onMouseOver="this.style.color='#0373fc'" onMouseOut="this.style.color='#000'" class="collapsed" data-toggle="collapse" href="#aqpagallery"><i class="menu-icon icon-camera">
                                    </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                    </i>Gallery </a>
                                    <ul id="aqpagallery" class="collapse unstyled">
                                      <li><a href="<?php echo base_url().'admin/album'?>"><i class="icon-copy"></i> Album </a></li>
                                      <li class="active"><a href="<?php echo base_url().'admin/galeri'?>"><i class="icon-picture"></i> Photo </a></li>
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
                                <h2>Gallery Photo <a class="btn btn-info " style="float: right; " data-toggle="modal" data-target="#myModal"><span class="fa fa-plus"></span> Add Photo</a></h2> 
                              </div>
                              <div class="float-right">
                                
                              </div>
                              <div class="module-body table">
                                <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display" width="100%">
                                  <thead>
                                    <tr>
                                      <th>Photo </th>
                                      <th>Judul </th>
                                      <th>Tanggal </th>
                                      <th>Album </th>
                                      <th>Author</th>
                                      <!-- <th>Gender </th> -->
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
                                     $galeri_id=$i['galeri_id'];
                                     $galeri_judul=$i['galeri_judul'];
                                     $galeri_tanggal=$i['tanggal'];
                                     $galeri_author=$i['galeri_author'];
                                     $galeri_gambar=$i['galeri_gambar'];
                                     $galeri_album_id=$i['galeri_album_id'];
                                     $galeri_album_nama=$i['album_nama'];

                                     ?>
                                     <tr class="odd gradeX"> 
                                      <td><img src="<?php echo base_url().'assets/images/'.$galeri_gambar;?>" style="width:80px;"></td>
                                      <td><?php echo $galeri_judul;?></td>
                                      <td><?php echo $galeri_tanggal;?></td>
                                      <td><?php echo $galeri_album_nama;?></td>
                                      <td><?php echo $galeri_author;?></td>
                                      <td style="text-align:right;">
                                        <a class="btn" data-toggle="modal" data-target="#ModalEdit<?php echo $galeri_id;?>"><span class="icon-pencil"></span></a>
                                        <a class="btn" data-toggle="modal" data-target="#ModalHapus<?php echo $galeri_id;?>"><span class="icon-trash"></span></a>
                                      </td>
                                    </tr>
                                  <?php endforeach;?>
                                </tbody>
                              </table>
                            </div>
                          </div><!--/.module-->


                          
                          

                          <!--Modal Add Photo-->
                          <div hidden class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                                  <h4 class="modal-title" id="myModalLabel">Add Photo</h4>
                                </div>
                                <form class="form-horizontal" action="<?php echo base_url().'admin/galeri/simpan_galeri'?>" method="post" enctype="multipart/form-data">
                                  <div class="modal-body">
                                    
                                    <div class="control-group">
                                      <label for="inputUserName" class="control-label">Judul</label>
                                      <div class="controls">
                                        <input type="text" name="xjudul" class="form-control" id="inputUserName" placeholder="Judul" required>
                                      </div>
                                    </div>

                                    <div class="control-group">
                                      <label for="inputUserName" class="control-label">Album</label>
                                      <div class="controls">
                                        
                                        <select class="form-control" name="xalbum" style="width: 100%;" required>
                                          <option value="">-Pilih-</option>
                                          <?php
                                          $no=0;
                                          foreach ($alb->result_array() as $a) :
                                           $no++;
                                           $alb_id=$a['album_id'];
                                           $alb_nama=$a['album_nama'];
                                           
                                           ?>
                                           <option value="<?php echo $alb_id;?>"><?php echo $alb_nama;?></option>
                                         <?php endforeach;?>
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

                        <!--Modal Edit Album-->
                        <?php foreach ($data->result_array() as $i) :
                          $galeri_id=$i['galeri_id'];
                          $galeri_judul=$i['galeri_judul'];
                          $galeri_tanggal=$i['tanggal'];
                          $galeri_author=$i['galeri_author'];
                          $galeri_gambar=$i['galeri_gambar'];
                          $galeri_album_id=$i['galeri_album_id'];
                          $galeri_album_nama=$i['album_nama'];
                          ?>
                          
                          <div hidden class="modal fade" id="ModalEdit<?php echo $galeri_id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                                  <h4 class="modal-title" id="myModalLabel">Edit Photo</h4>
                                </div>
                                <form class="form-horizontal" action="<?php echo base_url().'admin/galeri/update_galeri'?>" method="post" enctype="multipart/form-data">
                                  <div class="modal-body">       
                                    <input type="hidden" name="kode" value="<?php echo $galeri_id;?>"/> 
                                    <input type="hidden" value="<?php echo $galeri_gambar;?>" name="gambar">
                                    <div class="control-group">
                                      <label for="inputUserName" class="control-label">Judul</label>
                                      <div class="controls">
                                        <input type="text" name="xjudul" class="form-control" value="<?php echo $galeri_judul;?>" id="inputUserName" placeholder="Judul" required>
                                      </div>
                                    </div>

                                    <div class="control-group">
                                      <label for="inputUserName" class="control-label">Album</label>
                                      <div class="controls">
                                        
                                        <select class="form-control" name="xalbum" style="width: 100%;" required>
                                          <option value="">-Pilih-</option>
                                          <?php
                                          foreach ($alb->result_array() as $a) {
                                           $alb_id=$a['album_id'];
                                           $alb_nama=$a['album_nama'];
                                           if($galeri_album_id==$alb_id)
                                            echo "<option value='$alb_id' selected>$alb_nama</option>";
                                          else
                                            echo "<option value='$alb_id'>$alb_nama</option>";
                                        }?>
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
                                  <button type="submit" class="btn btn-primary btn-flat" id="simpan">Save</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      <?php endforeach;?>
                      <!--end Modal Edit Album-->

                      <?php foreach ($data->result_array() as $i) :
                        $galeri_id=$i['galeri_id'];
                        $galeri_judul=$i['galeri_judul'];
                        $galeri_tanggal=$i['tanggal'];
                        $galeri_author=$i['galeri_author'];
                        $galeri_gambar=$i['galeri_gambar'];
                        $galeri_album_id=$i['galeri_album_id'];
                        $galeri_album_nama=$i['album_nama'];
                        ?>
                        <!--Modal Hapus Pengguna-->
                        <div hidden class="modal fade" id="ModalHapus<?php echo $galeri_id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                                <h4 class="modal-title" id="myModalLabel">Delete Photo</h4>
                              </div>
                              <form class="form-horizontal" action="<?php echo base_url().'admin/galeri/hapus_galeri'?>" method="post" enctype="multipart/form-data">
                                <div class="modal-body">       
                                  <input type="hidden" name="kode" value="<?php echo $galeri_id;?>"/> 

                                  <input type="hidden" value="<?php echo $galeri_gambar;?>" name="gambar">
                                  <input type="hidden" value="<?php echo $galeri_album_id;?>" name="album">

                                  <p>Are you sure you want to delete <b><?php echo $galeri_judul;?></b> ?</p>
                                  
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Cancel</button>
                                  <button type="submit" class="btn btn-primary btn-flat" id="simpan">Save</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      <?php endforeach;?>
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
    
    <?php elseif($this->session->flashdata('msg')=='success'):?>
      <script type="text/javascript">
        $.toast({
          heading: 'Success',
          text: "Photo Berhasil disimpan ke database.",
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
            text: "Photo berhasil di update",
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
              text: "Photo Berhasil dihapus.",
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