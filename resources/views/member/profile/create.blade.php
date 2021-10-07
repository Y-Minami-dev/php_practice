@extends('layouts.admin')
@section('title', 'プロフィール登録')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>プロフィール登録</h2>
                <form action="{{ action('Member\ProfileController@create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">氏名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">生年月日</label>
                        <div class="col-md-10">
                            <input type="date" class="form-control" name="birthday" rows="20">{{ old('birthday') }}</textarea>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">メールアドレス</label>
                        <div class="col-md-10">
                            <input type="email" class="form-control" name="email" rows="20">{{ old('email') }}</textarea>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">パスワード</label>
                        <div class="col-md-10">
                            <input type="password" class="form-control" name="password" rows="20">{{ old('password') }}</textarea>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">パスワード（再度入力のこと）</label>
                        <div class="col-md-10">
                            <input type="password" class="form-control" name="password" rows="20">{{ old('password') }}</textarea>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">プロフィール画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                        </div>
                    </div>
                    
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="登録">
                </form>
            </div>
        </div>
    </div>
@endsection