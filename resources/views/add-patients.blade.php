@extends('layouts.app')
@section('title', 'Создание мед. карты')
@section('content')
<div class="container">
    <form>
        <table class="table table-bordered" style="width:auto;">
            <tr>
                <td><p>ФИО: </p></td>
                <td><input type="text" style="width:100%;"></td>
            </tr>
            <tr>
                <td><p>Пол: </p></td>
                <td><input type="checkbox" value="мужской" >мужской <br> <input type="checkbox" value="женский">женский</td>
            </tr>
            <tr>
                <td><p>Дата рождения: </p></td>
                <td><input type="date"></td>
            </tr><tbody>
            <tr>
                <td><p>Место регистрации: республика, край, область </p></td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td><p>район </p></td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td><p>город </p></td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td><p>населенный пункт </p></td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td><p>улица, дом, квартира  </p></td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td><p>тел. </p></td>
                <td><input type="tel"></td>
            </tr><tbody>
            <tr>
                <td><p>Местность: </p></td>
                <td><input type="checkbox" value="городская-1"> городская-1 <br>
                    <input type="checkbox" value="сельская-2"> сельская-2</td>
            </tr><tbody>
            <tr>
                <td><p>Семейное положение: </p></td>
                <td>
                    <input type="checkbox" value="состоит в зарегистрированном браке"> состоит в зарегистрированном браке - 1 <br> 
                    <input type="checkbox" value="состоит в незарегистрированном браке"> состоит в незарегистрированном браке - 2 <br>
                    <input type="checkbox" value="не состоит в браке"> не состоит в браке - 3 <br>
                    <input type="checkbox" value="неизвестно"> неизвестно - 4
                </td>
            </tr>
            <tr>
                <td><p>Образование: </p></td>
                <td>
                    <p>профессиональное: </p>
                    <input type="checkbox" value="высшее"> высшее - 1 <br> 
                    <input type="checkbox" value="неполное высшее"> неполное высшее - 2 <br>
                    <input type="checkbox" value="среднее"> среднее - 3 <br>
                    <input type="checkbox" value="начальное"> начальное - 4 <br>
                    <p>общее: </p>
                    <input type="checkbox" value="среднее (полное)"> среднее (полное) - 5 <br> 
                    <input type="checkbox" value="основное"> основное - 6 <br>
                    <input type="checkbox" value="начальное"> начальное - 7 <br>
                    <input type="checkbox" value="не имеет начального образования"> не имеет начального образования - 8 <br>
                    <input type="checkbox" value="неизвестно"> неизвестно - 9 
                </td>
            </tr>
            <tr>
                <td><p>Образование:</p></td>
                <td>
                    <p>занят(а) в экономике: </p>
                    
                    <input type="checkbox" value="">  - 1 <br> 
                    <input type="checkbox" value="">  - 2 <br>
                    <input type="checkbox" value="">  - 3 <br>
                    <input type="checkbox" value="">  - 4 <br>
                    <input type="checkbox" value="">  - 5 <br> 
                    <input type="checkbox" value="">  - 6 <br>
                    
                    <p>не занят(а) в экономике: </p>
                    
                    <input type="checkbox" value="">  - 7 <br>
                    <input type="checkbox" value="">  - 8 <br>
                    <input type="checkbox" value="">  - 9 <br>
                    <input type="checkbox" value="">  - 10
                </td>
            </tr>
            <tr>
                <td><p>Место работы: </p></td>
                <td><input type="text"></td>
            </tr>
            <tr>
<!--                исправить-------------------------------------------------- -->
                <td><p>Полис ОМС: </p></td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td><p>СНИЛС: </p></td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <!--                исправить-------------------------------------------------- -->
                <td><p>Наименование страховой мед. организации: </p></td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <!--                исправить-------------------------------------------------- -->
                <td><p>Дата поступления в мед. организацию: </p></td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <!--                исправить-------------------------------------------------- -->
                <td><p>Отделение: </p></td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <!--                исправить-------------------------------------------------- -->
                <td><p>Палата номер: </p></td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <!--                исправить-------------------------------------------------- -->
                <td><p>Наименование направившей мед. организации: </p></td>
                <td><input type="text"></td>
            </tr>
            
        </table>
        <!--
        <p></p> <input type="text">
        <p></p> <input type="text">
        <p></p> <input type="text">
        <p></p> <input type="text">
        <p></p> <input type="text">
        <p></p> <input type="text">
        <p></p> <input type="text">
-->
        
    </form>
</div>
@endsection
