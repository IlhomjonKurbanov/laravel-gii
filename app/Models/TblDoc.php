<?php

namespace NAMESPACE;

use EXTEND;

/**
 * Class TblDoc
 */
class TblDoc extends EXTENDS {
    protected $table = "tbl_doc";

    protected $primaryKey = []; TIMESTAMPS

    protected $fillable = ['doc_url', 'doc_name', 'doc_scribd_id', 'doc_description', 'doc_title', 'doc_status', 'doc_author', 'doc_type', 'doc_path', 'subject_dept', 'subject_type', 'subject_faculty', 'doc_author_name', 'doc_publisher', 'subject_general_faculty_id'];

    GUARDED
}