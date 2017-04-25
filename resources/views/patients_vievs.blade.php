@extends('layouts.app')
@section('title', 'Пациент')
@section('content')
<div class="container">
    <table class="table table-bordered" style="width:100%;">
<!--
        <tr>
            <td>
            
            </td>
            <td>
            
            </td>
        </tr>
-->
        <tr><th>ФИО</th><th>Дата рождения</th><th>Возраст</th></tr>
        <tr>    <td><a href="/viev_pa">Иванов Иван Иванович</a></td>   <td><a href="/viev_pa">12.08.1979</a></td> <td><a href="/viev_pa">37</a></td> </tr>
    </table>
</div>
@endsection
