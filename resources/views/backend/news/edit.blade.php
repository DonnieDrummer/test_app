@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card-body">
                <form method="post" action="{{ route('manager::news:edit.post') }}">
                    <input type="hidden" name="news_id" value="{{!empty($news) ? $news->id : ''}}"/>
                    <div class="form-group row">
                        <label for="category_id" class="col-md-12 col-form-label">{{ __('Category') }}:</label>

                        <div class="col-md-12">
                            <select name="category_id" class="form-control{{ $errors->has('category_id') ? ' is-invalid' : '' }}">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>

                            @if ($errors->has('category_id'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('category_id') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="title" class="col-md-12 col-form-label">{{ __('Title') }}:</label>

                        <div class="col-md-12">
                            <input id="title" type="title"
                                   class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title"
                                   value="{{ old('title') ? : (!empty($news) ? $news->title : '')}}" required autofocus>

                            @if ($errors->has('title'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="title" class="col-md-12 col-form-label">{{ __('Content') }}:</label>

                        <div class="col-md-12">
                            <textarea class="form-control{{ $errors->has('content') ? ' is-invalid' : '' }}" name="content">{{!empty($news) ? $news->content : ''}}</textarea>

                            @if ($errors->has('content'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('content') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group text-right">
                        <button class="btn btn-success" type="submit">Save</button>
                    </div>
                    @csrf
                </form>
            </div>
        </div>
    </div>
@endsection