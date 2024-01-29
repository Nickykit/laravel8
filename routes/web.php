<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/page1', function () {
    return "<h1>This is home page 1 </h1>!!!";
});


Route::get("/page2", function () {
    return "<h1>This is home page 2 </h1>";
});


Route::get("/page3", function () {
    return "<h1>This is home page 3 </h1>";
});


Route::get("/homepage", function () {
    return "<h1>This is home page</h1>";
});


Route::get("/blog/{id}", function ($id) {
    return "<h1>This is blog page : {$id} </h1>";
});


Route::get("/hello", function () {
    return view("hello");
});


Route::get("/gerrting", function () {

    $name = 'James';
    $last_name = 'Mars';
    return view("greeting", compact('name', 'last_name'));
});


Route::get("/gallery", function () {
    $ant = "https://cdn3.movieweb.com/i/article/Oi0Q2edcVVhs4p1UivwyyseezFkHsq/1107:50/Ant-Man-3-Talks-Michael-Douglas-Update.jpg";
    $bird = "https://images.indianexpress.com/2021/03/falcon-anthony-mackie-1200.jpg";
    $cat = "http://www.onyxtruth.com/wp-content/uploads/2017/06/black-panther-movie-onyx-truth.jpg";
    $god = "https://www.blackoutx.com/wp-content/uploads/2021/04/Thor.jpg";
    $spider = "https://free4kwallpapers.com/uploads/originals/2018/06/13/spiderman--wallpaper.jpg";

    return view("test/index", compact("ant", "bird", "cat", "god", "spider"));
});


Route::get("/gallery/ant", function () {
    $ant = "https://cdn3.movieweb.com/i/article/Oi0Q2edcVVhs4p1UivwyyseezFkHsq/1107:50/Ant-Man-3-Talks-Michael-Douglas-Update.jpg";
    return view("test/ant", compact("ant"));
});

Route::get("/gallery/bird", function () {
    $bird = "https://images.indianexpress.com/2021/03/falcon-anthony-mackie-1200.jpg";
    return view("test/bird", compact("bird"));
});

Route::get("/gallery/cat", function () {
    $cat = "http://www.onyxtruth.com/wp-content/uploads/2017/06/black-panther-movie-onyx-truth.jpg";
    return view("test/cat", compact("cat"));
});
Route::middleware(['auth'])->group(function () {
    Route::get("/teacher", function () {
        return view("teacher");
    });

    Route::get("/student", function () {
        return view("student");
    });
});
Route::get("/theme", function () {
    return view("theme");
});

// Route Template Inheritance
Route::get("/teacher/inheritance", function () {
    return view("teacher-inheritance");
});
Route::get("/student/inheritance", function () {
    return view("student-inheritance");
});
// Route Template Component
Route::get("/teacher/component", function () {
    return view("teacher-component");
});
Route::get("/student/component", function () {
    return view("student-component");
});

Route::get('study-question', function () {
    $questions = json_decode(file_get_contents("https://raw.githubusercontent.com/arc6828/cs/master/json/sci-mbti.json"));
    return view("study/question", compact('questions'));
})->name('study-question');

// Route::post('study-match', function (Request $request) {
//     $summary = ["CS" => 0, "IT" => 0, "DISE" => 0, "HE" => 0, "NU" => 0, "FB" => 0, "SET" => 0, "OHS" => 0];
//     $majors = [
//         "CS" => "วิทยาการคอมพิวเตอร์ (CS)",
//         "IT" => "เทคโนโลยีสารสนเทศ (IT)",
//         "DISE" => "นวัตกรรมดิจิทัลและวิศวกรรมซอฟต์แวร์ (DISE)",
//         "HE" => "คหกรรมศาสตร์ (HE)",
//         "NU" => "โภชนาการและการกำหนดอาหาร (NU)",
//         "FB" => "นวัตกรรมอาหารและเครื่องดื่มเพื่อสุขภาพ (FB)",
//         "SET" => "วิทยาศาสตร์และเทคโนโลยีสิ่งแวดล้อม (SET)",
//         "OHS" => "อาชีวอนามัยและความปลอดภัย (OHS)",
//     ];
//     foreach ($_POST as $key => $value) {
//         if (!str_contains($key, "flexRadioDefault")) continue;
//         [$code, $answer] = explode("-", $value);
//         if ($answer == "yes") {            // if-yes
//             $summary[$code] = isset($summary[$code]) ? $summary[$code] + 1 : 1;
//         } else {            // if-no
//             $summary[$code] = isset($summary[$code]) ? $summary[$code] + 0 : 0;
//         }
//     }
//     $codes = array_keys($summary);
//     $values = array_values($summary);

//     return view("study/match", compact('codes', 'values', 'majors'));
// })->name('study-match');
// Route Template Component
Route::get("/teacher/component", function () {
    return view("teacher-component");
});
Route::get("/student/component", function () {
    return view("student-component");
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
// Route::middleware(['auth'])->group(function () {
//     Route::middleware(['role:admin'])->group(function () {
//         Route::get('/teacher', function () {
//             return view('teacher/index');
//         })->middleware('auth', 'role:admin,teacher');

//         Route::resource('/covid19', 'Covid19Controller');
//     })->middleware('auth', 'role:admin,teacher');
// });

Route::resource('post', 'PostController');


Route::resource('post', PostController::class);