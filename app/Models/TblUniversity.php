<?php

namespace NAMESPACE;

use EXTEND;

/**
 * Class TblUniversity
 */
class TblUniversity extends EXTENDS
    TABLE

    PRIMARY_KEY TIMESTAMPS

    protected $fillable = ['university_id', 'university_name', 'university_location', 'university_code', 'university_web', 'university_description', 'university_active'];

    GUARDED
}