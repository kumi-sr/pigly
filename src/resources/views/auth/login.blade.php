@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth/register_step1.css') }}">
@endsection

@section('content')
<div class="register-form">
    <h1 class="register-logo">PiGLy</h1>
    <h2>ログイン</h2>
    <form action="{{ route('register.step1.store') }}" method="post" novalidate>
        @csrf
        <div class="register-form__group">
            <label class="register-form__label" for="email">メールアドレス</label>
            <input class="register-form__input" type="email" id="email" name="email" value="{{ old('email') }}" placeholder="メールアドレスを入力" required>
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
        <button class="register-btn" type="submit">ログイン</button>
        <div class="login__link">
            <a class="link" href="{{ route('register.step1') }}">アカウント作成はこちら</a>
        </div>
    </form>
</div>
@endsection
