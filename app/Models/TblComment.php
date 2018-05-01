<?php

namespace NAMESPACE;

use EXTEND;

/**
 * Class TblComment
 */
class TblComment extends EXTENDS {
    protected $table = "tbl_comment";

    protected $primaryKey = []; TIMESTAMPS

    protected $fillable = ['comment_post_id', 'comment_group_id', 'comment_class_id', 'comment_author_id', 'comment_content', 'comment_time', 'comment_active', 'comment_rate'];

    GUARDED
}