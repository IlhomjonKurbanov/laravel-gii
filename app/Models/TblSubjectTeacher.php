<?php

namespace NAMESPACE;

use EXTEND;

/**
 * Class TblSubjectTeacher
 */
class TblSubjectTeacher extends EXTENDS {
    protected $table = "tbl_subject_teacher";

    protected $primaryKey = []; TIMESTAMPS

    protected $fillable = ['subject_id', 'teacher_id', 'is_active'];

    GUARDED
}