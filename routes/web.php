<?php

use App\Models\AdditionalAsset;
use App\Http\Livewire\Dependent;
use App\Http\Livewire\FileUploader;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdmimController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\InvitationController;
use App\Http\Controllers\HelpAreaController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\HelpXpirixController;
use App\Http\Controllers\HelpArticleController;
use App\Http\Controllers\HelpLifespotController;
use App\Http\Controllers\XpirixContentController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\LifeSpot\LSHelpController;
use App\Http\Controllers\Admin\ManagePostController;
use App\Http\Controllers\LifeSpot\WebSpotController;
use App\Http\Controllers\LifeSpot\MessagesController;
use App\Http\Controllers\XpirixLandingPageController;
use App\Http\Controllers\Admin\PriceContentController;
use App\Http\Controllers\LifeSpot\PersonalInformation;
use App\Http\Controllers\LifeSpot\GetStartedController;
use App\Http\Controllers\LifeSpot\MyEstate\MyEstateController;
use App\Http\Controllers\LifeSpot\Documents\DocumentsController;
use App\Http\Controllers\LifeSpot\MyLifeSpot\PersonalController;
use App\Http\Livewire\Admin\Messages\ListConversationAndMessages;
use App\Http\Controllers\LifeSpot\MyLifeSpot\Family\PetsController;
use App\Http\Controllers\LifeSpot\MyLifeSpot\PersonalInfoController;
use App\Http\Controllers\LifeSpot\MyLifeSpot\Family\SpouseController;
use App\Http\Controllers\LifeSpot\GrowMyEstate\GrowMyEstateController;
use App\Http\Controllers\LifeSpot\MembersOtherEstates\MembersController;
use App\Http\Controllers\LifeSpot\MyEstate\Financials\BankingController;
use App\Http\Controllers\LifeSpot\MyEstate\Financials\TaxController;
use App\Http\Controllers\LifeSpot\MyLifeSpot\Family\DependentController;
use App\Http\Controllers\LifeSpot\MyLifeSpot\Family\DependentsController;
use App\Http\Controllers\LifeSpot\MyLifeSpot\Family\BeneficeriesController;
use App\Http\Controllers\LifeSpot\MembersOtherEstates\OtherEstatesController;
use App\Http\Controllers\LifeSpot\MyLifeSpot\Home_and_Property\HomeController;
use App\Http\Controllers\LifeSpot\MyLifeSpot\Family\EmergencyContactController;
use App\Http\Controllers\LifeSpot\MyLifeSpot\Home_and_Property\LoremController;
use App\Http\Controllers\LifeSpot\MyLifeSpot\Work_and_Education\WorkController;
use App\Http\Controllers\LifeSpot\MyLifeSpot\Family\DependentGuardianController;
use App\Http\Controllers\LifeSpot\MyLifeSpot\Home_and_Property\PropertyController;
use App\Http\Controllers\LifeSpot\MyLifeSpot\Work_and_Education\MilitaryController;
use App\Http\Controllers\LifeSpot\MyLifeSpot\Home_and_Property\LoremIpsumController;
use App\Http\Controllers\LifeSpot\MyLifeSpot\Home_and_Property\RealEstateController;
use App\Http\Controllers\LifeSpot\MyLifeSpot\Work_and_Education\EducationController;
use App\Http\Controllers\LifeSpot\MyLifeSpot\Work_and_Education\VolunteerController;
use App\Http\Controllers\LifeSpot\MyLifeSpot\Home_and_Property\AdditionalAssetController;

