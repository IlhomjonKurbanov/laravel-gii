<?php

namespace NAMESPACE;

use EXTEND;

/**
 * Class TblUserUniversity
 */
class TblUserUniversity extends EXTENDS
    TABLE

    PRIMARY_KEY TIMESTAMPS

    protected $fillable = ['id', 'user_id', 'university_id', 'is_active'];

    GUARDED
}