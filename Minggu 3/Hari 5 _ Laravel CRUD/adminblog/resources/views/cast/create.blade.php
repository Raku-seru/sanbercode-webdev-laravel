@extends('master')
@section('content')
<div>
    <h2>Tambah Data</h2>
        <form action="/cast" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama">
                @error('nama')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="umur">Umur</label>
                <input type="number" class="form-control" name="umur" id="umur" placeholder="Masukan Umur">
                @error('umur')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="bio">Bio</label>
                <input type="text" class="form-control" name="bio" id="bio" placeholder="Masukan Bio">
                @error('bio')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</div>
@endsection