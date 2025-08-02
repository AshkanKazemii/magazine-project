<?php

namespace App\Repositories\Superadmin ;

use App\Models\Visitor;

class VisitorRepo
{
 
    public function __invoke()
    {
       return Visitor::get();
    }

}