<?php

namespace NAMESPACE;

use EXTEND;

/**
 * Class TblNews
 */
class TblNews extends EXTENDS {
    protected $table = "tbl_news";

    protected $primaryKey = []; TIMESTAMPS

    protected $fillable = ['news_university', 'news_title', 'news_content', 'news_active'];

    GUARDED
}