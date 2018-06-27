<?php

namespace App\Http\Controllers;

use App\Coin;
use Config\database;
use Illuminate\Http\Request;

class CoinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        
       $coins = Coin::all();

       /*
       $cmcap = array();

       foreach($coins as $coin) {
       $cmraw = file_get_contents('https://api.coinmarketcap.com/v1/ticker/'.$coin->name.'/');
       $cmarr = json_decode($cmraw);
       $cmcap[] = array_shift($cmarr);
       }
    
        */

    $cmraw = file_get_contents('https://api.coinmarketcap.com/v1/ticker/?limit=200');
    $cmcap = json_decode($cmraw);


      



      return view('/coins', compact('coins', 'cmcap'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $coin = new Coin;

        Coin::create([
        'name'     => request('name'),
        'symbol'   => request('symbol'),
        'balance'  => request('balance') 
       ]);

       return redirect('/coins');
 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Coin  $coin
     * @return \Illuminate\Http\Response
     */
    public function show(Coin $coin)
    {
        

       /*$selected_coin = DB::select('select * from coins where id = ?', [$coin]); */
       /*$selected_coin = Coin::findOrFail($coin);*/




        // OVDE JEBE SHOW metoda

        /*

        
       $collection = Coin::find($coin);

       dd($collection);
       
        */

       /*
       $selected_coin = array();
       foreach ($collection as $govno) {
        $selected_coin[] = $govno;

       }

       dd($govno['attributes']);

        */
        /*
       $cmcap = array();
       $cryptopia = array();
       $coinexchange = array();
       $gate = array();

       

       foreach($coins as $coin) {

        */
        


            /* vuce api sa coinmarket cap-a */

            /*
        $cmraw = file_get_contents('https://api.coinmarketcap.com/v1/ticker/'.$coin->name.'/');
        $cmarr = json_decode($cmraw);
        $cmcap[] = array_shift($cmarr);
            */

            /* vuce api sa kriptopije */

                /*
        $crylink = 'https://www.cryptopia.co.nz/api/GetMarket/'.$coin->symbol.'_USDT';
        $cryraw = file_get_contents($crylink);
        $cryarr = json_decode($cryraw);
        $cryptopia[] = array_shift($cryarr);
               
        }

       */

       /*return view('coin', compact('selected_coin'));*/

        /*
        $cmraw = file_get_contents('https://api.coinmarketcap.com/v1/ticker/'.$coin.'/');
        $cmarr = json_decode($cmraw);
        $cmcap = array_shift($cmarr);
       */

        return view('coin', compact('collection'));
       

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Coin  $coin
     * @return \Illuminate\Http\Response
     */
    public function edit(Coin $coin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Coin  $coin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coin $coin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Coin  $coin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coin $coin)
    {
        //
    }
}
