<?php

namespace App;

use App\Utilities\Classes\QuestionnaireEvaluation;
use Illuminate\Support\Collection;

class Subject extends Model
{

    public function getRouteKeyName()
    {
        return 'name';
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */

    public function doctors()
    {
        return $this->belongsToMany(Doctor::class, 'registrations');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */

    public function assistants()
    {
        return $this->belongsToMany(Assistant::class, 'registrations');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */

    public function students()
    {
        return $this->belongsToMany(User::class, 'registrations');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    public function questionnaires()
    {
        return $this->hasMany(Questionnaire::class);
    }


    public function isQuestionnaired()
    {
        return $this->questionnaires()->where('user_id', auth()->id())->exists();
    }

    public function hasQuestionnaires()
    {
        return !! $this->questionnaires()->count();
    }

    /**
     * only call from user object
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */

    public function doctor()
    {
        return $this->belongsToMany(Doctor::class, 'registrations', null, null, null, null, 'doctor_id');
    }

    /**
     * only call from user object
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */

    public function assistant()
    {
        return $this->belongsToMany(Assistant::class, 'registrations', null, null, null, null, 'assistant_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */

    public function group()
    {
        return $this->belongsToMany(Group::class, 'registrations', null, null, null, null, 'group_id');
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function getAverageEvaluation($doctor)
    {
        $keys = ['opinions_about_course','targeted_learning_outcomes','lectures',];
        $evaluation = (new QuestionnaireEvaluation($this,$doctor))->categoriesRules();

        return (int)round(array_sum(array_intersect_key($evaluation,array_flip($keys))) / count($keys));
    }

    public static function isAllQuestionnaired(Collection $subjects)
    {
        foreach ($subjects as $subject)

            if(!$subject->isQuestionnaired())

                return false;

        return true;
    }
}
