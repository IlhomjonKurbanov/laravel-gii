<?php

namespace NAMESPACE;

use EXTEND;

/**
 * Class View
 */
class View extends EXTENDS {
    protected $table = "views";

    protected $primaryKey = []; TIMESTAMPS

    protected $fillable = ['user_id', 'post_id', 'is_active', 'created_time'];

    GUARDED
}