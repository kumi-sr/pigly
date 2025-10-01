@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth/register_step1.css') }}">
@endsection

@section('content')
<div class="register-form">
    <h1 class="register-logo">PiGLy</h1>
    <h2>新規会員登録</h2>
    <h3>STEP1 アカウント情報の登録</h3>
    <form action="{{ route('register.step1.store') }}" method="post">
        @csrf
        <div class="register-form__group">
            <label class="register-form__label" for="name">お名前</label>
            <input class="register-form__input" type="text" id="name" name="name" placeholder="名前を入力" required>
            <p class="register-form__error-message">
                @error('name')
                {{ $message }}
                @enderror
            </p>
        </div>
        <div class="register-form__group">
            <label class="register-form__label" for="email">メールアドレス</label>
            <input class="register-form__input" type="email" id="email" name="email" placeholder="メールアドレスを入力" required>
            <p class="register-form__error-message">
                @error('email')
                {{ $message }}
                @enderror
            </p>
        </div>
        <div class="register-form__group">
            <label class="register-form__label" for="password">パスワード</label>
            <input class="register-form__input" type="password" id="password" name="password" placeholder="パスワードを入力" required>
            <p class="register-form__error-message">
                @error('password')
                {{ $message }}
                @enderror
            </p>
        </div>
        <button class="register-btn" type="submit">次に進む</button>
        
        @section('link')
        <a class="link" href="/login">ログインはこちら</a>
        @endsection
    </form>
</div>
@endsection
