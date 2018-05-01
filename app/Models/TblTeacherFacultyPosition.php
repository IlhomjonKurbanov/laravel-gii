<?php

namespace NAMESPACE;

use EXTEND;

/**
 * Class TblTeacherFacultyPosition
 */
class TblTeacherFacultyPosition extends EXTENDS
    TABLE

    PRIMARY_KEY TIMESTAMPS

    protected $fillable = ['id', 'teacher_id', 'teacher_name', 'faculty_id', 'teacher_position'];

    GUARDED
}