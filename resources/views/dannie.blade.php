@extends('layouts.app')
@section('title', 'Данные')
@section('content')
<div class="container">
    <table class="table table-bordered" style="width:auto;">
<!--
        <tr>
            <td>
            
            </td>
            <td>
            
            </td>
        </tr>
-->
        <tr><td><p>ФИО</p></td><td><input type="text" style="width:100%;" placeholder="ФИО" required></td></tr>
        <tr><td><p>№ и/б</p></td><td><input type="text" style="width:100%;" required></td></tr>
        <tr><td><p>Дата поступления</p></td><td><input type="date" style="width:100%;" required></td></tr>
        <tr><td><p>Дата выписки</p></td><td><input type="date" style="width:100%;"></td></tr>
        <tr><td><p>Дата рождения</p></td><td><input type="date" style="width:100%;" required></td>
        <tr><td><p>Место жительства</p></td><td><input type="text" required></td>
        <tr><td><p>Жалобы</p></td><td>
            <input type="checkbox" value="боли в поясничной области" >боли в поясничной области <br> 
            <input type="checkbox" value="боли над лоном" >боли над лоном <br>
            <input type="checkbox" value="боли в промежности" >боли в промежности <br>
            <input type="checkbox" value="иррадиирующие вниз живота" >иррадиирующие вниз живота <br>
            <input type="checkbox" value="справа" >справа <br>
            <input type="checkbox" value="слева" >слева <br>
            <input type="checkbox" value="тошноту" >тошноту <br>
            <input type="checkbox" value="рвоту" >рвоту <br>
            <input type="checkbox" value="повышение температуры " >повышение температуры  <br>
            <input type="checkbox" value="затрудненное мочеиспускание" >затрудненное мочеиспускание <br>
            <input type="checkbox" value="учащенное мочеиспускание" >учащенное мочеиспускание <br>
            <input type="checkbox" value="болезненное мочеиспускание" >болезненное мочеиспускание <br>
            <input type="checkbox" value="недержание мочи " >недержание мочи  <br>
            <input type="checkbox" value="при кашле, напряжении" >при кашле, напряжении <br>
            <input type="checkbox" value="ноктурию" >ноктурию <br>
            <input type="checkbox" value="активно не предьявляет" >активно не предьявляет <br>
            <input type="checkbox" value="примесь крови  в моче" >примесь крови  в моче <br>
            <input type="checkbox" value="невозможность самостоятельного мочеиспускания" >невозможность самостоятельного мочеиспускания <br>
            <input type="checkbox" value="наличие катетера Фолея" >наличие катетера Фолея <br>
            <input type="checkbox" value="наличие нефростомы">наличие нефростомы
        </td></tr>
        <tr><td><p>Anamnesis morbi</p></td><td><input type="text" required></td></tr>
        <tr><td><p>Anamnesis vitae</p></td><td><input type="text" required></td></tr>
        <tr><td><p>Аллергоанамнез</p></td><td><input type="text" required></td></tr>
        <tr><td><p>Трудовой анамнез, место работы</p></td><td>
            <select>
                <option>неработающий трудоспособного возраста, в л/н не нуждается.</option>
                <option>работающий трудоспособного возраста, в л/н  нуждается.</option>
                <option>пенсионер, в б\л не нуждается</option>
                <option>инвалид</option>
            </select>
        </td></tr>    
        <tr><td><p>Трансфузиологический анамнез</p></td><td><input type="input" value="не отягощен" required></td></tr>
        <tr><td><p>Объективно при поступлении</p></td><td> <textarea style="width:100%;height:180px;">Состояние  удовлетворительное. Температура 36,9 С. Кожные покровы обычной окраски. Л/у доступные пальпации не увеличены. Дыхание в легких везикулярное. ЧД 16 в мин. Тоны сердца приглушены, ритмичные. АД 140/80, ЧСС 78 в мин. Живот не вздут, симметричный, мягкий, участвует в акте дыхания, чувствительный над лоном. Перистальтика выслушивается. С-м Щеткина-Блюмберга отр. Печень по краю реберной дуги. Стул в норме. Поясничная область не изменена. Почки не пальпируются. Пальпация их безболезненная. С-м "поколачивания" отриц   Мочевой пузырь пальпаторно и перкуторно не определяется. Мочится  самостоятельно.  Уретрита нет.  </textarea> </td></tr>
        <tr><td><p>Per rectum</p></td><td><input type="input"required></td></tr>
        <tr><td><p>Данные ПГИ</p></td><td><input type="input" required></td></tr>
        <tr><td><p>Данные амбулаторного обследования</p></td><td> <textarea style="width:100%;height:80px;">ФЛГ (амб): без свежих инфильтративных изменений.
Терапевт (амб): противопоказаний для оперативного лечения нет. </textarea> </td></tr>
        <tr><td><p>Справка о стоимости</p></td><td>
            <select>
                <option>Выдана справках   о стоимости медицинской помощи, оказанной застрахованному лицу в рамках ОМС.</option>
                <option>От выдачи справки о стоимости медицинской помощи, оказанной застрахованному  лицу в рамках ОМС отказался(-ась).</option>
            </select>
            </td></tr>
        <tr><td><p>Предварительный диагноз</p></td><td> <textarea style="width:100%;height:80px;">МКБ, рецидив. Резидуальный камень н\чашки справа 20 мм.
Гидронефроз справа 1 ст. Стриктура н\ 3 справа. 
Хронический калькулезный пиелонефрит , латентное течение. ХПН 0-1.</textarea> </td></tr>
        <tr><td><p>Клинический диагноз</p></td><td> <textarea style="width:100%;height:80px;">МКБ, рецидив. Резидуальный камень н\чашки справа 20 мм.
Гидронефроз справа 1 ст. Хронический калькулезный пиелонефрит , латентное течение. ХПН 0-1</textarea> </td></tr>
        <tr><td><p>Сопутствующий диагноз</p></td><td> <textarea style="width:100%;height:80px;">ИБС: АКС. САГ 2 ст, 2 ст, риск 3. Ожирение 3-4 ст. П\о вентральная грыжа. </textarea> </td></tr>
        <tr><td><p>Показание для операции</p></td><td> <textarea style="width:100%;height:80px;">Наличие камня н\ чашки почки, вызывающего  воспаление и нарушение функции почек.</textarea> </td></tr>
        <tr><td><p>Цель операции</p></td><td> <textarea style="width:100%;height:80px;">Удаление камня</textarea> </td></tr>
        <tr><td><p>Операция</p></td><td> <textarea style="width:100%;height:80px;">Комбинированная нефролитолапаксия. Стентирование справа. </textarea> </td></tr>
        <tr><td><p>Возможные осложнения</p></td><td> <textarea style="width:100%;height:80px;">Стриктура,  кровотечение, перфорация, инфекционно- воспалительные изменения, необходимость открытого оперативного вмешательства.</textarea> </td></tr>
        <tr><td><p>Дата операции</p></td><td><input type="date" required></td></tr>
        <tr><td><p>Операция (радикальная-1;паллиативная-2.)</p></td><td>
            <select>
                <option>радикальная-1</option>
                <option>паллиативная-2</option>
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
</div>
@endsection
