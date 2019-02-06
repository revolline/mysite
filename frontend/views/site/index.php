<?php

/* @var $this yii\web\View */

$this->title = 'Главная страница';
$this->registerJs("MainCtrl.actionIndex();", \yii\web\View::POS_END, 'actionIndex');

$user_id = Yii::$app->user->id ?? null;

//\common\Core::dump($Users);

?>

<div class="fonTop">

    <div class="container">
        <div class="navbarTop">
            <div class="row justify-content-between align-items-center">
                <div class="col-8 col-lg-3 col-md-4 col-sm-4">
                    <div class="logo_border">
                        <a href="/"><img src="/img/logo.png" alt="Логотип" class="w-100"></a>
                    </div>
                </div>
                <div class="col-auto col-lg-9 col-md-8 col-sm-8 text-right">
                    <div class="d-block d-sm-none curpointer" data-toggle="modal" data-target="#modalMainMenu">
                        <i class="fas fa-bars" style="font-size: 40px;color: white"></i>
                    </div>
                    <div class="d-none d-sm-block" id="menu">
                        <a class="btn-link btnHeader" href="#service">Услуги</a>
                        <a class="btn-link btnHeader" href="#portfolio">Портфолио</a>
                        <a class="btn-link btnHeader" href="#feedback">Отзывы</a>
                        <a class="btn-link btnHeader" href="#myself">О нас</a>
                        <a class="btn-link btnHeader" href="#contacts">Контакты</a>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container addPaddForBanner" style="position: relative">
        <div class="textBigBanner  ">
            Эффективные <br> интернет-решения <br>
            для вашего бизнеса
            <div class="regBanner">
                <div class="waitOffReg">Мы поможем вам воплотить ваши любые идеи. <br>
                    Различные проекты, от сайта-визитки до собственной CRM. <br>
                    Достижение поставленных целей -
                    одно из наших главных качеств,<br> с которыми создаются наши проектами.
                </div>
            </div>
        </div>
    </div>
</div>


<div class="segment-white mb-4   " id="service">
    <div class="container pt-5">
        <div class="title_blue">Что мы можем предложить</div>
        <div class="row mt-5 ">
            <div class="col-lg-3">
                <div class="block_service">
                    <a href="/" target="_blank" class="header_service">
                        <div class="img_service">
                            <img src="/img/icons/create_site.svg" alt="Создание сайтов">
                        </div>
                        Разработка сайтов
                    </a>
                    <div class="cost_service">
                        от 3000 р
                    </div>
                    <div class="info_service"><a href="/service/">Сайт - визитка</a></div>
                    <div class="info_service"><a href="/service/">Готовое решение</a></div>
                    <div class="info_service"><a href="/service/">Корпоративный сайт</a></div>
                    <div class="info_service"><a href="/service/">Интернет-магазин</a></div>
                    <div class="button_service">
                        <a class=" btn " href="/" target="_blank">подробнее</a>
                    </div>

                </div>
            </div>

            <div class="col-lg-3">
                <div class="block_service">
                    <a href="/" target="_blank" class="header_service">
                        <div class="img_service">
                            <img src="/img/icons/create_web.svg" alt="Создание web-приложений">
                        </div>
                        Разработка web-приложений
                    </a>
                    <div class="cost_service">
                        от 10000 р
                    </div>
                    <div class="info_service">Индивидуальная CRM</div>
                    <div class="info_service">Web версия ПО</div>
                    <div class="info_service">Интернет - портал</div>
                    <div class="info_service">SPA - приложение</div>
                    <div class="button_service">
                        <a class=" btn " href="/" target="_blank">подробнее</a>
                    </div>

                </div>
            </div>

            <div class="col-lg-3">
                <div class="block_service">
                    <a href="/" target="_blank" class="header_service">
                        <div class="img_service">
                            <img src="/img/icons/work_site.svg" alt=" Доработка сайтов">
                        </div>
                        Доработка сайтов
                    </a>
                    <div class="cost_service">
                        от 500 р
                    </div>
                    <div class="info_service">Исправление ошибок </div>
                    <div class="info_service">Изменения в дизайне</div>
                    <div class="info_service">Новый функционал</div>
                    <div class="info_service">Внутрення оптимизация</div>
                    <div class="button_service">
                        <a class=" btn " href="/" target="_blank">подробнее</a>
                    </div>

                </div>
            </div>
            <div class="col-lg-3">
                <div class="block_service">
                    <a href="/" target="_blank" class="header_service">
                        <div class="img_service">
                            <img src="/img/icons/help_site.svg" alt="Обслуживание сайтов">
                        </div>
                        Обслуживание сайтов
                    </a>
                    <div class="cost_service">
                        от 3000 р
                    </div>
                    <div class="info_service">Контроль работоспособности сайта в целом</div>
                    <div class="info_service">Оперативное устранение ошибок и сбоев</div>
                    <div class="info_service" style="padding-bottom: 5px">Восстановление сайта при его сбое </div>
