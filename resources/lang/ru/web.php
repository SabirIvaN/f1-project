<?php

return [
    'content' => [
        'order' => [
            'subviews' => [
                'form' => [
                    'name' => [
                        'placeholder' => 'Фамилия Имя Отчество',
                        'title'       => 'Как к Вам можно обратиться?',
                    ],
                    'phone' => [
                        'placeholder' => '+7 (000) 000-00-00',
                        'title'       => 'Введите Ваш номер телефона ...',
                    ],
                    'email' => [
                        'placeholder' => 'example@mail.ru',
                        'title'       => '... и адрес электронной почты',
                    ],
                    'place' => [
                        'city' => [
                            'title' => 'В какой город нам приехать ...',
                        ],
                        'address' => [
                            'placeholder' => 'ул. Примерная, дом 5, корп. 5, кв. 5',
                            'title'       => '... и по какому адресу?'
                        ],
                    ],
                    'comment' => [
                        'placeholder' => 'Когда и в какое время Вам было бы удобно принять нашего сотрудника? Какие у Вас есть вопросы по нашей работе? Вам нужно выполнить заказ в определенные сроки? Напишите нам всё, что Вас интересует!',
                        'title'       => 'Какие у Вас пожелания?',
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
                    'currency' => '₽',
                ],
            ],
        ],
        'user' => [
            'index' => [
                'contacts' => [
                    'title' => 'По всем вопросам:',
                ],
            ],
        ],
        'welcome' => [
            'banner' => [
                'end' => [
                    'title' => [
                        'en' => 'We will be happy to help you!',
                        'ru' => 'Мы будем рады Вам помочь!',
                    ],
                ],
                'start' => [
                    'description' => 'Мы, фирма-новичок из Санкт-Петербурга, названная в честь клавиши <b>F1</b>. Чиним принтеры, меняем, заправляем картриджи и делаем это хорошо.',
                    'title'       => [
                        'en' => 'Hello, Peter!',
                        'ru' => 'Привет, Питер!',
                    ],
                ],
            ],
            'benefit' => [
                'first' => [
                    'description' => 'Наши сотрудники - это интересные, дружелюбные люди, которые имеют большой опыт работы и прекрасное чувство юмора!',
                    'title'       => 'У нас работают опытные сотрудники!',
                ],
                'second' => [
                    'description' => 'Мы пока не первые в своей отрасли и потому нам приходится стараться больше других, чтобы доказать что мы достойны быть лучшими!',
                    'title'       => 'У нас высокое качество!',
                ],
                'third' => [
                    'description' => 'Мы не используем программы кредитования, а потому можем позвалить себе максимально выгодные для Вас цены на наши услуги.',
                    'title'       => 'У нас разумные цены!',
                ],
                'title' => 'Почему именно мы:',
            ],
            'service' => [
                'remark' => '.. а ещё мы можем проверить работу Вашего принтера <b>БЕСПЛАТНО</b>.',
                'title'  => 'Мы можем:',
            ],
        ],
    ],
    'layout' => [
        'subviews' => [
            'footer' => [
                'owner' => 'ИП Соломин А. Н.',
            ],
            'header' => [
                'welcome' => [
                    'title' => 'Главная страница',
                ],
                'user' => [
                    'title' => 'Контакты',
                ],
                'admin' => [
                    'title' => 'Вы администратор?'
                ],
            ],
        ],
        'button' => [
            'close' => [
                'title' => 'Закрыть',
            ],
        ],
        'title' => 'F1',
    ],
];
