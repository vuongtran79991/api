<?php
use Illuminate\Support\Str;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('taobang', function () {
    Schema::create('loaisp', function($table)
    {
        $table->increments('id');
        $table->string('ten', 200);


    });
    echo " thanh cong";
});
Route::get('/dn',function (){
    return view('login');
} );
Route::get('thu', function () {
    return view('success');
});
Route::post('login','AuthController@login')->name('login');

Route::get('logout','AuthController@logout');

Route::group(['middleware'=>  ['web']], function () {
    Route::get('/session', function () {
        Session::put('Khoahoc', 'laravel');
        Session::put('Laptrinh', 'web');
        echo "Done";
        echo "<br>";
        Session::flash('mess', 'hello');
        echo Session::get('mess');
        //Session::flush();
        // Session::forget('Khoahoc');
        //echo Session::get('Khoahoc');
//        if(Session::has('Khoahoc'))
//            echo "Da co session";
//        else
//            echo " khong ton tai";

    });
    Route::get('session/flash', function () {
        echo Session::get('mess');
    });
});
Route::get('Call','MyController@hello');
Route::get('thamso/{ten}','MyController@khoahoc');
Route::get('Route1',['as'=>'MyRoute', function () {
    echo " xin chao ca ban";
}]);
Route::get('request', 'MyController@GetURL');
//send and receive data with request
Route::get('getForm', function () {
    return view('postForm');
});
Route::post('postForm',['as'=>'postForm','uses'=>'MyController@postForm']);
//cookie
Route::get('setCookie','MyController@setCookie');
Route::get('getCookie','MyController@getCookie');
//upload File
Route::get('upload',function (){
    return view('postFile');
});
Route::post('postFile',['as'=>'postFile','uses'=>'MyController@postFile']);

//json
Route::get('getJson','MyController@getJson');
//view
Route::get('Time/{t}','MyController@Time');
View::share('Khoahoc', 'Laravel');
//blade template
Route::get('blade', function () {
    return view('pages/laravel');
});
Route::get('bladetemplate/{str}','MyController@blade');
// Schema
Route::get('lienketbang', function () {
    Schema::create('sanpham', function($table)
    {
        $table->increments('id');
        $table->string('ten');
        $table->float('gia');
        $table->integer('soluong')->default(0);
        $table->integer('id_loaisanpham')->unsigned();
            $table->foreign('id_loaisanpham')->references('id')->on('loaisp');
    });
    echo " thanh cong";
});
//queryBuilder
Route::get('qb/get', function () {
    $data = DB::table('users')->get();
    //var_dump($data);
    foreach ($data as $row){
        foreach ($row as $key=>$value)
        {
            echo $key.":".$value."<br>";
        }
        echo"<hr>";
    }
});
//select*from users where id= 2
Route::get('qb/where', function () {
    $data = DB::table('users')->where('id','=',2)->get();
    //var_dump($data);
    foreach ($data as $row){
        foreach ($row as $key=>$value)
        {
            echo $key.":".$value."<br>";
        }
        echo"<hr>";
    }
});
//select id,name,email..
Route::get('qb/select', function () {
    $data = DB::table('users')->select(['id','name','email'])->where('id',2)->get();
    foreach ($data as $row){
        foreach ($row as $key=>$value)
        {
            echo $key.":".$value."<br>";
        }
        echo"<hr>";
    }

});
//select name as ho ten from..
Route::get('qb/raw', function () {
    $data = DB::table('users')->select(DB::raw('id,name as Hoten,email'))->where('id',2)->get();
    foreach ($data as $row){
        foreach ($row as $key=>$value)
        {
            echo $key.":".$value."<br>";
        }
        echo"<hr>";
    }

});
//orderby
//limit form 2 obj , include 5 obj
Route::get('qb/orderby', function () {
    $data = DB::table('users')->select(DB::raw('id,name as Hoten,email'))
        ->where('id','>=',1)->orderBy('id','desc')->skip(1)->take(5)->get();
    foreach ($data as $row){
        foreach ($row as $key=>$value)
        {
            echo $key.":".$value."<br>";
        }
        echo"<hr>";
    }

});
//count
Route::get('qb/count', function () {
    $data = DB::table('users')->count();
    echo $data;

});
//avg
Route::get('qb/avg', function () {
    $data = DB::table('users')->avg('id');
    echo $data;

});
//max
Route::get('qb/max', function () {
    $data = DB::table('users')->min('id');
    echo $data;

});
//update
Route::get('qb/update', function () {
    DB::table('users')->where('id',1)->update(['name'=>'vuong']);
    echo "Updated";

});
//insert
Route::get('qb/insert', function () {
    DB::table('users')->insert([
        ['name'=>'Anh','email'=>str_random(5).'@gmail.com','password'=>bcrypt(123)],
        ['name'=>'Linh','email'=>str_random(5).'@gmail.com','password'=>bcrypt(123)],
        ['name'=>'Hanh','email'=>str_random(5).'@gmail.com','password'=>bcrypt(123)],
    ]);
    echo "Insert is done";

});
//delete
Route::get('qb/delete', function () {
    DB::table('users')->where('id','=',4)->delete();
    echo " Delete is done";
    
});
//pagination
Route::get('tin', 'TinController@index');

