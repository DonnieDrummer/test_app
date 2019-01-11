@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card-body">
                <form method="post" action="{{ route('manager::news:edit.post') }}">
                    <input type="hidden" name="form[row][id]" value="{{!empty($news) ? $news->id : ''}}"/>
                    <div class="form-group row">
                        <label for="category_id" class="col-md-12 col-form-label">{{ __('Category') }}:</label>

                        <div class="col-md-12">
                            <select name="form[model][category_id]" class="form-control{{ $errors->has('form.model.category_id') ? ' is-invalid' : '' }}">
                                @foreach($categories as $category)
                                    <option {{ (!empty($news) && $category->id == $news->category_id ) ? "selected" : "" }} value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>

                            @if ($errors->has('form.category_id'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('form.model.category_id') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="title" class="col-md-12 col-form-label">{{ __('Title') }}:</label>

                        <div class="col-md-12">
                            <input id="title" type="text"
                                   class="form-control{{ $errors->has('form.model.title') ? ' is-invalid' : '' }}" name="form[model][title]"
                                   value="{{ old('form.title') ? : (!empty($news) ? $news->title : '')}}" required autofocus>

                            @if ($errors->has('form.model.title'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('form.model.title') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="title" class="col-md-12 col-form-label">{{ __('Content') }}:</label>

                        <div class="col-md-12">
                            <textarea class="form-control{{ $errors->has('form.model.content') ? ' is-invalid' : '' }}" name="form[model][content]">{{ old('form.model.content') ? : (!empty($news) ? $news->content : '')}}</textarea>

                            @if ($errors->has('form.model.content'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('form.model.content') }}</strong>
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
