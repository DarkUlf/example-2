<div class="alert fade" id="alert-message"></div>

<div id="invait" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h3>
                        <i>Заказать мероприятие</i>
                    </h3>
                </div>
                <div class="modal-body">
                    <form method="post" action="/">
                        <div><input type="text" class="mod-in" name="name" placeholder="ФИО" required></div>
                        <div><input type="text" class="mod-in phone-mask" name="phone" placeholder="Номер телефона" pattern="^\+7 \(\d{3}\) \d{3}-\d{2}-\d{2}$" required></div>
                        <div class="policy">
                            <input class="checkbox-change" type="checkbox"> Я согласен <a href="/Politika.pdf">с политикой конфиденциальности</a>
                        </div>
                        <div>
                            <button class="submit-mod submit-enable" type="submit">Заказать</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<div id="to-be" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h3>
                        <i>Стать нашим клиентом</i>
                    </h3>
                </div>
                <div class="modal-body">
                    <form method="post" action="/">
                        <div><input type="text" class="mod-in" name="name" placeholder="ФИО" required></div>
                        <div><input type="text" class="mod-in phone-mask" name="phone" placeholder="Номер телефона" pattern="^\+7 \(\d{3}\) \d{3}-\d{2}-\d{2}$" required></div>
                        <div class="policy">
                            <input class="checkbox-change" type="checkbox"> Я согласен <a href="/Politika.pdf">с политикой конфиденциальности</a>
                        </div>
                        <div>
                            <button class="submit-mod submit-enable" type="submit">Стать клиентом</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<!-- portfolio-start -->

<div id="portfolio-modal" class="swiper-container modal portfolio-modal">
    <div class="modal-content">
        <div class="modal-body">
        </div>
    </div>
</div>

<!-- portfolio-end -->