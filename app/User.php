<?php

namespace App;

use Laravel\Spark\User as SparkUser;
use Laravel\Spark\CanJoinTeams;



class User extends SparkUser
{
   
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
        'client_id',
        'status',
        'token',
        'trial_ends_at',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'authy_id',
        'country_code',
        'phone',
        'card_brand',
        'card_last_four',
        'card_country',
        'billing_address',
        'billing_address_line_2',
        'billing_city',
        'billing_zip',
        'billing_country',
        'extra_billing_information',
    ];



    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'trial_ends_at' => 'date',
        'uses_two_factor_auth' => 'boolean',
    ];

    public function roles(){
       return $this->belongsToMany('App\Role', 'role_user', 'user_id', 'role_id');
    }

    public function hasAnyRole($roles)
    {
        if(is_array($roles)){
            foreach($roles as $role){
                if($this->hasRole($role)){
                    return true;
                }
            }
        }else{
            if($this->hasRole($roles)){
                return true;
            }
        }

        return false;
    }

    public function hasRole($role){
        if($this->roles()->where('name', $role)->first()){
            return true;
        }

        return false;
    }
    public function portfolios(){
        return $this->belongsToMany(
            'App\Portfolio', 'portfolio_user', 'user_id', 'portfolio_id');
    }

    public function hasPortfolios()
    {
        return count($this->portfolios) > 0;
    }

    public function canAccessPortfolio($portfolio)
    {
        return $this->portfolios->contains($portfolio);
    }

    public function ownsPortfolio($portfolio)
    {
        return $this->id && $portfolio->owner_id && $this->id == $portfolio->owner_id;
    }

    public function ownsCurrentPortfolio()
    {
        return $this->id && $this->currentPortfolio()->owner_id && $this->id == $this->currentPortfolio()->owner_id;
    }

    public function ownedPortfolios()
    {
        return $this->portfolios()->where('owner_id', $this->getKey());
    }

    public function currentPortfolio()
    {
        if (is_null($this->current_portfolio_id) && $this->hasPortfolios()) {
            $this->switchToPortfolio($this->portfolios->first());

            return $this->currentPortfolio();
        } elseif (! is_null($this->current_portfolio_id)) {
            $currentPortfolio = $this->portfolios->find($this->current_portfolio_id);

            return $currentPortfolio ?: $this->refreshCurrentPortfolio();
        }
    }

    public function switchToPortfolio($portfolio)
    {
        if (! $this->canAccessPortfolio($portfolio)) {
            throw new InvalidArgumentException("The user does not have access to the given portfolio.");
        }

        $this->current_portfolio_id = $portfolio->id;
        $this->current_campaign_id = null;
        $this->save();
    }

    public function refreshCurrentPortfolio()
    {
        $this->current_portfolio_id = null;

        $this->save();

        return $this->currentPortfolio();
    }

    public function currentCampaign()
    {
        return $this->currentPortfolio()->campaigns->where('id', $this->current_campaign_id)->first();
    }

    public function switchToCampaign($campaign)
    {
        if(!$campaign){
            $this->current_campaign_id = null;
            $this->save();
            return;
        }
        elseif (! $this->currentPortfolio()->hasCampaign($campaign)){
            throw new InvalidArgumentException("The user does not have access to the given campaign from this portfolio.");
        }
        $this->current_campaign_id = $campaign->id;
        $this->save();
    }
}
