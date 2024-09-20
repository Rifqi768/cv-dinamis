@extends('layouts.app')

@section('content')
    //menampilkan semua data biodata di view
        @foreach ( $data as $data )
            <p>{{$data->nama}}</p>
        @endforeach
@endsection