<?php

namespace NAMESPACE;

use EXTEND;

/**
 * Class View
 */
class View extends EXTENDS
    TABLE

    PRIMARY_KEY TIMESTAMPS

    protected $fillable = ['id', 'user_id', 'post_id', 'is_active', 'created_time'];

    GUARDED
}