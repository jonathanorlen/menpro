
<div class="page-content-wrapper">
<div class="page-content">
<div class="row">
<div class="col-md-12">
<?php 
$user = $this->session->userdata('astrosession');

$id  = $user[0]->id; 

$get = $this->db->query("SELECT * FROM karyawan where id='$id'");
$hasil = $get->row();
$jabatan = $hasil->jabatan;

if ($jabatan == 'spv') {


?>

<div class="btn-group">
<a href="<?php echo base_url() . 'admin/t_produksi/tambah'?>" ><button id="sample_editable_1_new" class="btn green">
Tambah<i class="fa fa-plus"></i>
</button></a>
</div>
<div class="btn-group">
<button style="width: 100px"   type="button" class="btn btn-success" onclick="printData()"><i class="fa fa-print"></i> Print</button>
</div>
<div class="btn-group">
<button style=""   type="button" class="btn btn-success" onclick="printProject()"><i class="fa fa-print"></i> Print Project</button>
</div>

<?php
}
?>

<!-- BEGIN SAMPLE TABLE PORTLET-->
<div class="portlet box red">

<div class="portlet-title">
<div class="caption">

<i class="fa fa-cogs"></i>Tanggungan Produksi
</div>
<div class="tools">
<a href="javascript:;" class="collapse">
</a>
<a href="#portlet-config" data-toggle="modal" class="config">
</a>
<a href="javascript:;" class="reload">
</a>
<a href="javascript:;" class="remove">
</a>
</div>
</div>
<div class="portlet-body">
<div class="row">
<div class="col-md-6">
<select id="filter" name="filt" class="form-control" required >
<option value="">-- filter by name --</option >
<?php
$this->db->group_by('nama_project');
$get_project = $this->db->get_where('t_produksi');
$hasil_project = $get_project->result();

foreach ($hasil_project as $item) {
echo '<option value="'.$item->nama_project.'">'.$item->nama_project.'</option>';
}
?>
</select>

</div>
<?php



if ($jabatan != 'programer')
{
?>
<div class="col-md-6" >
<div class="form-group">
<select id="kode_status"  class="form-control" required="" >
<option value="">-- filter by status --</option >
<option value="proses"> PROSES </option>
<option value="pending"> PENDING </option>
<option value="selesai"> SELESAI </option>
<option value="lost"> LOST </option>
</select> 
</div>
</div>
</div>
<!-- <div class="row">
<div class="col-md-6">
<div class="form-group">
<div class="input-group " >
<span class="input-group-addon">Tanggal Awal</span>
<input type="date" name="tgl_awal" id="tgl_awal" class="form-control">
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<div class="input-group"  >
<span class="input-group-addon">Tanggal Akhir</span>
<input type="date" name="tgl_akhir" id="tgl_akhir" class="form-control" >
</div>
</div>
</div>
</div> -->
<?php } ?>
<div class="row">
<div class="col-md-12">
<div class="col-md-3">



<div class="form-group">
<input id="input_project" type="text" class="form-control" placeholder="Search">
</div>

</div>

<div class="col-md-4">



<div class="form-group">

<button type="submit" class="btn blue" id="btncari">Submit</button>
</div>

</div>
</div>
</div>

<!-- TABEL 1 -->

<div class="table-scrollable">

<div id="cetak">

<div id="tabel1">
<table  style="width: 100%;border-collapse: collapse;" border="1" >
<tr>
<td rowspan="5" style="width: 20%;text-align: center;"><img src="<?php echo base_url() . 'component\upload\foto\uploads\logoastro.png'?>" style=" width: 150px;"></td>
<td rowspan="5" style="text-align: center;font-weight: bold;width: 30%;">Formulir</td>
<td style="border-right: none;width: 20%;">No. Dokumen</td>
<td style="border-left:none;">: CA/FP-21/<?php echo date('m')?>/<?php echo date('Y')?></td>
<tr>
<td style="border-right: none;">No. Revisi</td>
<td style="border-left:none;width: 60%;">:</td>
</tr>
<tr>
<td style="border-right: none;">Tanggal</td>
<td style="border-left:none;">: <?php echo tanggalindo(date('Y-m-d'));?></td>
</tr>
<tr>
<td style="border-right: none;">Halaman</td>
<td style="border-left:none;">:</td>
</tr>
<tr>
<td style="border-right: none;">Jenis</td>
<td style="border-left:none;">: No Publish</td>
</tr>
</tr>

