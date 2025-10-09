@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth/register_step2.css') }}">
@endsection

@section('content')
<div class="register-form">
    <h1 class="register-logo">PiGLy</h1>
    <h2>新規会員登録</h2>
    <h3>STEP2 体重データの入力</h3>
    <form action="{{ route('register.step2') }}" method="post" novalidate>
        @csrf
        <div class="register-form__group">
            <label class="register-form__label" for="current_weight">現在の体重</label>
            <div class="register-form__input-wrapper">
                <input class="register-form__input" type="number" id="current_weight" name="current_weight" value="{{ old('current_weight') }}" placeholder="現在の体重を入力" required>
                <span class="register-form__unit">kg</span>
            </div>
            <p class="register-form__error-message">
                @error('current_weight')
                {{ $message }}
                @enderror
            </p>
        </div>
        <div class="register-form__group">
            <label class="register-form__label" for="target_weight">目標の体重</label>
            <div class="register-form__input-wrapper">
                <input class="register-form__input" type="number" id="target_weight" name="target_weight" value="{{old('target_weight') }}" placeholder="目標の体重を入力" required>
                <span class="register-form__unit">kg</span>
            </div>
            <p class="register-form__error-message">
                @error('target_weight')
                {{ $message }}
                @enderror
            </p>
        </div>
        <button class="register-btn" type="submit">アカウント作成</button>
    </form>
</div>
@endsection
