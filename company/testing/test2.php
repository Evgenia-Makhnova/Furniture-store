<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Тест2");
?><script type="text/javascript" >
        $(document).ready(function(){

            $("#foo").carouFredSel({
                items:2,
                prev:'#rwprev',
                next:'#rwnext',
                scroll:{
                    items:1,
                    duration:2000
                }
            });
        });
    </script>

    <div class="rw_reviewed">
        <div class="rw_slider">
            <h4>Отзывы</h4>
            <ul id="foo">
                <li>
                    <div class="rw_message">
                        <img src="/bitrix/templates/.default/content/8.png" class="rw_avatar" alt=""/>
                        <span class="rw_name">Сергей Антонов</span>
                        <span class="rw_job">Руководитель финансового отдела “Банк+”</span>
                        <p>“Покупал офисные стулья и столы, остался очень доволен! Низкие цены, быстрая доставка, обслуживание на высоте! Спасибо!”</p>
                        <div class="clearboth"></div>
                        <div class="rw_arrow"></div>
                    </div>
                </li>
                <li>
                    <div class="rw_message">
                        <img src="/bitrix/templates/.default/content/8.png" class="rw_avatar" alt=""/>
                        <span class="rw_name">Дмитрий Иванов</span>
                        <span class="rw_job">Генеральный директор группы компаний "Офис+"</span>
                        <p>“В магзине предоставили потрясающий выбор расцветок, а также, получил большую скидку по карте постоянного клиента.”</p>
                        <div class="clearboth"></div>
                        <div class="rw_arrow"></div>
                    </div>
                </li>
                <li>
                    <div class="rw_message">
                        <img src="/bitrix/templates/.default/content/8.png" class="rw_avatar" alt=""/>
                        <span class="rw_name">Сергей Антонов</span>
                        <span class="rw_job">Руководитель финансового отдела “Банк+”</span>
                        <p>“Покупал офисные стулья и столы, остался очень доволен! Низкие цены, быстрая доставка, обслуживание на высоте! Спасибо!”</p>
                        <div class="clearboth"></div>
                        <div class="rw_arrow"></div>
                    </div>
                </li>
            </ul>
            <div id="rwprev"></div>
            <div id="rwnext"></div>
            <a href="" class="rw_allreviewed">Все отзывы</a>
        </div>
    </div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>