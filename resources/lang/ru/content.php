<?php

return [
    'admin' => [
        'title' => 'Вы администратор?',
    ],
    'order' => [
        'subviews' => [
            'modal' => [
                'name' => [
                    'placeholder' => 'Фамилия Имя Отчество',
                    'title' => 'Как к Вам можно обратиться?',
                ],
                'phone' => [
                    'placeholder' => '+7 (000) 000-00-00',
                    'title' => 'С Вами связаться по телефону ...',
                ],
                'email' => [
                    'placeholder' => 'example@mail.ru',
                    'title' => '... или по электронной почте',
                ],
                'place' => [
                    'city' => [
                        'title' => 'В какой город нам приехать ...',
                    ],
                    'address' => [
                        'placeholder' => 'ул. Примерная, дом 5, корп. 5, кв. 5',
                        'title' => '... и по какому адресу?'
                    ],
                ],
                'comment' => [
                    'placeholder' => 'Когда и в какое время Вам было бы удобно принять нашего сотрудника? Какие у Вас есть вопросы по нашей работе? Вам нужно выполнить заказ в определенные сроки? Напишите нам всё, что Вас интересует!',
                    'title' => 'Какие у Вас пожелания?',
                ],
                'button' => [
                    'title' => 'Отправить',
                ],
            ],
        ],
    ],
    'service' => [
        'subviews' => [
            'element' => [
                'button' => [
                    'title' => 'Выбрать',
                ],
            ],
        ],
        'flash' => [
            'order' => 'Спасибо за заказ! Мы скоро с Вами свяжемся!'
        ],
    ],
    'user' => [
        'contacts' => [
            'title' => 'По всем вопросам:',
        ],
        'title' => 'Контакты',
    ],
    'welcome' => [
        'banners' => [
            'end' => [
                'title' => 'Мы будем Вам рады!',
            ],
            'start' => [
                'description' => 'Мы, фирма-новичок из Санкт-Петербурга, названная в честь клавиши <b>F1</b>. Чиним принтеры, меняем, заправляем картриджи и делаем это хорошо.',
                'title' => 'Привет, Питер!',
            ],
        ],
        'benefits' => [
            'first' => [
                'description' => 'Наши сотрудники - это интересные, дружелюбные люди, которые имеют большой опыт работы и прекрасное чувство юмора!',
                'title' => 'У нас работают опытные сотрудники!',
            ],
            'second' => [
                'description' => 'Мы пока не первые в своей отрасли и потому нам приходится стараться больше других, чтобы доказать что мы достойны быть лучшими!',
                'title' => 'У нас высокое качество!',
            ],
            'third' => [
                'description' => 'Мы не используем программы кредитования, а потому можем позвалить себе максимально выгодные для Вас цены на наши услуги.',
                'title' => 'У нас разумные цены!',
            ],
            'title' => 'Почему именно мы:',
        ],
        'services' => [
            'remark' => '.. а ещё мы можем проверить работу Вашего принтера <b>БЕСПЛАТНО</b>.',
            'title' => 'Мы можем:',
        ],
        'title' => 'Главная страница',
    ],
];
