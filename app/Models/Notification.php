<?php

namespace NAMESPACE;

use EXTEND;

/**
 * Class Notification
 */
class Notification extends EXTENDS
    TABLE

    PRIMARY_KEY TIMESTAMPS

    protected $fillable = ['id', 'user_id', 'action', 'object_type', 'object_id', 'possessive', 'from_user_id', 'clicked', 'relevant_id', 'relevant_object', 'app', 'is_active'];

    GUARDED
}