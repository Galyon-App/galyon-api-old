<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $table = "team";
    protected $connection = "erpat";

    public function get_teams($user_id) {
        return $this->whereRaw('FIND_IN_SET(?, heads)', [$user_id])
            ->where('deleted', '=', '0')
            ->select('id', 'title', 'description', 'heads', 'members')
            ->get();
    }

    public function get_members($team_id) {
        return $this->where( "id", "=", $team_id )
        ->get();
    }
}
