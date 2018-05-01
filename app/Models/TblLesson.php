<?php

namespace NAMESPACE;

use EXTEND;

/**
 * Class TblLesson
 */
class TblLesson extends EXTENDS
    TABLE

    PRIMARY_KEY TIMESTAMPS

    protected $fillable = ['lesson_id', 'lesson_active', 'lesson_weeks', 'lesson_subject', 'lesson_name', 'lesson_info', 'lesson_doc'];

    GUARDED
}