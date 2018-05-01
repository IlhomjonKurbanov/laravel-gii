<?php

namespace NAMESPACE;

use EXTEND;

/**
 * Class TblLessonDoc
 */
class TblLessonDoc extends EXTENDS
    TABLE

    PRIMARY_KEY TIMESTAMPS

    protected $fillable = ['id', 'lesson_id', 'doc_id', 'active'];

    GUARDED
}