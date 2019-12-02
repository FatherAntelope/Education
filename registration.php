<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/semantic.min.css"/>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/components/icon.min.css'>
    <script src="/jquery.min.js"></script>
    <script src="/semantic.min.js"></script>
    <title>Проект</title>
</head>
<body>
<div class="ui equal width grid">
    <div class="column">
    </div>

    <div class="container seven wide column">

        <div class="ui steps top attached fluid">
            <div class="step">
                <i class="edit teal icon"></i>
                <div class="content">
                    <div class="title">Процесс регистрации</div>
                    <div class="description">Выберите направление</div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="ui attached tabular menu">
                <a class="item teal active" data-tab="first">Студент</a>
                <a class="item teal" data-tab="second">Преподаватель</a>
            </div>


            <div class="ui bottom attached teal tab segment active" data-tab="first">
                <link rel="import" href="/Student/reg.html">
                <?php include_once 'Student/reg.html' ?>
            </div>

            <div class="ui bottom attached teal tab segment" data-tab="second">
                <?php include_once 'Professor/reg.html' ?>
            </div>
        </div>
    </div>

    <div class="column">
    </div>
</div>
</body>



<script>
    $('.menu .item')
        .tab()
    ;

    $('select.dropdown')
        .dropdown()
    ;

    $('.boundary.example .button')
        .popup({
            boundary: '.boundary.example .segment'
        })
    ;
</script>
</html>