@extends('templates.default')
@php
  $title = 'Tambah Data';
  $preTitle = 'Semua Data';
@endphp
@push('page.action')

<a href="" class=" "></a>
  
@endpush


@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('Pemasukan.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="mb-3">
                <label class="form-label">Sumber_Pendapatan</label>
                <input type="text" name="Sumber_Pendapatan" class="form-control @error('Sumber_Pendapatan')
                  is-invalid
                @enderror"
                 name="example-text-input" placeholder="Tulis Nama" value="{{ old('Sumber_Pendapatan')}}">
                 @error('Sumber_Pendapatan')
                   <span class="invalid-feedback">{{ $message }}</span>
                 @enderror
              </div>

              <div class="mb-3">
                <label class="form-label">status</label>
                <input type="text" name="status" class="form-control @error('status')
                is-invalid
              @enderror"
                 name="example-text-input" placeholder="Upload status" value="{{ old('status') }}">
                 @error('status')
                 <span class="invalid-feedback">{{ $message }}</span>
               @enderror
              </div>
            
              <div class="mb-3">
                <label class="form-label">keterangan</label>
                <input type="text" name="keterangan" class="form-control @error('keterangan')
                is-invalid
              @enderror"
                 name="example-text-input" placeholder="Upload keterangan" value="{{ old('keterangan') }}">
                 @error('keterangan')
                 <span class="invalid-feedback">{{ $message }}</span>
               @enderror
              </div>

              <div class="mb-3">
                <label class="form-label">Nominal</label>
                <input type="text" name="Nominal" class="form-control @error('Nominal')
                is-invalid
              @enderror"
                 name="example-text-input" placeholder="Upload Nominal" value="{{ old('Nominal') }}">
                 @error('Nominal')
                 <span class="invalid-feedback">{{ $message }}</span>
               @enderror
              </div>

              <div class="mb-3">
                <label class="form-label">tanggal</label>
                <input type="text" name="tanggal" class="form-control @error('tanggal')
                is-invalid
              @enderror"
                 name="example-text-input" placeholder="Upload tanggal" value="{{ old('tanggal') }}">
                 @error('tanggal')
                 <span class="invalid-feedback">{{ $message }}</span>
               @enderror
              </div>

              <div class="mb-3">
               <input type="submit" value="Simpan" class="btn btn-primary">
              </div>
        </form>
    </div>
</div>
@endsection