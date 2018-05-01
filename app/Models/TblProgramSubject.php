<?php

namespace NAMESPACE;

use EXTEND;

/**
 * Class TblProgramSubject
 */
class TblProgramSubject extends EXTENDS
    TABLE

    PRIMARY_KEY TIMESTAMPS

    protected $fillable = ['id', 'program_id', 'subject_id', 'is_active'];

    GUARDED
}