<!--                    <div class="info_service">доступно</div>-->
                    <div class="button_service">
                        <a class=" btn " href="/" target="_blank">подробнее</a>
                    </div>

                </div>
            </div>

        </div>

    </div>
</div>

<div class="container pt-5  position-relative" id="programs">

    <div class="title_blue text-lg-left programma"> В каждый наш сайт входит</div>
    <div class="row mt-4">
        <div class=" col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <div class="row">
                <div class="col-md-offset-2 col-md-10 col-sm-12 col-xs-12 col-sm-center col-xs-center">
                    <div class="row mt-5 align-items-center">
                        <div class="col-md-5 col-sm-5 col-xs-12 text-right col-sm-center col-xs-center">
                            <img alt="Кроссбраузерность" src="/img/preim/one_preim.svg" class="w-100"></div>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <div class="titlePreim">Кроссбраузерность</div>
                            <div class="mt-3">Все наши сайты включают адаптацию на всех устройствах.</div>
                        </div>
                    </div>
                </div>
                <div class=" col-md-10 col-sm-12 col-xs-12 col-sm-center col-xs-center">
                    <div class="row mt-5 align-items-center">
                        <div class="col-md-5 col-sm-5 col-xs-12 text-right col-sm-center col-xs-center"><img alt="Активная поддержка"
                                                                                                             src="/img/preim/two_preim.svg" class="w-100"></div>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <div class="titlePreim">Активная поддержка</div>
                            <div class="mt-3">Помощь в составлении ТЗ, оформлении будущего сайта, рекомендации по доработкам</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-offset-2 col-md-10 col-sm-12 col-xs-12 col-sm-center col-xs-center mb-5">
                    <div class="row mt-5 align-items-center">
                        <div class="col-md-5 col-sm-5 col-xs-12 text-right col-sm-center col-xs-center"><img alt="расширение функциональности" class="w-100" src="/img/preim/three_preim.svg"></div>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <div class="titlePreim">Увеличение функциональности</div>
                            <div class="mt-3">Во всех нащих сайтах вы можете в дальнейшем что-то улучшить или доработать</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="img_preim" class="col-lg-6 col-md-12 hidden-sm hidden-xs">
            <img class="" alt="Mac" src="/img/preim/bg_preim.png">
        </div>
    </div>

</div>

<div class="colorStatictic ">
    <div class="d-none d-md-block">
        <div class="d-flex justify-content-center align-items-center ">
            <div class="border_Conf"><span class="fatLetter">1</span> <br> день</div>
            <div class="border_Conf"><span class="fatLetter">200</span> <br> участников</div>
            <div class="border_Conf"><span class="fatLetter">15</span><br> спикеров</div>
            <div class="border_Conf"><span class="fatLetter">5</span> <br>кейсов</div>
        </div>
    </div>
    <div class="d-block d-md-none">
        <div class="d-flex justify-content-center mt-3 mb-3">
            <div class=" border_Conf mr-2"><span class="fatLetter">1</span> <br> день</div>
            <div class=" border_Conf  mr-2"><span class="fatLetter">200</span> <br> участников</div>
        </div>
        <div class="d-flex justify-content-center">
            <div class=" border_Conf  mr-2"><span class="fatLetter">15</span><br> спикеров</div>
            <div class="border_Conf  mr-2"><span class="fatLetter">6</span> <br>часов</div>
        </div>
    </div>
</div>





<div class="segment-white mb-4  " id="speakers">
    <div class="container pt-5">
        <div class="title_blue  mb-5"> Спикеры</div>
        <div class="row">

        </div>
    </div>
