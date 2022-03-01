<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Snapshot;
use App\Models\Thumbnail;

class FunctionController extends Controller
{
    public function landingPage(){
        $thumbnails = Thumbnail::get();
        $snapshots = Snapshot::get();
        $products = Product::orderBy('count', 'DESC')->paginate(5);

        return view('landingPage')->with(['thumbnails' => $thumbnails,
                                          'snapshots' => $snapshots,
                                          'products' => $products]);
    }


    // Product

    public function indexProduct(){
        return view('dashboard.product.index');
    }

    public function readProduct(){
        $products = Product::get();
        return view('dashboard.product.read')->with(['products' => $products]);
    }

    public function createProduct(){
        return view('dashboard.product.create');
    }

    public function storeProduct(Request $request){
        $image = $request->name.'.'.$request->image->extension();
        $path =  $request->image->move(public_path('/image/product/'),$image);

        $product = Product::create([
            'name' => $request->name,
            'category' => $request->category,
            'description' => $request->description,
            'price' => $request->price,
            'count' => 0,
            'path' => '/image/product/'.$image,
        ]);

        return $product;
    }

    public function editProduct($id){
        $product = Product::where('id','=',$id)->first();

        return view('dashboard.product.edit')->with(['product' => $product]);
    }

    public function updateProduct(Request $request, $id){
        if(isset($request->image)){
            $image = $request->name.'.'.$request->image->extension();
            $path =  $request->image->move(public_path('/image/product/'),$image);
    
            $product = Product::find($id)->update([
                'name' => $request->name,
                'category' => $request->category,
                'description' => $request->description,
                'price' => $request->price,
                'path' => '/image/product/'.$image,
            ]);
    
            return $product;
        }

        $product = Product::find($id)->update([
            'name' => $request->name,
            'category' => $request->category,
            'description' => $request->description,
            'price' => $request->price,
            'path' => $request->path,
        ]);

        return $product;
    }

    public function deleteProduct($id){
        Product::find($id)->delete();
    }

    // End Product 

    // Snapshot

    public function indexSnapshot(){
        return view('dashboard.snapshot.index');
    }

    public function readSnapshot(){
        $snapshots = Snapshot::get();
        return view('dashboard.snapshot.read')->with(['snapshots' => $snapshots]);
    }

    public function createSnapshot(){
        return view('dashboard.snapshot.create');
    }

    public function storeSnapshot(Request $request){
        $image = $request->name.'.'.$request->image->extension();
        $path =  $request->image->move(public_path('/image/snapshot/'),$image);

        $snapshot = Snapshot::create([
            'name' => $request->name,
            'path' => '/image/snapshot/'.$image,
        ]);

        return $snapshot;

        return $snapshot;
    }

    public function editSnapshot($id){
        $snapshot = Snapshot::where('id','=',$id)->first();

        return view('dashboard.snapshot.edit')->with(['snapshot' => $snapshot]);
    }

    public function updateSnapshot(Request $request, $id){
        if(isset($request->image)){
            $image = $request->name.'.'.$request->image->extension();
            $path =  $request->image->move(public_path('/image/snapshot/'),$image);
    
            $snapshot = Snapshot::find($id)->update([
                'name' => $request->name,
                'path' => '/image/snapshot/'.$image,
            ]);
    
            return $snapshot;
        }

        $snapshot = Snapshot::find($id)->update([
            'name' => $request->name,
            'path' => $request->path,
        ]);

        return $snapshot;
    }

    public function deleteSnapshot($id){
        Snapshot::find($id)->delete();
    }

    // End Snapshot

    // Thumbnail

    public function indexThumbnail(){
        return view('dashboard.thumbnail.index');
    }

    public function readThumbnail(){
        $thumbnails = Thumbnail::get();
        return view('dashboard.thumbnail.read')->with(['thumbnails' => $thumbnails]);
    }

    public function createThumbnail(){
        return view('dashboard.thumbnail.create');
    }

    public function storeThumbnail(Request $request){
        $image = $request->name.'.'.$request->image->extension();
        $path =  $request->image->move(public_path('/image/thumbnail/'),$image);

        $thumbnail = Thumbnail::create([
            'name' => $request->name,
            'path' => '/image/thumbnail/'.$image,
        ]);

        return $thumbnail;
    }

    public function editThumbnail($id){
        $thumbnail = Thumbnail::where('id','=',$id)->first();

        return view('dashboard.thumbnail.edit')->with(['thumbnail' => $thumbnail]);
    }

    public function updateThumbnail(Request $request, $id){
        if(isset($request->image)){
            $image = $request->name.'.'.$request->image->extension();
            $path =  $request->image->move(public_path('/image/thumbnail/'),$image);
    
            $thumbnail = Thumbnail::find($id)->update([
                'name' => $request->name,
                'path' => '/image/thumbnail/'.$image,
            ]);
    
            return $thumbnail;
        }

        $thumbnail = Thumbnail::find($id)->update([
            'name' => $request->name,
            'path' => $request->path,
        ]);

        return $thumbnail;
    }

    public function deleteThumbnail($id){
        Thumbnail::find($id)->delete();
    }

    // End Thumbnail
}
