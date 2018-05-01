<?php

namespace NAMESPACE;

use EXTEND;

/**
 * Class TblLessonDoc
 */
class TblLessonDoc extends EXTENDS {
    protected $table = "tbl_lesson_doc";

    protected $primaryKey = []; TIMESTAMPS

    protected $fillable = ['lesson_id', 'doc_id', 'active'];

    GUARDED
}