@extends('layouts.default')

@section('main')
    <div class="container">
        <form class="picture-form" action="/" method="POST" enctype="multipart/form-data">
            @csrf
            
            <input class="picture-form-file" type="file" name="image"  required accept="image/jpeg, image/png, .jpeg, .png"/>
            
            <label>
                画像タイトル
                <input type="text" placeholder="画像タイトル" name="title">
            </label>
            <label>
                投稿コメント
                <textarea name="post_comment" rows="20" placeholder="投稿コメント"></textarea>
            </label>
            <label>
                タグ名
                <textarea type="text" placeholder="タグ名" name="tags" rows="10" required></textarea>
            </label>
            <button class="btn picture-form-btn">投稿する</button>
            
        </form>
    </div>
@endsection