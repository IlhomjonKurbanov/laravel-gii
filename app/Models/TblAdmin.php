<?php

namespace NAMESPACE;

use EXTEND;

/**
 * Class TblAdmin
 */
class TblAdmin extends EXTENDS
    TABLE

    PRIMARY_KEY TIMESTAMPS

    protected $fillable = ['admin_id', 'admin_name', 'admin_password'];

    GUARDED
}