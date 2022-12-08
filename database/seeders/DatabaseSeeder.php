<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Answer;
use App\Models\Question;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(100)->create();

        $questions = [
            ['text' => 'Отметьте, пожалуйста, основную сферу деятельности в которой Вы осуществляете предпринимательскую деятельность?'],
            ['text' => 'В течение какого периода времени Вы осуществляете предпринимательскую деятельность?'],
            ['text' => 'В каких мерах поддержки со стороны государства, по Вашему мнению, наиболее нуждается бизнес?'],
            ['text' => 'Обращались ли Вы ранее за получением имущественной поддержки, оказываемой органами государственной власти и местного самоуправления?'],
            ['text' => 'Если Вы обращались за получением государственной имущественной поддержки, укажите какие проблемы возникли при этом?'],
            ['text' => 'Доступна ли для Вас информация о предоставляемых мерах имущественной поддержки органами государственной власти и местного самоуправления?'],
            ['text' => 'Что, по Вашему мнению, может способствовать информированности субъектов МСП о предоставляемой органами власти имущественной поддержке?'],
            ['text' => 'Остались ли Вы удовлетворены результатами обращения за получением имущественной поддержки?'],
            ['text' => 'На каком виде права у Вас находится имущество (движимое и недвижимое имущество, в т. ч. земельные участки), которое Вы используете для осуществление своей деятельности?'],
            ['text' => 'С какими сложностями Вы сталкиваетесь при использовании имущества для ведения бизнеса?'],
            ['text' => 'Какое имущество Вы бы хотели получить для ведения или расширения бизнеса?'],
            ['text' => 'Хотели бы Вы получить в аренду государственное или муниципальное имущество, требующее реконструкции (за счет арендатора), для дальнейшего его использования (после завершения реконструкции) на льготных основаниях (ставка 1 тенге)?'],
        ];
        foreach ($questions as $question) {
            Question::query()->create([
                'text' => $question['text']
            ]);
        }

        $answers = [
            ['question_id' => 1, 'text' => 'Услуги', 'type' => Answer::SELECT_ANSWER],
            ['question_id' => 1, 'text' => 'Промышленность', 'type' => Answer::SELECT_ANSWER],
            ['question_id' => 1, 'text' => 'Сельское хозяйство', 'type' => Answer::SELECT_ANSWER],
            ['question_id' => 1, 'text' => 'Строительство', 'type' => Answer::SELECT_ANSWER],
            ['question_id' => 1, 'text' => 'Строительство', 'type' => Answer::SELECT_ANSWER],
            ['question_id' => 1, 'text' => 'Иное', 'type' => Answer::TEXT_ANSWER],
            ['question_id' => 2, 'text' => 'Более 5 лет', 'type' => Answer::SELECT_ANSWER],
            ['question_id' => 2, 'text' => 'Менее 1 года', 'type' => Answer::SELECT_ANSWER],
            ['question_id' => 2, 'text' => 'От 1 года до 5 лет', 'type' => Answer::SELECT_ANSWER],
            ['question_id' => 2, 'text' => 'Затрудняюсь ответить', 'type' => Answer::SELECT_ANSWER],
            ['question_id' => 3, 'text' => 'Обучение персонала', 'type' => Answer::SELECT_ANSWER],
            ['question_id' => 3, 'text' => 'Имущественная поддержка (льготная аренда, выкуп в рассрочку, безвозмездное пользование и т.д.)', 'type' => Answer::SELECT_ANSWER],
            ['question_id' => 3, 'text' => 'Информационно-маркетинговая поддержка', 'type' => Answer::SELECT_ANSWER],
            ['question_id' => 3, 'text' => 'Финансовая поддержка (льготные кредиты, субсидии и т.д.)', 'type' => Answer::SELECT_ANSWER],
            ['question_id' => 3, 'text' => 'Правовая поддержка', 'type' => Answer::SELECT_ANSWER],
            ['question_id' => 3, 'text' => 'Иное', 'type' => Answer::TEXT_ANSWER],
            ['question_id' => 4, 'text' => 'Нет', 'type' => Answer::SELECT_ANSWER],
            ['question_id' => 4, 'text' => 'Да', 'type' => Answer::SELECT_ANSWER],
            ['question_id' => 5, 'text' => 'Большое количество требуемых документов необходимых для получения поддержки не ясность порядка, который необходимо соблюсти при получении поддержки', 'type' => Answer::SELECT_ANSWER],
            ['question_id' => 5, 'text' => 'Длительные сроки получения поддержки', 'type' => Answer::SELECT_ANSWER],
            ['question_id' => 5, 'text' => 'Отсутствие информации о порядке получения поддержки', 'type' => Answer::SELECT_ANSWER],
            ['question_id' => 5, 'text' => 'Не возникало проблем при получении поддержки', 'type' => Answer::SELECT_ANSWER],
            ['question_id' => 5, 'text' => 'Иное', 'type' => Answer::TEXT_ANSWER],
            ['question_id' => 6, 'text' => 'Нет', 'type' => Answer::SELECT_ANSWER],
            ['question_id' => 6, 'text' => 'Да', 'type' => Answer::SELECT_ANSWER],
            ['question_id' => 6, 'text' => 'Иное', 'type' => Answer::TEXT_ANSWER],
            ['question_id' => 7, 'text' => 'Размещение информации на сайтах государственных органов власти и местного самоуправления', 'type' => Answer::SELECT_ANSWER],
            ['question_id' => 7, 'text' => 'Через организации, образующие инфраструктуру поддержки субъектов малого и среднего предпринимательства', 'type' => Answer::SELECT_ANSWER],
            ['question_id' => 7, 'text' => 'Информационные брошюры, размещение информации в социальных сетях', 'type' => Answer::SELECT_ANSWER],
            ['question_id' => 7, 'text' => 'Проведение круглых столов с участием государственных органов власти, местного самоуправления и бизнеса по вопросам имущественной поддержки', 'type' => Answer::SELECT_ANSWER],
            ['question_id' => 7, 'text' => 'Размещение информации на информационных стендах органов власти, в МФЦ СМИ (в т.ч. периодические печатные издания, телевидение)', 'type' => Answer::SELECT_ANSWER],
            ['question_id' => 8, 'text' => 'Нет', 'type' => Answer::SELECT_ANSWER],
            ['question_id' => 8, 'text' => 'Иное', 'type' => Answer::TEXT_ANSWER],
            ['question_id' => 8, 'text' => 'Да', 'type' => Answer::SELECT_ANSWER],
            ['question_id' => 9, 'text' => 'На праве аренды', 'type' => Answer::SELECT_ANSWER],
            ['question_id' => 9, 'text' => 'На ином виде права', 'type' => Answer::SELECT_ANSWER],
            ['question_id' => 9, 'text' => 'Не использую имущество', 'type' => Answer::SELECT_ANSWER],
            ['question_id' => 10, 'text' => 'Высокий уровень затрат на текущее содержание имущества (коммунальные расходы, ремонт и иные платежи)', 'type' => Answer::SELECT_ANSWER],
            ['question_id' => 10, 'text' => 'Высокий размер налога на имущество - Высокий размер арендной платы', 'type' => Answer::SELECT_ANSWER],
            ['question_id' => 11, 'text' => 'Движимое имущество (машины, оборудование и прочее)', 'type' => Answer::SELECT_ANSWER],
            ['question_id' => 11, 'text' => 'Производственные здания, помещения', 'type' => Answer::SELECT_ANSWER],
            ['question_id' => 11, 'text' => 'Земельные участки', 'type' => Answer::SELECT_ANSWER],
            ['question_id' => 11, 'text' => 'Коворкинги, лофты', 'type' => Answer::SELECT_ANSWER],
            ['question_id' => 11, 'text' => 'Иное', 'type' => Answer::TEXT_ANSWER],
            ['question_id' => 12, 'text' => 'Да', 'type' => Answer::SELECT_ANSWER],
            ['question_id' => 12, 'text' => 'Нет', 'type' => Answer::SELECT_ANSWER],
            ['question_id' => 12, 'text' => 'Иное', 'type' => Answer::TEXT_ANSWER]
        ];
        foreach ($answers as $answer) {
            Answer::query()->create([
                'question_id' => $answer['question_id'],
                'text' => $answer['text'],
                'type' => $answer['type']
            ]);
        }
    }
}
