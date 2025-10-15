@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="header">
    <h1 class="header__heading">PiGLy</h1>
</div>
<div class="container">
    <div class="card-container">
        <div class="card">
            <p class="label">目標体重</p>
            <p class="value">45.0 <span>kg</span></p>
        </div>
        <div class="card">
            <p class="label">目標まで</p>
            <p class="value">-1.5 <span>kg</span></p>
        </div>
        <div class="card">
            <p class="label">最新体重</p>
            <p class="value">46.5 <span>kg</span></p>
        </div>
    </div>

    <div class="search-bar">
        <input type="date">
        <span>~</span>
        <input type="date">
        <button>検索</button>
        <button class="add-button">データ追加</button>
    </div>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>日付</th>
                    <th>体重</th>
                    <th>食事摂取カロリー</th>
                    <th>運動時間</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($logs as $log)
                <tr>
                    <td>{{ $log['date'] }}</td>
                    <td>{{ $log['weight'] }}</td>
                    <td>{{ $log['calories']}}</td>
                    <td>{{ $log['exercise']}}</td>
                    <td><a href="#" class="edit-icon">✏️</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection
