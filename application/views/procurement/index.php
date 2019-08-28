<div class="col-md-12">
  <div class="box box-primary">

  <?php if($this->session->flashdata('successalert')){?>
    <div class="alert alert-success alert-dismissable">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4>  <i class="icon fa fa-check"></i> Selesai!</h4>
      <?php echo $this->session->flashdata('successalert'); ?>
    </div>
  <?php } else if($this->session->flashdata('erroralert')){?>
    <div class="alert alert-danger alert-dismissable">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4><i class="icon fa fa-ban"></i> Maaf!</h4>
      <?php echo $this->session->flashdata('erroralert'); ?>
    </div>
  <?php } ?>

    <div class="box-header with-border">
      <a class="btn btn-primary" href="<?php echo base_url()."procurement/entryadd"; ?>">
        <i class="fa fa-plus"></i> Tambah Data
      </a>
    </div><!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Aksi</th>
            <th>No</th>
            <th>Nokeg</th>
            <th>Kegiatan</th>
            <th>Kecamatan</th>
            <th>Level</th>
            <!--<th>Nilai Kontrak</th>-->
            <th>TglSPK</th>
            <th>HK</th>
            <th>TglSelesai</th>
            <th>Pengawas</th>
            <th>Pelaksana</th>
            <th>JnsKegiatan</th>
          </tr>
        </thead>
        <tbody>
        <?php $x=1; ?>
        <?php foreach ($list as $list) { ?>
          <tr class="<?php if($list['SCHOOLLEVEL'] == "SD"){ echo "label-danger"; }elseif($list['SCHOOLLEVEL'] == "SMP"){ echo "label-primary"; }else{ echo "bg-gray-active"; } ?>">
            <td valign="middle">
              <a class="btn btn-xs btn-warning" href="<?php echo base_url()."procurement/entryedit/".$list['PROCNUMBER']; ?>"><i class="fa fa-edit"></i></a>
              <a class="btn btn-xs btn-danger" href="#" data-href="<?php echo base_url()."procurement/delete/".$list['PROCNUMBER']; ?>" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash"></i></a>
            </td>
            <td valign="middle"><?php echo $x++; ?></td>
            <td valign="middle"><?php echo $list['PROCNUMBER']; ?></td>
            <td valign="middle"><?php echo $list['PROCDESC']; ?></td>
            <td valign="middle"><?php echo $list['SUBDISTRICT']; ?></td>
            <td valign="middle"><?php echo $list['SCHOOLLEVEL']; ?></td>
           <!--<td valign="middle"><?php echo $list['CONTRACTVALUE']; ?></td>-->
            <td valign="middle"><?php echo $list['CONTRACTDATE']; ?></td>
            <td valign="middle"><?php echo $list['NUMBEROFDAYS']; ?></td>
            <td valign="middle"><?php echo $list['ENDDATE']; ?></td>
            <td valign="middle"><?php echo $list['SVNAME']; ?></td>
            <td valign="middle"><?php echo $list['PVNAME']; ?></td>
            <td valign="middle"><?php echo $list['PROCTYPEDESC']; ?></td>
          </tr>
        <?php } ?>
        </tbody>
      </table>
    </div><!-- /.box-body -->
  </div><!-- /.box -->
</div><!-- /.col -->

<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Peringatan</h4>
      </div>
      <div class="modal-body">
      <p>Apakah anda yakin ingin menghapus data ini?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tidak</button>
        <a class="btn btn-danger btn-ok">Ya</a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->