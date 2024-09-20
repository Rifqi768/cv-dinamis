@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>formulir</h1>
        <!-- ini adalah formulir biodata -->
        <form method="post" action="{{ route('biodata.store')}}">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">nama</label>
                <input type="nama" class="form-control" id="" aria-describedby="" placeholder="Tambahkan nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Alamat</label>
                <input type="nama" class="form-control" id="" aria-describedby="" placeholder="Tambahkan Alamat" name="alamat" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">keterangan</label>
                 <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="keterangan" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection