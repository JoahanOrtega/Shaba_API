<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Product::factory(20)->create();
        $products = [
            [
                'name' => 'sit',
                'description' => 'Sint natus minus dolores eius. Rerum possimus consequatur distinctio corporis. Doloribus doloremque qui dolores voluptas rerum fuga sunt. Et illo qui delectus voluptas qui optio.',
                'price' => 33.03,
                'id_category' => 4,
                'size' => 'M',
                'color' => 'purple',
                'available_quantity' => 55,
                'img' => 'https://via.placeholder.com/640x480.png/002211?text=consequatur',
            ],
            [
                'name' => 'quam',
                'description' => 'Dolore qui doloremque doloremque illo est. Esse unde dignissimos delectus tempore quia dignissimos illo voluptatem. Voluptatem delectus consequatur commodi placeat. Saepe dolor tempora veritatis.',
                'price' => 597.99,
                'id_category' => 5,
                'size' => 'L',
                'color' => 'green',
                'available_quantity' => 10,
                'img' => 'https://via.placeholder.com/640x480.png/0077bb?text=voluptatem',
            ],
            [
                'name' => 'eum',
                'description' => 'Optio temporibus sunt doloribus quos et dicta pariatur. Enim neque nam assumenda nobis.',
                'price' => 465.70,
                'id_category' => 1,
                'size' => 'M',
                'color' => 'blue',
                'available_quantity' => 84,
                'img' => 'https://via.placeholder.com/640x480.png/00ee11?text=doloremque',
            ],
            [
                'name' => 'occaecati',
                'description' => 'Molestiae iste nihil impedit quasi. Omnis qui vel temporibus quia enim excepturi.',
                'price' => 65.43,
                'id_category' => 3,
                'size' => 'L',
                'color' => 'navy',
                'available_quantity' => 22,
                'img' => 'https://via.placeholder.com/640x480.png/00bb99?text=quasi',
            ],
            [
                'name' => 'vitae',
                'description' => 'Animi quasi exercitationem tempora ullam odit excepturi possimus. Voluptate fugit consequatur consequatur ut. Hic beatae fugit est. Autem quasi et dolorem dolorem.',
                'price' => 767.24,
                'id_category' => 2,
                'size' => 'S',
                'color' => 'purple',
                'available_quantity' => 19,
                'img' => 'https://via.placeholder.com/640x480.png/00ddff?text=magnam',
            ],
            [
                'name' => 'dicta',
                'description' => 'Amet illum expedita omnis fugit non. Sed omnis ab consectetur quis. Sit fuga tempore ut quia magni. Nihil enim ut modi ipsa perspiciatis.',
                'price' => 493.45,
                'id_category' => 1,
                'size' => 'L',
                'color' => 'lime',
                'available_quantity' => 29,
                'img' => 'https://via.placeholder.com/640x480.png/00ddff?text=eum',
            ],
            [
                'name' => 'et',
                'description' => 'Et quia consequatur officia fuga itaque accusamus. Eum rerum fuga omnis itaque sed molestiae enim. Eum consequuntur ut rerum beatae et. Praesentium magni quia saepe perferendis culpa enim at esse.',
                'price' => 797.26,
                'id_category' => 1,
                'size' => 'M',
                'color' => 'teal',
                'available_quantity' => 35,
                'img' => 'https://via.placeholder.com/640x480.png/00ff00?text=iusto',
            ],
            [
                'name' => 'asperiores',
                'description' => 'Consequatur autem voluptas numquam sint laboriosam. Eligendi quod cumque aut nobis quibusdam quia earum. Quia enim voluptates id dignissimos enim. Totam fugiat blanditiis fugit officia placeat.',
                'price' => 759.93,
                'id_category' => 3,
                'size' => 'L',
                'color' => 'purple',
                'available_quantity' => 42,
                'img' => 'https://via.placeholder.com/640x480.png/000022?text=et',
            ],
            [
                'name' => 'nemo',
                'description' => 'Quos consectetur aut omnis incidunt. Autem mollitia laboriosam eligendi amet. Sequi dolor commodi accusantium tenetur iusto.',
                'price' => 533.00,
                'id_category' => 2,
                'size' => 'M',
                'color' => 'yellow',
                'available_quantity' => 69,
                'img' => 'https://via.placeholder.com/640x480.png/00ee33?text=provident',
            ],
            [
                'name' => 'nihil',
                'description' => 'Quia enim aspernatur molestiae illo. Ullam sit est debitis voluptates eveniet optio doloremque.',
                'price' => 628.00,
                'id_category' => 5,
                'size' => 'S',
                'color' => 'navy',
                'available_quantity' => 79,
                'img' => 'https://via.placeholder.com/640x480.png/001133?text=enim',
            ],
            [
                'name' => 'sint',
                'description' => 'Nostrum quis architecto velit quasi quaerat ea. Aut recusandae sint dicta excepturi tempora. Ipsum enim dolorem velit voluptatem libero voluptas.',
                'price' => 310.97,
                'id_category' => 4,
                'size' => 'S',
                'color' => 'purple',
                'available_quantity' => 43,
                'img' => 'https://via.placeholder.com/640x480.png/00aa55?text=reiciendis',
            ],
            [
                'name' => 'magnam',
                'description' => 'Ad ea vitae consectetur expedita ut. Vel quo ut quo sint consequuntur est. Quisquam eligendi ut consequatur repellendus.',
                'price' => 270.22,
                'id_category' => 5,
                'size' => 'L',
                'color' => 'gray',
                'available_quantity' => 51,
                'img' => 'https://via.placeholder.com/640x480.png/0055ee?text=inventore',
            ],
            [
                'name' => 'maiores',
                'description' => 'Excepturi odio dolor occaecati ut dolores. Sint voluptatem maiores rerum facere. Placeat a rerum voluptas.',
                'price' => 799.52,
                'id_category' => 3,
                'size' => 'M',
                'color' => 'aqua',
                'available_quantity' => 12,
                'img' => 'https://via.placeholder.com/640x480.png/0066ff?text=possimus',
            ],
            [
                'name' => 'perspiciatis',
                'description' => 'Maiores qui nihil quo vero libero quia. Impedit perspiciatis rerum temporibus id deleniti aut. Optio recusandae libero natus totam et minus. Ut quo et impedit ipsam in perferendis.',
                'price' => 77.69,
                'id_category' => 3,
                'size' => 'S',
                'color' => 'blue',
                'available_quantity' => 48,
                'img' => 'https://via.placeholder.com/640x480.png/007777?text=alias',
            ],
            [
                'name' => 'deleniti',
                'description' => 'Aut architecto et mollitia veritatis odit eveniet. Sit ut similique dignissimos tempore alias libero.',
                'price' => 806.32,
                'id_category' => 2,
                'size' => 'L',
                'color' => 'yellow',
                'available_quantity' => 49,
                'img' => 'https://via.placeholder.com/640x480.png/00ee44?text=quasi',
            ],
            [
                'name' => 'fuga',
                'description' => 'Sequi quis molestiae magni. Ut quasi consequuntur veniam adipisci voluptatem ut nobis. Enim quam magnam voluptas quibusdam dolores porro illum quod.',
                'price' => 740.23,
                'id_category' => 5,
                'size' => 'L',
                'color' => 'white',
                'available_quantity' => 79,
                'img' => 'https://via.placeholder.com/640x480.png/006611?text=alias',
            ],
            [
                'name' => 'fuga',
                'description' => 'Quo tempore magnam tenetur. Autem eos asperiores et laborum repellendus rerum. Ipsa quae error facere ipsum autem qui earum vero. Perferendis inventore quis velit quidem consectetur fuga.',
                'price' => 209.17,
                'id_category' => 5,
                'size' => 'L',
                'color' => 'black',
                'available_quantity' => 40,
                'img' => 'https://via.placeholder.com/640x480.png/009966?text=cumque',
            ],
            [
                'name' => 'dignissimos',
                'description' => 'Soluta sed dignissimos nihil in sunt. Dolore mollitia magnam veritatis eos reprehenderit consequuntur. Aut dolorum ullam eos et perferendis voluptatem.',
                'price' => 731.28,
                'id_category' => 4,
                'size' => 'L',
                'color' => 'olive',
                'available_quantity' => 39,
                'img' => 'https://via.placeholder.com/640x480.png/009944?text=illo',
            ],
            [
                'name' => 'repudiandae',
                'description' => 'Qui velit aut repudiandae. Facilis sequi porro debitis a itaque porro et. Cumque autem doloremque rerum aut ut maxime.',
                'price' => 861.67,
                'id_category' => 2,
                'size' => 'M',
                'color' => 'white',
                'available_quantity' => 87,
                'img' => 'https://via.placeholder.com/640x480.png/00ccaa?text=deleniti',
            ],
            [
                'name' => 'ut',
                'description' => 'Corporis ipsum natus esse. Possimus alias at quis nemo quae. Unde id exercitationem perspiciatis et voluptatem quasi deserunt eos.',
                'price' => 735.94,
                'id_category' => 3,
                'size' => 'S',
                'color' => 'maroon',
                'available_quantity' => 89,
                'img' => 'https://via.placeholder.com/640x480.png/008800?text=temporibus',
            ],
        ];

        foreach ($products as $productData) {
            Product::create($productData);
        }

        
    }
}
