@extends('layouts.adminn')
@section('content')

<section class="card">
<div class="card-body text-secondary"></div>
</section>
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading"> 
			  <br>
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>

			  <div class="panel-body">
		    <form action="{{ route('kembali.store') }}" method="post" >
			<input type="hidden" name="_method" value="PUT">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			{{csrf_field()}}

				<center><b> Data Rental</b></center><br>
					NIK Konsumen : <b>{{$kembali->Rental->nik_kons}}</b><br>
					Nama Konsumen : <b>{{$kembali->Rental->nama_kons}}</b><br>
					Tanggal Sewa : <b>{{$kembali->Rental->tgl_sewa}}</b><br>
					Tanggal Kembali  : <b>{{$kembali->Rental->tgl_kembali}}</b><br>
					Jumlah Hari : <b>{{$kembali->Rental->jumlah_hari}} Hari</b><br>
					Total Sewa : <b>{{$kembali->Rental->total_sewa}}</b><br>
				</div>
			</div>
				

						<div class="form-group {{ $errors->has('tgl_kembali_akhir') ? ' has-error' : '' }}">
			  			<label class="control-label">tgl_kembali_akhir</label>	
			  			<input type="date" name="tgl_kembali_akhir" class="form-control"  required>
			  			@if ($errors->has('tgl_kembali_akhir'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tgl_kembali_akhir') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		

			  		
			  		
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Tambah</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection