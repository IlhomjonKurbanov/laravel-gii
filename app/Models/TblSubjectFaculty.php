<?php

namespace NAMESPACE;

use EXTEND;

/**
 * Class TblSubjectFaculty
 */
class TblSubjectFaculty extends EXTENDS
    TABLE

    PRIMARY_KEY TIMESTAMPS

    protected $fillable = ['id', 'subject_id', 'faculty_id', 'is_active', 'university_id'];

    GUARDED
}