use App\Mail\MyTestEmail;
use Illuminate\Support\Facades\Mail;

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

    // START Temporary pre-launch routes (delete post launch, or use for site maintenance)
    // Route::get('/',[XpirixLandingPageController::class, 'temp_coming_soon'])->name('temp.coming.soon');
    // Route::get('/temp-dev-pass',[XpirixLandingPageController::class, 'temp_dev_pass'])->name('temp.dev.pass');

    Route::get('/article/{post}',[XpirixLandingPageController::class, 'show'])->name('article.show');

    Route::get('/pricing', [PriceController::class, 'index'])->name('price');

    // Help Center Area
    Route::get('/help_areas', [HelpAreaController::class, 'index'])->name('help_areas');
    Route::get('/help_lifespot', [HelpLifespotController::class, 'index'])->name('help_lifespot');
    Route::get('/help_xpirix', [HelpXpirixController::class, 'index'])->name('help_xpirix');

    //Help Articles
    Route::get('/help', [HelpArticleController::class, 'show'])->name('help');
    Route::get('/access', [HelpArticleController::class, 'access'])->name('access');
    Route::get('/members-important', [HelpArticleController::class, 'membersImportant'])->name('members_important');
    Route::get('/protect-documents', [HelpArticleController::class, 'protectDocuments'])->name('protect_docs');
    Route::get('/private-lifespot', [HelpArticleController::class, 'privateLifespot'])->name('private_lifespot_article');
    Route::get('/grow-lifespot-help', [HelpArticleController::class, 'growLifespot'])->name('grow_lifespot_article');
    Route::get('/wepspot-help', [HelpArticleController::class, 'webspotArticle'])->name('webspot_article');

    // Off-Platform User Invite
    Route::get('/invite/register/{invite_id}', [InvitationController::class, 'index'])->name('view.invite');
    Route::post('/invite/accept-invite', [InvitationController::class, 'accept_invite'])->name('accept.invite');
    Route::get('/invite/decline-invite', [InvitationController::class, 'decline_invite'])->name('decline.invite');

    /*  ---------------------------------------------------------------------------------------*/
    /*                         End Guest/Public Access Routes                                  */
    /*  ---------------------------------------------------------------------------------------*/

    /* LIVEWIRE CHAT */
    // Route::get('messages',ListConversationAndMessages::class)->name('messages');
    /* END LIVEWIRE CHAT */