</div>

<div class="fonCondition mt-5 " id="condition">
    <div class="container pt-5">
        <div class="row ">

        </div>
    </div>
</div>


<div class="container pt-5 mb-4" id="pathers">
    <div class="title_blue  mb-5"> Партнеры</div>
</div>

<div class="fonContact  " id="contacts">
    <div class="container  pt-5 text-white">
        <div class="title_white   mb-5"> Контакты</div>
        <div class="row">
            <div class="col-lg-7">
            </div>
            <div class="col-lg-5 f18">
                <div class="font-weight-bold ">Место проведения:</div>
                <div class="mb-3">г. Москва, ул. Мясницкая 13, стр. 18</div>
                <div class="font-weight-bold mb-5 ">По вопросам участия обращайтесь:</div>
                <div class="d-flex ">
                    <div><i class="fas fa-mobile-alt mr-3"></i></div>
                    <div class="d-flex d-flex flex-column">
                        <div>+7 (499) 213-01-90</div>
                        <div>Звонок платный (по тарифу вашего оператора).</div>
                        <div class="mb-3 "> Время работы с 6:00 до 18:00 часов МСК</div>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div><i class="fas fa-envelope mr-3"></i></div>
                    <div><b>info@pharmznanie.ru</b></div>
                </div>
            </div>
        </div>
        <div class="row pad2">
            <div class="col-lg-5 col-sm-4  col-12 mb-2 mt-2 order-lg-2 f14 ">© 2018 ООО ФЦ «Знание»</div>
            <div class="col-lg-7 col-sm-8  col-12 order-lg-1 f14  textPositionPrivacy  mb-2 mt-2 "><a
                        href="/img/pdf/privacy.pdf"
                        style="color: white!important; text-decoration: underline!important;" target="_blank">Политика
                    конфеденциальности</a>
                и
                <a href="/img/pdf/personal.pdf" target="_blank"
                   style="color: white!important;text-decoration: underline!important;" >персональных
                    данных</a>

            </div>
        </div>


    </div>

</div>

<!-- Modal -->
<div id="modalRegistration" class="modal fade modalStyle">
    <div class="modal-dialog" style="width: 95%; max-width: 500px;">
        <div class="modal-content panel panel-red">
            <div class="modal-header panel-heading">
                <h4 class="modal-title text-center" id="title">Регистрация </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" class="formReg" id="formRegistration-modal">
                    <div class="row form-group ">
                        <div class="col-sm-12 ">
                            <input type="text" class="form-control" id="formRegistration-modal-name_i" name="name_i"
                                   placeholder="Имя" autocomplete="new-password">
                        </div>
                    </div>
                    <div class="row form-group ">
                        <div class="col-sm-12 ">
                            <input type="text" class="form-control" id="formRegistration-modal-name_f" name="name_f"
                                   value=""
                                   placeholder="Фамилия" autocomplete="new-password">
                        </div>
                    </div>
                    <div class="row form-group ">
                        <div class="col-sm-12 ">
                            <input type="text" class="form-control" id="formRegistration-modal-firm_name"
                                   name="firm_name" value=""
                                   placeholder="Компания" autocomplete="off">
                        </div>
                    </div>
                    <div class="row form-group ">
                        <div class="col-sm-12 ">
                            <input type="text" class="form-control" id="formRegistration-modal-post_name"
                                   name="post_name" value=""
                                   placeholder="Должность" autocomplete="off">
                        </div>
                    </div>
                    <div class="row form-group ">
                        <div class="col-sm-12 ">
                            <input type="email" class="form-control" id="formRegistration-modal-email" name="email"
                                   value=""
                                   placeholder="E-mail" autocomplete="off">
                        </div>
                    </div>
                    <div class="row form-group ">
                        <div class="col-sm-12 ">
                            <input type="text" class="form-control" id="formRegistration-modal-phone" name="phone"
                                   value=""
                                   placeholder="Телефон" autocomplete="off">
                        </div>
                    </div>
                    <div class="row form-group ">
                        <div class="col-sm-12 ">
                            <input type="text" class="form-control" id="formRegistration-modal-code" name="code"
                                   value=""
                                   placeholder="Промокод" autocomplete="off">
                        </div>
                    </div>
            </div>
            <div class="row form-group pb-3">
                <div class="col-sm-12 text-center">
                    <div class="btn btn-reg "
                         onclick="javascript:$('#formRegistration-modal').submit(); return false;">Зарегистироваться
                    </div>
                </div>
                <div class="col-sm-12 mt-4 text-center f10" style="color: #6f6f6e">Нажимая кнопку
                    «Зарегистироваться», Вы разрешаете нам обработку Ваших <a href="/img/pdf/privacy.pdf"
                                                                              target="_blank">персональных
                        данных</a></div>
            </div>

            </form>
        </div>
    </div>
