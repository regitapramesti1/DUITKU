@extends('templates.default')

@php
  $title = 'Pendapatan List';
  $preTitle = 'Semua Data';
@endphp

@push('page.action')

<a href="{{ route('Pemasukan.create') }}" class="btn btn-primary">+ Tambah Data</a>
  
@endpush

@section('content')

<div class="col-lg-15">
    <div class="card">
      <div class="table-responsive">
        <table class="table table-vcenter card-table">
          <thead>
            <tr>
                <th>Id</th>
                <th>Sumber_pendapatan</th>
                <th>status</th>
                <th>Keterangan</th>
                <th>nominal</th>
                <th>tanggal</th>
              <th class="w-1"></th>
            </tr>
          </thead>

          <tbody>
  @foreach ( $pemasukan as $pemasukan )
  
          
  
    <tr>
        <td>{{ $pemasukan->id }}</td>
        <td>{{ $pemasukan->sumber_pendapatan }}</td>
        <td>{{ $pemasukan->status }}</td>
        <td>{{ $pemasukan->keterangan }}</td>
        <td>{{ $pemasukan->price }}</td>
        <td>{{ $pemasukan->tanggal }}</td>

       
      <td>
        <a href="{{ route('Pemasukan.edit', $pemasukan->id) }}" class="btn btn-warning btn-sm">Edit</a>
        <form action="{{ route('Pemasukan.destroy', $pemasukan->id) }}" method="post">
          @csrf
          @method('DELETE')
          <input type="submit" value="Hapus" class="btn btn-danger btn-sm">
        </form>
      </td>
   
  
      
  @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
