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
     * QuestionnaireEvaluation constructor.
     * @param Subject $subject
     */

    public function __construct(Subject $subject)
    {
        $this->subject = $subject;
    }

    public function phase_a()
    {
        $result = [];

        foreach (Questionnaire::attributesWithOutOthers() as $attribute) 
        {
            foreach (config('questionnaire_rules') as $rule) 
            {
                $result[$attribute . '_' . config('questionnaire_rules_translation')[$rule]] =

                    percentage(Questionnaire::where($attribute, $rule)->where('subject_id', $this->subject->id)->count(), Questionnaire::where('subject_id', $this->subject->id)->count());
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
                    ${$category . '_' . config('questionnaire_rules_translation')[$rule]} = 0;

                    foreach ($categoryAttributes as $attribute)
                    {
                        ${$category . '_' . config('questionnaire_rules_translation')[$rule]} += Questionnaire::where($attribute, $rule)->where('subject_id', $this->subject->id)->count();
                    }

                    $result[$category . '_' . config('questionnaire_rules_translation')[$rule]] = percentage(

                        ${$category . '_' . config('questionnaire_rules_translation')[$rule]},

                        count(config('questionnaires')[$category]) * Questionnaire::where('subject_id', $this->subject->id)->count()
                    );
                    $temp += $result[$category . '_' . config('questionnaire_rules_translation')[$rule]] * $factor--;


                }
                $result[$category] = (int)round($temp / 4);

            }

        }

        return $result;
    }

}