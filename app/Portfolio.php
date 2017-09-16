<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    /**
     * Get the owner of the team.
     */
    public function owner()
    {
        return $this->belongsTo(User::Class, 'owner_id');
    }

    public function users(){
        return $this->belongsToMany(
            User::Class, 'portfolio_user', 'portfolio_id', 'user_id');
    }

    public function tokens(){
        return $this->hasMany(Token::Class);
    }

    public function campaigns(){
        return $this->hasMany(Campaign::Class);
    }

    public function hasCampaigns(){
        return count($this->campaigns) >0;
    }

    public function hasCampaign($campaign){
        return $this->campaigns->contains($campaign);
    }
}
