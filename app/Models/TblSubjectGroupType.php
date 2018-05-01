<?php

namespace NAMESPACE;

use EXTEND;

/**
 * Class TblSubjectGroupType
 */
class TblSubjectGroupType extends EXTENDS {
    protected $table = "tbl_subject_group_type";

    protected $primaryKey = []; TIMESTAMPS

    protected $fillable = ['subject_group_type', 'active', 'detail', 'subject_group', 'subject_dept', 'subject_faculty'];

    GUARDED
}