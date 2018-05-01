<?php

namespace NAMESPACE;

use EXTEND;

/**
 * Class TblSubjectDoc
 */
class TblSubjectDoc extends EXTENDS
    TABLE

    PRIMARY_KEY TIMESTAMPS

    protected $fillable = ['id', 'subject_id', 'doc_id', 'doc_type', 'active'];

    GUARDED
}