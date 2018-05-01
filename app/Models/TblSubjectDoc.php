<?php

namespace NAMESPACE;

use EXTEND;

/**
 * Class TblSubjectDoc
 */
class TblSubjectDoc extends EXTENDS {
    protected $table = "tbl_subject_doc";

    protected $primaryKey = []; TIMESTAMPS

    protected $fillable = ['subject_id', 'doc_id', 'doc_type', 'active'];

    GUARDED
}