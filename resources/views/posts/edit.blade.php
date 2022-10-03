@extends('layouts.app')

@section('title', '投稿編集')

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
    <a href="{{ route('posts.index') }}">&lt: 戻る</a>
</div>

<form action="{{ route('posts.update', $post) }}" method="post">
    @csrf
    @method('patch')
    <div>
        <label for="title">タイトル</label>
        <input type="text" name="title" value="{{ old('title', $post->title) }}">
    </div>
    <div>
        <label for="content">本文</label>
        <textarea name="content">{{ old('content', $post->content) }}</textarea>
    </div>
    <button type="submit">更新</button>
</form>

@endsection
