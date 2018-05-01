<?php

namespace NAMESPACE;

use EXTEND;

/**
 * Class TblUserUniversity
 */
class TblUserUniversity extends EXTENDS {
    protected $table = "tbl_user_university";

    protected $primaryKey = []; TIMESTAMPS

    protected $fillable = ['user_id', 'university_id', 'is_active'];

    GUARDED
}