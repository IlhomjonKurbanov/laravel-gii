<?php

namespace NAMESPACE;

use EXTEND;

/**
 * Class TblSubjectGroup
 */
class TblSubjectGroup extends EXTENDS
    TABLE

    PRIMARY_KEY TIMESTAMPS

    protected $fillable = ['id', 'subject_type_id', 'faculty_id', 'dept_id', 'subject_group_name', 'subject_group_info'];

    GUARDED
}