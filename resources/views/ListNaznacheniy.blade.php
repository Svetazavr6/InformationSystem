@extends('layouts.app')
@section('title', 'Лист назначений №1')
@section('content')
<div class="container">
    <form>
        <table class="table table-bordered" style="width:auto;">
            <tr>
                <td>ФИО пациента: </td>
                <td></td>
            </tr>
            <tr>
                <td>Диагноз: </td>
                <td></td>
            </tr>
        </table>
        <table class="table table-bordered" style="width:auto;">
            <tr>
                <th>Назначение</th>
                <th>Дата назначения</th>
                <th>Дата окончания/отмены</th>
                <th>Исполнители</th>
                <th>Отметки о выполнеии</th>
            </tr>
            <tr>
                <td><input type=text></td>
                <td id="date">
                   <?php echo "<input type='date' value='".date("d-m-Y")."'>" ?>
                </td>
                <td id="date">
                    <input type="date">
                </td>
                <td>
                    <select>
                        <option>врач</option>
                        <option>мед. сестра</option>
                    </select>
                </td>
                <td>
                    <input type=checkbox value="true">
                </td>
            </tr>
        </table>
        <table class="table table-bordered" style="width:auto;">
            <tr>
                <td>Зав. отд. Еременко С. Н.</td><td>Вр. Еременко А. Н.</td><td>Мед сестра </td>
            </tr>
            </table>
        <button class="button">Добавить назначение</button>
    </form>
</div>
@endsection
<script type=text/javascript src="../../public/js/jquery-3.0.0.min.js"></script>
<script>
    function AddDate(){
        $("#date").append("<input type='date'>");
    }
</script>