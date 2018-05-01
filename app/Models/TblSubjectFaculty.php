<?php

namespace NAMESPACE;

use EXTEND;

/**
 * Class TblSubjectFaculty
 */
class TblSubjectFaculty extends EXTENDS {
    protected $table = "tbl_subject_faculty";

    protected $primaryKey = []; TIMESTAMPS

    protected $fillable = ['subject_id', 'faculty_id', 'is_active', 'university_id'];

    GUARDED
}