/*  ---------------------------Auth - Member - Owner Access Routes --------------------------- */
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('dropzone', [PersonalInfoController::class, 'dropzone']);
    Route::post('dropzone/store', [PersonalInfoController::class, 'dropzoneStore'])->name('dropzone.store');


    // LifeSpot Getting Started Routes
    Route::get('lifespot/getting_started', [GetStartedController::class, 'index'])->name('getting_started');
    Route::get('/getting-started', [GetStartedController::class, 'getStartedGuide'])->name('gettingStartedGuide');

    //WebSpot -- My Xpirix
    Route::get('lifespot/my-xpirix', [WebSpotController::class, 'index'])->name('webspot');
    Route::get('lifespot/my-xpirix/create', [WebSpotController::class, 'create'])->name('create.webspot');
    Route::get('lifespot/my-xpirix/edit/{myxpirix}', [WebSpotController::class, 'edit'])->name('edit.webspot');
    Route::put('lifespot/my-xpirix/update/{myxpirix}', [WebSpotController::class, 'update'])->name('update.webspot');

    Route::get('lifespot/my-xpirix/create-post', [WebSpotController::class, 'createMyXpirixPost'])->name('createPost.webspot');
    Route::post('lifespot/my-xpirix/store-post', [WebSpotController::class, 'storeMyXpirixPost'])->name('storePost.webspot');

    //LifesSpot Help Center
    //  Route::get('lifespot/help', [HelpCenterController::class, 'index'])->name('lifespot.help');
    Route::get('lifespot/help',[LSHelpController::class, 'index'])->name('lifespot.help');
    Route::get('lifespot/xpirix-help',[LSHelpController::class, 'xpirixIndex'])->name('lifespot.xpirix.help');

    // Messages
    // Route::get('lifespot/messages', [MessagesController::class, 'index'])->name('messages');

    /* LIVEWIRE CHAT */
    Route::get('messages',ListConversationAndMessages::class)->name('messages');
        /* END LIVEWIRE CHAT */

    //Personal Informtion
    // Route::get('/lifespot/mylifespot/personal', [PersonalController::class, 'index'])->name('mylifespot.personal');
    // Route::get('/lifespot/mylifespot/personal-edit/{user}', [PersonalController::class, 'edit'])->name('mylifespot.personal.edit');

    // Route::put('/theprofile/{user}', [PersonalController::class, 'update'])->name('mylifespot.personal.update');
    // Route::get('/lifespot/mylifespot/personal/{user}', [PersonalController::class, 'show'])->name('mylifespot.personal.show');

    /* Home and Property Routes */


    // File upload test area:
    // Route::get('file-uploader', FileUploader::class);





    // Asset (Property) Tab
    Route::get('/mylifespot/property', [PropertyController::class, 'index'])->name('mylifespot.home_property.property');
    Route::get('/mylifespot/property/add-asset', [PropertyController::class, 'create'])->name('mylifespot.home_property.add_asset');
    Route::post('/mylifespot/property/store-asset', [PropertyController::class, 'store'])->name('mylifespot.home_property.store_asset');
    Route::get('/mylifespot/property/asset/{asset}',[PropertyController::class, 'show'])->name('mylifespot.home_property.asset');
    Route::get('/mylifespot/property/asset-edit/{asset}',[PropertyController::class, 'edit'])->name('mylifespot.home_property.asset_edit');
    Route::put('/mylifespot/property/asset-update/{asset}',[PropertyController::class, 'update'])->name('mylifespot.home_property.asset_update');
    Route::delete('/mylifespot/property/asset-delete/{asset}',[PropertyController::class, 'destroy'])->name('mylifespot.home_property.asset_destroy');


    //MUlti Assets
    // Route::get('/assets', [AdditionalAssetController::class, 'index'])->name('all_assets');
    Route::post('/store/multi/assets/{asset}', [PropertyController::class, 'StoreMultiImage'])->name('store.mulit.image');
    Route::delete('/store/multi/assets/{additionalAsset}', [PropertyController::class, 'DestroyMultiImage'])->name('destroy.mulit.image');
    Route::delete('/mylifespot/property/asset-show/{additionalAsset}',[PropertyController::class, 'showMulti'])->name('mylifespot.home_property.asset_show');



    // REAL ESTATE
    Route::get('/mylifespot/property/real-estate', [RealEstateController::class, 'index'])->name('mylifespot.home_property.real_estate');
    Route::get('/mylifespot/property/real-estate/add-real_estate', [RealEstateController::class, 'create'])->name('mylifespot.home_property.add.real_estate');
    Route::post('/mylifespot/property/real-estate/store-real_estate', [RealEstateController::class, 'store'])->name('mylifespot.home_property.store.real_estate');
    Route::get('/mylifespot/property/real-estate/{asset}',[RealEstateController::class, 'show'])->name('mylifespot.home_property.realestate');
    Route::get('/mylifespot/property/real-estate/edit/{asset}',[RealEstateController::class, 'edit'])->name('mylifespot.home_property.edit.real_estate');
    Route::put('/mylifespot/property/real-estate/update/{asset}',[RealEstateController::class, 'update'])->name('mylifespot.home_property.update.real_estate');
    Route::delete('/mylifespot/property/real-estate/delete/{asset}',[RealEstateController::class, 'destroy'])->name('mylifespot.home_property.destroy.real_estate');


    //MUlti REal Esate Assets
    // Route::get('/assets', [AdditionalAssetController::class, 'index'])->name('all_assets');
    Route::post('/store/multi/real_estate/{asset}', [RealEstateController::class, 'StoreMultiImage'])->name('store.multi.image.real_estate');
    Route::delete('/store/multi/real_estate/{additionalAsset}', [RealEstateController::class, 'DestroyMultiImage'])->name('destroy.mulit.image.real_estate');
    // Route::delete('/mylifespot/property/asset-show/{additionalAsset}',[RealEstateController::class, 'showMulti'])->name('mylifespot.home_property.asset_show');

    /*-------------------------------------------*/
    /*-------------------------------------------*/

    //Personal Information Routes
    Route::get('/lifespot/mylifespot/personal', [PersonalInfoController::class, 'show'])->name('mylifespot.personal');
    Route::get('/lifespot/mylifespot/personal/edit/{user}', [PersonalInfoController::class, 'edit'])->name('mylifespot.personal.edit');
    Route::put('/lifespot/mylifespot/personal/update/{user}', [PersonalInfoController::class, 'update'])->name('mylifespot.personal.update');

    // Multi Additional Personal Assets
        //MUlti PERSONAL Assets
        Route::post('/store/multi/personal/{asset}', [PersonalInfoController::class, 'StoreMultiImage'])->name('store.multi.image.personal');
        Route::delete('/store/multi/personal/{additionalAsset}', [PersonalInfoController::class, 'DestroyMultiImage'])->name('destroy.mulit.image.personal');

    /*-------------------------------------------*/
    /*-------------------------------------------*/


    // Lorem Ipsum Tab
    Route::get('/mylifespot/property/lorem_ipsum', [LoremIpsumController::class, 'index'])->name('mylifespot.home_property.lorem_ipsum');
    // Lorem Tab
    Route::get('/mylifespot/property/lorem', [LoremController::class, 'index'])->name('mylifespot.home_property.lorem');

    // My Lifespot Family Routes --Spouse/Partner
    Route::get('/mylifespot/family/spouse', [SpouseController::class, 'index'])->name('mylifespot.family.spouse');
    Route::get('/mylifespot/family/spouses/add-spouse', [SpouseController::class, 'create'])->name('mylifespot.family.add.spouse');
    Route::post('/mylifespot/property/spouses/store-spouse', [SpouseController::class, 'store'])->name('mylifespot.family.store.spouse');
    Route::get('/mylifespot/family/spouses/{asset}',[SpouseController::class, 'show'])->name('mylifespot.family.show.spouse');
    Route::get('/mylifespot/family/spouses/edit/{asset}',[SpouseController::class, 'edit'])->name('mylifespot.family.edit.spouse');
    Route::put('/mylifespot/family/spouses/update/{asset}',[SpouseController::class, 'update'])->name('mylifespot.family.update.spouse');
    Route::delete('/mylifespot/family/spouses/delete/{asset}',[SpouseController::class, 'destroy'])->name('mylifespot.family.destroy.spouse');


    //MUlti Spouse Assets
    // Route::get('/assets', [AdditionalAssetController::class, 'index'])->name('all_assets');
    Route::post('/store/multi/spouse/{asset}', [SpouseController::class, 'StoreMultiImage'])->name('store.multi.image.spouse');
    Route::delete('/store/multi/spouse/{additionalAsset}', [SpouseController::class, 'DestroyMultiImage'])->name('destroy.mulit.image.spouse');


    // My Lifespot Family Routes --DEPENDENTS
    // Route::get('/mylifespot/family/dependents', Dependent::class)->name('mylifespot.family.dependents');
    // Route::get('posts', PostCrud::class)->name('posts');

    Route::get('/mylifespot/family/dependents', [DependentController::class, 'index'])->name('mylifespot.family.dependents');
    Route::get('/mylifespot/family/dependents/add-dependent', [DependentController::class, 'create'])->name('mylifespot.family.add.dependent');
    Route::post('/mylifespot/property/dependents/store-dependent', [DependentController::class, 'store'])->name('mylifespot.family.store.dependent');
    Route::get('/mylifespot/family/dependents/{asset}',[DependentController::class, 'show'])->name('mylifespot.family.show.dependent');
    Route::get('/mylifespot/family/dependents/edit/{asset}',[DependentController::class, 'edit'])->name('mylifespot.family.edit.dependent');
    Route::put('/mylifespot/family/dependents/update/{asset}',[DependentController::class, 'update'])->name('mylifespot.family.update.dependent');
    Route::delete('/mylifespot/family/dependents/delete/{asset}',[DependentController::class, 'destroy'])->name('mylifespot.family.destroy.dependent');


    //MUlti Dependent Assets
    // Route::get('/assets', [AdditionalAssetController::class, 'index'])->name('all_assets');
    Route::post('/store/multi/dependent/{asset}', [DependentController::class, 'StoreMultiImage'])->name('store.multi.image.dependent');
    Route::delete('/store/multi/dependent/{additionalAsset}', [DependentController::class, 'DestroyMultiImage'])->name('destroy.mulit.image.dependent');


        // My Lifespot Family Routes --BENEFICIARIES
        Route::get('/mylifespot/family/beneficeries', [BeneficeriesController::class, 'index'])->name('mylifespot.family.beneficeries');
        Route::get('/mylifespot/family/beneficeries/add-beneficary', [BeneficeriesController::class, 'create'])->name('mylifespot.family.add.beneficary');
        Route::post('/mylifespot/property/beneficeries/store-beneficary', [BeneficeriesController::class, 'store'])->name('mylifespot.family.store.beneficary');
        Route::get('/mylifespot/family/beneficeries/{asset}',[BeneficeriesController::class, 'show'])->name('mylifespot.family.show.beneficary');
        Route::get('/mylifespot/family/beneficeries/edit/{asset}',[BeneficeriesController::class, 'edit'])->name('mylifespot.family.edit.beneficary');
        Route::put('/mylifespot/family/beneficeries/update/{asset}',[BeneficeriesController::class, 'update'])->name('mylifespot.family.update.beneficary');
        Route::delete('/mylifespot/family/beneficeries/delete/{asset}',[BeneficeriesController::class, 'destroy'])->name('mylifespot.family.destroy.beneficary');

        //MUlti BENEFICIARIES Assets
        Route::post('/store/multi/beneficeries/{asset}', [BeneficeriesController::class, 'StoreMultiImage'])->name('store.multi.image.beneficeries');
        Route::delete('/store/multi/beneficeries/{additionalAsset}', [BeneficeriesController::class, 'DestroyMultiImage'])->name('destroy.mulit.image.beneficeries');



    // My Lifespot Family Routes --EMERGENCY CONTACTS
    Route::get('/mylifespot/family/emergency-contacts', [EmergencyContactController::class, 'index'])->name('mylifespot.family.emergency-contacts');
    Route::get('/mylifespot/family/emergency-contacts/add-emergency_contact', [EmergencyContactController::class, 'create'])->name('mylifespot.family.add.emergency_contact');
    Route::post('/mylifespot/property/emergency-contacts/store-emergency_contact', [EmergencyContactController::class, 'store'])->name('mylifespot.family.store.emergency_contact');
    Route::get('/mylifespot/family/emergency-contacts/{asset}',[EmergencyContactController::class, 'show'])->name('mylifespot.family.show.emergency_contact');
    Route::get('/mylifespot/family/emergency-contacts/edit/{asset}',[EmergencyContactController::class, 'edit'])->name('mylifespot.family.edit.emergency_contact');
    Route::put('/mylifespot/family/emergency-contacts/update/{asset}',[EmergencyContactController::class, 'update'])->name('mylifespot.family.update.emergency_contact');
    Route::delete('/mylifespot/family/emergency-contacts/delete/{asset}',[EmergencyContactController::class, 'destroy'])->name('mylifespot.family.destroy.emergency_contact');

    //MUlti Emergency Contact Assets
    Route::post('/store/multi/emergency-contacts/{asset}', [EmergencyContactController::class, 'StoreMultiImage'])->name('store.multi.image.emergency-contacts');
    Route::delete('/store/multi/emergency-contacts/{additionalAsset}', [EmergencyContactController::class, 'DestroyMultiImage'])->name('destroy.mulit.image.emergency-contacts');

    // My Lifespot Family Routes --PETS
    Route::get('/mylifespot/family/pets', [PetsController::class, 'index'])->name('mylifespot.family.pets');
    Route::get('/mylifespot/family/pets/add-pet', [PetsController::class, 'create'])->name('mylifespot.family.add.pet');
    Route::post('/mylifespot/property/pets/store-pet', [PetsController::class, 'store'])->name('mylifespot.family.store.pet');
    Route::get('/mylifespot/family/pets/{asset}',[PetsController::class, 'show'])->name('mylifespot.family.show.pet');
    Route::get('/mylifespot/family/pets/edit/{asset}',[PetsController::class, 'edit'])->name('mylifespot.family.edit.pet');
    Route::put('/mylifespot/family/pets/update/{asset}',[PetsController::class, 'update'])->name('mylifespot.family.update.pet');
    Route::delete('/mylifespot/family/pets/delete/{asset}',[PetsController::class, 'destroy'])->name('mylifespot.family.destroy.pet');


    //MUlti PETS Assets
    Route::post('/store/multi/pet/{asset}', [PetsController::class, 'StoreMultiImage'])->name('store.multi.image.pet');
    Route::delete('/store/multi/pet/{additionalAsset}', [PetsController::class, 'DestroyMultiImage'])->name('destroy.mulit.image.pet');


    /// Guardian Dependent 7 resources:
    // Route::get('/mylifespot/family/dependent/guardian/{guardian}',[DependentGuardianController::class, 'show'])->name('theguardian');

    // Route::delete('/mylifespot/property/asset-show/{additionalAsset}',[RealEstateController::class, 'showMulti'])->name('mylifespot.home_property.asset_show');




    // My Lifespot Family Routes
    // Route::get('/mylifespot/family/dependents', [DependentsController::class, 'index'])->name('mylifespot.family.dependents');
    // Route::get('/mylifespot/family/beneficeries',[BeneficeriesController::class, 'index'])->name('mylifespot.family.beneficeries');
    // Route::get('/mylifespot/family/emergency-contacts',[EmergencyContactController::class, 'index'])->name('mylifespot.family.emergency_contacts');
    // Route::get('/mylifespot/family/pets', [PetsController::class, 'index'])->name('mylifespot.family.pets');

    // My Lifespot Work and Education Routes
    Route::get('/mylifespot/work_education/work', [WorkController::class, 'index'])->name('mylifespot.work_education.work');
    Route::get('/mylifespot/work_education/work/edit', [WorkController::class, 'edit'])->name('mylifespot.work_education.work.edit');
    Route::get('/mylifespot/work_education/education', [EducationController::class, 'index'])->name('mylifespot.work_education.education');
    Route::get('/mylifespot/work_education/military', [MilitaryController::class, 'index'])->name('mylifespot.work_education.military');
    Route::get('/mylifespot/work_education/volunteer', [VolunteerController::class, 'index'])->name('mylifespot.work_education.volunteer');

    // My Estate
        Route::get('/myestate',[MyestateController::class, 'index'])->name('myestate');

        // My ESTATE Financial Routes --BANKS
        Route::get('/myestate/financials/banking', [BankingController::class, 'index'])->name('myestate.financials.banking');
        Route::get('/myestate/financials/banking/add-bank', [BankingController::class, 'create'])->name('myestate.financials.add.bank');
        Route::post('/myestate/property/banks/store-bank', [BankingController::class, 'store'])->name('myestate.financials.store.bank');
        Route::get('/myestate/financials/banks/{asset}',[BankingController::class, 'show'])->name('myestate.financials.show.bank');
        Route::get('/myestate/financials/banks/edit/{asset}',[BankingController::class, 'edit'])->name('myestate.financials.edit.bank');
        Route::put('/myestate/financials/banks/update/{asset}',[BankingController::class, 'update'])->name('myestate.financials.update.bank');
        Route::delete('/myestate/financials/banks/delete/{asset}',[BankingController::class, 'destroy'])->name('myestate.financials.destroy.bank');


        // Multi BANK Assets
        Route::post('/store/multi/tax/{asset}', [BankingController::class, 'StoreMultiImage'])->name('store.multi.image.bank');
        Route::delete('/store/multi/tax/{additionalAsset}', [BankingController::class, 'DestroyMultiImage'])->name('destroy.mulit.image.bank');

        // My ESTATE Financial Routes --TAXES
        Route::get('myestate/financials/taxes',[TaxController::class, 'index'])->name('myestate.financials.tax');
        Route::get('myestate/financials/taxes/add-taxes',[TaxController::class, 'create'])->name('myestate.financials.add.tax');
        Route::post('myestate/financials/taxes/store-taxes',[TaxController::class, 'store'])->name('myestate.financials.store.tax');
        Route::get('/myestate/financials/taxes/{asset}',[TaxController::class, 'show'])->name('myestate.financials.show.tax');
        Route::get('/myestate/financials/taxex/edit/{asset}',[TaxController::class, 'edit'])->name('myestate.financials.edit.tax');
        Route::put('/myestate/financials/taxes/update/{asset}',[TaxController::class, 'update'])->name('myestate.financials.update.tax');
        Route::delete('/myestate/financials/taxes/delete/{asset}',[TaxController::class, 'destroy'])->name('myestate.financials.destroy.tax');

        // Multi TAX Assets
        Route::post('/store/multi/bank/{asset}', [TaxController::class, 'StoreMultiImage'])->name('store.multi.image.tax');
        Route::delete('/store/multi/bank/{additionalAsset}', [TaxController::class, 'DestroyMultiImage'])->name('destroy.mulit.image.tax');

    // Members & Other Estates
    Route::get('members',[MembersController::class, 'index'])->name('mymembers');
    // Route::get('members/other_estates',[OtherEstatesController::class, 'index'])->name('other_estates');
    
    Route::get('members/get_user_document_permissions', [MembersController::class, 'get_user_document_permissions'])
        ->name('get.user.document.permissions');
    Route::post('members/update_user_document_permissions', [MembersController::class, 'update_user_document_permissions'])
        ->name('update.user.document.permissions');
    Route::get('members/download_file', [MembersController::class, 'download_file'])->name('download.file');
    Route::get('members/load_user_suggestions', [MembersController::class, 'load_user_suggestions'])->name('load.user.suggestions');
    Route::get('members/select_user_suggestion', [MembersController::class, 'select_user_suggestion'])->name('select.user.suggestion');
    Route::delete('members/delete_relationship', [MembersController::class, 'delete_relationship'])->name('delete.relationship');
    Route::post('members/edit_relationship', [MembersController::class, 'edit_relationship'])->name('edit.relationship');

    //Documents
    Route::any('/documents/download', [DocumentsController::class, 'download_doc'])->name('documents.download');
        // ...handling change of page/view
    Route::get('/documents/favorites', [DocumentsController::class, 'favorites'])->name('documents.favorites');
    Route::get('/documents/recents', [DocumentsController::class, 'recents'])->name('documents.recents');
    Route::get('/documents/custom/{cat_id}', [DocumentsController::class, 'custom'])->name('documents.custom.category');
    Route::get('/documents/{cat_id}',[DocumentsController::class, 'index'])->name('documents');
        // ...handling db interactions
    Route::post('/documents/store', [DocumentsController::class, 'store'])->name('documents.store');
    Route::post('/documents/details', [DocumentsController::class, 'get_doc_details'])->name('document.get.details');
    Route::patch('/documents/update', [DocumentsController::class, 'update_doc'])->name('document.update');
    Route::post('/documents/delete', [DocumentsController::class, 'delete_doc'])->name('document.delete');
    Route::patch('/documents/favorite', [DocumentsController::class, 'favorite_doc'])->name('document.favorite');

    Route::post('/documents/custom/create', [DocumentsController::class, 'custom_create'])->name('documents.custom.category.create');
    Route::delete('/documents/custom/delete', [DocumentsController::class, 'custom_delete'])->name('documents.custom.category.delete');
    Route::patch('/documents/custom/update', [DocumentsController::class, 'custom_update'])->name('documents.custom.category.update');

    // Grow My Estate
    Route::resource('/growmyestate', GrowMyEstateController::class);

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
    Route::get('/dashboard_home', [DashboardController::class, 'index'])->name('dashboard_home');
    // Route::get('/dashboard_home', function() {
    //     return view('admin.dashboard.index');
    // })->name('dashboard_home');

    /* Members Access to Manage Thier Profile */
    Route::resource('admin', AdmimController::class);
    Route::get('/view-profile', [AdmimController::class, 'viewProfile'])->name('viewProfile');
    Route::get('/edit-profile', [AdmimController::class, 'editProfile'])->name('editProfile');
    Route::post('/store-profile', [AdmimController::class, 'storeProfile'])->name('storeProfile');

    //Change Password Area
    Route::get('/change-password', [ChangePasswordController::class, 'changePassword'])->name('change-password');
    Route::post('/change-password', [ChangePasswordController::class, 'updatePassword'])->name('update-password');


    /*  Content Management Routes */
    Route::resource('xpirix_content',XpirixContentController::class);
    Route::resource('price_content',PriceContentController::class);
    Route::get('/help_content', function() {
        return view('admin.help.index');
    })->name('help_content.index');

    // Invite Routes
    Route::post('/invite-member', [InvitationController::class, 'create'])->name('dispatch.invite.email');
    Route::post('/accept-on-platform-invitation', [InvitationController::class, 'accept_on_platform_invite'])->name('accept.on.platform.invite');

    Route::get('/stripe/api/test', [PersonalInfoController::class, 'test_stripe_api'])->name('stripe.api.test');
});
 /*  ------------------------End Auth - Member - Owner Access Routes --------------------------- */
 