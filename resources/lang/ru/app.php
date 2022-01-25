<?php

return [

    'http' => [

        'controllers' => [
            'order_controller' => [
                'store' => ['flash' => 'Спасибо за заказ! Мы отправили Вам сообщение на электронную почту!'],
            ],
        ],

    ],

    'notifications' => [
        'client' => [
            'order_notification' => [
                'name'      => ['header' => 'ФИО:'],
                'phone'     => ['header' => 'Телефон:'],
                'service'   => ['header' => 'Услуга:'],
                'price'     => ['header' => 'Цена:'],
                'city'      => ['header' => 'Город:'],
                'address'   => ['header' => 'Адрес:'],
                'comment'   => ['header' => 'Комментарий:'],
                'gratitude' => ['line' => 'Спасибо за заказ! Мы скоро с Вами свяжемся.'],
                'check'     => ['line' => 'Пожалуйста, проверьте информацию о Вашем заказе. Если Вы найдете ошибку, скажите об этом нам.'],
            ],
        ],
        'dashboard' => [
            'order_notification' => [
                'title'   => 'Новый заказ',
                'message' => 'Сделан новый заказ. Для просмотра заказа нажмите на панель уведомления.',
            ],
        ],
    ],

    'orchid' => [

        'actions' => [
            'order' => [
                'completion_action' => [
                    'button' => ['header' => 'Завершить'],
                    'handle' => [
                        'toast' => [
                            'single' => ['header' => 'Заказ завершен!'],
                            'plural' => ['header' => 'Заказы завершены!'],
                        ],
                    ],
                ],
                'renewing_action' => [
                    'button' => ['header' => 'Возобновить'],
                    'handle' => [
                        'toast' => [
                            'single' => ['header' => 'Заказ завершен!'],
                            'plural' => ['header' => 'Заказы завершены!'],
                        ],
                    ],
                ],
            ],
        ],

        'filters' => [
            'role_filter' => [
                'name'    => ['header' => 'Фильтр по ролям'],
                'display' => ['header' => 'Фильтр по ролям'],
            ],
        ],

        'layouts' => [

            'role' => [

                'role_edit_layout' => [
                    'fields' => [
                        'name' => [
                            'help'        => 'Имя роли для отображения',
                            'placeholder' => 'Название',
                            'title'       => 'Название',
                        ],
                        'slug' => [
                            'help'        => 'Реальное имя в системе',
                            'placeholder' => 'Уникальный пользовательский URL',
                            'title'       => 'Уникальный пользовательский URL',
                        ],
                    ],
                ],

                'role_list_layout' => [
                    'columns' => [
                        'name'       => ['header' => 'Название'],
                        'slug'       => ['header' => 'Уникальный пользовательский URL'],
                        'created_at' => ['header' => 'Создан'],
                    ],
                ],

            ],

            'user' => [

                'profile_password_layout' => [
                    'fields' => [
                        'old_password'          => [
                            'title'       => 'Текущий пароль',
                            'placeholder' => 'Укажите текущий пароль',
                            'help'        => 'Это ваш пароль, установленный на данный момент.',
                        ],
                        'password'              => [
                            'title'       => 'Новый пароль',
                            'placeholder' => 'Введите пароль, который нужно установить',
                        ],
                        'password_confirmation' => [
                            'title'       => 'Подтвердите новый пароль',
                            'placeholder' => 'Введите пароль, который нужно установить',
                            'help'        => 'Хороший пароль должен содержать от 15 символов до 8 символов, включая цифры и строчные буквы.',
                        ],
                    ],
                ],

                'user_edit_layout'             => [
                    'fields' => [
                        'name'  => [
                            'placeholder' => 'Полное имя',
                            'title'       => 'Имя',
                        ],
                        'email' => [
                            'placeholder' => 'example@mail.com',
                            'title'       => 'E-Mail',
                        ],
                    ],
                ],

                'user_list_layout'             => [
                    'columns' => [
                        'name'       => ['header' => 'Полное имя'],
                        'email'      => ['header' => 'E-Mail'],
                        'updated_at' => ['header' => 'Последнее изменение'],
                        'actions'    => [
                            'header' => 'Действия',
                            'list'   => [
                                'edit'   => ['header' => 'Изменить'],
                                'delete' => [
                                    'header'  => 'Удалить',
                                    'confirm' => 'Как только учетная запись будет удалена, все ее
                                        ресурсы и данные будут удалены безвозвратно. Перед удалением
                                        вашей учетной записи, пожалуйста, загрузите любые данные или
                                        информацию, которые вы хотите сохранить.',
                                ],
                            ],
                        ],
                    ],
                ],

                'user_password_layout'         => [
                    'fields' => [
                        'title'       => 'Пароль',
                        'placeholder' => [
                            'current_password' => 'Оставьте это поле пустым, чтобы сохранить текущий пароль',
                            'new_password'     => 'Введите пароль, который Вы хотите установить',
                        ],
                    ],
                ],

                'user_position_layout'         => [
                    'fields' => [
                        'position_id' => [
                            'title' => 'Название позиции',
                            'help'  => 'Позиция, которую пользователь занимает в компании',
                        ],
                    ],
                ],

                'user_role_layout'             => [
                    'fields' => [
                        'roles' => [
                            'title' => 'Имя роли',
                            'help'  => 'Укажите, к каким группам должна принадлежать эта учетная запись',
                        ],
                    ],
                ],

            ],
        ],

        'presenters' => [
            'user_presenter' => [
                'label'    => 'Пользователи',
                'subtitle' => 'Обычный пользователь',
            ],
        ],

        'resources' => [

            'order'    => [
                'fields' => [
                    'name' => [
                        'title'       => 'Полное имя',
                        'placeholder' => 'Иванов Иван Иванович',
                    ],
                    'phone' => [
                        'title'       => 'Телефон',
                        'placeholder' => '+7 (000) 000-00-00',
                    ],
                    'email' => [
                        'title'       => 'example@mail.com',
                        'placeholder' => 'E-Mail',
                    ],
                    'address' => [
                        'title'       => 'Адрес',
                        'placeholder' => 'г. Примерово, ул. Примерная, д. 5, кв. 5',
                    ],
                    'comment' => [
                        'title'       => 'Комментарий',
                        'placeholder' => 'Такие-то и такие-то пожелания к заказу.',
                    ],
                ],
                'columns' => [
                    'name'    => ['header' => 'Полное имя'],
                    'service' => ['header' => 'Услуга'],
                    'price'   => [
                        'header'   => 'Цена',
                        'currency' => '₽',
                    ],
                    'created_at' => ['header' => 'Поступил'],
                ],
                'legend' => [
                    'name'      => ['header' => 'Полное имя'],
                    'phone'     => ['header' => 'Телефон'],
                    'email'     => ['header' => 'E-Mail'],
                    'address'   => ['header' => 'Адрес'],
                    'service'   => ['header' => 'Услуга'],
                    'price'     => ['header' => 'Цена'],
                    'comment'   => ['header' => 'Комментарий'],
                    'completed' => [
                        'truth' => ['header' => 'Завершен',],
                        'false' => [
                            'header' => 'Не завершен',
                        ],
                        'header' => 'Завершенность',
                    ],
                    'created_at' => ['header' => 'Поступил'],
                ],
                'create_button_label'        => 'Создать',
                'create_toast_message'       => 'Заказ создан',
                'update_button_label'        => 'Обновить',
                'update_toast_message'       => 'Заказ обновлен',
                'delete_button_label'        => 'Удалить',
                'delete_toast_message'       => 'Заказ удален',
                'save_button_label'          => 'Сохранить',
                'restore_button_label'       => 'Восстановить',
                'restore_toast_message'      => 'Заказ восстановлен',
                'create_breadcrumbs_message' => 'Создать',
                'edit_breadcrumbs_message'   => 'Изменить',
                'accepted_order_resource'    => [
                    'label'       => 'Принятые заказы',
                    'description' => 'Поступившие заказы, которые необходимо выполнить',
                ],
                'completed_order_resource' => [
                    'label'       => 'Завершенные заказы',
                    'description' => 'Завершенные заказы, которые были выполнены',
                ],
            ],

            'city_resource'     => [
                'label'  => 'Города',
                'fields' => [
                    'name' => [
                        'title'       => 'Название',
                        'placeholder' => 'Санкт-Петербург',
                    ],
                ],
                'columnds'     => [
                    'name' => ['header' => 'Название'],
                ],
                'legend'       => [
                    'name' => ['header' => 'Название'],
                ],
                'create_button_label'        => 'Создать',
                'create_toast_message'       => 'Город создан',
                'update_button_label'        => 'Обновить',
                'update_toast_message'       => 'Город обновлен',
                'delete_button_label'        => 'Удалить',
                'delete_toast_message'       => 'Город удален',
                'save_button_label'          => 'Сохранить',
                'restore_button_label'       => 'Восстановить',
                'restore_toast_message'      => 'Город восстановлен',
                'create_breadcrumbs_message' => 'Создать',
                'edit_breadcrumbs_message'   => 'Изменить',
                'description'                => 'Города и любые населенные пункты обслуживаемые компанией',
            ],

            'position_resource' => [
                'label'  => 'Позиции',
                'fields' => [
                    'name' => [
                        'title'       => 'Название',
                        'placeholder' => 'Главный по всему',
                    ],
                    'description' => [
                        'title'       => 'Описание',
                        'placeholder' => 'Занимается всем',
                    ],
                ],
                'columns'       => [
                    'name'        => ['header' => 'Название'],
                    'description' => ['header' => 'Описание'],
                ],
                'legend'        => [
                    'name'        => ['header' => 'Название'],
                    'description' => ['header' => 'Описание'],
                ],
                'create_button_label'        => 'Создать',
                'create_toast_message'       => 'Позиция создана',
                'update_button_label'        => 'Обновить',
                'update_toast_message'       => 'Позиция обновлена',
                'delete_button_label'        => 'Удалить',
                'delete_toast_message'       => 'Позиция удалена',
                'save_button_label'          => 'Сохранить',
                'restore_button_label'       => 'Восстановить',
                'restore_toast_message'      => 'Позиция восстановлена',
                'create_breadcrumbs_message' => 'Создать',
                'edit_breadcrumbs_message'   => 'Изменить',
                'description'                => 'Позиции персонала компании',
            ],

            'service_resource'  => [
                'label'  => 'Услуги',
                'fields' => [
                    'name' => [
                        'title'       => 'Название',
                        'placeholder' => 'Починка чего-то',
                    ],
                    'price' => [
                        'title'       => 'Цена',
                        'placeholder' => '100',
                    ],
                    'description' => [
                        'title'       => 'Описание',
                        'placeholder' => 'Качественно, быстро, недорого',
                    ],
                ],
                'columns' => [
                    'name'  => ['header' => 'Название'],
                    'price' => [
                        'header'   => 'Цена',
                        'currency' => '₽',
                    ],
                    'description' => ['header' => 'Описание'],
                ],
                'legend' => [
                    'name'  => ['header' => 'Название'],
                    'price' => [
                        'header'   => 'Цена',
                        'currency' => '₽',
                    ],
                    'description' => ['header' => 'Описание'],
                ],
                'create_button_label'        => 'Создать',
                'create_toast_message'       => 'Услуга создана',
                'update_button_label'        => 'Обновить',
                'update_toast_message'       => 'Услуга обновлена',
                'delete_button_label'        => 'Удалить',
                'delete_toast_message'       => 'Услуга удалена',
                'save_button_label'          => 'Сохранить',
                'restore_button_label'       => 'Восстановить',
                'restore_toast_message'      => 'Услуга восстановлена',
                'create_breadcrumbs_message' => 'Создать',
                'edit_breadcrumbs_message'   => 'Изменить',
                'description'                => 'Услуги оказываемые компанией',
            ],
        ],

        'screens' => [
            'crud' => [
                'edit_screan'   => [
                    'command_bar' => [
                        'delete'       => ['confirm' => 'Вы уверены, что хотите удалить этот ресурс?'],
                        'force_delete' => ['confirm' => 'Вы уверены, что хотите принудительно удалить этот ресурс?'],
                        'restore'      => ['confirm' => 'Вы уверены, что хотите восстановить этот ресурс?'],
                    ],
                ],
                'list_screen'   => [
                    'layout' => [
                        'actions' => ['header' => 'Действия'],
                    ],
                    'get_table_actions' => [
                        'detailed' => ['header' => 'Подробнее'],
                        'edit'     => ['header' => 'Редактировать'],
                    ],
                ],
                'view_screen' => [
                    'command_bar' => [
                        'edit'         => ['header' => 'Редактировать'],
                        'delete'       => ['confirm' => 'Вы уверены, что хотите удалить этот ресурс?'],
                        'force_delete' => ['confirm' => 'Вы уверены, что хотите принудительно удалить этот ресурс?'],
                        'restore'      => ['confirm' => 'Вы уверены, что хотите восстановить этот ресурс?'],
                    ],
                ],
            ],
            'role' => [
                'role_edit_screen' => [
                    'command_bar' => [
                        'remove' => ['header' => 'Удалить'],
                        'save'   => ['header' => 'Сохранить'],
                    ],
                    'layout' => [
                        'role_edit_layout' => [
                            'title'       => 'Роль',
                            'description' => 'Роль - это набор разрешений, которые предоставляют
                                пользователям с этой ролью возможность выполнять определенные задачи или
                                операции.',
                        ],
                        'role_permission_layout' => [
                            'title'       => 'Разрешения',
                            'description' => 'Привилегия необходима для выполнения определенных задач и
                                операций в определенной области.',
                        ],
                    ],
                    'save'   => ['toast' => 'Роль была сохранена'],
                    'remove' => ['toast' => 'Роль была удалена'],
                ],
                'role_list_screen' => [
                    'command_bar' => [
                        'add' => ['header' => 'Добавить'],
                    ],
                ],
            ],
            'user' => [
                'user_edit_screen'    => [
                    'command_bar' => [
                        'login' => [
                            'header'  => 'Войти как пользователь',
                            'confirm' => 'Вы можете вернуться в исходное состояние, выйдя из системы.',
                        ],
                        'remove' => [
                            'header'  => 'Удалить',
                            'confirm' => 'Как только учетная запись будет удалена, все ее ресурсы и данные
                                будут удалены безвозвратно. Перед удалением вашего учетная запись, пожалуйста,
                                загрузите любые данные или информацию, которые вы хотите сохранить.',
                        ],
                        'save' => [
                            'header' => 'Сохранить',
                        ],
                    ],
                    'layout' => [
                        'user_edit_layout' => [
                            'title'       => 'Информация профиля',
                            'description' => 'Обновите информацию профиля вашей учетной записи и адрес
                                электронной почты.',
                            'commands' => [
                                'save' => ['header' => 'Сотрудник был сохранен.'],
                            ],
                        ],
                        'user_password_layout' => [
                            'title'       => 'Пароль',
                            'description' => 'Убедитесь, что в вашей учетной записи используется длинный
                                случайный пароль, чтобы оставаться в безопасности.',
                            'commands' => [
                                'save' => ['header' => 'Сотрудник был сохранен.'],
                            ],
                        ],
                        'user_position_layout' => [
                            'title'       => 'Позиция',
                            'description' => 'Позиция определяет функкции выполняемые пользователем
                                во время рабочего процесса.',
                            'commands' => [
                                'save' => ['header' => 'Сотрудник был сохранен.'],
                            ],
                        ],
                        'user_role_layout' => [
                            'title'       => 'Роли',
                            'description' => 'Позиция определяет функкции выполняемые пользователем
                                во время рабочего процесса.',
                            'commands' => [
                                'save' => ['header' => 'Сотрудник был сохранен.'],
                            ],
                        ],
                        'role_permission_layout' => [
                            'title'       => 'Разрешения',
                            'description' => 'Разрешить пользователю выполнять некоторые действия,
                                которые не предусмотрены его ролями.',
                            'commands' => [
                                'save' => ['header' => 'Сотрудник был сохранен.'],
                            ],
                        ],
                    ],
                    'save'     => ['toast' => 'Сотрудник был сохранен'],
                    'remove'   => ['toast' => 'Сотрудник был удален'],
                    'login_as' => ['toast' => 'Теперь вы выдаете себя за этого сотрудника']
                ],
                'user_list_screen'    => [
                    'command_bar' => [
                        'create' => ['header' => 'Создать']
                    ],
                    'save_user' => ['toast' => 'Сотрудник был сохранен'],
                    'remove'    => ['toast' => 'Сотрудник был удален'],
                ],
                'user_profile_screen' => [
                    'layout' => [
                        'user_edit_layout' => [
                            'title'       => 'Информация профиля',
                            'description' => 'Обновите информацию профиля вашей учетной записи и адрес
                                электронной почты.',
                            'commands' => ['header' => 'Сохранить'],
                        ],
                        'profile_password_layout' => [
                            'title'       => 'Пароль',
                            'description' => 'Убедитесь, что в вашей учетной записи используется длинный
                                случайный пароль, чтобы оставаться в безопасности.',
                            'commands' => ['header' => 'Обновить пароль'],
                        ],
                    ],
                    'save'            => ['toast' => 'Профиль обновлен.'],
                    'change_password' => ['toast' => 'Пароль изменен.'],
                ],
            ],
            'platform_screen' => [
                'command_bar' =>[
                    'welcome' => ['header' => 'Веб-сайт'],
                ],
            ],
        ],

        'platform_provider' => [
            'register_main_menu' => [
                'accepted_order' => [
                    'header' => 'Поступившие заказы',
                    'title'  => 'Заказы',
                ],
                'completed_order' => [
                    'header' => 'Завершенные заказы',
                ],
                'city' => [
                    'header' => 'Обслуживаемые города',
                    'title'  => 'Услуги',
                ],
                'service' => [
                    'header' => 'Перечень услуг',
                ],
                'user' => [
                    'header' => 'Пользователи',
                    'title'  => 'Сотрудники',
                ],
                'position' => [
                    'header' => 'Профессии',
                ],
                'roles' => [
                    'header' => 'Роли',
                ],
            ],
            'register_profile_menu' => [
                'profile_menu' => [
                    'header' => 'Профиль',
                ],
            ],
            'register_permissions' => [
                'permissions' => [
                    'header' => 'Система',
                    'roles'  => [
                        'header' => 'Роли',
                    ],
                    'users' => [
                        'header' => 'Пользователи',
                    ],
                ],
            ],
        ],

    ],
];
