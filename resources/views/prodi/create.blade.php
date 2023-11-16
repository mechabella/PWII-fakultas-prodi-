@extends('layout.main')
@section('title', 'Tambah Program Studi')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Program Studi</h4>
                  <p class="card-description">
                    Formulir Tambah Program Studi
                  </p>
                  <form class="forms-sample" method="POST" action="{{ route('prodi.store')}}">
                    @csrf
                    <div class="form-group">
                      <label for="nama">Nama Program Studi</label>
                      <input type="text" class="form-control" name="nama" placeholder="Nama Program Studi">
                      @error('nama')
                      <label class="text-danger">{{ $message }}</label>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label for="fakultas_id">Nama Fakultas</label>
                      <select name="fakultas_id"
                      class="form-control">
                        <option value="">Pilih</option>
                        {{--option diambil dari Model Fakultas --}}
                        @foreach ($fakultas as $item)
                            <option value="{{ $item->id }}"> {{ $item->nama}} </option>
                        @endforeach
                      </select>
                      @error('fakultas_id')
                      <label class="text-danger">{{ $message }}</label>
                      @enderror
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                    <a href="{{ url('prodi')}}" class="btn btn-light">Batal</a>
                  </form>
                </div>
            </div>
        </div>
    </div>
@endsection

