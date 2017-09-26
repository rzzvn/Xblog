@extends('user.user')
@section('title', $user->name)
@section('user-content')
    @can('manager',$user)
        <div class="p-3">
            <form action="{{ route('user.update.info') }}" method="post">
                {{ csrf_field() }}
                <input name="_method" type="hidden" value="patch">
                <div class="form-group">
                    <label>名称：</label>
                    <input class="form-control" name="name" type="text" value="{{ $user->name }}" readonly>
                </div>
                <div class="form-group">
                    <label>真实姓名：</label>
                    <input class="form-control" name="real_name" type="text" value="{{ $user->real_name }}">
                </div>
                <div class="form-group">
                    <label>个人网站：</label>
                    <input class="form-control" name="website" type="text" value="{{ $user->website }}">
                </div>
                <div class="form-group">
                    <label>描述：</label>
                    <input class="form-control" name="description" type="text" value="{{ $user->description }}">
                </div>
                <div class="form-group">
                    <label>Github：</label>
                    <input {{ $user->github_id ? "readonly=''" : '' }} class="form-control" name="github" type="text"
                           value="{{ array_safe_get($user->meta,'github') }}">
                </div>
                <div class="form-group">
                    <label>Facebook：</label>
                    <input class="form-control" name="facebook" type="text"
                           value="{{ array_safe_get($user->meta,'facebook') }}">
                </div>
                <div class="form-group">
                    <label>Weibo：</label>
                    <input class="form-control" name="weibo" type="text" value="{{ array_safe_get($user->meta,'weibo') }}">
                </div>
                <div class="form-group">
                    <label>Twitter：</label>
                    <input class="form-control" name="twitter" type="text" value="{{ array_safe_get($user->meta,'twitter') }}">
                </div>
                <input type="submit" class="btn btn-primary" value="修改">
            </form>
        </div>
    @endcan
@endsection
