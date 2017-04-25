@extends('layouts.app')
@section('title', 'Данные')
@section('content')

<div class="container">
     <table class="table table-bordered table-striped" style="width:90%;">
         <tr><th>Номер палаты</th><th>Количество мест</th><th>Из них свободно</th></tr>
         <tr><td><a href="palata">1</a></td><td><a href="palata">4</a></td><td><a href="palata">3</a></td></tr>
         <tr><td>2</td><td>3</td><td>2</td></tr>
         <tr><td>3</td><td>1</td><td>0</td></tr>
     </table>
</div>
<script>

@endsection