Route::get('model/select', function () {
    $data=App\Walter::all()->toJson();
    echo "<pre>";
    print_r($data);
    echo "</pre>";
});
Route::get('model/select-id', function () {
    $data=App\Walter::findOrFail(2)->toArray();
    echo "<pre>";
    print_r($data);
    echo "</pre>";
});
Route::get('model/where', function () {
    $data=App\Walter::where('giatien','>=',2000)->get()->toArray();
    echo "<pre>";
    print_r($data);
    echo "</pre>";
});
Route::get('model/take', function () {
    $data=App\Walter::where('giatien',1000)->select(['giatien','monhoc'])->take(3)->get()->toArray();
    echo "<pre>";
    print_r($data);
    echo "</pre>";
});
Route::get('model/count', function () {
    $data=App\Walter::all()->count();
    echo "<pre>";
    print_r($data);
    echo "</pre>";
});
Route::get('model/raw', function (App\Walter $walter) {
    $data=$walter::whereRaw('giatien=?',[1000])->get()->toArray();
    echo "<pre>";
    print_r($data);
    echo "</pre>";
});
Route::get('model/insert', function () {
    $walter = new App\Walter;
    $walter->monhoc = 'Nghi hoc';
    $walter->giatien = 5000;
    $walter->giangvien='Vuong';
    $walter->save();
    echo "Finish";

});
Route::get('model/update', function () {
    $walter = App\Walter::find(2);
    $walter->giatien=10000;
    $walter->save();
    echo "Finish";

});
Route::get('model/delete', function () {
    App\Walter::destroy(2);

    echo "Finish";

});
Route::get('relation/one-many-1', function () {
    $data= App\product::find(1)->images()->get()->toArray();
    echo "<pre>";
    print_r($data);
    echo "</pre>";
});
Route::get('relation/one-many-2', function () {
    $data= App\image::find(9)->product()->get()->toArray();
    echo "<pre>";
    print_r($data);
    echo "</pre>";
});
Route::get('relation/many-many-1', function () {
    $data = App\car::find(1)->color()->select('name')->get()->toArray();
    echo "<pre>";
    print_r($data);
    echo "</pre>";
});
Route::get('relation/many-many-2', function () {
    $data = App\colors::find(3)->car()->select('name')->get()->toArray();
    echo "<pre>";
    print_r($data);
    echo "</pre>";
});
Route::get('authen/login',['as'=>'getLogin','uses'=>'ThanhVien1Controller@getLogin']);
Route::post('authen/login',['as'=>'postLogin','uses'=>'ThanhVien1Controller@postLogin']);

//Restfull
Route::resource('student','StudenController');
//relations
Route::get('relation', function () {
    $artical = \App\articles::all();
    return  View::make('artical')->with('artical',$artical);
//    $data = App\articles::find(1)->user()->select('name')->get()->toArray();
//    echo "<pre>";
//    print_r($data);
//    echo "</pre>";
});
//validation
Route::get('post/create', 'PostController@create')->name('post');
Route::post('post/create', 'PostController@store')->name('post');
//
Route::get('valid', function () {
    return view('test');
});
//restful api
Route::get('api','Youtube@index');

Route::get('collection',function (){
//    $array=collect(['vuong','walter','abc','def',null])->map(function ($name){
//        return strtoupper($name);
//    });
//    dd($array);
//    $products = App\StudentModel::all();
//    dd($product->chunk(3));
//    return view('welcome',compact('products'));
//    $collection1 = collect(['name', 'age']);
//    $collection2 = collect(['George', '29']);
//    $combined = $collection1->combine($collection2);
//
//    $combined->all();
//    dd($combined);
    $product = App\product::find(1);

    return (string) $product;
});

//API
Route::apiResource('APIS','APIController');
Route::group(['prefix'=>'APIS'],function (){
    Route::apiResource('{API}/reviews','ReviewController');
});
