<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            'name'       => 'Кузьмина Агата Артуровна',
            'phone'      => '4(63)242-52-51',
            'email'      => 'reichel.tia@yahoo.com',
            'address'    => 'пр. Бухарестская, д.56, оф. 5',
            'comment'    => 'А ещё диаграммы связей, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены сами себе.',
            'completed'  => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('orders')->insert([
            'name'       => 'Бочаров Кирилл Даниэльевич',
            'phone'      => '1(264)951-48-77',
            'email'      => 'arely24@yahoo.com',
            'address'    => 'бульвар Ладыгина, д. 43, кв. 4',
            'comment'    => 'Как принято считать, непосредственные участники технического прогресса, вне зависимости от их уровня, должны быть указаны как претенденты на роль ключевых факторов.',
            'completed'  => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('orders')->insert([
            'name'       => 'Тихонова София Ивановна',
            'phone'      => '49(319)419-20-38',
            'email'      => 'shanel32@okon.com',
            'address'    => 'ул. Ломоносова, д. 59, кв. 15',
            'comment'    => 'С другой стороны, граница обучения кадров требует анализа благоприятных перспектив.',
            'completed'  => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('orders')->insert([
            'name'       => 'Гусева Мария Данииловна',
            'phone'      => '8(627)665-90-40',
            'email'      => 'torey91@hotmail.com',
            'address'    => 'пер. Бухарестская, д. 55, кв. 21',
            'comment'    => 'Являясь всего лишь частью общей картины, представители современных социальных резервов являются только методом политического участия и объективно рассмотрены соответствующими инстанциями.',
            'completed'  => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('orders')->insert([
            'name'       => 'Кравцова Полина Игоревна',
            'phone'      => '834(512)772-82-21',
            'email'      => 'torey91@hotmail.com',
            'address'    => 'ул. Славы, д. 9, кв. 1',
            'comment'    => 'Предварительные выводы неутешительны: существующая теория выявляет срочную потребность системы массового участия.',
            'completed'  => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('orders')->insert([
            'name'       => 'Смирнова Маргарита Петровна',
            'phone'      => '1(26)115-06-53',
            'email'      => 'gino96@hotmail.com',
            'address'    => 'пр. Гагарина, д. 55, кв. 42',
            'comment'    => 'С другой стороны, экономическая повестка сегодняшнего дня выявляет срочную потребность экспериментов, поражающих по своей масштабности и грандиозности.',
            'completed'  => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('orders')->insert([
            'name'       => 'Алексеева Вероника Дмитриевна',
            'phone'      => '58(6187)485-53-51',
            'email'      => 'alan.graham@shanahan.biz',
            'address'    => 'ул. Славы, д. 38, кв. 55',
            'comment'    => 'Не следует, однако, забывать, что укрепление и развитие внутренней структуры предопределяет высокую востребованность своевременного выполнения сверхзадачи.',
            'completed'  => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('orders')->insert([
            'name'       => 'Грачев Александр Максимович',
            'phone'      => '58(6187)485-53-51',
            'email'      => 'yundt.lourdes@yahoo.com',
            'address'    => 'ул. Славы, д. 19, кв. 1',
            'comment'    => 'Сложно сказать, почему действия представителей оппозиции превращены в посмешище, хотя само их существование приносит несомненную пользу обществу.',
            'completed'  => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('orders')->insert([
            'name'       => 'Ерофеева Мария Кирилловна',
            'phone'      => '275(10)625-14-57',
            'email'      => 'feil.desiree@yahoo.com',
            'address'    => 'ул. Славы, д. 19, кв. 10',
            'comment'    => 'Сложно сказать, почему действия представителей оппозиции превращены в посмешище, хотя само их существование приносит несомненную пользу обществу.',
            'completed'  => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('orders')->insert([
            'name'       => 'Бирюков Фёдор Александрович',
            'phone'      => '9(7421)987-22-72',
            'email'      => 'dexter68@keeling.com',
            'address'    => 'пер. Чехова, д. 72, кв. 5',
            'comment'    => 'Не следует, однако, забывать, что укрепление и развитие внутренней структуры обеспечивает актуальность благоприятных перспектив.',
            'completed'  => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
