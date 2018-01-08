<?php

namespace Laravelcrud\Crudfolder;
 
use App\Http\Controllers\Controller;
use Carbon\Carbon;
 
class CrudController extends Controller
{
 
    public function index($timezone)
    {
        echo Carbon::now($timezone)->toDateTimeString();
    }

    public function create()
    {
    	$productData['action'] = 'Add';
		return view('crudfolder::add', $productData);
    }

    public function modify($product_id)
    {
    	$productData['action'] = 'Edit';
    	$productData['product'] = ['product_id' => $product_id, 'product_name' => 'ABC', 'product_price' => 100];
		return view('crudfolder::add', $productData);
    }

    public function productlist()
    {
    	$productlist['products'] = [];

		return view('crudfolder::productlist', $productlist);
    }

}
