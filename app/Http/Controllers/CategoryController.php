<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;

class CategoryController extends Controller
{


    public function show($category_id)
    {

        $category = Category::find($category_id);

        $brand_filters = request()->get('filter_brand');

        $productsMainQuery = $category->items();
        if ($brand_filters) {
            $productsMainQuery->whereIn('marche', $brand_filters);
        }

        $items = $productsMainQuery->paginate(10);

        $brands = Item::select('marche')
            ->distinct()
            ->get()
            ->take(20)
            ->map(function ($brand) {
                return $brand['marche'];
            })
            ->toArray();


        return view('main.category', [
            'items' => $items,
            'brands' => $brands
        ]);
    }
}
