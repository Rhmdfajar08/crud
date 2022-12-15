@extends('layout')


@section('content')
<div class="container">
    <form action="/store" method="POST">
      @csrf
        <div class="mb-3">
            <label class="form-label">Code Tanaman</label>
            <input type="text" class="form-control" name="kode_tanaman">
          </div>
          <div class="mb-3">
            <label class="form-label">Nama Tanaman</label>
            <input type="text" class="form-control" name="nama_plants">
          </div>
          <div class="mb-3">
            <label class="form-label">Tipe Tanaman</label>
            <select class="form-control" name="type">
              <option selected>Pilih jenis tanaman</option>
              <option value="Obat">Obat</option>
              <option value="Hias">Hias</option>
              <option value="Pangan">Pangan</option>
            </select>
          </div>
          {{-- <div class="mb-3">
            <label class="form-label">Pertumbuhan Tanaman</label>
            <select class="form-control" name="growth">
              <option selected>Pilih jenis pertumbuhan</option>
              <option value="Tunas">Tunas</option>
              <option value="Batang">Batang</option>
              <option value="Buah">Buah</option>
              <option value="Bunga">Bunga</option>
            </select>
          </div> --}}
          <div class="mb-3">
            <label class="form-label">Note</label>
            <input type="text" class="form-control" name="notes">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection