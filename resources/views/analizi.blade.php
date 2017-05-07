@extends('layouts.app')
@section('title', 'Данные')
@section('content')
<div class="container">
   <ul class="nav nav-tabs">
      <li class="active"><a data-toggle="tab" href="#oak">ОАК</a></li>
      <li><a data-toggle="tab" href="#oam">ОАМ</a></li>
      <li><a data-toggle="tab" href="#bak">БАК</a></li>
      <li><a data-toggle="tab" href="#psa">ПСА</a></li>
      <li><a data-toggle="tab" href="#koagulogram">коагулограмма</a></li>
    </ul>
    
    <div class="tab-content">
      <div id="oak" class="tab-pane fade in active">
      <div>
        <input type="button" class="btn btn-default" onclick="this.style='display: none'; print();" value="Распечатать"/>
      </div>
 <h3>Клинический анализ крови №1.</h3>
          <p>Дата: <text id="t"></text>
              <script>
                  var dt=new Date();
                    var month = dt.getMonth()+1;
                    var day = dt.getDate();
                    var year = dt.getFullYear();
                    document.getElementById('t').innerHTML = dt.toDateString();
              </script>
          </p>
        <div>
            <table class="table table-bordered table-striped" >
                 <tr>
                     <td>Дата взятия биоматериала</td><td style="width: 70%;"><input type="date"></td>
                 </tr>
                <tr><td>ФИО пациента</td><td style="width: 70%;"><input type=text value="Иванов Иван Иванович"></td></tr>
                <tr><td>Год рождения</td><td style="width: 70%;"><input type=date></td></tr>
                <tr><td>Отделение палата №</td><td style="width: 70%;"><input type=number value=1></td></tr>
                <tr><td>Участок медкарта</td><td style="width: 70%;"><input type=number value=1></td></tr>
                <tr><td>ФИО врача</td><td style="width: 70%;"><input type=text value="..."></td></tr>
             </table>
            <table class="table table-bordered table-striped col-xs-12 col-sm-11 col-md-11">
                <tr>
                    <th>Исследуемый компонент</th>
                    <th>Результат исследования</th>
                    <th>Референтные значения</th>
                </tr>  
                <tr>
                    <td>Лейкоциты</td>
                    <td><textarea style="resize: none;"></textarea></td>
                    <td>Взрослые: 4,5-10х10^9/л <br>Дети: 4,5-13,5х10^9/л</td>
                </tr>
                <tr>
                    <td>Эритроциты</td>
                    <td><textarea style="resize: none;"></textarea></td>
                    <td>М: 4,2-5,6х10^12/л <br>Ж: 3,8-5,1х10^12/л</td>
                </tr> 
                <tr>
                    <td>Гемоглобин</td>
                    <td><textarea style="resize: none;"></textarea></td>
                    <td>М: 130-170 г/л <br>Ж: 117-115 г/л</td>
                </tr>  
                <tr>
                    <td>Гематокрит</td>
                    <td><textarea style="resize: none;"></textarea></td>
                    <td>М: 39-49% <br>Ж: 35-45%</td>
                </tr>   
                <tr>
                    <td>Тромбоциты</td>
                    <td><textarea style="resize: none;"></textarea></td>
                    <td>150-320х10^9/л</td>
                </tr>  
                <tr>
                    <td>СОЭ</td>
                    <td><textarea style="resize: none;"></textarea></td>
                    <td>М: 2-10 мм/ч <br>Ж: 2-15 мм/ч</td>
                </tr>     
             </table>
        </div>
        </div>
      <div id="oam" class="tab-pane fade">
      <div>
        <input type="button" class="btn btn-default" onclick="this.style='display: none'; print();" value="Распечатать"/>
      </div>
          <h3>Общий анализ мочи</h3>
          <p>ГБУЗС «Городская больница №9»</p>
          <p>Клинико-диагностическая лаборатория</p>
          <b>Анализ мочи общий № 1</b>
          <table class="table table-bordered table-striped" style="width:auto;">
              <tr><td>Дата взятия биоматериала</td><td><input type="date"></td></tr>
              <tr><td>ФИО пациента</td><td>Иванов Иван Иванович</td></tr>
              <tr><td>Год рождения</td><td><input type="date"></td></tr>
              <tr><td>Отделение палата №</td><td>1</td></tr>
              <tr><td>Участок Медкарта</td><td>1</td></tr>
              <tr><td>ФИО врача</td><td>...</td></tr>
          </table>
          <table class="table table-bordered table-striped col-xs-12 col-sm-11 col-md-11">
             <tr>
                 <th>Исследуемый компонент</th>
                 <th>Результат исследования</th>
                 <th>Референтные значения</th>
             </tr>
              <tr>
                  <td>Количество</td>
                  <td></td>
                  <td></td>
              </tr>
              <tr>
                  <td>Цвет</td>
                  <td></td>
                  <td></td>
              </tr>
              <tr>
                  <td>Прозрачность</td>
                  <td></td>
                  <td></td>
              </tr>
              <tr>
                  <td>Относительная плотность</td>
                  <td></td>
                  <td></td>
              </tr>
              <tr>
                  <td>Ph (реакция мочи)</td>
                  <td></td>
                  <td></td>
              </tr>
              <tr>
                  <td>Глюкоза</td>
                  <td></td>
                  <td></td>
              </tr>
              <tr>
                  <td>Уробилиноген</td>
                  <td></td>
                  <td></td>
              </tr>
              <tr>
                  <td>Билирубин</td>
                  <td></td>
                  <td></td>
              </tr>
              <tr>
                  <td>Кетоновые тела</td>
                  <td></td>
                  <td></td>
              </tr>
              <tr>
                  <td>Белок</td>
                  <td></td>
                  <td></td>
              </tr>
              <tr>
                  <td>Кровь</td>
                  <td></td>
                  <td></td>
              </tr>
             <tr>
                  <td>Лейкоциты</td>
                  <td></td>
                  <td></td>
              </tr>
              <tr>
                  <td>Нитриты</td>
                  <td></td>
                  <td></td>
              </tr>
              <tr class="info">
                  <td colspan=3>Микроскопическое иследование</td>
              </tr>
          </table>
      </div>
      <div id="bak" class="tab-pane fade">
      <div>
        <input type="button" class="btn btn-default" onclick="this.style='display: none'; print();" value="Распечатать"/>
      </div>
        <h3>Биохимический анализ крови.</h3>
          <p>ГБУЗС «Городская больница №9»</p>
          <p>Клинико-диагностическая лаборатория</p>
          <b>Биохимический анализ крови №1.</b>
          <p>Дата: <text id="t2"></text></p>
          <p>Дата взятия биоматериала <input type=date></p>
          <table class="table table-bordered table-striped" style="width:50%;">
              <tr><td>ФИО</td><td><input type="text"></td></tr>
              <tr><td>Год рождения:</td><td><input type=date></td></tr>
              <tr><td>Палата №</td><td><input type="number"></td></tr>
              <tr><td>Номер медкарты</td><td><input type="number"></td></tr>
              <tr><td>Врач</td><td><input type=text></td></tr>
          </table>
          <table class="table table-bordered table-striped col-xs-12 col-sm-11 col-md-11">
              <tr>
                  <th>Исследуемый компонент</th>
                  <th>Результат исследования</th>
                  <th>Референтное значение</th>
              </tr>
              <tr>
                  <td>Билирубин общий</td>
                  <td><textarea></textarea></td>
                  <td>5.0 -21.0 мкмоль/л</td>
              </tr>
              <tr>
                  <td>Билирубин связанный</td>
                  <td><textarea></textarea></td>
                  <td>< 3.4 мкмоль/л</td>
              </tr>
              <tr>
                  <td>АСТ</td>
                  <td><textarea></textarea></td>
                  <td>< 37 Е/л</td>
              </tr>
              <tr>
                  <td>АЛТ</td>
                  <td><textarea></textarea></td>
                  <td>< 37 Е/л</td>
              </tr>
              <tr>
                  <td>Щелочная фосфатаза</td>
                  <td><textarea></textarea></td>
                  <td>Дети до 16 лет:< 360 Е/л<br>м: 41-137 Е/л<br>ж: 39-118 Е/л</td>
              </tr>
              <tr>
                  <td>ЛДГ</td>
                  <td><textarea></textarea></td>
                  <td>195 – 450 Е/л</td>
              </tr>
              <tr>
                  <td>a-ГБДГ (ЛДГ)</td>
                  <td><textarea></textarea></td>
                  <td>< 182 Е/л</td>
              </tr>
              <tr>
                  <td>ГГТП</td>
                  <td></td>
                  <td>м: < 50 Е/л<br>ж: < 32 Е/л</td>
              </tr>
              <tr>
                  <td>Холестерин</td>
                  <td><textarea></textarea></td>
                  <td>< 5.2 ммоль/л</td>
              </tr>
              <tr>
                  <td>Глюкоза</td>
                  <td><textarea></textarea></td>
                  <td>3.9-5.8 ммоль/л</td>
              </tr>
              <tr>
                  <td>a-Амилаза</td>
                  <td></td>
                  <td>< 100 Е/л</td>
              </tr>
              <tr>
                  <td>Мочевина</td>
                  <td><textarea></textarea></td>
                  <td>2.50-8.32 ммоль/л</td>
              </tr>
              <tr>
                  <td>Креатинин</td>
                  <td><textarea></textarea></td>
                  <td>м: 71-115 мкмоль/л<br>ж: 53-106 мкмоль/л</td>
              </tr>
              <tr>
                  <td>Мочевая кислота</td>
                  <td><textarea></textarea></td>
                  <td>м: 214-458 мкмоль/л<br>ж: 149-405 мкмоль/л</td>
              </tr>
              <tr>
                  <td>Альбумин</td>
                  <td><textarea></textarea></td>
                  <td>35.0-50.0 г/л</td>
              </tr>
              <tr>
                  <td>Общий белок</td>
                  <td><textarea></textarea></td>
                  <td>65.0-85.0 г/л</td>
              </tr>
              <tr>
                  <td>С-реактивный белок (СРБ)</td>
                  <td><textarea></textarea></td>
                  <td>< 6 мг/л</td>
              </tr>
              <tr>
                  <td>Железо сывороточное</td>
                  <td><textarea></textarea></td>
                  <td>9.5 – 30.0 мкмоль/л</td>
              </tr>
              <tr>
                  <td>Калий</td>
                  <td><textarea></textarea></td>
                  <td>3.5 – 5.3 ммоль/л</td>
              </tr>
              <tr>
                  <td>Натрий</td>
                  <td><textarea></textarea></td>
                  <td>135.0 – 148.0 ммоль/л</td>
              </tr>
              <tr>
                  <td>Хлориды</td>
                  <td><textarea></textarea></td>
                  <td>98.0 – 107.0 ммоль/л</td>
              </tr>
              <tr>
                  <td>Кальций общий</td>
                  <td><textarea></textarea></td>
                  <td>2.15 – 2.55 ммоль/л</td>
              </tr>
              <tr>
                  <td>Фосфор неорганический</td>
                  <td><textarea></textarea></td>
                  <td>0.87- 1.45 ммоль/л</td>
              </tr>
          </table>
      </div>
      <div id="psa" class="tab-pane fade">
      <div>
        <input type="button" class="btn btn-default" onclick="this.style='display: none'; print();" value="Распечатать"/>
      </div>
          <h3>Анализ крови №1.</h3>
          <p>Дата: <text id="t3"></text>
          </p>
          <p>Дата взятия биоматериала <input type=date></p>
          <table class="table table-bordered table-striped" style="width:50%;">
              <tr><td>ФИО</td><td><input type="text"></td></tr>
              <tr><td>Год рождения:</td><td><input type=date></td></tr>
              <tr><td>Палата №</td><td><input type="number"></td></tr>
              <tr><td>Номер медкарты</td><td><input type="number"></td></tr>
              <tr><td>Врач</td><td><input type=text></td></tr>
          </table>
          <table class="table table-bordered table-striped col-xs-12 col-sm-11 col-md-11">
              <tr>
                  <th>Исследуемый компонент</th>
                  <th>Результат исследования</th>
                  <th>Референтные значения</th>
              </tr>
              <tr>
                  <td>ПСА общий</td>
                  <td><textarea></textarea></td>
                  <td> < 4.0 нг/мл</td>
              </tr>
              <tr>
                  <td>ПСА свободный</td>
                  <td><textarea></textarea></td>
                  <td>< .42 нг/мл</td>
              </tr>
              <tr>
                  <td>ПСА общий/ПСА свободный (индекс)</td>
                  <td><textarea></textarea></td>
                  <td>15% - благоприятный прогноз</td>
              </tr>
          </table>
      </div>
      <div id="koagulogram" class="tab-pane fade">
        <div>
            <input type="button" class="btn btn-default" onclick="this.style='display: none'; print();" value="Распечатать"/>
        </div>
         <h3>Коагулограмма крови</h3>
          <p>ГБУЗС «Городская больница №9»</p>
          <p>Клинико-диагностическая лаборатория</p>
          <b>Коагулограмма крови № 1</b>
          <p>Дата: <text id="t4"></text></p>
          <p>Дата взятия биоматериала <input type=date></p>
          <table class="table table-bordered table-striped" style="width:auto;">
              <tr><td>ФИО</td><td><input type="text"></td></tr>
              <tr><td>Год рождения:</td><td><input type=date></td></tr>
              <tr><td>Палата №</td><td><input type="number"></td></tr>
              <tr><td>Номер медкарты</td><td><input type="number"></td></tr>
              <tr><td>Врач</td><td><input type=text></td></tr>
          </table>
          <table class="table table-bordered table-striped col-xs-12 col-sm-11 col-md-11">
              <tr>
                  <th>Исследуемый компонент</th>
                  <th>Результат исследования</th>
                  <th>Референтные значения</th>
              </tr>
              <tr>
                  <td>АЧТВ</td>
                  <td><textarea></textarea></td>
                  <td>25 – 35 секунд</td>
              </tr>
              <tr>
                  <td>Протромбин по Квику (в %)</td>
                  <td><textarea></textarea></td>
                  <td>70 – 130 %</td>
              </tr>
              <tr>
                  <td>МНО (INR)</td>
                  <td><textarea></textarea></td>
                  <td>0.7 – 1.2</td>
              </tr>
              <tr>
                  <td>Тромбиновое время</td>
                  <td><textarea></textarea></td>
                  <td>14.0 – 17.0 секунд</td>
              </tr>
              <tr>
                  <td>Фибриноген (по Клауссу)</td>
                  <td><textarea></textarea></td>
                  <td>2.0 – 4.0 г/л</td>
              </tr>
          </table>
      </div>
    </div>
</div>
<script>
    var dt=new Date();
    var month = dt.getMonth()+1;
    var day = dt.getDate();
    var year = dt.getFullYear();
    document.getElementById('t2').innerHTML = dt.toDateString();
    document.getElementById('t3').innerHTML = dt.toDateString();
    document.getElementById('t4').innerHTML = dt.toDateString();
</script>
@endsection