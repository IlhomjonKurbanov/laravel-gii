<?php

namespace NAMESPACE;

use EXTEND;

/**
 * Class TblAdmin
 */
class TblAdmin extends EXTENDS {
    protected $table = "tbl_admin";

    protected $primaryKey = []; TIMESTAMPS

    protected $fillable = ['admin_name', 'admin_password'];

    GUARDED
}