@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12 text-right">
            <a class="btn btn-primary" href="{{ route('manager::news:edit.get') }}">Create News</a>
        </div>
    </div>
@endsection