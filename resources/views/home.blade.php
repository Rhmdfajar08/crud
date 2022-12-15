@extends('layout')

@section('content')
@if (session('addPlant'))
 <div class = "alert alert-succes">
    {{session('addPlant')}}
 </div>
 @endif
 @if (session('succesUpdate'))
 <div class = "alert alert-succes">
    {{session('succesUpdate')}}
 </div>
 @endif
 @if (session('succesDelete'))
 <div class = "alert alert-succes">
    {{session('succesDelete')}}
 </div>
 @endif

<div class="container mt-4">
    <div class="col-lg-8 m-auto border border-dark rounded p-2">
        <div class="head d-flex justify-content-between align-items-center">
            <h1 style="font-size: 25px;">Plants Report</h1>
            <a href="/create" class="btn btn-primary">Create Plant</a>
        </div>
        <div class="count border border-secondary rounded mt-2 p-1 d-flex justify-content-between align-items-center">
            <h1>Count</h1>
            <h1 class="btn btn-outline-info fw-bold">1</h1>
        </div>
        <div class="data-plant-lah">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col" style="width: 10px;">No</th>
                    <th scope="col" style="width: 10px;">Kode</th>
                    <th scope="col">Name</th>
                    <th scope="col">Type</th>
                    <th scope="col">Growth</th>
                    <th scope="col">Notes</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($plants as $plant)
                  <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $plant->kode_tanaman}}</td>
                    <td>{{ $plant->nama_plants}}</td>
                    <td>{{ $plant->type}}</td>
                    <td>{{ $plant->growth}}</td>
                    <td>{{ $plant->notes}}</td>
                    <td>
                        <td class="d-flex gap-2">
                            {{-- <a href="/edit/{{$plant['id']}}" class="btn btn-primary mr-0">Edit</a>  --}}
                            <form action="/delete/{{$plant['id']}}" method="POST">
                        <a href="/edit/{{ $plant['id'] }}" class="btn btn-success">Edit</a>
                        <form action="/delete/{{$plant['id']}}" method="POST">
                          @csrf
                          @method('DELETE')
                        <button class="btn btn-danger">Hapus</button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>

@endsection