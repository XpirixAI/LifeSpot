<?php

use App\Http\Controllers\AdmimController;
use App\Http\Controllers\Admin\ManagePostController;
use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\Admin\PriceContentController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\DocumentsController;
use App\Http\Controllers\GrowMyEstateController;
use App\Http\Controllers\HelpAreaController;
use App\Http\Controllers\HelpArticleController;
use App\Http\Controllers\HelpLifespotController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\MyestateController;
use App\Http\Controllers\MylifespotBeneficeriesController;
use App\Http\Controllers\MylifespotController;
use App\Http\Controllers\MylifespotDependentsController;
use App\Http\Controllers\MylifespotEducationController;
use App\Http\Controllers\MylifespotEmergencycontactsController;
use App\Http\Controllers\MylifespotHomeController;
use App\Http\Controllers\MylifespotLoremController;
use App\Http\Controllers\MylifespotLoremipsumController;
use App\Http\Controllers\MylifespotMilitaryController;
use App\Http\Controllers\MylifespotPersonalController;
use App\Http\Controllers\MylifespotPetsController;
use App\Http\Controllers\MylifespotPropertyController;
use App\Http\Controllers\MylifespotVolunteerController;
use App\Http\Controllers\MylifespotWorkController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\XpirixContentController;
use App\Http\Controllers\XpirixLandingPage;
use App\Http\Controllers\XpirixLandingPageController;
use App\Models\Category;
use App\Models\Mylifespot_Personal;
use App\Models\Post;
use App\Models\Price;
use App\Models\PriceContent;
use Database\Factories\MylifespotPetsFactory;
use Illuminate\Routing\ResourceRegistrar;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\XpirixContent;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session as FacadesSession;
use Symfony\Component\HttpFoundation\Session\Session as SessionSession;

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
// Route::resource('/posts',PostController::class)->only('index','show'); //Landing Page View


    /*  ---------------------------GUEST PUBLIC Access Routes --------------------------- */

    Route::get('/',[XpirixLandingPageController::class, 'index']);
    Route::get('/article/{post}',[XpirixLandingPageController::class, 'show'])->name('article.show');

    Route::get('/pricing', [PriceController::class, 'index'])->name('price');

    // Help Center Area
    Route::get('/help_areas', [HelpAreaController::class, 'index'])->name('help_areas');
    Route::get('/help_lifespot', [HelpLifespotController::class, 'index'])->name('help_lifespot');

    //Help Articles
    Route::get('/help', [HelpArticleController::class, 'show'])->name('help');
    /*  ---------------------------------------------------------------------------------------*/
    /*                         End Guest/Public Access Routes                                  */
    /*  ---------------------------------------------------------------------------------------*/



    /*  ---------------------------Auth - Member - Owner Access Routes --------------------------- */
    Route::middleware([
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified'
    ])->group(function () {

        // Membership(Xpirix) Access
        // Route::resource('/posts',PostController::class)->except('show'); //Landing Page View
        Route::resource('/posts',PostController::class); //Landing Page View
        // Route::get('/posts', [PostController::class,'index'])->name(('posts.index'));
        // Route::get('/posts', [PostController::class,'create'])->name(('posts.create'));
        // Route::post('/posts', [PostController::class,'store'])->name(('posts.store'));


        Route::resource('/manage-posts', ManagePostController::class); //Manage Posts View for Xpirix Membership

        // Owner Access
        Route::resource('/users', UserController::class);

        // Sponsor Role access
        Route::get('/sponsors', function() {
            return view('admin.sponsors.index');
        })->name('sponsors.index');

        /* Dashboard Access Route for Auth Members */
        Route::get('/dashboard_home', function() {
            return view('admin.dashboard.index');
        })->name('dashboard_home');

         /* Members Access to Manage Thier Profile */
        Route::resource('admin', AdmimController::class);
        Route::get('/view-profile', [AdmimController::class, 'viewProfile'])->name('viewProfile');
        Route::get('/edit-profile', [AdmimController::class, 'editProfile'])->name('editProfile');
        Route::post('/store-profile', [AdmimController::class, 'storeProfile'])->name('storeProfile');

        //Change Password Area
        Route::get('/change-password', [ChangePasswordController::class, 'changePassword'])->name('change-password');
        Route::post('/change-password', [ChangePasswordController::class, 'updatePassword'])->name('update-password');












        /* LifeSpot Member Access Routes */
        Route::get('/lifespot', function () {
            return view('lifespot.messages.index');
        })->name('lifespot');

        Route::get('/messages', [MessagesController::class, 'index'])->name('messages');
        Route::get('/nomembersmessages', [MessagesController::class, 'noMembersIndex'])->name('message_no_members');

        Route::get('/documents', [DocumentsController::class, 'index'])->name('documents');

        // My Lifespot Personal Routes


        // Route::resource('/mylifespot/personal', MylifespotPersonalController::class)->name['mylifespot.personal'];

        Route::get('/mylifespot/personal', [MylifespotPersonalController::class, 'index'])->name('mylifespot.personal');
        Route::get('/mylifespot/personal/create', [MylifespotPersonalController::class, 'create'])->name('mylifespot_profile.create');

        // My Lifespot Home and Property Routes
        Route::get('/mylifespot/property/home', [MylifespotHomeController::class, 'index'])->name('mylifespot.home_property.home');
        Route::get('/mylifespot/property', [MylifespotPropertyController::class, 'index'])->name('mylifespot.home_property.property');
        Route::get('/mylifespot/property/lorem_ipsum', [MylifespotLoremipsumController::class, 'index'])->name('mylifespot.home_property.lorem_ipsum');
        Route::get('/mylifespot/property/lorem', [MylifespotLoremController::class, 'index'])->name('mylifespot.home_property.lorem');

        // My Lifespot Family Routes
        Route::get('/mylifespot/family/dependents', [MylifespotDependentsController::class, 'index'])->name('mylifespot.family.dependents');
        Route::get('/mylifespot/family/beneficeries', [MylifespotBeneficeriesController::class, 'index'])->name('mylifespot.family.beneficeries');
        Route::get('/mylifespot/family/emergency_contacts', [MylifespotEmergencycontactsController::class, 'index'])->name('mylifespot.family.emergency_contacts');
        Route::get('/mylifespot/family/pets', [MylifespotPetsController::class, 'index'])->name('mylifespot.family.pets');

        // My Lifespot Work and Education Routes
        Route::get('/mylifespot/work_education/work', [MylifespotWorkController::class, 'index'])->name('mylifespot.work_education.work');
        Route::get('/mylifespot/work_education/education', [MylifespotEducationController::class, 'index'])->name('mylifespot.work_education.education');
        Route::get('/mylifespot/work_education/military', [MylifespotMilitaryController::class, 'index'])->name('mylifespot.work_education.military');
        Route::get('/mylifespot/work_education/volunteer', [MylifespotVolunteerController::class, 'index'])->name('mylifespot.work_education.volunteer');

        /*  Content Management Routes */
        Route::resource('xpirix_content',XpirixContentController::class);
        Route::resource('price_content',PriceContentController::class);
        Route::get('/help_content', function() {
            return view('admin.help.index');
        })->name('help_content.index');

        // My Estate
        Route::get('/myestate', [MyestateController::class, 'index'])->name('myestate');

        // Temporary Routes - no controller for interior My Estate designs
        Route::get('myestate/financials/banking', function() {
            return view('lifespot.myestate.financials.banking.index');
        })->name('myestate.financials.banking');
        Route::get('myestate/financials/taxes', function() {
            return view('lifespot.myestate.financials.tax.index');
        })->name('myestate.financials.tax');

        // Grow My Estate
        Route::resource('/growmyestate', GrowMyEstateController::class);

});

 /*  ------------------------End Auth - Member - Owner Access Routes --------------------------- */




