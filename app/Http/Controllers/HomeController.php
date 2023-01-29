<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $brand_filters = $request->get('filter_brand');
        $color_filters = $request->get('filter_color');
        $productsMainQuery = Item::filter(request(['search']));


        if ($brand_filters) {
            $productsMainQuery->whereIn('marche', $brand_filters);
        }
        if ($color_filters) {
            $productsMainQuery->whereIn('colore', $color_filters);
        }

        $products = $productsMainQuery->paginate(12);

        $brands = Item::select('marche')
            ->distinct()
            ->get()
            ->take(20)
            ->map(function ($brand) {
                return $brand['marche'];
            })
            ->toArray();

        $colors = Item::select('colore')
            ->distinct()
            ->get()
            ->take(13)
            ->map(function ($color) {
                return $color['colore'];
            })
            ->toArray();

        return view('main.index', [

            'products' => $products,
            'brands' => $brands,
            'colors' => $colors
        ]);
    }

    public function show($item)
    {

        $item = Item::find($item);

        $category_ids = $item->categories->pluck('id')->toArray();

        $relatedProducts = Item::whereHas('categories', function ($query) use ($category_ids) {
            $query->whereIn('id', $category_ids);
        })->get()->take(4);

        return view('main.show', [
            'item' => $item,
            'related_products' => $relatedProducts
        ]);
    }

    public function mobile_menu_categories(Request $request)
    {
        $category_search = $request->get('category');
        if ($category_search) {
            $categories = Category::filter(request(['category']));
        } else
            $categories = Category::all()->take(10);

        return view('components.menu', $categories);
    }
}
