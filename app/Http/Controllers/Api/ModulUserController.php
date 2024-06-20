<?php

namespace App\Http\Controllers\Api;

use App\Models\Unit;
use App\Models\User;
use App\Models\Modul;
use App\Models\Section;
use App\Models\Material;
use App\Models\ModulUser;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ModulUserController extends Controller
{ use ApiResponse;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();      
        $section=Section::find($user->section_id);
        $materialAverage;
        $material=Material::where('section_id',$section->id)->get();
            foreach($material as $m){
                $sum=0;
                $count=0;
                $average=0;
                $unit=Unit::where('material_id',$m->id)->get();
                foreach($unit as $u){
                    $modul=Modul::where('unit_id',$u->id)->get();
                    foreach($modul as $mo){
                        $solution=ModulUser::where('user_id',$user->id)->get();
                        foreach($solution as $s){ 
                            if($s->percent > 0){
                                $sum+=$s->percent;
                                $count+=1;
                            }
                        }
                    }
                }
                if($count>0){
                    $average=round($sum/$count);
                }
                $materialAverage[$m->name]=$average;
            }
            return $materialAverage;
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
        //
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
        //
    }
    public function updateRate(Request $request)
    {
        $user = JWTAuth::user();
        $user = User::find($user->id);
        $modulId = $request->modul_id;  // Example modul ID
        $newPercent = $request->percent;  // New percent value
        $modul=Modul::find($modulId);
        //اذا كانت يوجد نسبة حل
        if ($user->userModuls()->wherePivot('modul_id', $modulId)->exists()) {
            // اذا كان نمط النموذج مفتوح
            if($modul->is_open){
                return $this->errorResponse('Record already exists for the given modul', 400);
            }
            //اذا كان نمط النموذج مغلق
            else{
                $modul_user=ModulUser::where('modul_id', $modulId)
                ->where('user_id',$user->id)
                ->get();
                // return $modul_user;
                $percent=$modul_user[0]->percent;
                //نسبة الحل ليست صفر اي قام بحله مسبقا
                if($percent !=0){
                    return $this->errorResponse('Record already exists for the given modul', 400);
                }      
                //اذا كانت نسبة الحل ليست صفر اي انه قام بفتحه مع حل
                else{
                    $modul_user[0]->update([
                    'percent' => $newPercent
                    ]);
                    return $this->successResponse($user->rate,"success",200);
                }
            }
        }
        else{
            $user->userModuls()->syncWithoutDetaching($modulId);
            $modul_user=ModulUser::where('modul_id', $modulId)
                ->where('user_id',$user->id)
                ->get();
            $modul_user[0]->update([
                'percent' => $newPercent
            ]);
            $new_rate=$request->new_rate;
            //زيادة عدد النقاط
            if($modul->is_open ){   
                $new_rate = ($user->rate) + $new_rate;
            }
            //انقاص عدد النقاط للملف المفتوح عند فتحه او حله لاول مرة
            else{
                $new_rate = ($user->rate) - $new_rate;
            }
            $user->update([
                'rate' => $new_rate
            ]);
        }
        return $this->successResponse($user->rate,"success",200);
    }
}
