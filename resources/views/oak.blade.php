@section('oak')
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
@endsection