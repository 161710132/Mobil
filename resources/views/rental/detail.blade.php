@endsection
@section('content')
<section class="content-header">
  <h1>
    Detail Mobil
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <a href="/rental/index">Data Rental</a><li class="active">Detail Data</li>
  </ol>
</section><br><br>
<div class="box box-info">
  <div class="box-header with-border">
    <h3 class="box-title">Data</h3>

    <div class="box-tools pull-right">
    </div>
  </div>


        


            <!-- /.box-header -->
  <div class="box-body">
    <div class="table-responsive">
      <table class="table no-margin">
        <tr style="border-top:1px black solid;border-bottom:1px black solid;">
          <td width="300"><font size="4px"><b>NIK Konsumen</b></font></td><td width="30px">&nbsp<b>:</b>&nbsp</td><td><font size="4px">{{$rental->nik_kons}}</font></td>
        </tr>
        <tr style="border-top:1px black solid;border-bottom:1px black solid;" >
          <td><font size="4px"><b>Nama</b></font></td><td width="30px">&nbsp<b>:</b>&nbsp</td><td><font size="4px">{{$rental->nama_kons}}</font></td>
        </tr>
        <tr style="border-top:1px black solid;border-bottom:1px black solid;" >
          <td><font size="4px"><b>Jenis Kelamin</b></font></td><td width="30px">&nbsp<b>:</b>&nbsp</td><td><font size="4px">{{$rental->jk_kons}}</font></td>
        </tr>
        <tr style="border-top:1px black solid;border-bottom:1px black solid;" >
          <td><font size="4px"><b>Alamat</b></font></td><td width="30px">&nbsp<b>:</b>&nbsp</td><td><font size="4px">{{$rental->alamat}}</font></td>
        </tr>
        <tr style="border-top:1px black solid;border-bottom:1px black solid;" >
          <td><font size="4px"><b>No HP</b></font></td><td width="30px">&nbsp<b>:</b>&nbsp</td><td><font size="4px">{{$rental->no_hp}}</font></td>
        </tr>
        <tr style="border-top:1px black solid;border-bottom:1px black solid;" >
          <td><font size="4px"><b>Tanggal Sewa</b></font></td><td width="30px">&nbsp<b>:</b>&nbsp</td><td><font size="4px">{{$rental->tgl_sewa}}</font></td>
        </tr>
        <tr style="border-top:1px black solid;border-bottom:1px black solid;" >
          <td><font size="4px"><b>Tanggal Kembali</b></font></td><td width="30px">&nbsp<b>:</b>&nbsp</td><td><font size="4px">{{$rental->tgl_kembali}}</font></td>
        </tr>
        <tr style="border-top:1px black solid;border-bottom:1px black solid;" >
          <td><font size="4px"><b>Jumlah Hari</b></font></td><td width="30px">&nbsp<b>:</b>&nbsp</td><td><font size="4px">{{$rental->jumlah_hari}}</font></td>
        </tr>
        <tr style="border-top:1px black solid;border-bottom:1px black solid;" >
          <td><font size="4px"><b>Total Sewa</b></font></td><td width="30px">&nbsp<b>:</b>&nbsp</td><td><font size="4px">{{$rental->total_sewa}}</font></td>
        </tr>
        <tr style="border-top:1px black solid;border-bottom:1px black solid;" >
          <td><font size="4px"><b>Harga Sewa Supir</b></font></td><td width="30px">&nbsp<b>:</b>&nbsp</td><td><font size="4px">Rp.{{number_format($rental->supir->harga_sewasupir,2,',','.')}}</font></td>
        </tr>
        <tr style="border-top:1px black solid;border-bottom:1px black solid;" >
          <td><font size="4px"><b>Tanggal Sewa Mobil</b></font></td><td width="30px">&nbsp<b>:</b>&nbsp</td><td><font size="4px">{{$rental->tgl_sewa}}</font></td>
        </tr>
        <tr style="border-top:1px black solid;border-bottom:1px black solid;" >
          <td><font size="4px"><b>Tanggal Pengembalian</b></font></td><td width="30px">&nbsp<b>:</b>&nbsp</td><td><font size="4px">{{$rental->tgl_kembali}}</font></td>
        </tr>
        <tr style="border-top:1px black solid;border-bottom:1px black solid;" >
          <td><font size="4px"><b>Jumlah Hari</b></font></td><td width="30px">&nbsp<b>:</b>&nbsp</td><td><font size="4px">{{$rental->jumlah_hari}} Hari</font></td>
        </tr>
        <tr style="border-top:1px black solid;border-bottom:1px black solid;" >
          <td><font size="4px"><b>Total Sewa</b></font></td><td width="30px">&nbsp<b>:</b>&nbsp</td><td><font size="4px">Rp.{{number_format($rental->total_sewa,2,',','.')}}</font></td>
        </tr>
      </table>
    </div>
  </div>
  </div>
</div>
@endsection