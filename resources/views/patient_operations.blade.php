@extends('layouts.app')
@section('title', 'Данные')
@section('content')

<div class="container">
    <table class="table table-bordered table-striped" style="width:90%;">
        <tr>
        <td>Показаня для операции</td>
        <td style="width:75%;"> <textarea style="width:100%;height:80px;">Наличие камня н\ чашки почки, вызывающего  воспаление и нарушение функции почек.</textarea> </td></tr>
        <tr>
        <td>Цель операции</td>
        <td style="width:75%;"> <textarea style="width:100%;height:80px;">Удаление камня</textarea> </td></tr>
        <tr>
        <td>Операция</td>
        <td style="width:75%;"> <textarea style="width:100%;height:80px;">Комбинированная нефролитолапаксия. Стентирование справа. </textarea> </td></tr>
        <tr>
        <td>Возможные осложнения</td>
        <td style="width:75%;"> <textarea style="width:100%;height:80px;">Стриктура,  кровотечение, перфорация, инфекционно- воспалительные изменения, необходимость открытого оперативного вмешательства.</textarea> </td></tr>
        <tr>
        <td>Дата операции</td>
        <td style="width:75%;"><input type="date" required></td></tr>
        <tr>
           <td>Операция (радикальная-1;паллиативная-2.)
           </td>
           <td style="width:75%;">
            <select>
                <option>радикальная-1</option>
                <option>паллиативная-2</option>
            </select>
            </td>
        </tr>
    </table>
</div>

@endsection