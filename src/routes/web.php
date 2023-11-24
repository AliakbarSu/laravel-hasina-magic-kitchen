<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DishController;
use App\Http\Controllers\ProfileController;
use App\Models\Category;
use App\Models\Dish;
use App\Models\Menu;
use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

// Route::inertia("about", "About");

Route::get('/checkout', function () {
    return Inertia::render('Checkout', []);
})->name('profile.checkout');

Route::get('/admin', function () {
    return Inertia::render('Admin/Admin', []);
});

Route::get('/', function (
    Menu $menu,
    DishController $dishes,
    Dish $dish,
    Category $category
) {
    return Inertia::render('Home', [
        // 'canLogin' => Route::has('login'),
        // 'canRegister' => Route::has('register'),
        // 'laravelVersion' => Application::VERSION,
        // 'phpVersion' => PHP_VERSION,
        // "about" => route('about')
        'dishes' => $dishes->all_dishes($dish)->toArray(),
        'menu' => $menu->get_menus_with_media(),
        'categories' => $category->get_all_categories()->toArray(),
    ]);
})->name('main.home');

Route::get('/about', function (Menu $menu, DishController $dishes, Dish $dish) {
    return Inertia::render('About', []);
})->name('about');

Route::get('/order-summary/{id}', function (Request $request, Orders $order) {
    try {
        $order = $order->get_order_by_id($request->id);
        return Inertia::render('OrderSummaries', [
            'order' => $order,
        ]);
    } catch (Exception $e) {
        return Inertia::render('404', []);
    }
})->name('order.summary');

Route::get('/contact', function () {
    return Inertia::render('Contact', []);
})->name('contact');

Route::get('/faqs', function () {
    return Inertia::render('FAQS', []);
})->name('faqs');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name(
        'profile.edit'
    );
    Route::patch('/profile', [ProfileController::class, 'update'])->name(
        'profile.update'
    );
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name(
        'profile.destroy'
    );

    Route::get('/orders', [AdminController::class, 'orders'])->name(
        'admin.orders'
    );

    Route::get('/admin/add-category', function (Category $category) {
        return Inertia::render('Admin/AddCategory', [
            'categories' => $category->get_all_categories()->toArray(),
        ]);
    })->name('admin.addCategory');

    Route::get('/admin/add-dish', function (Category $category, Dish $dishes) {
        return Inertia::render('Admin/AddDish', [
            'categories' => $category->get_all_categories()->toArray(),
            'dishes' => $dishes->all()->toArray(),
        ]);
    })->name('admin.addDish');

    Route::get('/admin/add-menu', function (Dish $dishes) {
        return Inertia::render('Admin/AddMenu', [
            'dishes' => $dishes->all()->toArray(),
            'menus' => Menu::all()->toArray(),
        ]);
    })->name('admin.addMenu');

    Route::get('/orders/{id}', [AdminController::class, 'order_details'])->name(
        'admin.order_details'
    );
    Route::patch('/orders/status', [
        AdminController::class,
        'update_order_status',
    ])->name('admin.orders.update.status');
});

Route::get('/menu', [DishController::class, 'menu'])->name('dish.menu');

require __DIR__ . '/auth.php';
