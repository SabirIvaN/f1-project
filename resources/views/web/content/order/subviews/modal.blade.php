<div class="modal fade" id="modal-{!! $service->id !!}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content rounded-0">
            <div class="modal-header text-center py-3">
                <h5 class="modal-title w-100 fs-4" id="exampleModalLabel">
                    {!! $service->title !!}
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body py-3">
                <form action="#" method="POST">
                    <div class="mb-3">
                        <label for="name-{!! $service->id !!}" class="col-form-label">
                            Как к Вам можно обратиться?
                        </label>
                        <input type="text" class="form-control rounded-0" id="name-{!! $service->id !!}"
                            placeholder="Фамилия Имя Отчество">
                    </div>
                    <div class="row row-cols-2">
                        <div class="col col-md-filing mb-3">
                            <label for="phone-{!! $service->id !!}" class="col-form-label">
                                C Вами связяться по телефону ...
                            </label>
                            <input type="tel" class="form-control rounded-0" id="phone-{!! $service->id !!}"
                                placeholder="+7 (000) 000-00-00">
                        </div>
                        <div class="col col-md-filing mb-3">
                            <label for="email-{!! $service->id !!}" class="col-form-label">
                                ... или по электронной почте?
                            </label>
                            <input type="email" class="form-control rounded-0" id="email-{!! $service->id !!}"
                                placeholder="example@mail.ru">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="address-{!! $service->id !!}" class="col-form-label">
                            По какому адресу нам подъехать?
                        </label>
                        <input type="text" class="form-control rounded-0" id="address-{!! $service->id !!}"
                            placeholder="г. Санкт-Петербург, ул. Примерная, д. 5, оф. 21">
                    </div>
                    <div class="mb-3">
                        <label for="comment-{!! $service->id !!}" class="col-form-label">
                            Какие у Вас пожелания?
                        </label>
                        <textarea class="form-control rounded-0" rows="5" id="comment-{!! $service->id !!}"
                            placeholder="Когда и в какое время Вам было бы удобно принять нашего сотрудника? Какие у Вас есть вопросы по нашей работе? Вам нужно выполнить заказ в определенные сроки? Напишите нам всё, что Вас интересует!"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer py-3">
                <button type="button" class="btn btn-primary text-uppercase rounded-0">
                    Заказать
                </button>
            </div>
        </div>
    </div>
</div>
