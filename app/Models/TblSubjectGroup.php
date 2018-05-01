<?php

namespace NAMESPACE;

use EXTEND;

/**
 * Class TblSubjectGroup
 */
class TblSubjectGroup extends EXTENDS {
    protected $table = "tbl_subject_group";

    protected $primaryKey = []; TIMESTAMPS

    protected $fillable = ['subject_type_id', 'faculty_id', 'dept_id', 'subject_group_name', 'subject_group_info'];

    GUARDED
}