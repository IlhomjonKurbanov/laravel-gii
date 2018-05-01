<?php

namespace NAMESPACE;

use EXTEND;

/**
 * Class TblLesson
 */
class TblLesson extends EXTENDS {
    protected $table = "tbl_lesson";

    protected $primaryKey = []; TIMESTAMPS

    protected $fillable = ['lesson_active', 'lesson_weeks', 'lesson_subject', 'lesson_name', 'lesson_info', 'lesson_doc'];

    GUARDED
}