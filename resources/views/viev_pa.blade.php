@extends('layouts.app')
@section('title', 'Данные')
@section('content')
<div class="container">
    <table class="table table-bordered table-striped">
        <tr><td><p>ФИО</p></td><td>Иванов Иван Иванович</td></tr>
        <tr><td><p>№ и/б</p></td><td>652535</td></tr>
        <tr><td><p>Дата поступления</p></td><td>20.05.2016</td></tr>
        <tr><td><p>Дата выписки</p></td><td></td></tr>
        <tr><td><p>Дата рождения</p></td><td>12.08.1979</td>
        <tr><td><p>Место жительства</p></td><td>Адрес проживания</td>
        <tr><td><p>Контактный телефон</p></td><td>+7978-999-88-77</td></tr>
        <tr class="info">
            <td>Осмотры пациента</td>
            <td><a href="osmotri"><button class="btn btn-default">Посмотреть</button></a></td>
        </tr>
        <tr class="info">
            <td>Диагнозы пациента</td>
            <td><a href="diagnozi"><button class="btn btn-default">Посмотреть</button></a></td>
        </tr>
        <tr class="info">
            <td>Информация об операциях пациента</td>
            <td><a href="patient_operations"><button class="btn btn-default">Посмотреть</button></a></td>
        </tr>
        <tr><td><p>Справка о стоимости</p></td><td>
            <select>
                <option>Выдана справках   о стоимости медицинской помощи,<br> оказанной застрахованному лицу в рамках ОМС.</option>
                <option>От выдачи справки о стоимости медицинской помощи, оказанной застрахованному  лицу в рамках ОМС отказался(-ась).</option>
            </select>
            </td></tr>
        <tr><td><p>Выписан</p></td><td>
            <select>
                <option>с выздоровлением</option>
                <option>с улучшением</option>
                <option>без перемен</option>
                <option>с ухудшением</option>
            </select>
            </td></tr>
        <tr><td><p>Трудоспособность</p></td><td>
            <select>
                <option>восстановлена полностью</option>
                <option>временно утрачена</option>
                <option>снижена</option>
                <option>стойко утрачена в связи с данным заболеванием</option>
                <option>утрачена с другими причинами</option>
            </select>
            </td></tr>
        <tr><td><p>Лист нетрудоспособности</p></td><td><input type="text" value="нет"></td></tr>
<!--        <tr><td><p></p></td><td><input type="date" required></td></tr>-->
    </table>
    <table class="table table-bordered" style="width:auto;">
<!--
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
-->
        <tr>
            <td>ОАК:</td>
            <td>дата_поступления</td>
            
        </tr>
        <tr>
            <td>Гем. г/п</td>
            <td>Эр. x10(12)/л</td>
            <td>Тр. x10(9)/л</td>
            <td>Лц. x10(9)/л</td>
            <td>П/я %</td>
            <td>С/я %</td>
            <td>Эоз %</td>
            <td>Баз %</td>
            <td>Лф %</td>
            <td>Мон %</td>
            <td>СОЭ мм/час</td>
        </tr>
        <tr>
            <td>126</td>
            <td>4.36</td>
            <td>122</td>
            <td>4.2</td>
            <td>5</td>
            <td>44</td>
            <td>1</td>
            <td>0</td>
            <td>51</td>
            <td>4</td>
            <td>11</td>
        </tr>
    </table>
    <a href="dokumenti"><button class="btn btn-success">Посмотреть приложенные документы</button></a>
    
    <br><br>
    <div>   
        <h2>График изменения температуры пациента</h2>      
        <canvas id="myChart" width="200" height="200"></canvas>
    </div>
</div>
<script src="js/node_modules/chart.js/dist/Chart.js"></script>
<script>
var ctx = document.getElementById("myChart");
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ["27.04.2017", "28.04.2017", "29.04.2017", "30.04.2017", "01.05.2017", "02.05.2017"],
        datasets: [{
            label: 'Температура',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: ['rgba(55, 255, 132, 0.2)'],
            borderColor: ['rgba(55,255,132,1)'],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>
@endsection
