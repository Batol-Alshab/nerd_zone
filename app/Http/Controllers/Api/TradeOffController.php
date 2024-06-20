<?php

namespace App\Http\Controllers\Api;

use App\Models\TradeOff;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\TradeOffResource;

class TradeOffController extends Controller
{
    use ApiResponse;
    use FileUploader;
    public function index()
    {
        $trade_off=TradeOff::all();
        return $this->successresponse(TradeOffResource::collection($trade_off), 'تم عرض كل المفاضلات بنجاح', 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $validatedata=$request->validate([
                'name'=>'required|string',
                'url'=>'required|mimes:pdf|max:8000',
                'section_id'=>'required|exists:sections,id'
            ]);
            $path=$this->uploadFile($request,'file/','tradeOffs/');
            $trade_off=TradeOff::create([
                'name' => $request->name,
                'url' => $path,
                'section_id'=>$request->section_id
            ]);
            return $this->successResponse(new TradeOffResource($trade_off), 'تم إضافة مفاضلة بنجاح', 201);
    
        }catch(\Exception $e){
            return $this->errorresponse($e->getMessage(), 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try{
            $trade_off = TradeOff::find($id);
            if($trade_off){
                return $this->successresponse(new TradeOffResource($trade_off), 'تم عرض المفاضلة بنجاح', 200);
            }else{
                return $this->errorResponse('المفاضلة الذي تبحث عنها غير موجودة', 404);
            }
        }catch(\Exception $e){
            return $this->errorresponse($e->getMessage(),400);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try{
            $trade_off = TradeOff::find($id);
            if($trade_off){
                $validatedata = $request->validate([
                    'name' => 'nullable|string',
                    'url' => 'nullable|mimes:pdf|max:10240',
                    'section_id' => 'nullable|exists:sections,id'
                ]);
                $path = $this->uploadFile($request, 'file/','tradeOffs/');
                $trade_off->update([
                    'name'=>($request->name) ? $request->name : $trade_off->name,
                    'url'=>($request->url) ? $path : $trade_off->url,
                    'section_id'=>($request->section_id) ? $request->section_id : $trade_off->section_id
                ]);
                return $this->successresponse($trade_off, 'تم تعديل الدورة بنجاح', 200);
            }else{
                return $this->errorResponse('الدورة الذي تبحث عنها غير موجودة', 404);
            }
        }catch(\Exception $e){
            return $this->errorResponse($e->getMessage(), 400);
        }  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
            $trade_off=TradeOff::find($id);
            if($trade_off){
                $trade_off->delete();
                return $this->successResponse(null, 'تم حذف المفاضلة بنجاح');
            }else{
                return $this->errorResponse('المفاضلة الذي تبحث عنها غير موجودة',404);
            }
        }catch(\Exception $e){
            return $this->errorresponse($e->getMessage(),400);
        }    
    }
    
    public function get_section_trade($section_id)
    {
        $trade_off=TradeOff::where('section_id',$section_id)->get();
        return $this->successresponse(TradeOffResource::collection($trade_off),'تم عرض كل مفاضلات فرع ', 200);
        
    }
    
}
