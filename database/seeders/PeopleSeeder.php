<?php

namespace Database\Seeders;

use App\Models\People;
use Illuminate\Database\Seeder;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $people = new People();
        $people->id = 1;
        $people->fullname_ru = 'Сергей Тюлин';
        $people->nickname = 'SV';
        $people->slug = 'sv';
        $people->description = 'Сергей Тюлин (SV) - ведущий переводчик сутт на русский язык, создатель сайта [theravada.ru](http://theravada.ru).';
        $people->signature = 'Сергей SV';
        $people->save();

        $people = new People();
        $people->id = 2;
        $people->nickname = 'khantibalo';
        $people->slug = 'khantibalo';
        $people->description = 'Упасака московской общины Тхеравады, создатель сайта [theravada.su](http://theravada.su).';
        $people->signature = 'Павел Khantibalo';
        $people->save();

        $people = new People();
        $people->id = 3;
        $people->monkname_en = 'Bhante Sujato';
        $people->monkname_ru = 'Бханте Суджато';
        $people->fullname_en = 'Antony Best';
        $people->slug = 'sujato';
        $people->is_monk = 1;
        $people->description = 'Anthony Best, создатель сайта [suttacentral.net](https://suttacentral.net).';
        $people->signature = 'Бханте Суджато';
        $people->save();

        $people = new People();
        $people->id = 4;
        $people->fullname_ru = 'Джефри Блок';
        $people->monkname_ru = 'Бхикку Бодхи';
        $people->monkname_en = 'Bhikkhu Bodhi';
        $people->slug = 'bhikkhu_bodhi';
        $people->priority = 110;
        $people->is_monk = 1;
        $people->description = 'Бхикку Бодхи (Джефри Блок) родился в 1944 в Бруклине, Нью-Йорк. В 1966 он получил степень бакалавра по философии в Бруклинском Колледже. В 1972 получил докторскую степень философии в школе Крэлмонт.

В 1967, всё ещё будучи выпускником, был посвящён в саманеры одной из ветвей Вьетнамской Махаянской Сангхи. В 1972 после окончания учёбы он отправился в Шри Ланку, где перестригся в саманеру Тхеравады под учительством дост. Ананды Майтреи. В 1973 получил высшее посвящение бхиккху.

В 1984, совместно с дост. Ньянапоникой Тхерой, дост. Бодхи был назначен редактором английского языка в Буддийском Издательском Обществе (Buddhist Publication Society) и в 1988 становится его президентом. В 2002 он уходит в отставку с должности редактора, но всё ещё остаётся президентом.

В 2002 возвращается в США и в данный момент обучает Дхамме в монастыре Бодхи (Лафайет, Нью Джерси) и в монастыре Чуан Йен (Кармел, Нью Йорк). Также является председателем Фонда Йин Шун.';
        $people->signature = 'Бханте Бодхи';
        $people->save();

        $people = new People();
        $people->id = 5;
        $people->fullname_ru = 'Нгыам Панит';
        $people->slug = 'ajahn_budhadasa';
        $people->is_monk = 1;
        $people->priority = 100;
        $people->description = 'Буддадаса Бхикку получил полное монашеское посвящение (бхиккху) в 1926 году в возрасте двадцати лет. После нескольких лет обучения в Бангкоке он захотел жить ближе к природе, чтобы исследовать Будда-Дхамму. Так он основал монастырь Суан Моккабаларама (Роща Силы Освобождения) в 1932, неподалёку от своего родного города. В то время это был единственный лесной Дхамма-центр и одно из немногочисленных мест, предназначенных для практики, в южном Тайланде. Слова Буддадасы, его работы и Суан Мок стали широко известны за прошедшие годы, и это можно назвать «одним из самых значимых событий буддийской истории в Сиаме».

Аджан Буддадаса усердно работал над тем, чтобы установить и объяснить правильные важнейшие принципы подлинного буддизма. Эта работа основывалась на глубоком изучении палийских писаний (Канона и Комментариев), особенно проповедей Будды (сутта питаки), а также на личном опыте и практике этих учений. Его целью было создать систему рекомендаций для текущих и последующих изучения и практики. У него всегда был научный, прямой и практичный подход.

Хотя его общее образование ограничилось семью классами и уроками палийского языка, ему вручили пять почётных докторских степеней различные тайские университеты. Его книгам и записанным лекциям отведена специальная комната в Национальной Библиотеке. Он оказал влияние на всех серьёзных тайских буддистов.

Прогрессивные элементы тайского общества, особенно молодежь, были воодушевлены его учениями и бескорыстной образцовой жизнью. С 1960-ых различные деятели образования, социального обеспечения и сельского развития опирались на его учения и советы.

С момента основания монастыря Суан Мок он изучил все школы буддизма и все мировые религиозные традиции. Этот интерес был скорее практического плана, нежели схоластического. Он стремился объединить всех по-настоящему религиозных людей, чтобы работать вместе с целью избавить человечество от эгоизма. Такой широкий подход принёс ему друзей и учеников со всего мира, включая христиан, мусульман, индуистов и сикхов.

Его последним проектом стало основание международного центра для практики медитации "Dhamma Hermitage" при монастыре Суан Мок.';
        $people->signature = 'Аджан Буддадаса';
        $people->save();

        $people = new People();
        $people->id = 6;
        $people->fullname_ru = 'Андрей Парибок';
        $people->slug = 'paribok';
        $people->description = '';
        $people->signature = 'Андрей Парибок';
        $people->save();
    }
}
