<?php

namespace NAMESPACE;

use EXTEND;

/**
 * Class TblProgramSubject
 */
class TblProgramSubject extends EXTENDS {
    protected $table = "tbl_program_subject";

    protected $primaryKey = []; TIMESTAMPS

    protected $fillable = ['program_id', 'subject_id', 'is_active'];

    GUARDED
}