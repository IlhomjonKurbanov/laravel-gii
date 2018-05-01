<?php

namespace NAMESPACE;

use EXTEND;

/**
 * Class TblTeacherFacultyPosition
 */
class TblTeacherFacultyPosition extends EXTENDS {
    protected $table = "tbl_teacher_faculty_position";

    protected $primaryKey = []; TIMESTAMPS

    protected $fillable = ['teacher_id', 'teacher_name', 'faculty_id', 'teacher_position'];

    GUARDED
}