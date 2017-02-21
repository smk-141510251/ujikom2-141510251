@extends('layouts.app2')

@section('content')
<!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
           
                        <div class="intro-text">
                      <h4>          <font face="Maiandra GD" color="white"><center>Data Lembur Pegawai</center></font></h4>
                        <hr class="star-light">
                       
                </div>
            </div>
        </div>
    </header>
<br>
	 <div class="right_col" role="main">
          <div class="">

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                                      <h2><font face="Maiandra GD" color="white"><center>Data Penggajian</center></font></h2>
                  
                  <div class="x_content">
                   &nbsp;&nbsp;&nbsp;<a href="{{url('Penggajians/create')}}" class="btn btn-primary">Tambah Data Penggajian&nbsp;&nbsp;&nbsp;<i class="fa fa-pencil"></i></a>
                   <br>
                   <br>

                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr class="bg bg-danger">
                          <th><p class="center"><center>No.</center></p></th>
                          <th><p class="center"><center>Tunjangan</center></p></th>
                          <th><p class="center"><center>Jumlah Jam Lembur</center></p></th>
                          <th><p class="center"><center>Jumlah Uang Lembur</center></p></p></th>
                          <th><p class="center"><center>Gaji Pokok</center></p></p></th>
                          <th><p class="center"><center>Tanggal Pengambilan</center></p></p></th>
                          <th><p class="center"><center>Status Pengambilan</center></p></p></th>
                          <th><p class="center"><center>Petuga Penerima</center></p></p></th>
                          <th colspan="3"><p class="center"><center>Tindakan</center></p></th>
                        </tr>
                      </thead>


                      <tbody>
                         <?php $no=1; ?>
                         @foreach ($penggajian as $data)
                             <tr>
                                 <th><center>{{ $no++ }}</center></th>
                                 <th><center>{{ $data->Tunjangan_pegawai->Kode_tunjangan_id }}</center></th>
                                 <th><center>{{ $data->Jumlah_jam }}</center></th>
                                 <th><center>{{ $data->Jumlah_lembur }}</center></th>
                                 <th><center>{{ $data->Gaji_pokok }}</center></th>
                                 <th><center>{{ $data->Total_gaji }}</center></th>
                                 <th><center>{{ $data->Tanggal_pengambilan }}</center></th>
                                 <th><center>{{ $data->Status_pengambilan }}</center></th>
                                 <th><center>{{ $data->Petugas_penerima }}</center></th>
                                 <th><a href="{{url('Penggajian',$data->id)}}" class="btn btn-primary">lihat</i></a></th>
                                 <th><a title="Edit" href="{{route('Penggajian.edit',$data->id)}}" class="btn btn-warning">ubah</i></a></th>
                                 <th>
                                   <a data-toggle="modal" href="#delete{{ $data->id }}" class="btn btn-danger" title="Delete" >hapus</i></a>
                                  @include('modals.del', [
                                    'url' => route('Penggajian.destroy', $data->id),
                                    'model' => $data
                                  ])
                                 </th>
                             </tr>
                         @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


@endsection