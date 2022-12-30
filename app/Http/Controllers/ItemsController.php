<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemsController extends Controller
{
    public function index()
    {
        $items = Item::latest()->paginate(20);

        return view('index', compact('items'));
    }

    public function search(Request $request)
    {
        $query = Item::query();
        $category_id = $request->category;
        $maker_id = $request->maker;
        $keyword = $request->keyword;
        $from_num = $request->from;
        $to_num = $request->to;
        $order = $request->order;

        if (isset($category_id)) {
            $query->where('category_id', $category_id);
        }

        if (isset($maker_id)) {
            $query->where('maker_id', $maker_id);
        }

        if (isset($keyword)) {
            $query->where('name', $keyword);
        }

        if (isset($from_num, $to_num)) {
            $query->whereBetween('price', [$from_num, $to_num]);
        } elseif (isset($from_num)) {
            $query->where('price', '>=', $from_num);
        } elseif (isset($to_num)) {
            $query->where('price', '<=', $to_num);
        }

        if (isset($order)) {
            if ($order == 1) {
                $query->orderBy('created_at', 'desc');
            } elseif ($order == 2) {
                $query->orderBy('price', 'desc');
            }
        }

        $items = $query->paginate(20);

        return view('search', compact('items'));
    }
}
