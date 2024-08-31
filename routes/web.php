<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',["title"=>"Home Page"]);
});


Route::get('/about', function () {
    return view('about',["title"=>"About"]);
});

Route::get('/posts', function () {
    return view('posts',["title"=>"Blog", "posts" => [
        [
            "id" => 1,
            "slug" => "ini-adalah-artikel-1",
            "title" => "Ini Adalah Judul Artikel 1",
            "author" => "Acep Nurman Sidik",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat magnam ipsam asperiores quia, exercitationem nesciunt? Iusto, sunt harum cum voluptatem a magni quos dolore, aliquam commodi fuga laborum cumque. Rem earum explicabo a, minima error dolorum optio aliquid porro doloribus, unde officia quaerat sit, sequi voluptate. Laboriosam quas doloribus reiciendis.",
        ],
        [
            "id" => 2,
            "slug" => "ini-adalah-artikel-2",
            "title" => "Ini Adalah Judul Artikel 2",
            "author" => "Acep Nurman Sidik",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam odio eveniet ut autem, earum nemo! Voluptatibus rem magnam incidunt corporis libero cupiditate atque ipsam, dolore quidem in reprehenderit totam molestiae nobis accusamus impedit eius. Labore adipisci perspiciatis est corrupti, aliquid dolore eveniet saepe voluptas repudiandae perferendis ea. Veniam doloremque illum, vel eum, corporis quod id necessitatibus officiis sed beatae nisi! Laudantium saepe dolore ullam laborum iste corporis quos necessitatibus porro accusantium, dolorem deleniti quod officia debitis, commodi iusto, quasi id sint vero? Voluptates tempore, alias hic nostrum animi odio? Id, cum sequi. Blanditiis amet tempora placeat cumque temporibus, voluptatem quibusdam.",
        ],
    ]]);
});

Route::get("/posts/{slug}",function($slug){
    $posts = [
        [
            "id" => 1,
            "slug" => "ini-adalah-artikel-1",
            "title" => "Ini Adalah Judul Artikel 1",
            "author" => "Acep Nurman Sidik",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat magnam ipsam asperiores quia, exercitationem nesciunt? Iusto, sunt harum cum voluptatem a magni quos dolore, aliquam commodi fuga laborum cumque. Rem earum explicabo a, minima error dolorum optio aliquid porro doloribus, unde officia quaerat sit, sequi voluptate. Laboriosam quas doloribus reiciendis.",
        ],
        [
            "id" => 2,
            "slug" => "ini-adalah-artikel-2",
            "title" => "Ini Adalah Judul Artikel 2",
            "author" => "Acep Nurman Sidik",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam odio eveniet ut autem, earum nemo! Voluptatibus rem magnam incidunt corporis libero cupiditate atque ipsam, dolore quidem in reprehenderit totam molestiae nobis accusamus impedit eius. Labore adipisci perspiciatis est corrupti, aliquid dolore eveniet saepe voluptas repudiandae perferendis ea. Veniam doloremque illum, vel eum, corporis quod id necessitatibus officiis sed beatae nisi! Laudantium saepe dolore ullam laborum iste corporis quos necessitatibus porro accusantium, dolorem deleniti quod officia debitis, commodi iusto, quasi id sint vero? Voluptates tempore, alias hic nostrum animi odio? Id, cum sequi. Blanditiis amet tempora placeat cumque temporibus, voluptatem quibusdam.",
        ],
    ];

    $post=Arr::first($posts, function($post)use ($slug){
        return $post["slug"] == $slug;
    });

    return view('post',["title" => "Single post", "post" => $post]);
});

Route::get('/contact', function () {
    return view('contact',["title"=>"Contact"]);
});