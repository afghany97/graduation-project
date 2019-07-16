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

    public function phase_a()
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

    public function phase_b()
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

}