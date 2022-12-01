<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\BoardController;
use App\Http\Controllers\Admin\ClubSectionController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\PastPresidentController;
use App\Http\Controllers\Admin\ServiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\PagesController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\UploadController;

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



Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/about-view/{slug}', [PagesController::class, 'aboutview'])->name('about.view');

Route::get('/services', [PagesController::class, 'services'])->name('services');
Route::get('/view-services/{slug}', [PagesController::class, 'viewServices'])->name('view.services');

Route::get('/news-events', [PagesController::class, 'news_event'])->name('news.events');
Route::get('/view-news-event/{slug}', [PagesController::class, 'view_news_event'])->name('view.news.event');

Route::get('/section', [PagesController::class, 'section'])->name('section');
Route::get('/section-view/{slug}', [PagesController::class, 'sectionview'])->name('section.view');
Route::get('/gallery', [PagesController::class, 'gallery'])->name('web.gallery');
Route::get('/gallery/{slug}', [PagesController::class, 'galleryview'])->name('gallery.view');

Route::get('/past-president', [PagesController::class, 'past_president'])->name('web.past.president');
Route::get('/past-president/{slug}', [PagesController::class, 'view_past_president'])->name('view.past.president');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// MAiling Route
Route::get('/send-email', [SettingsController::class, 'sendemail'])->name('send.email');



require __DIR__.'/auth.php';



