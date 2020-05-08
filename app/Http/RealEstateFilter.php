<?php


namespace App\Http;


use App\RealEstate;

class RealEstateFilter
{

    public function ApplyFilters($filters)
    {

        $RealEstates = RealEstate::query();

        if ($filters->location)
            $RealEstates->where('location','LIKE',$filters->location);
        $filters->session()->put('location', $filters->location);

        if($filters->akar_type)
            $RealEstates->where('akar_type','LIKE',$filters->akar_type);
        $filters->session()->put('akar_type', $filters->akar_type);

        if($filters->StartValue && $filters->EndValue){
            $RealEstates->where('price','>=',$filters->StartValue);
            $filters->session()->put('StartValue', $filters->StartValue);
            $RealEstates->where('price','<=',$filters->EndValue);
            $filters->session()->put('EndValue', $filters->EndValue);
        }

        if($filters->StartValue)
            $RealEstates->where('price','>=',$filters->StartValue);
        $filters->session()->put('StartValue', $filters->StartValue);

        if($filters->EndValue)
            $RealEstates->where('price','<=',$filters->EndValue);
        $filters->session()->put('EndValue', $filters->EndValue);

        if($filters->StartSize && $filters->EndSize){
            $RealEstates->where('size', '>=', $filters->StartSize);
            $filters->session()->put('StartSize', $filters->StartSize);
            $RealEstates->where('size', '<=', $filters->EndSize);
            $filters->session()->put('EndSize', $filters->EndSize);
        }
        else if($filters->StartSize) {
            $RealEstates->where('size', '>=', $filters->StartSize);
            $filters->session()->put('StartSize', $filters->StartSize);
        }
        else if($filters->EndSize) {
            $RealEstates->where('size', '<=', $filters->EndSize);
            $filters->session()->put('EndSize', $filters->EndSize);
        }
      return  $RealEstates = $RealEstates->paginate(10);
    }
}
