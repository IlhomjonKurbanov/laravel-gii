<?php

namespace NAMESPACE;

use EXTEND;

/**
 * Class TblDept
 */
class TblDept extends EXTENDS
    TABLE

    PRIMARY_KEY TIMESTAMPS

    protected $fillable = ['dept_id', 'dept_name', 'dept_active', 'dept_faculty', 'dept_target', 'dept_knowleadge', 'dept_behavior', 'dept_out_standard', 'dept_contact', 'dept_in_standart', 'dept_language', 'dept_credits', 'dept_code', 'dept_link_download', 'dept_skill'];

    GUARDED
}