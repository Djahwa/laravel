@extends('layout')
@section('title', 'Hasil Input Form')
@section('content')
<div class="card mt-3">
    <div class="card-body">
        NPM Anda adalah {{ $data['npm']}}<br>
        Nama Anda Adalah {{ $data['nama']}}<br>
        <a href="{{ url('/form') }}" class="btn btn-primary">Kembali</a>
    </div>
</div>
@endsection