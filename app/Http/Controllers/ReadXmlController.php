<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Gallery;
use App\Models\Category;
use Illuminate\Http\Request;

class ReadXmlController extends Controller
{
    public function index(Request $req)
    {
        // if ($req->isMethod("POST")) {
        set_time_limit(120);
        $xml = simplexml_load_file(storage_path('app/xml/dentsu-feed.xml'), 'SimpleXMLElement', LIBXML_NOCDATA);
        $json = json_encode($xml);
        $array = json_decode($json, TRUE);
        foreach ($array['channel']['item'] as $item) {
            foreach ($item as $key => $attribute) {
                if (!$attribute)
                    $item[$key] = '';
            }
            //dd($item);
            $newItem = new Item();
            $newItem->id = $item['id'];
            $newItem->mpn = $item['mpn'] ?? '';
            $newItem->price = (float)$item['price'] ?? '';
            $newItem->sale_price = $item['sale_price'] ?? '';
            $newItem->vip_price = $item['vip_price'] ?? '';
            $newItem->stock = $item['stock'] ?? '';
            $newItem->availability = $item['availability'] ?? '';
            $newItem->taglia = $item['taglia'] ?? '';
            $newItem->parent_id = $item['parent_id'] ?? '';
            $newItem->title = $item['title'] ?? '';
            $newItem->description = $item['description'] ?? '';
            $newItem->link = $item['link'] ?? '';
            $newItem->image_link = $item['image_link'] ?? '';
            $newItem->product_type = $item['product_type'] ?? '';
            $newItem->eta = $item['eta'] ?? '';
            $newItem->marche = $item['marche'] ?? '';
            $newItem->genere = $item['genere'] ?? '';
            $newItem->personaggi = $item['personaggi'] ?? '';
            $newItem->colore = $item['colore'] ?? '';
            $newItem->save();


            if (isset($item['gallery']['image']) && is_array($item['gallery']['image'])) {
                foreach ($item['gallery']['image'] as $image) {
                    $gallery = new Gallery();
                    $gallery->image = $image;
                    $newItem->gallery()->save($gallery);
                }
            }

            if (isset($item['categories']['list']) && is_array($item['categories']['list'])) {
                foreach ($item['categories']['list'] as $category) {
                    if (isset($category['id'])) {
                        $newCategory = Category::firstOrCreate(
                            ['id' =>  $category['id']],
                            [
                                'id' =>  $category['id'],
                                'name' => $category['name']
                            ]
                        );
                        $newItem->categories()->attach($newCategory);
                    }
                }
            }
        }
    }
}
