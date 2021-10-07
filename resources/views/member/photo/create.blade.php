@extends('layouts.admin')
@section('title', '写真を新規投稿する')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>写真を新規投稿する</h2>
                <form action="{{ action('Member\PhotoController@create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">タイトル</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">撮影日</label>
                        <div class="col-md-10">
                            <input type="date" class="form-control" name="date" value="{{ old('date') }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">鉄道会社</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="company" rows="20">{{ old('company') }}</textarea>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">撮影路線</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="lines" rows="20">{{ old('lines') }}</textarea>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">撮影場所</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="place" rows="20">{{ old('place') }}</textarea>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">説明</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="5">{{ old('body') }}</textarea>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                        </div>
                    </div>
                    
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="投稿">
                </form>
            </div>
        </div>
    </div>
@endsection