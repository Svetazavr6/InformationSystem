@extends('layouts.app')
<!--данные на вывод, подгружаются из БД-->
@section('title', 'Глав. Осмотр')
@section('content')
<div class="container">
    <h1></h1>
    <form>
        <table class="table table-bordered" style="width:auto;">
            <tr>
                <td>Тут дата осмотра</td>
                <td>Осмотр с зав.отд.</td>
                <td>Еременко С. Н.</td>
            </tr>
            <tr>
                <td>Диагноз:</td>
                <td></td>
            </tr>
            <tr>
                <td>Заключение:</td>
                <td></td>
            </tr>
            <tr>
                <td>Предварительный диагноз:</td>
                <td></td>
            </tr>
            <tr>
                <td>Сопутствующий диагноз:</td>
                <td></td>
            </tr>
            <tr>
                <td>План лечения:</td>
                <td></td>
            </tr>
            <tr>
                <td>Оперативное лечение в объеме:</td>
                <td></td>
            </tr>
            <tr>
                <td></td><td></td><td>Деж.врач/Леч.врач</td><td>Еременко А. Н.</td>
            </tr>
            <tr>
                <td></td><td></td><td>И.о. зав.отд./Зав.отд.</td><td>Еременко С. Н.</td>
            </tr>
            
            <!--<tr><td colspan="2"><input type="button" value="Вывод на печать"></td></tr>-->
        </table>
    </form>
</div>
@endsection