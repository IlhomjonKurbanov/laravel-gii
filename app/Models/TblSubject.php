<?php

namespace NAMESPACE;

use EXTEND;

/**
 * Class TblSubject
 */
class TblSubject extends EXTENDS
    TABLE

    PRIMARY_KEY TIMESTAMPS

    protected $fillable = ['subject_id', 'subject_name', 'subject_code', 'subject_active', 'subject_university', 'subject_type', 'subject_year', 'subject_credits', 'subject_credit_hour', 'subject_requirement', 'subject_target', 'subject_info', 'subject_test', 'subject_faculty', 'subject_dept', 'subject_content', 'subject_general_faculty_id'];

    GUARDED
}