</table>

<center>
<p style="font-weight: bold;"><u>LIST TANGGUNGAN PRODUKSI</u></p>
</center>
</br>
</div>
<div class="box_ajax">
<style type="text/css" media="print">

  @media print
   {
      .tabel2{
    font-size:15px;border-collapse: collapse;
  }
  .tabel2 tr th{
    border: 1px solid #222;
  }
  .tabel2 tr td{
    border: 1px solid #222;
  }
   }
 
</style>
<table style="width: 100%;border-collapse: collapse;" class="table table-hover tabel2" id="tabel_daftar">
<thead>
<tr>
<th colspan="2">
Nama Project
</th>

<th  style="text-align: center;" colspan="3">
Project In
</th>
<th   style="text-align: center;">
Analisa
</th>
<th   style="text-align: center;">
Tahapan
</th>

<?php 


if ($jabatan == 'spv'){


?>


<th> 
<div class="hideaction">
  
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspAction
</div>
</th>
<?php }


if ($jabatan == 'programer') { ?>
<th>
Upload
</th>
<th>
<div class="hideaction">
Action
</div>
</th>

<?php } ?>

<?php if ($jabatan == 'leader' || $jabatan =='admin') { ?> 

<th>
<div class="hideaction">
Action
</div>
</th>

<?php }  ?>



</tr>

</thead>
<tbody>
<?php


$ambil_data = $this->db->query("SELECT * FROM t_produksi WHERE status != 'selesai' ORDER BY nama_project DESC");

$hasil_ambil_data = $ambil_data->result_array();
$tglsekarang = date('Y-m-d');

