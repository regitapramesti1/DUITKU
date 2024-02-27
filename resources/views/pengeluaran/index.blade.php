@extends('templates.default')

@php
  $title = 'Pengeluaran List';
  $preTitle = 'Semua Data';
@endphp

@push('page.action')

<a href="{{ route('pengeluaran.create') }}" class="btn btn-primary">+ Tambah Data</a>
  
@endpush

@section('content')

<div class="col-lg-15">
    <div class="card">
      <div class="table-responsive">
        <table class="table table-vcenter card-table">
          <thead>
            <tr>
                <th>Id</th>
                <th>Kemana?</th>
                <th>Keterangan</th>
                <th>nominal</th>
                <th>tanggal</th>
              <th class="w-1"></th>
            </tr>
          </thead>

          <tbody>
  @foreach ( $pengeluaran as $pengeluaran )
  
          
  
    <tr>
        <td>{{ $pengeluaran->id }}</td>
        <td>{{ $pengeluaran->pendapatan }}</td>
        <td>{{ $pengeluaran->keterangan }}</td>
        <td>{{ $pengeluaran->nominal }}</td>
        <td>{{ $pengeluaran->date}}</td>

       
      <td>
        <a href="{{ route('pengeluaran.edit', $pengeluaran->id) }}" class="btn btn-warning btn-sm">Edit</a>
        <form action="{{ route('pengeluaran.destroy', $pengeluaran->id) }}" method="post">
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
