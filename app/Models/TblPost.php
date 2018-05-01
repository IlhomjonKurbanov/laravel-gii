<?php

namespace NAMESPACE;

use EXTEND;

/**
 * Class TblPost
 */
class TblPost extends EXTENDS {
    protected $table = "tbl_post";

    protected $primaryKey = []; TIMESTAMPS

    protected $fillable = ['post_author', 'post_date', 'post_content', 'post_title', 'post_active', 'post_rate', 'post_type', 'post_class', 'post_group'];

    GUARDED
}