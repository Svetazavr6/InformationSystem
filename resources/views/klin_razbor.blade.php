@extends('layouts.app')
@section('title', 'Клин. Разбор')
@section('content')
<div class="container">
    <h3>Клинический разбор</h3>
    <table class="table table-bordered" style="width:auto;">
        <tr>
            <th>ФИО:</th><td></td>
            <th>№ И/б:</th><td></td>
        </tr>
        <tr>
            <th>Дата рождения</th><td></td>
            <th>Телефон:</th><td></td>
        </tr>
        <tr>
            <th>Адрес:</th><td></td>
        </tr>
        <tr>
            <th>Дата поступления:</th><td></td>
        </tr>
        <tr>
            <th>Клинический диагноз:</th>
        </tr>
        <tr>
            <td><textarea style="width:100%; height:50px;"></textarea> </td>
        </tr>
        <tr>
            <th>Сопутствующий диагноз</th>
        </tr>
        <tr>
            <td><textarea style="width:100%; height:50px;"></textarea> </td>
        </tr>
            <th>Планируемое оперативное вмешательство:</th>
        </tr>
        <tr>
            <td><textarea style="width:100%; height:50px;"></textarea> </td>
        </tr>
        <tr>
            <th>Деж.врач/Леч.врач</th><td>Еременко А. Н.</td>
        </tr>
        <tr>
            <th>И.о. зав.отд./Зав.отд.</th><td>Еременко С. Н.</td>
        </tr>
    </table>

    <h3>ГОРОДСКАЯ  БОЛЬНИЦА №9</h3>
    <h3> УРОЛОГИЧЕСКОЕ ОТДЕЛЕНИЕ</h3>
    <h3>ПРЕДОПЕРАЦИОННЫЙ ЭПИКРИЗ</h3>
    
<table class="table table-bordered" style="width:auto;">
        <tr>
            <th>Больной:</th><td>Иванов И. В.</td>
            <th>№ И/б:</th><td>589555885</td>
            <th>Тел.</th><td>759595489</td>
        </tr>
        <tr>
            <th>Поступил</th><td colspan="5"> Дата поступления</td>
        </tr>
        <tr><th rowspan="2">Диагноз</th><td colspan="5">Клинический диагноз: <br><br> Тут диагноз и т.д.</td></tr>
        <tr><td colspan="5">Сопутствующий диагноз:</td></tr>
        
        <tr><th rowspan="5">Анамнез</th><td colspan="5">Anamnesis morbi: <br><br> Содержимое из другой таблицы...</td></tr>
        <tr><td colspan="5">Anamnesis vitae:</td></tr>
        <tr><td colspan="5">Аллергоанамнез:</td></tr>
        <tr><td colspan="5">Трудовой анамнез, место работы:</td></tr>
        <tr><td colspan="5">Трансфузиологический анамнез:</td></tr>
    
        <tr><th rowspan="2">Данные объективного обследования</th><td colspan="5">Объективно при поступлении:<br><br>Содержимое из другой таблицы...</td></tr>
        <tr><td colspan="5">Ректально:<br><br>Содержимое из другой таблицы...</td></tr>
    
        <tr><th rowspan="2">Данные дополнит. исследований</th><td colspan="5">данные_проведенного_обследования</td></tr>
        <tr><td colspan="5">Данные_амбулаторного_обследования</td></tr>
        
        <tr><th>Показания  к операции</th><td colspan="5">Показание_для_операции</td></tr>
        <tr><th>Цель операции</th><td colspan="5">Цель_операции</td></tr>
        <tr><th>Планируемая операция</th><td colspan="5">Планируемое_оперативное_вмешательство__проведенное</td></tr>
        <tr><th>Возможные осложнения</th><td colspan="5">Возможные_осложнения</td></tr>
    
        <tr><th>Операционная бригада</th><td colspan="5">Цель_операции</td></tr>
        <tr><th>Обезболивание</th><td colspan="5">Анестезия</td></tr>
        <tr><th>Лечащий врач</th><td colspan="5">Лечащий_врач</td></tr>
        <tr><th>И.о. зав.отд./Зав.отд.</th><td colspan="5">Зав.отд.</td></tr>
        <tr><th>Дата операции</th><td colspan="5">Дата_операции</td></tr>

    </table>
    <h3>Предоперационный осмотр</h3>
<table class="table table-bordered" style="width:auto;">
    <tr>
        <td><input type="date" style="width:100%;"></td><td colspan="2">Предоперационный осмотр</td>
    </tr>
    <tr>
        <td></td><td>Жалобы:</td><td><textarea></textarea></td>
    </tr>
    <tr>
        <td></td><td>Назначить:</td><td><textarea></textarea></td>
    </tr>
        
    <tr><td>Лечащий врач</td><td>Лечащий_врач</td></tr>
    <tr><td>И.о. зав.отд./Зав.отд.</td><td>Зав.отд.</td></tr>
    
    </table>
</div>
@endsection