</div>



<!--Модалка в меню в гамбургере-->
<div class="modal fade" id="modalMainMenu">
    <div class="modal-dialog" style="width: 98%; max-width: 800px">
        <div class="modal-content panel panel-red">
            <div class="modal-header panel-heading">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="menuDialog">
                    <div class="item link "><a class="btn-link btnHeader" href="#conference">О Конференции</a>
                    </div>
                    <div class="item mt-3 link"><a class="btn-link btnHeader" href="#programs">Программа</a></div>
                    <div class="item mt-3 link"><a class="btn-link btnHeader" href="#speakers">Спикеры</a></div>
                    <div class="item mt-3 link"><a class="btn-link btnHeader" href="#condition">Стоимость</a></div>
                    <div class="item mt-3 link"><a class="btn-link btnHeader" href="#contacts">Место проведения</a>
                    </div>
                    <div class="m-3 text-center">
                        <?php
                        if ($user_id > 0) {
                            ?>
                            <a class="btn btn-reg" href="/auth/logout">Выйти</a>
                            <?php
                        } else {
                            ?>
                            <div class="btn btn-reg" data-toggle="modal" data-target="#modalCabinet">Личный
                                кабинет
                            </div>
                            <?php

                        }
                        ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade modalStyle" id="modalCabinet">
    <div class="modal-dialog" style="width: 95%; max-width: 500px;">
        <div class="modal-content panel panel-red">
            <div class="modal-header panel-heading">
                <h4 class="modal-title text-center" id="title">Вход в личный кабинет </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>

            </div>
            <div class="modal-body">
                <form id="formLogin" class="formReg">
                    <div class="row form-group ">
                        <div class="col-sm-12 ">
                            <input type="text" class="form-control" id="formLogin-email" name="email" value=""
                                   placeholder="Введите логин" required autocomplete="off">
                        </div>
                    </div>
                    <div class="row form-group ">
                        <div class="col-sm-12 ">
                            <input type="password" class="form-control" id="formLogin-pw" name="pw" value=""
                                   placeholder="Введите пароль" autocomplete="off" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-12 text-center">
                            <div class="btn btn-reg "
                                 onclick="javascript:$('#formLogin').submit(); return false;">Войти
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade " data-show="false" id="modalPayOk">
    <div class="modal-dialog" style="width: 95%; max-width: 500px;">
        <div class="modal-content panel panel-red">
            <div class="modal-header panel-heading">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="text-center textforModalPayOk mb-3 "> Вы успешно зарегистрировались на коференции</div>
                <div class="text-center textforModalPayOk">Можете скачать свой билет участника</div>
                <div class="text-center mb-4 mt-4">
                    <a href="/cabinet/bilet-d-load" target="_blank" class="btn btn-reg">Скачать билет</a>
                </div>
            </div>

        </div>
    </div>
</div>


<?php
echo $this->render('index_form_pay', ['Rekvizit' => $Rekvizit, 'Invoice' => $Invoice, 'Users' => $Users]);
?>


<?php
$flag_oplata_1 = $Users->flag_oplata_1 ?? null;

if ($act == 'openPay') {
    if ($flag_oplata_1 == null) {
        $script = <<< JS
$("#modalPay").modal("show");
JS;
        $this->registerJs($script, yii\web\View::POS_END);

    } else {
        $script = <<< JS
$("#modalPayOk").modal("show");
JS;
        $this->registerJs($script, yii\web\View::POS_END);

    }
}

if ($act == 'openPayOk') {
    $script = <<< JS
$("#modalPayOk").modal("show");
JS;
    $this->registerJs($script, yii\web\View::POS_END);

}
?>
