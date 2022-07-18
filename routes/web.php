<?php

use App\Http\Controllers\propertiesController;
use App\Models\interest;
use App\Models\pic;
use App\Models\property;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::post('/add', function (Request $request) {

    request()->validate([
        'title' => 'required|unique:properties',
        'bedrooms' => 'required',
        'bathrooms' => 'required',
        'desc' => 'required|min:100|max:2400',
        'price' => 'required',
        'area' => 'required',
        'type' => 'required',
        'image' => 'required',




    ]);
    //$user = Auth::user();


    $newU = new property();

    $newU->title = request('title');
    $newU->bedrooms = request('bedrooms');
    $newU->bathrooms = request('bathrooms');
    $newU->desc = request('desc');
    $newU->area = request('area');
    $newU->price = request('price');
    $newU->type = request('type');
    $newU->for = request('for');
    $newU->owner_id = Auth::user()->id;
    $newU->save();

    $data= new pic();
    $data1= new pic();
    $data2= new pic();
    $data3= new pic();
    $data4= new pic();

    if($request->file('image')){
        $file= $request->file('image');

        $filename= date('YmdHi').$file->getClientOriginalName();
        $file-> move(public_path('public/Image'), $filename);
        $data['link']= $filename;
        $data['linker_id']=$newU->id;
    }
    $data->save();
    if(request('pic2')!=null){
    if($request->file('pic2')){
        $file= $request->file('pic2');

        $filename= date('YmdHi').$file->getClientOriginalName();
        $file-> move(public_path('public/Image'), $filename);
        $data1['link']= $filename;
        $data1['linker_id']=$newU->id;
    }
    $data1->save();
    }

    if(request('pic3')!=null){
    if($request->file('pic3')){
        $file= $request->file('pic3');

        $filename= date('YmdHi').$file->getClientOriginalName();
        $file-> move(public_path('public/Image'), $filename);
        $data2['link']= $filename;
        $data2['linker_id']=$newU->id;
    }
    $data2->save();
    }
    if(request('pic4')!=null){
    if($request->file('pic4')){
        $file= $request->file('pic4');

        $filename= date('YmdHi').$file->getClientOriginalName();
        $file-> move(public_path('public/Image'), $filename);
        $data3['link']= $filename;
        $data3['linker_id']=$newU->id;
    }
    $data3->save();
    }
    if(request('pic5')!=null){
    if($request->file('pic5')){
        $file= $request->file('pic5');

        $filename= date('YmdHi').$file->getClientOriginalName();
        $file-> move(public_path('public/Image'), $filename);
        $data4['link']= $filename;
        $data4['linker_id']=$newU->id;
    }
    $data4->save();
    }



    return redirect("index");
});
Route::get('/addpic', function () {
    return view('addpic');
});
Route::get('/addp', function () {
    return view('addproperty');
})->middleware('owner');

Route::get('/profile', function () {
    if(Auth::user()->role == 1){
        return redirect("profile-admin");
    }
    elseif(Auth::user()->role == 2){
        return redirect("profile-owner");
    }
    elseif(Auth::user()->role == 3){

        return redirect("profile-user");
    }

})->middleware('auth');

Route::get('/profile-admin', function () {
    $props = property::where('active', '=', 0)
    ->paginate(9);
    return view('profile-admin', ["props"=>$props]);

})->middleware('admin');
Route::get('/profile-owner', function () {
    return view('profile-owner');
})->middleware('owner');
Route::get('/profile-user', function () {
    $props = property::all();
    $interests = DB::table('interests')->where('user_id', "=", Auth::user()->id);

    return view('profile', ["props"=>$props,  "interests"=>$interests]);
})->middleware('user');

Route::post('/updateprofile', function (request $request) {
    $user = Auth::user();
    $request->validate([
        'name' => [ 'string','min:3', 'max:255'],
         //'email' => [ 'string', 'email', 'max:255', 'unique:users,email,' . $user->id . ',email',

        // 'contact'=>[ 'min:13','max:13'



    ]);


if(request('image')!=null){
    if(null != $user->pic){
        $user->pic->delete();
    }
    $file= $request->file('image');

    $filename= date('YmdHi').$file->getClientOriginalName();
    $file-> move(public_path('public/Image'), $filename);


$pic = pic::create([
    'link' => $filename,
    'linker_id'=>$user->id,
]);
$pic->save();
}
$user->name = request('name');
$user->contact = request('contact');
$user->email = request('email');

$user->save();
    return redirect()->back();
})->middleware('auth');




Route::get('/agent-single', function () {
    return view('agent-single');
});

Route::get('/agents-grid', function () {
    return view('agents-grid');
});

Route::get('/blog-grid', function () {
    return view('blog-grid');
});

Route::get('/blog-single', function () {
    return view('blog-single');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/signup', function () {
    return view('signup');
})->middleware('guest');



Route::get('/', [propertiesController::class, 'index'])->name('home');

Route::get('/index', function () {
    return redirect('/');
});

Route::get('/property-grid', function () {
    return view('property-grid');
});

Route::get('/property-single/{id}', function ($id) {
    $prop = property::find($id);


    if(null != Auth::user()){
    $interests = DB::table('interests')->where('property_id', "=", $id)->where('user_id', "=", Auth::user()->id)->first();
}


    return view('property-single',["prop"=>$prop]);
});

Route::get('property-single/activate/{id}', function ($id) {
    $prop = property::find($id);
    $prop->active = 1;
    $prop->save();

    return redirect()->back();
});

Route::get('property-single/deactivate/{id}', function ($id) {
    $prop = property::find($id);
    $prop->active = 0;
    $prop->save();
    return redirect()->back();
});

Route::get('property-single/edit/{id}', function ($id) {
    $prop = property::find($id);
    return redirect("/");
})->middleware("ao");


Route::get('property-single/addfav/{id}', function ($id) {
    $i = new interest();
    $i->property_id = $id;
    $i->user_id = Auth::user()->id;
    $i->save();
    return redirect()->back();
});

Route::get('property-single/removefav/{id}', function ($id) {
    $i = DB::table('interests')->where('property_id', "=", $id)->where('user_id', "=", Auth::user()->id);

    $i->delete();
    return redirect()->back();
});





Route::get('property-single/delete/{id}', function ($id) {
    $prop = property::find($id);
    $prop->delete();
    return redirect("/");
})->middleware("ao");



require __DIR__.'/auth.php';
