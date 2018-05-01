<?php

namespace NAMESPACE;

use EXTEND;

/**
 * Class TblSubjectType
 */
class TblSubjectType extends EXTENDS {
    protected $table = "tbl_subject_type";

    protected $primaryKey = []; TIMESTAMPS

    protected $fillable = ['subject_type_name', 'is_active'];

    GUARDED
}