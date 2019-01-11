@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12 text-right">
            <a class="btn btn-primary" href="{{ route('manager::news:edit.get') }}">Create News</a>
        </div>
    </div>
    @foreach($news as $news)
        <div class="row">
            <div class="col-8">
                <div class="col-12">{{ $news->title }}</div>
                <div class="col-12">{{ $news->content }}</div>
            </div>
            <div class="col-4">
                <a href="{{ route('manager::news:edit.get', $news->id) }}">Edit</a>
                <a href="" onclick="event.preventDefault(); document.getElementById('news_'+ {{ $news->id }} +'_delete').submit();">Delete</a>
                <form id="news_{{ $news->id }}_delete" action="{{ route('manager::news:delete.post', $news->id) }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    @endforeach
@endsection
