<div class="container wrapper">
    <div class="top_header__block"></div>
    <?php print render($page['top_header']); ?>
    <section class="header">
        <div class="row">
            <div class="col-6">
                <div class="header__logo position-absolute">cleanok</div>
                <h3 class="position-absolute align-middle">Техническая
                    эксплуатация и содержание недвижимости</h3>
                <p class="position-absolute">Забота о вашей недвижимости на
                    регулярной и разовой основе.
                    Отставьте заявку и наш менеджер свяжется с вами</p>
                <div class="header__btn_big_orange position-absolute">Заказать
                    звонок
                </div>
                <div class="header__texts">
                    <div class="header__text_item header__text_item_one position-absolute">
                        Более <a href="#">60
                            городов</a> по Дальнему Востоку
                    </div>
                    <div class="header__text_item header__text_item_two position-absolute">
                        Более 500 тыс.м обслуживаемых
                        территорий
                    </div>
                    <div class="header__text_item header__text_item_three position-absolute">
                        Более 1 000 объектов на
                        обслуживании
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="header__banner">
                    <nav class="text-right">
                        <a href="#">Клиенты</a>
                        <a href="#">Услуги</a>
                        <a href="#">Сертификаты</a>
                        <a href="#">Контакты</a>
                        <div class="float-right top_header__burger">
                            <span class="top_header__burger_item top_header__burger_one"></span>
                            <span class="top_header__burger_item top_header__burger_two"></span>
                            <span class="top_header__burger_item top_header__burger_three"></span>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="row">
            <div class="col">
                <div class="d-flex justify-content-center">
                  <?php print render($page['content']); ?>
                </div>
            </div>
        </div>
    </section>
    <section class="partners">
      <?php print render($page['partners']); ?>
    </section>
    <section class="services">
        <div class="row">
            <div class="col">
                <h4 class="services__h4">услуги</h4>
                <h3 class="services__h3">Берем на себя заботу о вашей
                    недвижимости</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <ul class="nav tabs-left services__tabs">
                    <li class="active">
                        <div class="row align-items-center">
                            <div class="col-2">
                                <div class="services__tab services__tab1 float-left"></div>
                            </div>
                            <div class="col-10">
                                <a class="services__tab_link active" href="#"
                                   data-service-link="vtab_one">Содержание
                                    внутренних помещений и
                                    территорий</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row align-items-center">
                            <div class="col-2">
                                <div class="services__tab services__tab2 float-left"></div>
                            </div>
                            <div class="col-10">
                                <a class="services__tab_link" href="#"
                                   data-service-link="vtab_two">Управление и
                                    эксплуатация коммерческой
                                    недвижимости
                                    и в
                                    сфере ЖКХ</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row align-items-center">
                            <div class="col-2">
                                <div class="services__tab services__tab3 float-left"></div>
                            </div>
                            <div class="col-10">
                                <a class="services__tab_link" href="#"
                                   data-service-link="vtab_three">Хозяйственное
                                    обслуживание</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row align-items-center">
                            <div class="col-2">
                                <div class="services__tab services__tab4 float-left"></div>
                            </div>
                            <div class="col-10">
                                <a class="services__tab_link" href="#"
                                   data-service-link="vtab_four">Техническое
                                    обслуживание инженерных
                                    систем</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row align-items-center">
                            <div class="col-2">
                                <div class="services__tab services__tab5 float-left"></div>
                            </div>
                            <div class="col-10">
                                <a class="services__tab_link" href="#"
                                   data-service-link="vtab_five">Поддержка
                                    материально-технической
                                    базы</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="col-9">
                <div class="services__tab_content">
                    <div class="services__tab_content_item active"
                         id="vtab_one">
                        <div class="row">
                            <div class="col-4">
                                <h3>Ежедневная уборка</h3>
                                <p>Внутренние помещения и прилегающие
                                    территории</p>
                            </div>
                            <div class="col-4">
                                <h3>Генеральная уборка</h3>
                                <p>После строительства, ремонта, пожара,
                                    затопления</p>
                            </div>
                            <div class="col-4">
                                <h3>Химчистка</h3>
                                <p>Мягкой мебели, ковров, жалюзи</p>
                            </div>
                            <div class="col-4">
                                <h3>Уход за полом</h3>
                                <p>Полировка, машинная мойка</p>
                            </div>
                            <div class="col-4">
                                <h3>Озеленение и благоустройство</h3>
                                <p>Полив и стрижка газонов, уход за
                                    насаждениями</p>
                            </div>
                            <div class="col-4">
                                <h3>Уход за фасадами</h3>
                                <p>Окна, витрины, фасады зданий</p>
                            </div>
                            <div class="col-4">
                                <h3>Вывоз мусора</h3>
                                <p>Сбор и вывоз на свалку</p>
                            </div>
                        </div>
                    </div>
                    <div class="services__tab_content_item" id="vtab_two">
                        <div class="row">
                            <div class="col">
                                <div class="services__tab_content_items_wrapper">
                                    <div>
                                        <h3>Аварийно-восстановительные
                                            работы</h3>
                                        <p>Восстановим работу ваших объектов в
                                            случае аварий</p>
                                    </div>
                                    <div>
                                        <h3>Уборка внутренних помещений</h3>
                                        <p>Ежедневная, генеральная уборка,
                                            химчистка</p>
                                    </div>
                                    <div>
                                        <h3>Уборка прилегающих территорий</h3>
                                        <p>Вывоз снега, бытовых отходов</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="services__tab_two_image services__tab_image"></div>
                            </div>
                        </div>
                    </div>
                    <div class="services__tab_content_item" id="vtab_three">
                        <div class="row">
                            <div class="col">
                                <div class="services__tab_content_items_wrapper">
                                    <div>
                                        <h3>Комплексное
                                            эксплуатационно-техническое
                                            обслуживание</h3>
                                    </div>
                                    <div>
                                        <h3>Текущий ремонт жилых домов,
                                            инженерных систем, оборудования</h3>
                                    </div>
                                    <div>
                                        <h3>Озеленение и благоустройство
                                            территории</h3>
                                        <p>Клумбы, газоны, посадки, детские и
                                            спортивные площадки, парковки,
                                            дорожки,
                                            малые архитектурные формы, земляные
                                            работы, асфальтирование,
                                            освещение.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="services__tab_three_image services__tab_image"></div>
                            </div>
                        </div>
                    </div>
                    <div class="services__tab_content_item" id="vtab_four">
                        <div class="row">
                            <div class="col">
                                <div class="row services__tab_h3">
                                    <h3 class="first">Обслуживаемые системы</h3>
                                </div>
                                <div class="row services__tab_row">
                                    <div class="col-6">
                                        <div class="services__vtab_four_1 services__vtab_four_img"></div>
                                        <p>Теплоснабжение</p>
                                    </div>
                                    <div class="col-6">
                                        <div class="services__vtab_four_2 services__vtab_four_img"></div>
                                        <p>Электроснабжение</p>
                                    </div>
                                </div>
                                <div class="row services__tab_row">
                                    <div class="col-6">
                                        <div class="services__vtab_four_3 services__vtab_four_img"></div>
                                        <p>Водоснабжение и канализация</p>
                                    </div>
                                    <div class="col-6">
                                        <div class="services__vtab_four_4 services__vtab_four_img"></div>
                                        <p>Удаленный контроль оборудования</p>
                                    </div>
                                </div>
                                <div class="row services__tab_row">
                                    <div class="col-6">
                                        <div class="services__vtab_four_5 services__vtab_four_img"></div>
                                        <p>Вентиляция и кондиционирование</p>
                                    </div>
                                    <div class="col-6">
                                        <div class="services__vtab_four_6 services__vtab_four_img"></div>
                                        <p>Противопожарная безопасность</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col services__tab_content_item_col_second">
                                <h3 class="second">Услуги</h3>
                                <div class="services__tab_four_div">Контроль
                                    состояния систем;
                                </div>
                                <div class="services__tab_four_div">Сезонная
                                    наладка и тестирование;
                                </div>
                                <div class="services__tab_four_div">Ремонтные и
                                    профилактические работы;
                                </div>
                                <div class="services__tab_four_div">Обслуживание
                                    грузоподъемных механизмов;
                                </div>
                                <div class="services__tab_four_div">
                                    Планово-предупредительные работы.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="services__tab_content_item" id="vtab_five">
                        <div class="row">
                            <div class="col">
                                <div class="services__tab_content_div services__tab_content_div_1">
                                    <div class="services__tab_content_div_1_img"></div>
                                    <div class="services__tab_content_div_1_text">
                                        Запчасти;
                                    </div>
                                </div>
                                <div class="services__tab_content_div services__tab_content_div_2">
                                    <div class="services__tab_content_div_2_img"></div>
                                    <div class="services__tab_content_div_2_text">
                                        Расходные материалы;
                                    </div>
                                </div>
                                <div class="services__tab_content_div services__tab_content_div_3">
                                    <div class="services__tab_content_div_3_img"></div>
                                    <div class="services__tab_content_div_3_text">
                                        Оборудование и монтаж;
                                    </div>
                                </div>
                                <div class="services__tab_content_div services__tab_content_div_4">
                                    <div class="services__tab_content_div_4_img"></div>
                                    <div class="services__tab_content_div_4_text">
                                        Общее офисное снабжение.
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="services__tab_five_image services__tab_image"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <section class="certificates">
        <div class="row">
            <div class="col">
                <h4 class="certificates__h4">сертификаты и рекомендации</h4>
                <h3 class="certificates__h3">Мы подтвеждаем компетенцию</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <div class="certificates_box">
                    <div class="certificates_box_pdf_icon"></div>
                    <h4>Сертификат</h4>
                    <h3>Veleda Professional</h3>
                    <p>Обучение по курсу<br>"Специалист"</p>
                </div>
            </div>
            <div class="col-3">
                <div class="certificates_box">
                    <div class="certificates_box_pdf_icon"></div>
                    <h4>Сертификат</h4>
                    <h3>Gansow Gmatic AG</h3>
                    <p>Курс по эксплуатации,<br>
                        обслуживанию и ремонту<br>
                        поломоечных машин Gmatic</p>
                </div>
            </div>
            <div class="col-3">
                <div class="certificates_box">
                    <div class="certificates_box_pdf_icon"></div>
                    <h4>Сертификат</h4>
                    <h3>Columbus Reinigungsmaschinen</h3>
                    <p>CleanOk — официальный дилер<br>
                        и сервисный центр</p>
                </div>
            </div>
            <div class="col-3">
                <div class="certificates_box">
                    <div class="certificates_box_pdf_icon"></div>
                    <h4>Сертификат</h4>
                    <h3>Veleda Professional</h3>
                    <p>Официальный дистрибьютор<br>
                        торговой марки</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="arrows d-flex justify-content-center">
                    <div class="arrow arrow_left"></div>
                    <div class="arrow arrow_right"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="map">
        <div class="row">
            <div class="col-12">
              <?php print render($page['map']); ?>
            </div>
        </div>
    </section>
    <section class="feedback_form">
        <div class="row">
            <div class="col">
              <?php print render($page['feedback_form_left']); ?>
            </div>
            <div class="col">
              <?php print render($page['feedback_form_right']); ?>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="row">
            <div class="col">
              <?php print render($page['footer_left']); ?>
            </div>
            <div class="col">
              <?php print render($page['footer_right']); ?>
            </div>
        </div>
    </footer>
</div>