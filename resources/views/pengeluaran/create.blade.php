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
        <form action="{{ route('pengeluaran.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="mb-3">
                <label class="form-label">Kemana?</label>
                <input type="text" name="Pendapatan" class="form-control @error('Pendapatan')
                  is-invalid
                @enderror"
                 name="example-text-input" placeholder="Tulis Nama" value="{{ old('Pendapatan')}}">
                 @error('Pendapatan')
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
                <label class="form-label">date</label>
                <input type="text" name="date" class="form-control @error('date')
                is-invalid
              @enderror"
                 name="example-text-input" placeholder="Upload date" value="{{ old('date') }}">
                 @error('date')
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