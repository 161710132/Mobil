@extends('layouts.adminn')
@section('content')

<section class="card">
<div class="card-body text-secondary">col-lg-12</div>
</section>
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Perbaharui Data Rental
			  <br> 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>

			  <div class="panel-body">
		    <form action="{{route('rental.update',$rental->id)}}" method="post" enctype="multipart/form-data">
			<input type="hidden" name="_method" value="PUT">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			{{csrf_field()}}
			<input type="hidden" name="mobil_id" value="{{$rental->mobil_id}}">
			<input type="hidden" name="supir_id" value="{{$rental->supir_id}}">
			<div class="form-group">
				<label class="control-lable">No Identitas</label>
				<input type="number" name="nik_kons" class="form-control" required=""	value="{{$rental->nik_kons}}">
			</div>


				<div class="form-group">
				<label class="control-lable">Nama</label>
				<input type="text" name="nama" class="form-control" required="" value="{{$rental->nama_kons}}">
			</div>

			  		<div class="form-group {{ $errors->has('jk_kons') ? ' has-error' : '' }}">
			  			<label class="control-label">jk_kons</label>	
			  			<input type="text" value="{{ $rental->jk_kons }}" name="jk_kons" class="form-control"  required>
			  			@if ($errors->has('jk_kons'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jk_kons') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('alamat') ? ' has-error' : '' }}">
			  			<label class="control-label">alamat</label>	
			  			<input type="text" value="{{ $rental->alamat }}" name="alamat" class="form-control"  required>
			  			@if ($errors->has('alamat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('alamat') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('no_hp') ? ' has-error' : '' }}">
			  			<label class="control-label">no_hp</label>	
			  			<input type="text" value="{{ $rental->no_hp }}" name="no_hp" class="form-control"  required>
			  			@if ($errors->has('no_hp'))
                            <span class="help-block">
                                <strong>{{ $errors->first('no_hp') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tgl_sewa') ? ' has-error' : '' }}">
			  			<label class="control-label">Tanggal Sewa</label>	
			  			<input type="date" value="{{ $rental->tgl_sewa }}" name="tgl_sewa" class="form-control"  required>
			  			@if ($errors->has('tgl_sewa'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tgl_sewa') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('tgl_kembali') ? ' has-error' : '' }}">
			  			<label class="control-label">tgl_kembali</label>	
			  			<input type="date" value="{{ $rental->tgl_kembali }}" name="tgl_kembali" class="form-control"  required>
			  			@if ($errors->has('tgl_kembali'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tgl_kembali') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('jumlah_hari') ? ' has-error' : '' }}">
			  			<label class="control-label">jumlah_hari</label>	
			  			<input type="text" value="{{ $rental->jumlah_hari }}" name="jumlah_hari" class="form-control"  required>
			  			@if ($errors->has('jumlah_hari'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jumlah_hari') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('total_sewa') ? ' has-error' : '' }}">
			  			<label class="control-label">total_sewa</label>	
			  			<input type="text" value="{{ $rental->total_sewa }}" name="total_sewa" class="form-control"  required>
			  			@if ($errors->has('total_sewa'))
                            <span class="help-block">
                                <strong>{{ $errors->first('total_sewa') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('mobil_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Mobil</label>	
			  			<select name="mobil_id" class="form-control">
			  				@foreach($mobil as $data)
			  				<option value="{{ $data->id }}" {{ $selectedMobil == $data->id ? 'selected="selected"' : '' }} >{{ $data->merk }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('mobil_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('mobil_id') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('supir_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Supir</label>	
			  			<select name="supir_id" class="form-control">
			  				@foreach($supir as $data)
			  				<option value="{{ $data->id }}" {{ $selectedSupir == $data->id ? 'selected="selected"' : '' }} >{{ $data->nama }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('supir_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('supir_id') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Simpan</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection