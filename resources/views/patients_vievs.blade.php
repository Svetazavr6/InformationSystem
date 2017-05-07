@extends('layouts.app')
@section('title', 'Список пациентов')
@section('content')

<link rel="stylesheet" href="speech-input-gh-pages/speech-input.css">
<div class="container">
    <div style="margin: 10px 0;">
         <form method="post" style="text-align: center;">
            {{ csrf_field() }}
            <input type="text" style="width: 78vw;" class="speech-input" data-ready="Habla ahora">
            <input type=submit value="OK">
        </form>
    </div>
    <table class="table table-bordered" style="width:100%;">
        <tr><th>ФИО</th><th>Дата рождения</th><th>Возраст</th></tr>
        <tr>
        <td><a href="/viev_pa">Иванов Иван Иванович</a></td>   
        <td><a href="/viev_pa">12.08.1979</a></td> 
        <td><a href="/viev_pa">37</a></td> </tr>
    </table>
</div>
<script src="speech-input-gh-pages/speech-input.js"></script>
@endsection
