<?php

namespace NAMESPACE;

use EXTEND;

/**
 * Class TblSubjectType
 */
class TblSubjectType extends EXTENDS
    TABLE

    PRIMARY_KEY TIMESTAMPS

    protected $fillable = ['id', 'subject_type_name', 'is_active'];

    GUARDED
}