foreach ($hasil_ambil_data as $item) {  
$get_pic = explode("|", $item['pic']);
if(in_array($user[0]->id, $get_pic) || $user[0]->jabatan == 'spv' || $user[0]->jabatan == 'admin' || $user[0]->jabatan == 'leader'  ){


if ($item['status'] != 'selesai'){
if ( date(@$item['end']) < $tglsekarang) {
$id = $item['id'];
$status['status'] = 'lost';
$this->db->update( "t_produksi", $status, array('id' => $id) );

} }?> 






<tr <?php  if($item['status'] =='lost') { ?>  style="background: #f1c6c6;"  <?php } ?> >

<td colspan="2">

<?php echo $item['nama_project'];?>
</td>

<td  style="text-align: center;" colspan="3">
<?php echo tanggalindo($item['in']);?>
</td>

<td   style="text-align: center;" >
<?php 
if ($item['analisa']=='sudah'){
?>
<img style="width: 27px; height: 27px;" src="<?php echo base_url() . 'component/admin/icons/sudah.png'?>";>

<?php }
else if ($item['analisa']=='belum'){
?>
<img style="width: 27px; height: 27px;" src="<?php echo base_url() . 'component/admin/icons/belum.png'?>";>


<?php }
?>

</td>
<td   style="text-align: center;">
<?php 
if ($item['tahapan']=='sudah'){
?>
<img style="width: 27px; height: 27px;" src="<?php echo base_url() . 'component/admin/icons/sudah.png'?>";>

<?php }
else if ($item['tahapan']=='belum'){
?>
<img style="width: 27px; height: 27px;" src="<?php echo base_url() . 'component/admin/icons/belum.png'?>";>

<?php }
?>
</td>


<?php 


if ($jabatan == 'spv'){


?>


<td>
<div class="actions" style="width: 150px;">
<a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/t_produksi/detail?id_t_produksi='.$item['id'].'/'.$item['kode_tproduksi']; ?>">
<i class="icon-note"></i>
</a>
<a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/t_produksi/ubah/'.$item['id'].'/'.$item['kode_tproduksi']; ?>">
<i class="icon-wrench"></i>
</a>
<a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/t_produksi/hapus?id_t_produksi='.$item['id'].'/'.$item['kode_tproduksi']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini ?')">
<i class="icon-trash"></i>
</a>
<a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/t_produksi/surat_tugas/'.$item['id'].'/'.$item['kode_tproduksi']; ?>">
<i class="fa fa-print"></i>
</a>

</div>

</td>

<?php 

$parameter = $item['kode_tproduksi'];
$ambil_data_opsi = $this->db->get_where('opsi_tproduksi',array('kode_tproduksi'  =>  $parameter));
$hasil_ambil_data_opsi = $ambil_data_opsi->result_array();

$no = 1;
?>

<?php
if ($hasil_ambil_data_opsi){
?>
<tr>
<th style="text-align:center; background: #eee  " colspan="9">Detail Program</th>
</tr>
<tr>
<th>No.</th>
<th colspan="3" >Modul</th>
<th>status</th>
<th colspan="2" style="text-align: center;">Timeline</th>
<th colspan="2">Keterangan</th>
</tr>
<?php
}
foreach ($hasil_ambil_data_opsi as $item_opsi) {

?>

<tr>

<td><?php echo $no++?></td>

<td colspan="3"><?php echo $item_opsi['modul']; if (!empty($item_opsi['submodul'])) { ?>  - <?php } echo $item_opsi['submodul'];  if (!empty($item_opsi['fitur'])) { ?> - <?php } echo $item_opsi['fitur'];?></td>
<td>

<?php 
if($item_opsi['status']=='proses'){

?>
<span class="label label-primary">proses </span>
<label>&nbsp</label>

<?php

}
elseif($item_opsi['status']=='selesai'){
?>
<span class="label label-success">selesai </span>
<label>&nbsp</label>

<?php 
}
elseif($item_opsi['status']=='revisi'){
?>
<span class="label label-danger">revisi </span>
<label>&nbsp</label>

<?php 
}
elseif($item_opsi['status']=='pending'){
?>
<span  class="label label-warning"> pending </span>
<label>&nbsp</label>

<?php 
} 
elseif($item_opsi['status']=='lost'){
?>
<span  class="label label-danger"> lost </span>
<label >&nbsp</label>

<?php 
} 
?>
</td>
<td  style="text-align: center;" colspan="2"><?php 
  if(!empty($item_opsi['start']) && !empty($item_opsi['end']))
    {
      echo tanggalindo(@$item_opsi['start']);?> - <?php echo tanggalindo(@$item_opsi['end']);
    }
    else{echo '-';}
  ;?></td>
<td><?php echo $item_opsi['keterangan'];?></td>
</tr>



<?php } ?>

<tr>
<th style="text-align:center; background:#eee; height:40px;" colspan="9">
  <div class="progress">
  <div class="progress-bar progress-bar-default" role="progressbar" style="width: 100%; height:125%;" >
    
  </div>
</div>
</th>
</tr>

<?php }
if ($jabatan == 'programer') { ?>
<td>  
<a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/programer/tambah?id_t_produksi='.$item['id_project'] ?>">
<i class="glyphicon glyphicon-cloud-download"></i>
</a>
</td>
<td>
<a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/t_produksi/detail?id_t_produksi='.$item['id'].'/'.$item['kode_tproduksi']; ; ?>">
<i class="icon-note"></i>
</a>
</td>

<?php }?> 
<?php if ($jabatan == 'leader' || $jabatan == 'admin') { ?> 
<td>
<div class="actions" style="width: 150px;">
<a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/t_produksi/detail?id_t_produksi='.$item['id'].'/'.$item['kode_tproduksi']; ; ?>">
<i class="icon-note"></i>
</a>

</div>

</td>

<?php }  ?>

</tr>




<?php } ?>




