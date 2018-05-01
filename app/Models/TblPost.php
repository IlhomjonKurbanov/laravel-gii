<?php

namespace NAMESPACE;

use EXTEND;

/**
 * Class TblPost
 */
class TblPost extends EXTENDS
    TABLE

    PRIMARY_KEY TIMESTAMPS

    protected $fillable = ['post_id', 'post_author', 'post_date', 'post_content', 'post_title', 'post_active', 'post_rate', 'post_type', 'post_class', 'post_group'];

    GUARDED
}