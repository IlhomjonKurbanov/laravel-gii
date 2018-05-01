<?php

namespace NAMESPACE;

use EXTEND;

/**
 * Class TblNews
 */
class TblNews extends EXTENDS
    TABLE

    PRIMARY_KEY TIMESTAMPS

    protected $fillable = ['news_id', 'news_university', 'news_title', 'news_content', 'news_active'];

    GUARDED
}