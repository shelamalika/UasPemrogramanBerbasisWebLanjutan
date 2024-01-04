@extends('layouts.app')

@section('content')
<div class="container">
  <div class="card">
    <div class="card-body">
      <h5>Edit Pelanggan</h5>
      <form class="mt-4" action="" method="POST">
        @method('PUT')
        @csrf
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group mb-3">
              <label for="id_gol" class="form-label">Golongan*</label>
              <select class="form-control @error('id_gol') is-invalid @enderror" name="id_gol" id="id_gol">
                <option value="">-- Pilih --</option>
                @foreach($golongans as $golongan)
                <option value="{{ $golongan->id }}" {{ $pelanggan->id_gol == $golongan->id ? 'selected' : ''}}>{{ $golongan->model }}</option>
                @endforeach
              </select>
              @error('id_gol')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="form-group mb-3">
              <label for="nama" class="form-label">Nama*</label>
              <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" value="{{ $pelanggan->nama }}" placeholder="Nama">
              @error('nama')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="form-group mb-3">
              <label for="alamat" class="form-label">Alamat*</label>
              <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="alamat" placeholder="Alamat">{{ $pelanggan->alamat }}</textarea>
              @error('alamat')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="form-group mb-3">
              <label for="no_hp" class="form-label">No HP*</label>
              <input type="text" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" id="no_hp" value="{{ $pelanggan->no_hp }}" placeholder="No HP">
              @error('no_hp')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group mb-3">
              <label for="bahan_kain" class="form-label">Bahan Kain*</label>
              <input type="text" class="form-control @error('bahan_kain') is-invalid @enderror" name="bahan_kain" id="bahan_kain" value="{{ $pelanggan->bahan_kain }}" placeholder="Bahan Kain">
              @error('bahan_kain')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="form-group mb-3">
              <label for="hrg_baju" class="form-label">Harga Baju*</label>
              <input type="text" class="form-control @error('hrg_baju') is-invalid @enderror" name="hrg_baju" id="hrg_baju" value="{{ $pelanggan->hrg_baju }}" placeholder="Harga Baju">
              @error('hrg_baju')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="form-group mb-3">
              <label for="jmlh_bju" class="form-label">Jumlah Baju*</label>
              <input type="text" class="form-control @error('jmlh_baju') is-invalid @enderror" name="jmlh_baju" id="jmlh_baju" value="{{ $pelanggan->jmlh_baju }}" placeholder="Jumlah Baju">
              @error('jmlh_baju')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="form-group mb-3">
              <label for="id_user" class="form-label">User*</label>
              <select class="form-control @error('id_user') is-invalid @enderror" name="id_user" id="id_user">
                <option value="">-- Pilih --</option>
                @foreach($users as $user)
                <option value="{{ $user->id }}" {{ $pelanggan->id_user == $user->id ? 'selected' : ''}}>{{ $user->nama }}</option>
                @endforeach
              </select>
              @error('id_user')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="form-group mb-3">
              <label for="status" class="form-label">Status*</label>
              <select class="form-control @error('status') is-invalid @enderror" name="status" id="status">
                <option value="Aktif" {{ $pelanggan->status == 'Aktif' ? 'selected' : ''}}>Aktif</option>
                <option value="Tidak Aktif" {{ $pelanggan->status == 'Tidak Aktif' ? 'selected' : ''}}>Tidak Aktif</option>
              </select>
              @error('status')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="form-group mb-3">
              <button class="btn btn-success float-end" type="submit">Edit</button>
            </div>

          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
