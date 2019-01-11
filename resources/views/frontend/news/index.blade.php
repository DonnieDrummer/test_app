@extends('frontend.layouts.app')

@section('content')

    <div class="row">
        @foreach($categories as $category)
            <div class="col-3">
                <a href="{{ route('app::index.get', $category->id) }}">{{ $category->name }}</a>
            </div>
        @endforeach
    </div>

    @foreach($news as $news)
        <div class="row">
            <div class="col-12">
                <div class="col-12">{{ $news->title }}</div>
                <div class="col-12">{{ $news->content }}</div>
            </div>
        </div>
    @endforeach
@endsection
