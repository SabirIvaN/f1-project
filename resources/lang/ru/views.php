<?php

return [

    'vendor' => [

        'flash'         => [
            'message' => ['close_button' => 'Закрыть']
        ],

        'mail' => [
            'text' => [
                'message' => [
                    'rights' => 'Все права защищены.'
                ],
            ],
        ],

        'notifications' => [
            'order' => [
                'error'    => 'Упс!',
                'goodbye'  => 'С уважением, ',
                'greeting' => 'Здравствуйте!',
            ],
        ],

        'platform'      => [
            'auth'    => [
                'lockme' => [
                    'password' => 'Введите Ваш пароль',
                    'sign_in'  => 'Сменить пользователя.',
                ],
            ],
            'partials' => [
                'profile' => [
                    'back'     => 'Вернуться в свой аккаунт',
                    'sign_out' => 'Выход',
                ],
            ],
        ],

    ],

    'web'    => [

        'content' => [

            'order'   => [
                'subviews' => [
                    'form'   => [
                        'close_button' => 'Закрыть',
                        'name'         => [
                            'label' => 'Как к Вам можно обратиться?',
                            'text'  => ['placeholder' => 'Иванов Петр Сидорович'],
                        ],
                        'phone' => [
                            'label' => 'Введите Ваш номер телефона ...',
                            'text'  => ['placeholder' => '+7 (000) 000-00-00'],
                        ],
                        'email' => [
                            'label' => '... и адрес электронной почты',
                            'text'  => ['placeholder' => 'example@mail.ru',],
                        ],
                        'city' => [
                            'label' => 'В какой город нам приехать ...',
                        ],
                        'address' => [
                            'label' => '... и по какому адресу?',
                            'text'  => ['placeholder' => 'ул. Примерная, дом 5, корп. 5, кв. 5',],
                        ],
                        'comment' => [
                            'label' => 'Какие у Вас пожелания?',
                            'text'  => ['placeholder' => 'Когда и в какое время Вам было бы удобно принять нашего сотрудника? Какие у Вас есть вопросы по нашей работе? Вам нужно выполнить заказ в определенные сроки? Напишите нам всё, что Вас интересует!'],
                        ],
                        'send_button' => 'Отправить',
                    ],
                ],
            ],

            'service' => [
                'subviews' => [
                    'element' => [
                        'currency'         => '₽',
                        'selection_button' => 'Выбрать',
                    ],
                ],
            ],

            'user'    => [
                'index' => [
                    'title'  => 'Контакты',
                    'header' => 'По всем вопросам:',
                ],
            ],

            'welcome' => [
                'banners' => [
                    'starting_banner' => [
                        'ru' => 'Привет, Питер!',
                        'en' => 'Hello, Peter!',
                    ],
                    'final_banner' => [
                        'ru' => 'Мы будем рады Вам помочь!',
                        'en' => 'We will be happy to help you!',
                    ],
                ],
                'company_description' => 'Мы, фирма-новичок из Санкт-Петербурга, названная в честь
                    клавиши <b>F1</b>. Чиним принтеры, меняем, заправляем картриджи и делаем это хорошо.',
                'benefits' => [
                    'header' => 'Почему именно мы:',
                    'first'  => [
                        'header'      => 'У нас работают опытные сотрудники!',
                        'description' => 'Наши сотрудники - это интересные, дружелюбные люди, которые имеют большой опыт работы и прекрасное чувство юмора!',
                    ],
                    'second' => [
                        'header'      => 'У нас высокое качество!',
                        'description' => 'Мы пока не первые в своей отрасли и потому нам приходится стараться больше других, чтобы доказать что мы достойны быть лучшими!',
                    ],
                    'third' => [
                        'header'      => 'У нас разумные цены!',
                        'description' => 'Мы не используем программы кредитования, а потому можем позвалить себе максимально выгодные для Вас цены на наши услуги.',
                    ],
                ],
                'service' => [
                    'header' => 'Мы можем:',
                    'remark' => '.. а ещё мы можем проверить работу Вашего принтера <b>БЕСПЛАТНО</b>.',
                ],
            ],

        ],

        'errors'  => [
            '401' => [
                'code'        => '401',
                'description' => 'Упс! Вы не авторизованы ...',
                'title'       => 'Ошибка 401',
            ],
            '403' => [
                'code'        => '403',
                'description' => 'Упс! У Вас нет доступа к этой странице ...',
                'title'       => 'Ошибка 403',
            ],
            '404' => [
                'code'        => '404',
                'description' => 'Упс! Эта страница не найдена ...',
                'title'       => 'Ошибка 404',
            ],
            '419' => [
                'code'        => '419',
                'description' => 'Упс! Срок действия этой страницы истек ...',
                'title'       => 'Ошибка 419',
            ],
            '429' => [
                'code'        => '429',
                'description' => 'Упс! Вы превысили лимит запросов ...',
                'title'       => 'Ошибка 429',
            ],
            '500' => [
                'code'        => '500',
                'description' => 'Упс! На сервере произошла ошибка ...',
                'title'       => 'Ошибка 500',
            ],
            '503' => [
                'code'        => '503',
                'description' => 'Упс! Этот сервис недоступен ...',
                'title'       => 'Ошибка 503',
            ],
        ],

        'layout'  => [
            'subviews' => [
                'footer' => ['owner' => 'ИП Соломин А. Н.'],
                'header' => [
                    'welcome' => 'Главная страница',
                    'user'    => 'Контакты',
                    'admin'   => 'Вы администратор?',
                ],
            ],
            'app'      => [
                'close_button' => 'Закрыть',
            ],
        ],

    ],

];
