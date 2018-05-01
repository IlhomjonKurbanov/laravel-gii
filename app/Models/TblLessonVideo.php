<?php

namespace NAMESPACE;

use EXTEND;

/**
 * Class TblLessonVideo
 */
class TblLessonVideo extends EXTENDS
    TABLE

    PRIMARY_KEY TIMESTAMPS

    protected $fillable = ['id', 'lesson_id', 'video_link', 'active'];

    GUARDED
}