<?php

namespace App\Repositories;

use App\User;


class UserReposity
{
    public function selectAll()
    {
        return User::join('groups', 'users.group_id', '=', 'groups.id')
            ->join('project_user', 'users.id', '=', 'project_user.user_id')
            ->select('project_user.project_id')
            ->join('projects', 'project_user.project_id', '=', 'projects.id')
            ->select('users.*', 'groups.name', 'projects.name as project');
    }

    public function getOrder($nbrPages)
    {
        return $this->selectAll()->paginate($nbrPages);
    }

}



