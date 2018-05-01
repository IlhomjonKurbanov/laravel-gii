<?php

namespace NAMESPACE;

use EXTEND;

/**
 * Class TblLessonVideo
 */
class TblLessonVideo extends EXTENDS {
    protected $table = "tbl_lesson_video";

    protected $primaryKey = []; TIMESTAMPS

    protected $fillable = ['lesson_id', 'video_link', 'active'];

    GUARDED
}