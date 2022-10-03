@extends('layouts.app')

@section('title', '新規投稿')

@section('content')

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div>
    <a href="{{ route('posts.index') }}">&lt; 戻る</a>
</div>
<form action="{{ route('posts.store') }}" method="post">
    @csrf
    <div>
        <label for="title">タイトル</label>
        <input type="text" name="title" value="{{ old('title') }}">
    </div>
    <div>
        <label for="content">本文</label>
        <textarea name="content">{{ old('content') }}</textarea>
    </div>
    <button type="submit">投稿</button>
</form>

@endsection