<?php }  ?>
</tbody>

</table>
</div>
</div>
</div>
</div>
</div>

<!-- END SAMPLE TABLE PORTLET-->



                                                                <!-- tabel 2 -->
<div class="table-scrollable">

<div id="cetak_project">


<div class="box_ajax">
<style type="text/css" media="print">

  @media print
   {
      .tabel2{
    font-size:15px;border-collapse: collapse;
  }
  .tabel2 tr th{
    border: 1px solid #222;
  }
  .tabel2 tr td{
    border: 1px solid #222;
  }
   }
 
</style>
<div id="tabel2">
<table style="width: 100%;border-collapse: collapse;" class="table table-hover tabel2" >
<div >
<center>
<p style="font-weight: bold;text-decoration: none;">LIST KEKURANGAN PROJECT MEI 2017</p>
</center>
</br>


</div>
<thead>
<tr style="background-color: skyblue;">
<th colspan="">
No.
</th>
<th colspan="">
Nama Project
</th>

<th  style="text-align: center;" colspan="">
Keterangan
</th>
<th   style="text-align: center;">
Tahapan
</th>
<th   style="text-align: center;">
Strategi
</th>
<th   style="text-align: center;">
Timeline
</th>
<th   style="text-align: center;">
PIC
</th>
<th   style="text-align: center;">
Status
</th>

<?php 


if ($jabatan == 'spv'){


?>



<?php }


if ($jabatan == 'programer') { ?>
<th>
Upload
</th>
<th>
<div class="hideaction">
Action
</div>
</th>

<?php } ?>

<?php if ($jabatan == 'leader' || $jabatan =='admin') { ?> 

<th>
<div class="hideaction">
Action
</div>
</th>

<?php }  ?>



</tr>

</thead>
<tbody>
<?php


$ambil_data = $this->db->query("SELECT * FROM t_produksi WHERE status != 'selesai' ORDER BY nama_project DESC");

