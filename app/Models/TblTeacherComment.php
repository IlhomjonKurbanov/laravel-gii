<?php

namespace NAMESPACE;

use EXTEND;

/**
 * Class TblTeacherComment
 */
class TblTeacherComment extends EXTENDS {
    protected $table = "tbl_teacher_comment";

    protected $primaryKey = []; TIMESTAMPS

    protected $fillable = ['teacher_id', 'content'];

    GUARDED
}