<?php

return [

    'http' => [

        'controllers' => [
            'order_controller' => [
                'store' => ['flash' => 'Спасибо за заказ! Мы отправили сообщение на Вашу электронную почту!'],
            ],
        ],

    ],

    'notifications' => [
        'client' => [
            'order_notification' => [
                'name'      => ['header' => 'Ф. И. О.'],
                'phone'     => ['header' => 'Телефон'],
                'service'   => ['header' => 'Услуга'],
                'city'      => ['header' => 'Город'],
                'address'   => ['header' => 'Адрес'],
                'comment'   => ['header' => 'Комментарий'],
                'gratitude' => ['line' => 'Спасибо за заказ! Мы скоро свяжемся с Вами.'],
                'check'     => ['line' => 'Пожалуйста, проверьте информацию о Вашем заказе. Если Вы найдете ошибку, сообщите об этом нам.'],
            ],
        ],
        'dashboard' => [
            'order_notification' => [
                'title'   => 'Новый заказ',
                'message' => 'Поступил заказ. Для просмотра данных о нем нажмите на уведомление.',
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
                            'single' => ['header' => 'Заказ был завершен.'],
                            'plural' => ['header' => 'Заказы были завершены.'],
                        ],
                    ],
                ],
                'renewing_action' => [
                    'button' => ['header' => 'Возобновить'],
                    'handle' => [
                        'toast' => [
                            'single' => ['header' => 'Заказ был возобновлен.'],
                            'plural' => ['header' => 'Заказы были возобновлен.'],
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
                            'help'        => 'Название роли для отображения',
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
                            'help'        => 'Это ваш пароль, установленный сейчас.',
                        ],
                        'password'              => [
                            'title'       => 'Новый пароль',
                            'placeholder' => 'Введите пароль, который нужно установить',
                        ],
                        'password_confirmation' => [
                            'title'       => 'Подтвердите новый пароль',
                            'placeholder' => 'Введите пароль, который нужно установить, еще раз',
                            'help'        => 'Хороший пароль должен содержать от 15 символов до 8 символов, включая цифры и строчные буквы.',
                        ],
                    ],
                ],

                'user_edit_layout'             => [
                    'fields' => [
                        'name'  => [
                            'placeholder' => 'Иванов Иван Иванович',
                            'title'       => 'Ф. И. О.',
                        ],
                        'email' => [
                            'placeholder' => 'example@mail.com',
                            'title'       => 'Адрес электронной почты',
                        ],
                    ],
                ],

                'user_list_layout'             => [
                    'columns' => [
                        'name'       => ['header' => 'Ф. И. О.'],
                        'email'      => ['header' => 'Адрес электронной почты'],
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
                            'title' => 'Название профессии',
                            'help'  => 'Позиция, которую пользователь занимает в компании.',
                        ],
                    ],
                ],

                'user_role_layout'             => [
                    'fields' => [
                        'roles' => [
                            'title' => 'Имя роли',
                            'help'  => 'Укажите, к каким ролям должна принадлежать эта учетная запись.',
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
                        'title'       => 'Ф. И. О.',
                        'placeholder' => 'Иванов Иван Иванович',
                    ],
                    'phone' => [
                        'title'       => 'Телефон',
                        'placeholder' => '+7 (000) 000-00-00',
                    ],
                    'service' => [
                        'title'       => 'Услуга',
                        'placeholder' => 'Починка гиперпринтера',
                    ],
                    'email' => [
                        'title'       => 'Адрес электронной почты',
                        'placeholder' => 'example@mail.com',
                    ],
                    'city' => [
                        'title'       => 'Город',
                        'placeholder' => 'Санкт-Петербург',
                    ],
                    'address' => [
                        'title'       => 'Адрес проживания',
                        'placeholder' => 'ул. Примерная, д. 5, кв. 5',
                    ],
                    'comment' => [
                        'title'       => 'Комментарий',
                        'placeholder' => 'Любые пожелания к заказу.',
                    ],
                ],
                'columns' => [
                    'name'       => ['header' => 'Ф. И. О.'],
                    'service'    => ['header' => 'Услуга'],
                    'created_at' => ['header' => 'Поступил'],
                ],
                'legend' => [
                    'name'      => ['header' => 'Ф. И. О.'],
                    'phone'     => ['header' => 'Телефон'],
                    'email'     => ['header' => 'Адрес электронной почты'],
                    'city'      => ['header' => 'Город'],
                    'address'   => ['header' => 'Адрес проживания'],
                    'service'   => ['header' => 'Услуга'],
                    'comment'   => ['header' => 'Комментарий'],
                    'completed' => [
                        'header' => 'Завершенность',
                        'truth'  => ['header' => 'Завершен'],
                        'false'  => ['header' => 'Не завершен'],
                    ],
                    'created_at' => ['header' => 'Поступил'],
                ],
                'create_button_label'        => 'Создать',
                'create_toast_message'       => 'Заказ создан.',
                'update_button_label'        => 'Обновить',
                'update_toast_message'       => 'Заказ обновлен.',
                'delete_button_label'        => 'Удалить',
                'delete_toast_message'       => 'Заказ удален.',
                'save_button_label'          => 'Сохранить',
                'restore_button_label'       => 'Восстановить',
                'restore_toast_message'      => 'Заказ восстановлен.',
                'create_breadcrumbs_message' => 'Создать',
                'edit_breadcrumbs_message'   => 'Изменить',
                'accepted_order_resource'    => [
                    'label'       => 'Поступившие заказы',
                    'description' => 'Поступившие заказы, которые необходимо выполнить.',
                ],
                'completed_order_resource' => [
                    'label'       => 'Завершенные заказы',
                    'description' => 'Завершенные заказы, которые уже выполнены.',
                ],
            ],

            'city_resource'     => [
                'label'  => 'Обслуживаемые города',
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
                'create_toast_message'       => 'Город создан.',
                'update_button_label'        => 'Обновить',
                'update_toast_message'       => 'Город обновлен.',
                'delete_button_label'        => 'Удалить',
                'delete_toast_message'       => 'Город удален.',
                'save_button_label'          => 'Сохранить',
                'restore_button_label'       => 'Восстановить',
                'restore_toast_message'      => 'Город восстановлен.',
                'create_breadcrumbs_message' => 'Создать',
                'edit_breadcrumbs_message'   => 'Изменить',
                'description'                => 'Города и любые населенные пункты, обслуживаемые компанией.',
            ],

            'position_resource' => [
                'label'  => 'Профессии',
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
                'create_toast_message'       => 'Позиция создана.',
                'update_button_label'        => 'Обновить',
                'update_toast_message'       => 'Позиция обновлена.',
                'delete_button_label'        => 'Удалить',
                'delete_toast_message'       => 'Позиция удалена.',
                'save_button_label'          => 'Сохранить',
                'restore_button_label'       => 'Восстановить',
                'restore_toast_message'      => 'Позиция восстановлена.',
                'create_breadcrumbs_message' => 'Создать',
                'edit_breadcrumbs_message'   => 'Изменить',
                'description'                => 'Профессии персонала компании.',
            ],

            'service_resource'  => [
                'label'  => 'Перечень услуг',
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
                    'name'        => ['header' => 'Название'],
                    'price'       => ['header' => 'Цена'],
                    'description' => ['header' => 'Описание'],
                ],
                'legend' => [
                    'name'        => ['header' => 'Название'],
                    'price'       => ['header' => 'Цена'],
                    'description' => ['header' => 'Описание'],
                ],
                'create_button_label'        => 'Создать',
                'create_toast_message'       => 'Услуга создана.',
                'update_button_label'        => 'Обновить',
                'update_toast_message'       => 'Услуга обновлена.',
                'delete_button_label'        => 'Удалить',
                'delete_toast_message'       => 'Услуга удалена.',
                'save_button_label'          => 'Сохранить',
                'restore_button_label'       => 'Восстановить',
                'restore_toast_message'      => 'Услуга восстановлена.',
                'create_breadcrumbs_message' => 'Создать',
                'edit_breadcrumbs_message'   => 'Изменить',
                'description'                => 'Перечень услуг, оказываемых компанией.',
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
                            'description' => 'Роль — это набор разрешений, которые предоставляют
                                пользователям с этой ролью возможность выполнять определенные
                                задачи или операции.',
                        ],
                        'role_permission_layout' => [
                            'title'       => 'Разрешения',
                            'description' => 'Привилегия необходима для выполнения определенных задач и
                                операций в определенной области.',
                        ],
                    ],
                    'save'   => ['toast' => 'Роль сохранена.'],
                    'remove' => ['toast' => 'Роль удалена.'],
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
                            'header'  => 'Войти заново как этот пользователь',
                            'confirm' => 'Вы можете вернуться в исходное состояние, выйдя из системы.',
                        ],
                        'remove' => [
                            'header'  => 'Удалить',
                            'confirm' => 'Как только учетная запись будет удалена, все ее ресурсы и данные
                                будут удалены безвозвратно. Перед удалением вашего учетная запись, пожалуйста,
                                загрузите любые данные или информацию, которые вы хотите сохранить.',
                        ],
                        'save' => ['header' => 'Сохранить'],
                    ],
                    'layout' => [
                        'user_edit_layout' => [
                            'title'       => 'Информация профиля',
                            'description' => 'Обновите информацию профиля вашей учетной записи и адрес
                                электронной почты.',
                            'commands' => [
                                'save' => ['header' => 'Сохранить'],
                            ],
                        ],
                        'user_password_layout' => [
                            'title'       => 'Пароль',
                            'description' => 'Убедитесь, что в вашей учетной записи используется длинный
                                случайный пароль, чтобы оставаться в безопасности.',
                            'commands' => [
                                'save' => ['header' => 'Сохранить'],
                            ],
                        ],
                        'user_position_layout' => [
                            'title'       => 'Профессия',
                            'description' => 'Профессия определяет функции,
                                выполняемые пользователем во время рабочего процесса.',
                            'commands' => [
                                'save' => ['header' => 'Сохранить'],
                            ],
                        ],
                        'user_role_layout' => [
                            'title'       => 'Роли',
                            'description' => 'Роль определяет права пользователя, которые позволяют ему выполнять определенные действия.',
                            'commands' => [
                                'save' => ['header' => 'Сохранить'],
                            ],
                        ],
                        'role_permission_layout' => [
                            'title'       => 'Разрешения',
                            'description' => 'Разрешить пользователю выполнять некоторые действия,
                                которые не предусмотрены его ролями.',
                            'commands' => [
                                'save' => ['header' => 'Сохранить'],
                            ],
                        ],
                    ],
                    'save'     => ['toast' => 'Пользователь сохранен.'],
                    'remove'   => ['toast' => 'Пользователь удален.'],
                    'login_as' => ['toast' => 'Вы зашли как другой пользователь.']
                ],
                'user_list_screen'    => [
                    'command_bar' => [
                        'create' => ['header' => 'Создать']
                    ],
                    'save_user' => ['toast' => 'Пользователь сохранен.'],
                    'remove'    => ['toast' => 'Пользователь удален.'],
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
                'position' => ['header' => 'Профессии'],
                'roles'    => ['header' => 'Роли'],
            ],
            'register_profile_menu' => [
                'profile_menu' => ['header' => 'Профиль'],
            ],
            'register_permissions' => [
                'permissions' => [
                    'header' => 'Система',
                    'roles'  => ['header' => 'Роли'],
                    'users'  => ['header' => 'Пользователи'],
                ],
            ],
        ],

    ],
];
