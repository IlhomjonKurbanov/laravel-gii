<?php

namespace NAMESPACE;

use EXTEND;

/**
 * Class TblUser
 */
class TblUser extends EXTENDS
    TABLE

    PRIMARY_KEY TIMESTAMPS

    protected $fillable = ['user_id', 'user_id_fb', 'username', 'password', 'user_real_name', 'user_avatar', 'user_cover', 'user_student_code', 'user_university', 'user_gender', 'user_dob', 'user_hometown', 'user_phone', 'user_description', 'user_faculty', 'user_class', 'user_active', 'user_status', 'user_group', 'user_token', 'user_activator', 'user_qoutes', 'user_date_attend'];

    GUARDED
}