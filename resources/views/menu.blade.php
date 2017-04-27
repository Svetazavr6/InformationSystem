<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Информационная система врача</title>
    </head>
    <body>
       <table>
        <tr class="my_links">
            <td><a href="/palati"><div style="background-image: url('/images/normal_999.jpg');">Палаты</div></a></td>
            <td><a href="/klin_razbor"><div>Клинический разбор</div></a></td>
            <td><a href="/GlavOsmotr"><div>Осмотр заведующего отделением</div></a></td>          
        </tr>
        <tr class="my_links">
            <td><a href="/patients_vievs"><div>Список пацикентов</div></a></td>     
            <td><a href="/Gistologiya"><div>Гистология</div></a></td>
            <td><a href="/add_patient"><div style="background-image: url(/images/286-300x199.jpg);">Создать карту пациента</div></a></td>  
        </tr>
       </table>
    </body>
</html>



<style>
    body{
        margin: 0;
        padding: 0;
        background-color: #99ff99;
    }
    tr{
        display: block;
        height: 49.5vh;        
    }
    td{
        width: 33vw;
        text-align: center;
    }
    .my_links td > a{
        color: #fff;
        font-size: 20px;
        font-weight: 600;
        display: block;
        vertical-align: middle;
        text-decoration: none;
        text-transform: uppercase;
        background-color: rgba(125, 125, 125, 0.5);
    }
    .my_links a div{
        width: 100%;
        height: 49vh;
        background-size: cover;
    }
</style>