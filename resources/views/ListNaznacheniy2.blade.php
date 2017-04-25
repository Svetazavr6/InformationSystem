@extends('layouts.app')
@section('title', 'Лист назначений №2')
@section('content')
Дополнить!
<div class="container">
    <table class="table table-bordered" style="width:auto;">
        <tr>
            <td>Лист назначений №</td>
            <td></td>
        </tr>
        <tr>
            <td>ФИО:</td>
            <td></td>
        </tr>
        <tr>
            <td>Диагноз: </td>
            <td>Данные!C22</td>
        </tr>
    </table>
    
    <table class="table table-bordered" style="width:auto;">
        <tr>
            <th>Дата назначения</th>
            <th>Иньекции</th>
            <th>Дата окончания/отмены</th>
            <th>Дата назначения</th>
            <th>Препараты</th>
            <th>Дата окончания/отмены</th>
        </tr>
        <tr>
            <td><input type="date"></td>
            <td><input type="text"></td>
            <td><input type="date"></td>
            <td><input type="date"></td>
            <td><input type="text"></td>
            <td><input type="date"></td>
        </tr>
    </table>
    
    <table class="table table-bordered" style="width:auto;">
        <tr>
            <th>Дата назначения</th><td><input type="date"></td>
        </tr>
        <tr>
            <th>Иньекции/Препараты</th>
                <td><select>
                    <option>Иньекции</option>
                    <option>Препараты</option>
                </select></td>
        </tr>
        
        <tr>
            <th></th><td><textarea></textarea></td>
        </tr>
        <tr>
            <th>Дата окончания/отмены</th><td><input type="date"></td>
        </tr>
        
    </table>
<button>Добавить назначение</button>
</div>
@endsection
<script>
</script>