<?php

namespace App\Options;

use App\Models\Subject;

class Subjects
{

    public static function get()
    {

        $subjects = Subject::orderBy('code', 'ASC')->get();;
        $result = [];
        foreach ($subjects as $subject) {
            $result[$subject->id] = $subject->code . ' ' . $subject->name;
        }

        return $result;
    }
}
