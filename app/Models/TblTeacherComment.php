<?php

namespace NAMESPACE;

use EXTEND;

/**
 * Class TblTeacherComment
 */
class TblTeacherComment extends EXTENDS
    TABLE

    PRIMARY_KEY TIMESTAMPS

    protected $fillable = ['comment_id', 'teacher_id', 'content'];

    GUARDED
}