<?php
/**
 * Created by PhpStorm.
 * User: topikana
 * Date: 03/11/17
 * Time: 15:18
 */

namespace App\Repositories;


class SearchRepository
{
    public function scopeSearchByKeyword($query, $keyword)
    {
        if ($keyword!=''){
            $query->where(function ($query) use ($keyword){
                $query->where("lastname", "LIKE", "%$keyword%")
                    ->orWhere("email", "LIKE", "%$keyword%");
//                    ->orWhere("role", "LIKE", "%$keyword%")
//                    ->orWhere("groupe", "LIKE", "%$keyword%");
            });
        }
        return $query;
    }
}