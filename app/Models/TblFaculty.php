<?php

namespace NAMESPACE;

use EXTEND;

/**
 * Class TblFaculty
 */
class TblFaculty extends EXTENDS {
    protected $table = "tbl_faculty";

    protected $primaryKey = []; TIMESTAMPS

    protected $fillable = ['faculty_university', 'faculty_name', 'faculty_code', 'faculty_active', 'faculty_research', 'faculty_lab'];

    GUARDED
}