Route::group(['prefix' => 'admin', 'middleware'], function () 
{    
    Route::get('/dashboard', [SettingsController::class, 'index'])->name('dashboard');
    Route::post('/update-setting', [SettingsController::class, 'updateSetting'])->name('update.setting');
    Route::post('/about-setting', [SettingsController::class, 'aboutsetting'])->name('about.setting');
    Route::post('/upload-logo', [SettingsController::class, 'logoUpload'])->name('upload.logo');
    // Gallery Route
    Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
    Route::get('/gallery-category', [GalleryController::class, 'galleryCat'])->name('gallery.category');
    Route::post('/create-gallery', [GalleryController::class, 'createGallery'])->name('add.gallery');
    Route::post('/update-gallery/{id}', [GalleryController::class, 'updateGallery'])->name('update.gallery');
    Route::post('/create-gallery-category', [GalleryController::class, 'createGalleryCategory'])->name('add.gallery.category');
    Route::post('/del-gallery/{id}', [GalleryController::class, 'deleteGallery'])->name('del.image');
    Route::post('/del-gallery-cat/{id}', [GalleryController::class, 'destroyGalleryCat'])->name('del.gallery.cat');

    // Slider Route
    Route::get('/slider', [SliderController::class, 'index'])->name('slider');
    Route::post('/create-slider', [SliderController::class, 'createSlider'])->name('add.slider');
    Route::post('/update-slider/{id}', [SliderController::class, 'editSlider'])->name('update.slider');
    Route::post('/del-slider/{id}', [SliderController::class, 'deleteSlider'])->name('del.slider');

     // Blog Route
    Route::get('/blog', [BlogController::class, 'index'])->name('blog');
    Route::get('/create-post', [BlogController::class, 'createpost'])->name('create.post');
    Route::get('/edit-blog-post/{id}', [BlogController::class, 'editblogpost'])->name('edit.blog.post');
    Route::post('/update-blog-post/{id}', [BlogController::class, 'updateblogpost'])->name('update.blog.post');
    Route::get('/blog-category', [BlogController::class, 'blogcategory'])->name('blog.category');
    Route::post('/add-post', [BlogController::class, 'addblogpost'])->name('add.post');
    Route::post('/add-blog-category', [BlogController::class, 'addBlogCat'])->name('add.blog.category');
    Route::post('/del-blog-category/{id}', [BlogController::class, 'deleteBlogCat'])->name('del.blog.category');
    Route::post('/del-blog/{id}', [BlogController::class, 'deleteBlog'])->name('del.blog');

    // Club Section Route
    Route::get('/club-section', [ClubSectionController::class, 'index'])->name('club.section');
    Route::get('/club-section-category', [ClubSectionController::class, 'club_Section_Category'])->name('club.section.category');
    Route::post('/add-club-category', [ClubSectionController::class, 'clubCategory'])->name('add.club.category');
    Route::post('/add-club-section', [ClubSectionController::class, 'createClubSection'])->name('add.club.section');
    Route::post('/edit-club-section/{id}', [ClubSectionController::class, 'editClubSection'])->name('edit.club.section');
    Route::post('/del-club-category/{id}', [ClubSectionController::class, 'deleteClubCat'])->name('del.club.cat');
    Route::post('/del-club-section/{id}', [ClubSectionController::class, 'deleteClubSection'])->name('del.club.section');

    // Services Route
     Route::get('/all-services', [ServiceController::class, 'index'])->name('services');
     Route::get('/add-service', [ServiceController::class, 'add_service'])->name('add.service'); 
     Route::get('/edit-service/{id}', [ServiceController::class, 'edit_service'])->name('edit.service');
     Route::post('/update-service/{id}', [ServiceController::class, 'update_service'])->name('update.service');
     Route::get('/service-category', [ServiceController::class, 'service_category'])->name('service.category');
     Route::post('/create-service-category', [ServiceController::class, 'create_service_category'])->name('create.service.category');
     Route::post('/create-service', [ServiceController::class, 'create_service'])->name('create.service');
     Route::post('/delete-service/{id}', [ServiceController::class, 'deleteService'])->name('delete.service');
      Route::post('/delete-service-category/{id}', [ServiceController::class, 'deleteServiceCategory'])->name('delete.service.category');
    //  About us Routes
     Route::get('/about-us', [AboutController::class, 'index'])->name('about.us');
     Route::get('/add-about', [AboutController::class, 'add_about'])->name('add.about');
     Route::post('/create-about', [AboutController::class, 'create_about'])->name('create.about');
     Route::get('/about-category', [AboutController::class, 'about_category'])->name('about.category');
     Route::post('/add-category', [AboutController::class, 'create_about_category'])->name('add.category');
     Route::get('/edit-about-section/{id}', [AboutController::class, 'edit_about'])->name('edit.about.section');
     Route::post('/update-about-section/{id}', [AboutController::class, 'update_about'])->name('update.about.section');
     Route::post('/del-about-category/{id}', [AboutController::class, 'delete_about_category'])->name('del.about.category');
    Route::post('/delete-about-section/{id}', [AboutController::class, 'delete_about'])->name('del.about.section');


    // Contact Route
    Route::post('/send-contact', [ContactController::class, 'contact'])->name('send.contact');
    Route::get('/view-contact', [ContactController::class, 'displayContact'])->name('view.contact');
    Route::post('/delete-contact/{id}', [ContactController::class, 'deleteContact'])->name('delete.contact');

    // Uploads Route
    Route::get('/uploads', [UploadController::class, 'index'])->name('uploads');
    Route::post('/create-upload', [UploadController::class, 'create_file'])->name('create.upload');
    Route::post('/update-upload/{id}', [UploadController::class, 'delete_file'])->name('update.upload');
    Route::post('/delete-file/{id}', [UploadController::class, 'deleteUpload'])->name('delete.file');

    // Board Controllers Routes
    Route::get('/board', [BoardController::class, 'index'])->name('board');
    Route::get('/board-category', [BoardController::class, 'board_category'])->name('board.category');
    Route::post('/create-board', [BoardController::class, 'create_board'])->name('create.board');
    Route::post('/update-board/{id}', [BoardController::class, 'update_board'])->name('update.board');
    Route::post('/add-Board-Cat', [BoardController::class, 'add_Board_Cat'])->name('add.board.cat');
    Route::post('/update-Board-Cat/{id}', [BoardController::class, 'update_Board_Cat'])->name('update.Board.Cat');
    Route::post('/delete-board/{id}', [BoardController::class, 'deleteBoard'])->name('delete.board');
    Route::post('/delete-board-Cat/{id}', [BoardController::class, 'deleteBoardCat'])->name('delete.board.cat');
    

    // Past President Route
    Route::get('/past-presidents', [PastPresidentController::class, 'index'])->name('past.president');
    Route::post('/create-past-president', [PastPresidentController::class, 'create_past_president'])->name('create.past.president');
    Route::post('/edit-past-president/{id}', [PastPresidentController::class, 'edit_past_president'])->name('edit.past.president');
    Route::post('/delete-past-president/{id}', [PastPresidentController::class, 'delete_past_president'])->name('delete.past.president');
});