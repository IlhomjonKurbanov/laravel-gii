<?php

namespace NAMESPACE;

use EXTEND;

/**
 * Class Vote
 */
class Vote extends EXTENDS
    TABLE

    PRIMARY_KEY TIMESTAMPS

    protected $fillable = ['id', 'user_id', 'vote_type', 'teacher_id', 'object_type', 'rating_score'];

    GUARDED
}