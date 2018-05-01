<?php

namespace NAMESPACE;

use EXTEND;

/**
 * Class TblTeacher
 */
class TblTeacher extends EXTENDS
    TABLE

    PRIMARY_KEY TIMESTAMPS

    protected $fillable = ['teacher_id', 'teacher_name', 'teacher_personal_page', 'teacher_avatar', 'teacher_description', 'teacher_work_place', 'teacher_active', 'teacher_acadamic_title', 'teacher_birthday', 'teacher_sex', 'teacher_faculty', 'teacher_dept', 'teacher_rate', 'teacher_personality', 'advices', 'teacher_research', 'teacher_phone', 'teacher_email'];

    GUARDED
}