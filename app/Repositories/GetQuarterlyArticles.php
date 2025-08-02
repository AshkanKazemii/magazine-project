<?php


namespace App\Repositories ;

use App\Models\Article;
use App\Models\Quarterly;

class GetQuarterlyArticles
{
    public function __invoke($id)
    {
        return Quarterly::findOrFail($id);
    }
}