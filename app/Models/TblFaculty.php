<?php

namespace NAMESPACE;

use EXTEND;

/**
 * Class TblFaculty
 */
class TblFaculty extends EXTENDS
    TABLE

    PRIMARY_KEY TIMESTAMPS

    protected $fillable = ['faculty_id', 'faculty_university', 'faculty_name', 'faculty_code', 'faculty_active', 'faculty_research', 'faculty_lab'];

    GUARDED
}