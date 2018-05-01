<?php

namespace NAMESPACE;

use EXTEND;

/**
 * Class TblSubjectTeacher
 */
class TblSubjectTeacher extends EXTENDS
    TABLE

    PRIMARY_KEY TIMESTAMPS

    protected $fillable = ['id', 'subject_id', 'teacher_id', 'is_active'];

    GUARDED
}