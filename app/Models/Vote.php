<?php

namespace NAMESPACE;

use EXTEND;

/**
 * Class Vote
 */
class Vote extends EXTENDS {
    protected $table = "votes";

    protected $primaryKey = []; TIMESTAMPS

    protected $fillable = ['user_id', 'vote_type', 'teacher_id', 'object_type', 'rating_score'];

    GUARDED
}