// Route::get('categories/{category:slug}', function (Category $category) {

//     return view('xpirix', [

//         'posts' => Post::latest()->filter(request(['search','category']))->get(),

//         'categories' => Category::all(),

//         'currentCategory' => Category::firstWhere('slug', request('category'))

//         ]);
// }


// Route::get('categories/{category}', function(Category $category) {
//     $contents = XpirixContent::find(1);
//     return view('xpirix', compact('contents'), [
//         'posts' => $category->posts
//     ]);
// });
// Route::get('/categories/{category:slug}', [CategoryController::class, 'index']);


// Maybe Trash this section below if finished using it
  // index or named route 'company_admin_users' is for Owners access
    // Route::get('company_admin', [AdmimController::class, 'index'])->name('company_admin_users');
    // Route::get('change/password', [AdmimController::class, 'changePassword'])->name('changePassword');
    // Route::get('change-my-password', [AdmimController::class, 'changeMyPassword'])->name('changeMyPassword');
    // Route::post('change-my-password', [AdmimController::class, 'updateMyPassword'])->name('updateMyPassword');


     // Route::controller(AdmimController::class)->group(function() {
        //     Route::get('/admin/profile', 'profile')->name('admin.profile');
        // })


         // Route::get('user', [AdmimController::class, 'edit'])->name('edit_admin_users');



              // User Admin Area
        // Route::get('admin', [AdmimController::class, 'index'])->name('company_admin_users');
