@extends('layouts.app')
@section('title', 'Данные')
@section('content')

<div class="container">
    Номер палаты
    <h1>Пациенты:</h1>
     <table class="table table-bordered table-striped" style="width:90%;">
         <tr>
             <th>№</th>
             <th>фИО</th>
             <th>Дата постцупления</th>
             <th>Диагноз</th>
         </tr>
         <tr>
             <td><a href="viev_pa">1</a></td>
             <td><a href="viev_pa">Иванов И. И. </a></td>
             <td><a href="viev_pa">01.01.2017</a></td>
             <td><a href="viev_pa">////</a></td>
         </tr>
     </table>
</div>

@endsection