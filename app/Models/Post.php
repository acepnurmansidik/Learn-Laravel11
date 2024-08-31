<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post {
    public static function all(){
        return [
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
    }

    public static function findOne($slug){
        $post = Arr::first(static::all(), fn($post) => $post["slug"] == $slug);

        if(!$post){
            abort(404);
        }
        
        return $post;
    }
}