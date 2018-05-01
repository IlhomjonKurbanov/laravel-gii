<?php

namespace NAMESPACE;

use EXTEND;

/**
 * Class TblSubjectGroupType
 */
class TblSubjectGroupType extends EXTENDS
    TABLE

    PRIMARY_KEY TIMESTAMPS

    protected $fillable = ['subject_type_id', 'subject_group_type', 'active', 'detail', 'subject_group', 'subject_dept', 'subject_faculty'];

    GUARDED
}