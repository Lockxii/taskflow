<?php

namespace App\Enum;


enum TaskStatus: string

{
    case TODO = 'todo';
    case IN_PROGRESS = 'in-progress';
    case IN_REVIEW = 'in-review';
    case DONE = 'done';

    case ARCHIVED = 'archived';

    public function label(): string {
        return match ($this) {
            self::TODO =>'todo'
            , self::IN_PROGRESS =>'in-progress'
            , self::IN_REVIEW =>'in-review'
            , self::DONE =>'done'
            , self::ARCHIVED =>'archived'
        };
    }
}
