@extends('layouts.app')

@section('content')
<div class="container">
  <div class="card">
    <div class="card-body">
      <h5>{{ $title }}</h5>
      <div class="col-sm-6">
        <form class="row g-3 mt-2" action="" method="POST">
          @csrf

          <div class="form-group">
            <label for="model" class="form-label">Model*</label>
            <input type="text" class="form-control @error('model') is-invalid @enderror" name="model" id="model" placeholder="Model">
            @error('model')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>

          <div class="form-group">
            <label for="ukuran" class="form-label">Ukuran*</label>
            <input type="text" class="form-control @error('ukuran') is-invalid @enderror" name="ukuran" id="ukuran" placeholder="Ukuran">
            @error('ukuran')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>

          <div class="form-group">
            <label for="tgl_pesan" class="form-label">Tanggal Pesan*</label>
            <input type="text" class="form-control @error('tgl_pesan') is-invalid @enderror" name="tgl_pesan" id="tgl_pesan" placeholder="Tanggal Pesan">
            @error('tgl_pesan')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>

          <div class="form-group">
            <label for="tgl_selesai" class="form-label">Tanggal Selesai*</label>
            <input type="text" class="form-control @error('tgl_selesai') is-invalid @enderror" name="tgl_selesai" id="tgl_selesai" placeholder="Tanggal Selesai">
            @error('tgl_selesai')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>


          <div class="form-group">
            <button class="btn btn-success float-end" type="submit">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
