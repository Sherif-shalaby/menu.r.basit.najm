<?php

namespace App\Http\Controllers;

use App\Models\DiningTable;
use App\Models\Offer;
use App\Models\ProductClass;
use App\Models\Product;
use App\Models\Store;
use App\Models\System;
use App\Utils\CartUtil;
use App\Utils\Util;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    /**
     * All Utils instance.
     *
     */
    protected $cartUtil;
    protected $commonUtil;

    /**
     * Constructor
     *
     * @param Util $cartUtil
     * @return void
     */
    public function __construct(CartUtil $cartUtil, Util $commonUtil)
    {
        $this->cartUtil = $cartUtil;
        $this->commonUtil = $commonUtil;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homepage_category_carousel = System::getProperty('homepage_category_carousel');
        $categories = ProductClass::wherehas('products',function ($q){
            $q->where('active', 1)->orderBy('sort')->orderBy('created_at','desc');
        })->with(['products'=>function ($q){
            $q->where('active', 1)->orderBy('sort')->orderBy('created_at','desc');
        }])->orderBy('sort')
            ->orderBy('created_at','desc')->where('status', 1)
            ->get();
            // ->where('name', '!=', 'Extras')
        $month_array = $this->commonUtil->getMonthsArray();
        $dining_tables = DiningTable::pluck('name', 'id');
        return view('front.index')->with(compact(
            'categories',
            'month_array',
            'dining_tables',
            'homepage_category_carousel',
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
