<?php

namespace Modules\Device\Http\Services;

use Modules\Category\Entities\Model as Category;
use Modules\Device\Entities\Device;
use Modules\Device\Http\Controllers\DeviceController;

class DeviceService
{

    public function getCategoryDevicesSortBy($id, $searchBy=null)
    {
        return $categoryProducts = Category::query()->with(['devices'=>function($q) use ($searchBy){
            if ($searchBy){
                if ($searchBy == 'most_popular')
                {
                    $q->orderBy('most_popular', 'desc');
                }
                elseif ($searchBy == 'lowest_price'){
                    $q->orderBy('price', 'asc');
                }
                elseif ($searchBy == 'highest_price'){
                    $q->orderBy('price', 'desc');
                }
                elseif ($searchBy == 'newest'){
                    $q->orderBy('created_at', 'desc');
                }
            }
            else{
                $q->orderBy('created_at', 'desc');
            }
        }])->findOrFail($id);
    }


    public function getDevicesSortBy($searchBy=null)
    {
         $products = Device::query();

            if ($searchBy){
                if ($searchBy == 'most_popular')
                {
                    $products->orderBy('most_popular', 'desc');
                }
                elseif ($searchBy == 'lowest_price'){
                    $products->orderBy('price', 'asc');
                }
                elseif ($searchBy == 'highest_price'){
                    $products->orderBy('price', 'desc');
                }
                elseif ($searchBy == 'newest'){
                    $products->orderBy('created_at', 'desc');
                }
            }
            else{
                $products->orderBy('created_at', 'desc');
            }
        return $products->get();
    }



} //end of class