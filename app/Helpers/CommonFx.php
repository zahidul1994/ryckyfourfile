<?php
namespace App\Helpers;
use App\Models\Area;
use App\Models\Country;
use App\Models\Package;
use App\Models\Smssent;
use App\Models\District;
use App\Models\Division;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\Payby;
use App\Models\Printsetting;
use App\Models\Rank;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Request; 

class CommonFx{

public static function Rankinfo(){
return Rank::pluck('rankname','id');

}
public static function Divisionname(){
    return Division::pluck('division','id');
    
    }
    public static function Districtname(){
        return District::pluck('district','id');
        
        }
    
    
}
