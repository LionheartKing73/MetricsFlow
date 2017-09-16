<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Campaign as Campaign;

class CampaignController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the campaign view.
     *
     * @return Response
     */
    public function show()
    {
        return view('campaign.campaign');
    }

    public function add()
    {
        return view('campaign.add');
    }

    public function switchActiveCampaign(Request $request, $campaign_id)
    {
        $campaign = Campaign::where('id', $campaign_id)->first();
        abort_unless($request->user()->currentPortfolio()->hasCampaign($campaign), 404);

        $request->user()->switchToCampaign($campaign);

        return back();
    }

    public function clearActiveCampaign(Request $request)
    {
        $request->user()->switchToCampaign(null);

        return back();
    }

    public function camsettings()
    {
        return view('campaign.settings');
    }
}
