<?php

namespace NAMESPACE;

use EXTEND;

/**
 * Class TblUniversity
 */
class TblUniversity extends EXTENDS {
    protected $table = "tbl_university";

    protected $primaryKey = []; TIMESTAMPS

    protected $fillable = ['university_name', 'university_location', 'university_code', 'university_web', 'university_description', 'university_active'];

    GUARDED
}