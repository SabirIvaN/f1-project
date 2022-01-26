<?php

return [
    'action' => [
        'button' => [
            'completion' => [
                'title' => 'Завершить',
            ],
            'resumption' => [
                'title' => 'Возобновить',
            ],
        ],
        'order' => [
            'completion' => [
                'plural' => [
                    'title' => 'Заказы завершены!',
                ],
                'single' => [
                    'title' => 'Заказ завершен!',
                ],
            ],
            'resumption' => [
                'plural' => [
                    'title' => 'Заказы возобновлены!',
                ],
                'single' => [
                    'title' => 'Заказ возобновлен!',
                ],
            ],
        ],
    ],
    'filters' => [
        'order' => [
            'name' => [
                'title' => 'Фильтр по ролям',
            ],
        ],
    ],
    'layouts' => [
        'role' => [
            'edit' => [
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
            'list' => [
                'created' => [
                    'title' => 'Создан',
                ],
                'name' => [
                    'title' => 'Название',
                ],
                'slug' => [
                    'title' => 'Уникальный пользовательский URL',
                ],
            ],
        ],
        'user' => [
            'edit' => [
                'name' => [
                    'placeholder' => 'Полное имя',
                    'title'       => 'Имя',
                ],
                'email' => [
                    'placeholder' => 'E-Mail',
                    'title'       => 'E-Mail',
                ],
            ],
            'list' => [
                'name' => [
                    'title' => 'Полное имя',
                ],
                'email' => [
                    'title' => 'E-Mail',
                ],
                'updated_at' => [
                    'title' => 'Последнее изменение',
                ],
                'actions' => [
                    'edit' => [
                        'title' => 'Изменить',
                    ],
                    'delete' => [
                        'confirm' => 'Как только учетная запись будет удалена, все ее
                            ресурсы и данные будут удалены безвозвратно. Перед удалением
                            вашей учетной записи, пожалуйста, загрузите любые данные или
                            информацию, которые вы хотите сохранить.',
                        'title' => 'Удалить',
                    ],
                    'title' => 'Действия',
                ],
            ],
            'position' => [
                'relation' => [
                    'help'  => 'Позиция, которую пользователь занимает в компании',
                    'title' => 'Название позиции',
                ],
            ],
            'profile_password' => [
                'new_password' => [
                    'placeholder' => 'Введите пароль, который нужно установить',
                    'title'       => 'Новый пароль',
                ],
                'old_password' => [
                    'help'        => 'Это ваш пароль, установленный на данный момент.',
                    'placeholder' => 'Укажите текущий пароль',
                    'title'       => 'Текущий пароль',
                ],
                'password_confirmation' => [
                    'help'        => 'Хороший пароль должен содержать от 15 символов до 8 символов,
                        включая цифры и строчные буквы.',
                    'placeholder' => 'Введите пароль, который нужно установить',
                    'title'       => 'Подтвердите новый пароль',
                ],
            ],
            'role' => [
                'select' => [
                    'placeholder' => 'Укажите, к каким группам должна принадлежать эта учетная запись',
                    'title'       => 'Имя роли',
                ],
            ],
            'user_password' => [
                'password' => [
                    'placeholder' => [
                        'current_password' => 'Оставьте это поле пустым, чтобы сохранить текущий пароль',
                        'new_password'     => 'Введите пароль, который Вы хотите установить',
                    ],
                    'title' => 'Пароль',
                ],
            ],
        ],
    ],
    'presenters' => [
        'user' => [
            'label' => [
                'title' => 'Пользователи',
            ],
            'sub_title' => [
                'title' => 'Обычный пользователь',
            ],
        ],
    ],
    'resources' => [
        'breadcrumbs' => [
            'create_breadcrumbs' => [
                'message' => [
                    'title' => 'Создать',
                ],
            ],
            'edit_breadcrumbs' => [
                'message' => [
                    'title' => 'Изменить',
                ],
            ],
        ],
        'button' => [
            'create_button' => [
                'label' => [
                    'title' => 'Создать',
                ],
            ],
            'update_button' => [
                'label' => [
                    'title' => 'Обновить',
                ],
            ],
            'delete_button' => [
                'label' => [
                    'title' => 'Удалить',
                ],
            ],
            'save_button' => [
                'label' => [
                    'title' => 'Сохранить',
                ],
            ],
            'restore_button' => [
                'label' => [
                    'title' => 'Восстановить',
                ],
            ],
        ],
        'order' => [
            'create_toast' => [
                'message' => [
                    'title' => 'Заказ создан'
                ],
            ],
            'delete_toast' => [
                'message' => [
                    'title' => 'Заказ удален'
                ],
            ],
            'update_toast' => [
                'message' => [
                    'title' => 'Заказ обновлен'
                ],
            ],
            'restore_toast' => [
                'message' => [
                    'title' => 'Заказ восстановлен'
                ],
            ],
            'accepted_order' => [
                'title'       => 'Принятые заказы',
                'description' => 'Поступившие заказы, которые необходимо выполнить',
            ],
            'completed_order' => [
                'title'       => 'Завершенные заказы',
                'description' => 'Завершенные заказы, которые были выполнены',
            ],
            'fields' => [
                'name' => [
                    'placeholder' => 'Название',
                    'title'       => 'Название',
                ],
                'phone' => [
                    'placeholder' => '+7 (000) 000-00-00',
                    'title'       => 'Телефон',
                ],
                'email' => [
                    'placeholder' => 'E-Mail',
                    'title'       => 'example@mail.com',
                ],
                'address' => [
                    'placeholder' => 'г. Примерово, ул. Примерная, д. 5, кв. 5',
                    'title'       => 'Адрес',
                ],
                'comment' => [
                    'placeholder' => 'Такие-то и такие-то пожелания к заказу.',
                    'title'       => 'Комментарий',
                ],
                'completed' => [
                    'options' => [
                        'truth' => [
                            'title' => 'Завершен',
                        ],
                        'false' => [
                            'title' => 'Не завершен',
                        ],
                    ],
                    'title' => 'Завершенность',
                ],
            ],
            'columns' => [
                'name' => [
                    'title' => 'Полное имя',
                ],
                'service' => [
                    'title' => 'Услуга',
                ],
                'price' => [
                    'currency' => '₽',
                    'title'    => 'Цена',
                ],
                'created_at' => [
                    'title' => 'Поступил',
                ],
            ],
            'legend' => [
                'name' => [
                    'title' => 'Полное имя',
                ],
                'phone' => [
                    'title' => 'Телефон',
                ],
                'email' => [
                    'title' => 'E-Mail',
                ],
                'address' => [
                    'title' => 'Адрес',
                ],
                'service' => [
                    'title' => 'Услуга',
                ],
                'price' => [
                    'currency' => '₽',
                    'title'    => 'Цена',
                ],
                'comment' => [
                    'title' => 'Комментарий',
                ],
                'completed' => [
                    'options' => [
                        'truth' => [
                            'title' => 'Завершен',
                        ],
                        'false' => [
                            'title' => 'Не завершен',
                        ],
                    ],
                    'title' => 'Завершенность',
                ],
                'created_at' => [
                    'title' => 'Поступил',
                ],
            ],
        ],
        'city' => [
            'create_toast' => [
                'message' => [
                    'title' => 'Город создан'
                ],
            ],
            'delete_toast' => [
                'message' => [
                    'title' => 'Город удален'
                ],
            ],
            'update_toast' => [
                'message' => [
                    'title' => 'Город обновлен'
                ],
            ],
            'restore_toast' => [
                'message' => [
                    'title' => 'Город восстановлен'
                ],
            ],
            'fields' => [
                'name' => [
                    'placeholder' => 'Название',
                    'title'       => 'Название',
                ],
            ],
            'columns' => [
                'name' => [
                    'title' => 'Название',
                ],
            ],
            'legend' => [
                'name' => [
                    'title' => 'Название',
                ],
            ],
            'description' => 'Города и любые населенные пункты обслуживаемые компанией',
            'title'       => 'Города',
        ],
        'position' => [
            'create_toast' => [
                'message' => [
                    'title' => 'Позиция создана'
                ],
            ],
            'delete_toast' => [
                'message' => [
                    'title' => 'Позиция удалена'
                ],
            ],
            'update_toast' => [
                'message' => [
                    'title' => 'Позиция обновлена'
                ],
            ],
            'restore_toast' => [
                'message' => [
                    'title' => 'Позиция восстановлена'
                ],
            ],
            'fields' => [
                'name' => [
                    'placeholder' => 'Название',
                    'title'       => 'Название',
                ],
                'description' => [
                    'placeholder' => 'Описание',
                    'title'       => 'Описание',
                ],
            ],
            'columns' => [
                'name' => [
                    'title' => 'Название',
                ],
                'description' => [
                    'title' => 'Описание',
                ],
            ],
            'legend' => [
                'name' => [
                    'title' => 'Название',
                ],
                'description' => [
                    'title' => 'Описание',
                ],
            ],
            'description' => 'Позиции персонала компании',
            'title'       => 'Позиции',
        ],
        'service' => [
            'create_toast' => [
                'message' => [
                    'title' => 'Услуга создана'
                ],
            ],
            'delete_toast' => [
                'message' => [
                    'title' => 'Услуга удалена'
                ],
            ],
            'update_toast' => [
                'message' => [
                    'title' => 'Услуга обновлена'
                ],
            ],
            'restore_toast' => [
                'message' => [
                    'title' => 'Услуга восстановлена'
                ],
            ],
            'fields' => [
                'name' => [
                    'placeholder' => 'Название',
                    'title'       => 'Название',
                ],
                'price' => [
                    'placeholder' => '100',
                    'title'       => 'Цена',
                ],
                'description' => [
                    'placeholder' => 'Описание',
                    'title'       => 'Описание',
                ],
            ],
            'columns' => [
                'name' => [
                    'title' => 'Название',
                ],
                'price' => [
                    'currency' => '₽',
                    'title'    => 'Цена',
                ],
                'description' => [
                    'title' => 'Описание',
                ],
            ],
            'legend' => [
                'name' => [
                    'title' => 'Название',
                ],
                'price' => [
                    'currency' => '₽',
                    'title'    => 'Цена',
                ],
                'description' => [
                    'title' => 'Описание',
                ],
            ],
            'description' => 'Позиции персонала компании',
            'title'       => 'Позиции',
        ],
    ],
    'screens' => [
        'crud' => [
            'delete_button' => [
                'confirm' => 'Вы уверены, что хотите удалить этот ресурс?',
            ],
            'force-delete_button' => [
                'confirm' => 'Вы уверены, что хотите принудительно удалить этот ресурс?',
            ],
            'restore_button' => [
                'confirm' => 'Вы уверены, что хотите восстановить этот ресурс?',
            ],
            'list' => [
                'layout' => [
                    'grid_actions' => 'Действия',
                ],
                'action' => [
                    'detailed' => 'Подробнее',
                    'edit'     => 'Редактировать',
                ],
            ],
        ],
        'role' => [
            'description' => 'Права доступа',
            'title'       => 'Управление ролями',
            'edit'        => [
                'command'     => [
                    'remove' => [
                        'title' => 'Удалить',
                    ],
                    'save'   => [
                        'title' => 'Сохранить',
                    ],
                ],
                'info' => [
                    'save'   => 'Роль была сохранена',
                    'remove' => 'Роль была удалена',
                ],
                'layout' => [
                    'role_edit' => [
                        'description' => 'Роль - это набор разрешений, которые предоставляют
                            пользователям с этой ролью возможность выполнять определенные задачи или
                            операции.',
                        'title' => 'Роль',
                    ],
                    'role_permission' => [
                        'description' => 'Привилегия необходима для выполнения определенных задач и
                            операций в определенной области.',
                        'title' => 'Разрешения',
                    ],
                ],
            ],
            'list' => [
                'command' => [
                    'add' => [
                        'title' => 'Добавить',
                    ],
                ],
            ],
        ],
        'user' => [
            'command'=> [
                'save' => [
                    'title' => 'Сохранить',
                ],
                'update' => [
                    'title' => 'Обновить пароль',
                ],
            ],
            'edit' => [
                'command' => [
                    'login_as' => [
                        'confirm' => 'Вы можете вернуться в исходное состояние, выйдя из системы.',
                        'title'   => 'Войти как пользователь',
                    ],
                    'remove' => [
                        'confirm' => 'Как только учетная запись будет удалена, все ее ресурсы и данные
                            будут удалены безвозвратно. Перед удалением вашего учетная запись, пожалуйста,
                            загрузите любые данные или информацию, которые вы хотите сохранить.',
                        'title' => 'Удалить',
                    ],
                    'save' => [
                        'title' => 'Сохранить',
                    ],
                    'info' => [
                        'save'     => 'Сотрудник был сохранен.',
                        'remove'   => 'Сотрудник был удален.',
                        'login_as' => 'Теперь вы выдаете себя за этого сотрудника',
                    ],
                ],
                'layout' => [
                    'user_edit' => [
                        'description' => 'Обновите информацию профиля вашей учетной записи и адрес
                            электронной почты.',
                        'title' => 'Информация профиля',
                    ],
                    'user_password' => [
                        'description' => 'Убедитесь, что в вашей учетной записи используется длинный
                            случайный пароль, чтобы оставаться в безопасности.',
                        'title' => 'Пароль',
                    ],
                    'user_position' => [
                        'description' => 'Позиция определяет функкции выполняемые пользователем
                            во время рабочего процесса.',
                        'title' => 'Позиция',
                    ],
                    'user_role' => [
                        'description' => 'Позиция определяет функкции выполняемые пользователем
                            во время рабочего процесса.',
                        'title' => 'Роли',
                    ],
                    'user_permission' => [
                        'description' => 'Разрешить пользователю выполнять некоторые действия,
                            которые не предусмотрены его ролями.',
                        'title' => 'Разрешения',
                    ],
                ],
            ],
            'list' => [
                'commands' => [
                    'create' => [
                        'title' => 'Создать',
                    ],
                ],
            ],
            'profile' => [
                'layout' => [
                    'user_edit' => [
                        'commands' => [
                            'title' => 'Сохранить',
                        ],
                        'description' => 'Обновите информацию профиля вашей учетной записи и адрес
                                электронной почты.',
                        'title' => 'Информация профиля',
                    ],
                    'profile_password' => [
                        'commands' => [
                            'title' => 'Обновить пароль',
                        ],
                        'description' => 'Убедитесь, что в вашей учетной записи используется длинный
                                случайный пароль, чтобы оставаться в безопасности.',
                        'title' => 'Пароль',
                    ],
                ],
                'info' => [
                    'save'            => 'Профиль обновлен.',
                    'change_password' => 'Пароль изменен.',
                ],
            ],
        ],
        'platform' => [
            'command' => [
                'welcome' => 'Веб-сайт',
            ],
        ],
    ],
    'platform' => [
        'main_menu' => [
            'accepted-order' => [
                'header' => 'Поступившие заказы',
                'title'  => 'Заказы',
            ],
            'completed-order' => [
                'header' => 'Завершенные заказы',
            ],
            'city' => [
                'header' => 'Обслуживаемые города',
            ],
            'service' => [
                'header' => 'Перечень услуг',
                'title'  => 'Услуги',
            ],
            'user' => [
                'header' => 'Пользователи',
                'title'  => 'Сотрудники',
            ],
            'position' => [
                'header' => 'Профессии',
            ],
            'role' => [
                'header' => 'Роли',
            ],
        ],
        'profile_menu' => [
            'header' => 'Профиль',
        ],
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
    'notification' => [
        'order' => [
            'new' => [
                'description' => 'Сделан новый заказ. Для просмотра заказа нажмите на панель
                    уведомления.',
                'title' => 'Новый заказ',
            ],
        ],
    ],
];
