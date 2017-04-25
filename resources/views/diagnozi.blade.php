@extends('layouts.app')
@section('title', 'Данные')
@section('content')

<div class="container">
     <table class="table table-bordered table-striped" style="width:90%;">
        <tr><td><p>Предварительный диагноз</p></td>
        <td> 
        <textarea style="width:800px;height:80px; resize: none; background-color: rgba(0,0,0,0); border: none;">МКБ, рецидив. Резидуальный камень н\чашки справа 20 мм.Гидронефроз справа 1 ст. Стриктура н\ 3 справа. Xронический калькулезный пиелонефрит , латентное течение. ХПН 0-1.</textarea> </td></tr>
        <tr><td><p>Клинический диагноз</p></td><td> <textarea style="width:800px;height:80px; resize: none; background-color: rgba(0,0,0,0); border: none;">МКБ, рецидив. Резидуальный камень н\чашки справа 20 мм.
Гидронефроз справа 1 ст. Хронический калькулезный пиелонефрит , латентное течение. ХПН 0-1</textarea> </td></tr>
        <tr><td><p>Сопутствующий диагноз</p></td><td> <textarea style="width:800px;height:80px; resize: none; background-color: rgba(0,0,0,0); border: none;">ИБС: АКС. САГ 2 ст, 2 ст, риск 3. Ожирение 3-4 ст. П\о вентральная грыжа. </textarea> </td></tr>
     </table>
</div>

@endsection