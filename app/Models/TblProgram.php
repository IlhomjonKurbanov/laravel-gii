<?php

namespace NAMESPACE;

use EXTEND;

/**
 * Class TblProgram
 */
class TblProgram extends EXTENDS
    TABLE

    PRIMARY_KEY TIMESTAMPS

    protected $fillable = ['program_id', 'program_name', 'program_credits', 'program_year', 'program_active', 'program_code'];

    GUARDED
}