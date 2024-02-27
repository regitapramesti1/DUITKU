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
        <form action="{{ route('pengeluaran.update', $pengeluaran->id) }}" class="" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Kemana?</label>
                <input type="text" name="pendapatan" class="form-control @error('pendapatan') is-invalid @enderror"
                    placeholder="Tulis Nama" value="{{ old('pendapatan') ?? $pengeluaran->pendapatan }}">
                @error('pendapatan')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            
            
              <div class="mb-3">
                <label class="form-label">keterangan</label>
                <input type="text" name="keterangan" class="form-control @error('keterangan')
                is-invalid
              @enderror"
                 name="example-text-input" placeholder="Upload keterangan" value="{{ old('keterangan') ?? $pengeluaran->keterangan }}">
                 @error('keterangan')
                 <span class="invalid-feedback">{{ $message }}</span>
               @enderror
              </div>

              <div class="mb-3">
                <label class="form-label">Nominal</label>
                <input type="text" name="nominal" class="form-control @error('nominal')
                is-invalid
              @enderror"
                 name="example-text-input" placeholder="Upload nominal" value="{{old('nominal') ?? $pengeluaran->nominal}}">
                 @error('nominal')
                 <span class="invalid-feedback">{{ $message }}</span>
               @enderror
              </div>

              <div class="mb-3">
                <label class="form-label">date</label>
                <input type="text" name="date" class="form-control @error('date')
                is-invalid
              @enderror"
                 name="example-text-input" placeholder="Upload date" value="{{ old('date') ?? $pengeluaran->date }}">
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