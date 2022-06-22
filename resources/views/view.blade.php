@extends('layout')
@section('title', 'View Data')
@section('content')
<div class="card mt-3">
    <div class="card-body">
        <form action="{{url('/process') }}" method="post">
            @csrf
            <div class="mb-3">
                <label>NPM</label>
                <input type="text" name="npm" class="form-control">
            </div>
            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control">
            </div>
            <div class="mb-3">
                <button class="btn- btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection