<?php

namespace App\Utilities\Classes;

use App\Questionnaire;
use App\Subject;

class QuestionnaireEvaluation
{
    /**
     * @var Subject
     */
    
    private $subject;

    /**
     * @var total
     */

    private $total;

    /**
     * QuestionnaireEvaluation constructor.
     * @param Subject $subject
     */

    public function __construct(Subject $subject)
    {
        $this->subject = $subject;

        $this->total = Questionnaire::where('subject_id',$this->subject->id)->count();
    }

    public function attributesRules()
    {
        $result = [];

        foreach (Questionnaire::attributesWithOutOthers() as $attribute) 
        {
            foreach (config('questionnaire_rules') as $rule) 
            {
                $result[$attribute . '_' . config('questionnaire_rules_translation')[$rule]] =

                    percentage(Questionnaire::where($attribute, $rule)->where('subject_id', $this->subject->id)->count(), $this->total);
            }
        }

        return $result;
    }

    public function categoriesRules()
    {
        $result = [];

        foreach (config('questionnaires') as $category => $categoryAttributes)
        {
            $temp = 0;

            $factor = 4;

            if ($category != 'others')
            {

                foreach (config('questionnaire_rules') as $rule)
                {
                    $name = $category . '_' . config('questionnaire_rules_translation')[$rule];

                    $$name = 0;

                    foreach ($categoryAttributes as $attribute)
                    {
                        $$name += Questionnaire::where($attribute, $rule)->where('subject_id', $this->subject->id)->count();
                    }

                    $result[$name] = percentage(

                        $$name,

                        count(config('questionnaires')[$category]) * $this->total
                    );
                    $temp += $result[$name] * $factor--;


                }
                $result[$category] = (int)round($temp / 4);

            }

        }

        return $result;
    }

    public function doctorEvaluation()
    {
        $result = $this->categoriesRules();

        $output = [];

        $avg = 0;

        $factor = 4;

        $keys = [
            "evolution_system",
            "doctor",
            "lectures",
            "targeted_learning_outcomes",
            "opinions_about_course",
        ];

        foreach (config('questionnaire_rules') as $rule)
        {
            $temp = 0;

            foreach ($keys as $key)
            {
                $temp += $result[$key . '_' . config('questionnaire_rules_translation')[$rule]];
            }

            $output[config('questionnaire_rules_translation')[$rule]] = number_format((float)  $temp / count($keys), 2, '.', '');

            $avg += $temp / count($keys) * $factor--;
        }

        $output['avg'] = (int)round($avg / 4);

        return $output;

    }

    public function calculate()
    {
        return array_merge($this->attributesRules(),$this->categoriesRules(),$this->doctorEvaluation());
    }
}