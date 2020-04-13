<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\donateItem;
class DonateitemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('donateItem');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input=$request->all();

        $donateitem=new donateItem;

         if ($file= $request->file('image')) 
         {
              $name= $file->getClientOriginalName();
             $file->move( 'images/products',$name);
             $input['image']=$name;


        // donateItem::create($input);
          }

       $donateitem->image = $name;

        
        $donateitem->product_category    = $request->product_category;
        $donateitem->title = $request->title;
        $donateitem->desc       = $request->desc ;
        $donateitem->quantity     = $request->quantity;
        $donateitem->condition     = $request->condition ;  

        $donateitem->save();
        
         return redirect('finishdonate');

 

        
    

        //  if($file=$request->file('image'))
        //  {
        //         $name=$request->file('image')->getClientOriginalName();
        //         $file=move_uploaded_file($name, 'images');
        //         $input['image']=$name;
        //          $donateitem->image = $request->image;

        //  }

        // $donateitem->save();



 



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
