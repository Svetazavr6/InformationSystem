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
            <table class="table table-bordered table-striped" style="width:90%;">
                 <tr>
                     <td>Дата взятия биоматериала</td><td style="width: 70%;"><input type="date"></td>
                 </tr>
                <tr><td>ФИО пациента</td><td style="width: 70%;"><input type=text value="Иванов Иван Иванович"></td></tr>
                <tr><td>Год рождения</td><td style="width: 70%;"><input type=date></td></tr>
                <tr><td>Отделение палата №</td><td style="width: 70%;"><input type=number value=1></td></tr>
                <tr><td>Участок медкарта</td><td style="width: 70%;"><input type=number value=1></td></tr>
                <tr><td>ФИО врача</td><td style="width: 70%;"><input type=text value="..."></td></tr>
             </table>
            <table class="table table-bordered table-striped" style="width:90%;">
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
          <table class="table table-bordered table-striped" style="width:auto;">
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
        <p>Содержимое 3 панели...</p>
      </div>
      <div id="psa" class="tab-pane fade">
        <p>Содержимое 4 панели...</p>
      </div>
      <div id="koagulogram" class="tab-pane fade">
        <p>Содержимое 5 панели...</p>
      </div>
    </div>
</div>

@endsection