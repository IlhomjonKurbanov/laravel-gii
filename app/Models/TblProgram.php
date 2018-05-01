<?php

namespace NAMESPACE;

use EXTEND;

/**
 * Class TblProgram
 */
class TblProgram extends EXTENDS {
    protected $table = "tbl_program";

    protected $primaryKey = []; TIMESTAMPS

    protected $fillable = ['program_name', 'program_credits', 'program_year', 'program_active', 'program_code'];

    GUARDED
}