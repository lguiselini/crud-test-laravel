<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
 

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

//Read
Route::get('/posts', [PostsController::class, 'index']);

//Create
Route::post('posts', [PostsController::class, 'store']);

Route::get('/posts/create', [PostsController::class, 'create']);

//Update
Route::get('/posts/{post}/edit', [PostsController::class, 'edit']);

Route::put('/posts/{post}', [PostsController::class, 'update']);

//Delete
Route::delete('/posts/{post}', [PostsController::class, 'destroy']);

/*
My own summary
|--------------------------------------------------------------------------
 1 - composer create-project laravel/laravel crud-example
 2 - change .env file DB_DATABASE=laravelcrud
 3 - mysql -u root -p = enter and create the new database
 4 - routes/web write the route for PostsController and add the use
 5 - php artisan make:controller PostsController, create the controller
 6 - php artisan make:model Post -m, create the model and do the migration
 7 - 2022_08_17_214337_create_posts_table => change the schema to fit your needs
 8 - run the migration to add these changes (php artisan migrate)
 9 - in PostsController add the models/post, you can use dd(Post::all()); and see the array in the browser
 10 - you can use php artisan tinker to add "fake" data like $post = new App\Models\Post => $post->title = 'example', $post->save();, for testing
 11 - save the data in PostsController to a variable ($posts) in the return part, pass them to the views
 12 - in routes, create another directory for posts and the view (index.blade.php) 
 13 - Create your html boilerplate and build the page layout accordingly
 14 - using tailwindcss CDN for easy layout for this simple app (dev only)
 15 - use @foreach($posts as $post) to repeat what is between it, up to the number of times there are entries in the DB
 16 - optional: use Tinker to create another entry in your database to test 
 17 - To READ the DB and show in the browser => use {{$post->title}} (example)
 18 - Now for the UPDATE, create another Route in web
 19 - and then another function in PostsController
 20 - laravel automatically inject the post in the function if you pass the post id like (Post $post), this way we inject the model there
 21 - create the edit.blade.php and add the html(todoafter: use components)
 22 - in the view edit, use {{ $post->id }} so we can get the id variable that was passed in the controller
 23 - use the method put to submit to this endpoint 
 24 - add @csrf - Cross-Site Request Forgery, to protect from attacks
 25 - add the input and the textarea, also the button to update
 26 - create a new endpoint, Route::put, to where the updated data will be sent to
 27 - In PostsController create a function to update, using the request you need to validate and update the values
 28 - In models/post you need to allow the protection from laravel to pass
 29 - redirect the page back to all the posts after the updated in PostsController
 30 - add the CREATE route
 31 - add the function CREATE in the PostsController
 32 - make a new view for CREATE, it will be almost the same as the edit.blade
 33 - remove the method put and the values
 34 - add another endpoint to send the created form, route::post store method
 35 - in PostsController, create a function for store with validation and creating the posting part
 36 - Redirect to the main page after sending the new created values
 37 - add links in the index and other pages to redirect to the rest of the CRUD operations using a href
 38 - DELETE will be a form in the edit.blade, a button to delete the post
 39 - form is submited when we click the button, laravel will interpret the method DELETE request
 40 - add a route for DELETE
 41 - in PostsController, add the function for this DELETE, which will receive the $post and delete it, after that redirects to home
 42 - Always remember to use the correct method in the form, for DELETE Is method="POST"
 43 - The end!
|
*/