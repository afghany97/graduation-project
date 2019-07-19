<?php

namespace App;

use App\Utilities\Classes\QuestionnaireEvaluation;

class Doctor extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */

    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'registrations');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    public function questionnaires()
    {
        return $this->hasMany(Questionnaire::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */

    public function assistants()
    {
        return $this->belongsToMany(Assistant::class, 'registrations');
    }

    public function departments()
    {
        return $this->belongsToMany(Department::class);
    }

    public function getAverageEvaluation()
    {
        $total = 0;

        foreach ($this->subjects as $subject)
        {
            $total += (new QuestionnaireEvaluation($subject))->doctorEvaluation()['avg'];
        }

        return (int)round($total / $this->subjects->count());
    }

}
