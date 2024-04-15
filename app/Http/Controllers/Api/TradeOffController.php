<?php

namespace App\Http\Controllers\Api;

use App\Models\TradeOff;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\TradeOffResource;

class TradeOffController extends Controller
{
    use ApiResponse;
    public function index()
    {
        $trade_url=TradeOff::all();
        return $this->successresponse(TradeOffResource::collection($trade_url), 'Trade Off Showed Successfully', 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $trade_url=TradeOff::find($id);
        return $this->successresponse(TradeOffResource::collection($trade_url), 'success reply', 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $trade=TradeOff::find($id);
        $trade->delete();
        return $this->successResponse(null, 'Term has been deleted successfully.');
    }
    public function get_section_trade($section_id)
    {
        $trade=TradeOff::where('section_id',$section_id)->get();
        return $this->successresponse(TradeOffResource::collection($trade),'success reply', 200);
        
    }
    
}