$hasil_ambil_data = $ambil_data->result_array();
$tglsekarang = date('Y-m-d');
$no=1;
foreach ($hasil_ambil_data as $item) {  
$get_pic = explode("|", $item['pic']);
if(in_array($user[0]->id, $get_pic) || $user[0]->jabatan == 'spv' || $user[0]->jabatan == 'admin' || $user[0]->jabatan == 'leader'  ){


if ($item['status'] != 'selesai'){
if ( date(@$item['end']) < $tglsekarang) {
$id = $item['id'];
$status['status'] = 'lost';
$this->db->update( "t_produksi", $status, array('id' => $id) );


} }?> 






<tr  >

<td colspan="" style="text-align: center;">

<?php echo $no++;?>
</td>

<td colspan="" style="text-align: center;">

<?php echo $item['nama_project'];?>
</td>

<td >
<?php 
$parameter = $item['kode_tproduksi'];
$ambil_data_opsi_atas = $this->db->get_where('opsi_tproduksi',array('kode_tproduksi'  =>  $parameter));
$hasil_ambil_data_opsi_atas = $ambil_data_opsi_atas->result_array();
foreach($hasil_ambil_data_opsi_atas as $value){
?>
<?php echo $value['modul']; if (!empty($value['submodul'])) { ?>  - <?php } echo $value['submodul'];  if (!empty($value['fitur'])) { ?> - <?php } echo $value['fitur'];?><br>
<?php } ?>
</td>

<td   style="text-align: center;" >
&nbsp

</td>
<td   style="text-align: center;">
&nbsp
</td>

</td>
<td   style="text-align: center;">
<?php foreach($hasil_ambil_data_opsi_atas as $value){
?>
<?php echo tanggalindo($item_opsi['start']);?> - <?php echo tanggalindo($item_opsi['end']);?><br> 
<?php } ?>
</td>

</td>
<td   style="text-align: center;">
&nbsp
</td>




<?php 


if ($jabatan == 'spv'){


?>


<!-- <td>
<div class="actions" style="width: 150px;">
<a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/t_produksi/detail?id_t_produksi='.$item['id'].'/'.$item['kode_tproduksi']; ?>">
<i class="icon-note"></i>
</a>
<a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/t_produksi/ubah/'.$item['id'].'/'.$item['kode_tproduksi']; ?>">
<i class="icon-wrench"></i>
</a>
<a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/t_produksi/hapus?id_t_produksi='.$item['id'].'/'.$item['kode_tproduksi']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini ?')">
<i class="icon-trash"></i>
</a>
<a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/t_produksi/surat_tugas/'.$item['id'].'/'.$item['kode_tproduksi']; ?>">
<i class="fa fa-print"></i>
</a>

</div>

</td> -->







<?php } ?>

<!-- <tr>
<th style="text-align:center; background:#eee; height:40px;" colspan="9">
  <div class="progress">
  <div class="progress-bar progress-bar-default" role="progressbar" style="width: 100%; height:125%;" >
    
  </div>
</div>
</th>
</tr> -->

<?php }
if ($jabatan == 'programer') { ?>
<td>  
<a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/programer/tambah?id_t_produksi='.$item['id_project'] ?>">
<i class="glyphicon glyphicon-cloud-download"></i>
</a>
</td>
<td>
<a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/t_produksi/detail?id_t_produksi='.$item['id'].'/'.$item['kode_tproduksi']; ; ?>">
<i class="icon-note"></i>
</a>
</td>

<?php }?> 
<?php if ($jabatan == 'leader' || $jabatan == 'admin') { ?> 
<td>
<div class="actions" style="width: 150px;">
<a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/t_produksi/detail?id_t_produksi='.$item['id'].'/'.$item['kode_tproduksi']; ; ?>">
<i class="icon-note"></i>
</a>

</div>

</td>

<?php }  ?>

</tr>




<?php } ?>





</tbody>

</table>
</div>
</div>
</div>
</div>
<!-- end table 2 -->







</div>

</div>
</div>





<script>
$(document).ready(function() {
$("#tabel1").hide();
$("#tabel2").hide();


});
$(function () {

$("#btncari").click(function()

{
var parameter = $('#input_project').val();
var filter = $('#filter').val();
var filter_status = $('#kode_status').val()
var tgl_awal = $("#tgl_awal").val();
var tgl_akhir = $("#tgl_akhir").val();
$.ajax( {  
type :"post",  
url : "<?php echo base_url() . 'admin/t_produksi/cari' ?>",  
cache :false,  
data :({key:parameter,filter:filter,filter_status:filter_status,tgl_akhir:tgl_akhir,tgl_awal:tgl_awal}), //mengambil dari variable
//data :$(this).serialize(), // mengambil dari inputan form -> submit
success : function(data) {  
$(".box_ajax").html(data);                    
$("#tabel2").hide();
},  
error : function() {  
alert("Data gagal dimasukkan.");  
}  
});

return false;   


});

});
function printData()
{
$("#tabel1").show();
$(".hideaction").hide();
var divToPrint=document.getElementById("cetak");
newWin= window.open("");
newWin.document.write(divToPrint.outerHTML);
newWin.print();
newWin.close();
$(".hideaction").show();
$("#tabel1").hide();

}

function printProject()
{
$("#tabel2").show();
$(".hideaction").hide();
var divToPrint=document.getElementById("cetak_project");
newWin= window.open("");
newWin.document.write(divToPrint.outerHTML);
newWin.print();
newWin.close();
$(".hideaction").show();
$("#tabel2").hide();

}
</script>
