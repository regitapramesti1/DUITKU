@extends('templates.default')
@php
  $title = 'Edit Data';
  $preTitle = 'Semua Data';
@endphp
@push('page.action')

<a href="" class=" "></a>
  
@endpush


@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('Pemasukan.update', $pemasukan->id) }}" class="" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Sumber_Pendapatan</label>
                <input type="text" name="sumber_pendapatan" class="form-control @error('sumber_pendapatan') is-invalid @enderror"
                    placeholder="Tulis Nama" value="{{ old('sumber_pendapatan') ?? $pemasukan->sumber_pendapatan }}">
                @error('sumber_pendapatan')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            
            <div class="mb-3">
                <label class="form-label">status</label>
                <input type="text" name="status" class="form-control @error('status')
                is-invalid
              @enderror"
                 name="example-text-input" placeholder="Upload status" value="{{ old('status') ?? $pemasukan->status }}">
                 @error('status')
                 <span class="invalid-feedback">{{ $message }}</span>
               @enderror
              </div>

              <div class="mb-3">
                <label class="form-label">keterangan</label>
                <input type="text" name="keterangan" class="form-control @error('keterangan')
                is-invalid
              @enderror"
                 name="example-text-input" placeholder="Upload keterangan" value="{{ old('keterangan') ?? $pemasukan->keterangan }}">
                 @error('keterangan')
                 <span class="invalid-feedback">{{ $message }}</span>
               @enderror
              </div>

              <div class="mb-3">
                <label class="form-label">Nominal</label>
                <input type="text" name="price" class="form-control @error('price')
                is-invalid
              @enderror"
                 name="example-text-input" placeholder="Upload price" value="{{old('price') ?? $pemasukan->price}}">
                 @error('price')
                 <span class="invalid-feedback">{{ $message }}</span>
               @enderror
              </div>

              <div class="mb-3">
                <label class="form-label">tanggal</label>
                <input type="text" name="tanggal" class="form-control @error('tanggal')
                is-invalid
              @enderror"
                 name="example-text-input" placeholder="Upload tanggal" value="{{ old('tanggal') ?? $pemasukan->tanggal }}">
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