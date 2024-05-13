<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VetoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PetController;



Route::get('/home', [HomeController::class,'index']);
Route::get('/',function(){
    return view('Pages.home');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {


    
    //Route Pet
    Route::get('/pet/petprofil', [PetController::class,'PetProfil'])->name('pet.PetProfil');  
    Route::get('/pet/create', [PetController::class,'create'])->name('pet.create');
    Route::post('/pet/store', [PetController::class,'store'])->name('pet.store');
    Route::get('/{pet}/edit', [PetController::class,'edit'])->name('pet.edit');
    Route::put('/{pet}', [PetController::class,'update'])->name('pet.update');
    Route::delete('/{pet}', [PetController::class,'destroy'])->name('pet.destroy');


    
    // Routes User
    Route::post('/accueil', [UserController::class,'Accueil'])->name('accueil');
    Route::get('/user', [UserController::class,'User'])->name('user');
    Route::get('/publi', [UserController::class, 'Publi'])->name('publi');
    Route::get('/messagerie', [UserController::class,'Messagerie'])->name('messagerie');
    Route::get('/param', [UserController::class,'Param'])->name('param');
    Route::get('/planning', [UserController::class,'planning'])->name('planning');
   


    
    

    // Routes Véto
    
    
    Route::get('/veto/create', [VetoController::class,'create'])->name('veto.create');
    Route::post('/veto/store', [VetoController::class,'store'])->name('veto.store');

   

    Route::get('/createcompte', [VetoController::class,'PetProfil'])->name('createcompte');  
    Route::get('/véto', [VetoController::class,'véto'])->name('véto');
    Route::get('/publiveto', [VetoController::class, 'Publi'])->name('publiveto');
    Route::get('/monprofil', [VetoController::class,'monprofil'])->name('monprofil');
    Route::get('/RDVs', [VetoController::class,'RDVs'])->name('RDVs');
    
    // Routes Admin
    Route::get('/admin', [AdminController::class,'Admin'])->name('admin');
    Route::get('/adminuser', [AdminController::class,'AdminUser'])->name('adminuser');
    Route::get('/adminpubli', [AdminController::class,'AdminPubli'])->name('adminpubli');
    Route::get('/adminveto', [AdminController::class,'AdminVéto'])->name('adminvéto');
    
   // Routes pour approuver ou rejeter une inscription
Route::put('/adminveto/approve/{id}', [AdminController::class, 'approve'])->name('adminveto.approve');
Route::delete('/{veto}', [AdminController::class, 'destroy'])->name('veto.destroy');
// web.php

// Route pour approuver une inscription par l'administrateur
Route::put('/admin/veto/approve/{id}', [AdminController::class, 'approve'])->name('admin.veto.approve');

// Route pour supprimer une inscription par l'administrateur
Route::delete('/admin/veto/{id}', [AdminController::class, 'destroy'])->name('admin.veto.destroy');


});


