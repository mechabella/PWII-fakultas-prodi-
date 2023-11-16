
@extends('layout.main')
@section('title', 'Program Studi')

@section('content')





              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Program Studi</h4>
                  <p class="card-description">

                  </p>
                     <a href="{{route('prodi.create') }}" class="btn btn-primary btn-rounded btn-fw">Tambah</a>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                                <tr>
            <th>nama Prodi</th>
            <th>nama Fakultas</th>
        </tr>
                      </thead>
                      <tbody>
                           @foreach ($prodi as $item)
    <tr>
        <td>{{ $item['nama']}}</td>
        <td>{{ $item['fakultas']['nama'] }}</td>


    </tr>
    @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

    @endsection

