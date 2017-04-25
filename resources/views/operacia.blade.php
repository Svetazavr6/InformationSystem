@extends('layouts.app')
@section('title', 'Операция')
@section('content')
<div class="container">
    <table class="table table-bordered" style="width:100%;">
<!--    <tr>    <td></td>   <td></td>   <td></td>   <td></td>   <td></td></tr>-->
        <tr>    <td>ГБУЗС ГБ   № 9</td></tr>
        <tr>    <td> отделение урологии</td></tr>
    </table>
    
    <table class="table table-bordered" style="width:100%;">
        <tr><td><p>ФИО</p></td><td><input type="text" style="width:100%;" placeholder="ФИО" required></td>
        <td><p>№ и/б</p></td><td><input type="text" style="width:100%;" required></td></tr>
        <tr><td><p>Дата рождения</p></td><td><input type="date" style="width:100%;" required></td>
        <td>Телефон</td><td><input type="date" style="width:100%;"></td></tr>
        
        <tr>    <td></td>   <td>Дата:</td>   <td>Дата_операции</td></tr>
        <tr>    <td></td>   <td>Время:</td>   <td>13.45-14.45</td></tr>
        <tr>    <td>Взять из "Данные - Операция"</td></tr>
        <tr>    <td>Послеоперационный  диагноз:</td></tr>
        <tr>    <td>Клинический_диагноз</td></tr>
        <tr>    <td>Сопутствующий диагноз:</td>   <td>Данные!C24</td></tr>
        <tr>    <td></td>   <td>Опер. Хирург</td>   <td></td></tr>
        <tr>    <td></td>   <td>Ассистент</td>   <td></td></tr>
        <tr>    <td></td>   <td>Ассистент</td>   <td></td></tr>
        <tr>    <td></td>   <td>Анестезиолог</td>   <td></td></tr>
        <tr>    <td></td>   <td>Опер. м\с:</td>   <td></td></tr>
        <tr>    <td></td>   <td>Мл. опер. м\с</td>   <td></td></tr>
        <tr>    <td>Текущая Дата???</td>   <td>В ПИТе. Седация.  Кожные покровы физиологической окраски. Пульс – 72 в мин. АД- 120\70 мм. рт. ст.Живот мягкий, на пальпацию не реагирует. Перитонеальные симптомы отрицательные. По катетеру из м/пузыря поступает светлая моча.</td></tr>
        <tr>    <td></td>   <td>Врач</td>   <td>ФИО Врача</td></tr>
    </table>
</div>
@endsection
