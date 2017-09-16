<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio as Portfolio;
use App\User as app_user;
use Auth;
use DB;

class PortfolioController extends Controller
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
     * Show the portfolio view.
     *
     * @return Response
     */
    public function show()
    {
        return view('portfolio.portfolio');
    }

    public function showdemo()
    {
        return view('demo');
    }

     public function showdetail($portfolio_id)
    {
         $port = DB::select("SELECT * FROM portfolios WHERE id= :id", ['id' => $portfolio_id]);
        return view('portfolio.details') -> with('port' , $port);
    }

    public function edit($portfolio_id)
    {
        //find the portfolio for this id from the database
        $port = DB::select("SELECT * FROM portfolios WHERE id= :id", ['id' => $portfolio_id]);
        return view('portfolio.edit') -> with('port', $port);
    }

    public function addportfolio()
    {
        return view('portfolio.add');
    }

    public function switchActivePortfolio(Request $request, $portfolio_id)
    {
        $portfolio = Portfolio::where('id', $portfolio_id)->first();
        abort_unless($request->user()->canAccessPortfolio($portfolio), 404);

        $request->user()->switchToPortfolio($portfolio);

        return back();
    }

    public function settingsportfolio()
    {
        return view('portfolio.settings');
    }

    public function addport(Request $request)
    {
        $user = Auth::user();
        $portfolio = new Portfolio;

        $portfolio -> name = $request -> input("name");
        
        $portfolio -> description = $request -> input("description");

        $portfolio -> domain = $request -> input("url");
       
        $name = Auth::user() -> name;        

        $user_id = DB::select('SELECT id FROM users WHERE name = :name', ['name' => $name]);

         foreach ($user_id as $uid) {            
            $own_id = $uid-> id;
            $portfolio -> owner_id = $own_id;
            $user -> portfolios() ->save($portfolio);
            return view("portfolio.portfolio");
        }
        //$user -> portfolios() ->save($portfolio);       

    }

    public function editPortfolio(Request $request, $portfolio_id){

        $name = $request -> input("name");
        $description = $request -> input("description");
        $domain = $request -> input("url");

        $save = DB::table('portfolios') -> where('id', $portfolio_id) -> update(['name' => $name, 'description' => $description, 'domain' => $domain]);

        if($save > 0){
            return view("portfolio.portfolio");
        }


    }


}
