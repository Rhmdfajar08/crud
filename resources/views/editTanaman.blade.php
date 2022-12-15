@extends('layout')


@section('content')
<div class="container">
    <form action="/edit/{{ $plant->id }}" method="POST">
      @csrf
      @method('PATCH')
        <div class="mb-3">
            <label class="form-label">Code Tanaman</label>
            <input type="text" class="form-control" name="kode_tanaman" value="{{ $plant->kode_tanaman }}">
          </div>
          <div class="mb-3">
            <label class="form-label">Nama Tanaman</label>
            <input type="text" class="form-control" name="nama_plants" value="{{ $plant->nama_plants }}">
          </div>
          <div class="mb-3">
            <label class="form-label">Tipe Tanaman</label>
            <select class="form-control" name="type">
              <option hidden>Pilih jenis tanaman</option>
              <option value="OBAT" @if($plant->type == 'OBAT') selected @endif>Tanaman Obat</option>
              <option value="HIAS" @if($plant->type == 'HIAS') selected @endif>Tanaman Hias</option>
              <option value="PANGAN" @if($plant->type == 'PANGAN') selected @endif>Tanaman Pangan</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label">Pertumbuhan Tanaman</label>
            <select class="form-control" name="growth">
              <option hidden>Pilih jenis pertumbuhan</option>
              <option value="TUNAS" @if($plant->growth == 'TUNAS') selected @endif>Tunas</option>
              <option value="BATANG" @if($plant->growth == 'BATANG') selected @endif>Batang</option>
              <option value="BUAH" @if($plant->growth == 'BUAH') selected @endif>Buah</option>
              <option value="BUNGA" @if($plant->growth == 'BUNGA') selected @endif>Bunga</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label">Note</label>
            <input type="text" class="form-control" name="notes" value="{{ $plant->notes }}">
          </div>
          <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection