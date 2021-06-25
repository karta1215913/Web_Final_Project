@extends('layouts.app')

@section('content')
<div class="container">
    <h2>刪除會員帳號</h2>
    
    @if ($hint === '1')
        <div class="alert alert-success">
            <strong>會員已經刪除完成</strong>
            <a href="{{route('home')}}" class="alert-link">點擊此處請重新整理頁面</a>
        </div>
    @elseif ($hint === '2')
        <div class="alert alert-danger">
            <strong>目前密碼錯誤</strong>會員尚未被刪除
        </div>
    @endif

    <hr>

    <form action="{{route('delete.user.data')}}" method="POST" class="was-validated">
        @csrf
        <input type="hidden" name="id" value="{{Auth::user()->id}}">
        <div class="form-group">
            <label for="password">密碼 : 
                <b class="text-danger">(請輸入密碼以刪除帳號)</b>
            </label>
        </div>
        <input type="password" class="form-control" id="password" placeholder="請輸入密碼" name="password" required>
        <div class="valid-feedback">完成填寫</div>
        <div class="invalid-feedback">請填寫此欄位</div>

        <button type="submit" class="btn btn-outline-primary btn-lg btn-block">刪除帳號</button>

    </form>

</div>
@endsection
