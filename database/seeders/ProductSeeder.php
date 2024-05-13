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
                'name' => 'Vestido Amarillo Casual',
                'description' => 'EZwear Vestido Sin Mangas De Mujer Con Cuello en V De Punto Acanalado Y Parches.',
                'price' => 330.03,
                'id_category' => 4,
                'size' => 'M',
                'color' => 'yellow',
                'available_quantity' => 55,
                'img' => 'https://media.glamour.mx/photos/62dab352c780ec35bf4be022/master/w_1600%2Cc_limit/SHEINAMA.jpg',
            ],
            [
                'name' => 'Vestido Fashion Polka',
                'description' => 'Vestido de Estilo Polka, Campirano con Granulado, Corto y tres Diseños de olanes',
                'price' => 597.99,
                'id_category' => 5,
                'size' => 'L',
                'color' => 'yellor',
                'available_quantity' => 10,
                'img' => 'https://miggon.com/wp-content/uploads/2021/02/Fashion-Polka-Dot-Print-Dress-Wo-510x510.jpg',
            ],
            [
                'name' => 'Vestido Floral',
                'description' => 'Vestido Ajustado Básico de Estilo casual, Longitud por Encima de la Rodilla, Mangas Cortas, Cuello Redondo y un Diseño Simple y a Juego.',
                'price' => 465.70,
                'id_category' => 1,
                'size' => 'M',
                'color' => 'bluw',
                'available_quantity' => 84,
                'img' => 'https://comoorganizarlacasa.com/wp-content/uploads/2021/06/vestidos-shein-casuales-3-1153x1536.jpg',
            ],
            [
                'name' => 'Vestido Casual Elegante',
                'description' => 'Vestido Liso Manga Larga y Corto, El Vestido Está Fabricado en un Material Ligero de Rayón, Que Ofrece un Ajuste Cómodo y Ligeramente elástico.',
                'price' => 450.43,
                'id_category' => 3,
                'size' => 'L',
                'color' => 'blue',
                'available_quantity' => 22,
                'img' => 'https://media.glamour.mx/photos/62dab468b53159738c2c6a2c/master/w_1600%2Cc_limit/mangalargashein.jpg',
            ],
            [
                'name' => 'Vestido Vitae Morado',
                'description' => 'Vestido Casual de Verano Corto Color Morado, con Tela Comoda y Lisa, Granulado',
                'price' => 767.24,
                'id_category' => 2,
                'size' => 'S',
                'color' => 'purple',
                'available_quantity' => 19,
                'img' => 'https://i.pinimg.com/originals/a2/ec/2a/a2ec2ab51ba8077047fb224a4061e618.jpg',
            ],
            [
                'name' => 'Vestido Dicta',
                'description' => 'Vestido corto casual sin mangas, tirantes con olan y corte campirano ',
                'price' => 493.45,
                'id_category' => 1,
                'size' => 'L',
                'color' => 'yellow',
                'available_quantity' => 29,
                'img' => 'https://i.pinimg.com/736x/a7/55/2d/a7552d939445766a8758229901e16e15.jpg',
            ],
            [
                'name' => 'Vestido de Fiesta de día Floral',
                'description' => 'Vestido para mujer de fiesta día, con estampado floral y largo 3/4 a la rodilla',
                'price' => 797.26,
                'id_category' => 1,
                'size' => 'M',
                'color' => 'yellow',
                'available_quantity' => 35,
                'img' => 'https://cdn0.bodas.com.mx/img_c_85835/5/3/8/5/t30_5_85835.jpg',
            ],
            [
                'name' => 'Vestido de Fiesta de día Rayas',
                'description' => 'Vestido largo de día rayado en vertical, apto para el verano, tela comoda y fresca.',
                'price' => 759.93,
                'id_category' => 3,
                'size' => 'L',
                'color' => 'blue',
                'available_quantity' => 42,
                'img' => 'https://cdn0.bodas.com.mx/img_c_85351/1/5/3/5/t30_5_85351.jpg',
            ],
            [
                'name' => 'Vestido de fiesta día sin corte ',
                'description' => 'Vestido largo de día rayado en vertical, apto para el verano, tela comoda y fresca.',
                'price' => 533.00,
                'id_category' => 2,
                'size' => 'M',
                'color' => 'blue',
                'available_quantity' => 69,
                'img' => 'https://cdn0.bodas.com.mx/img_c_85357/7/5/3/5/t30_5_85357.jpg',
            ],
            [
                'name' => 'Vestido de noche largo encaje y liso fashion',
                'description' => 'Vestido largo con corte superior de encaje y liso en parte inferior, apto para todo tipo de graduaciones',
                'price' => 628.00,
                'id_category' => 5,
                'size' => 'S',
                'color' => 'pink',
                'available_quantity' => 79,
                'img' => 'https://blog.higarnovias.com/wp-content/uploads/2019/11/vestido-noche-5.jpg',
            ],
            [
                'name' => 'Vestido de noche graduacion fashion',
                'description' => 'Vestido para graduación largo y descubierto en hombros, brillante y bicolor con escote en V.',
                'price' => 310.97,
                'id_category' => 4,
                'size' => 'S',
                'color' => 'purple',
                'available_quantity' => 43,
                'img' => 'https://bridalroomboutique.com/wp-content/uploads/2021/05/compra-online-vestidos-fiesta-isla-margarita-al-mejor-precio-del-mercado-luce-esplendida.jpg',
            ],
            [
                'name' => 'Vestido de noche / Fiesta',
                'description' => 'Vestido con tela brillosa, largo y con abertura en la pierna derecha, descubierto de los hombros',
                'price' => 270.22,
                'id_category' => 5,
                'size' => 'L',
                'color' => 'gray',
                'available_quantity' => 51,
                'img' => 'https://bridalroomboutique.com/wp-content/uploads/2021/05/mejores-precios-vestidos-fiesta-eventos-celebraciones-prom-isla-margarita-venezuela-evening-dress-boutique-caracas.jpg',
            ],
            [
                'name' => 'Falda de mezclilla aesthetic',
                'description' => 'Falda de mezclilla corte y diseño de moda aesthetic con cinturon de cadena arriba de la rodilla .',
                'price' => 799.52,
                'id_category' => 3,
                'size' => 'M',
                'color' => 'aqua',
                'available_quantity' => 12,
                'img' => 'https://images-na.ssl-images-amazon.com/images/I/61SFKq34dcL._AC_UX679_.jpg',
            ],
            [
                'name' => 'Falda de mezclilla vaquera',
                'description' => 'Falda Vaquera de mezclilla estilo botoneado en medio, media larga',
                'price' => 400.69,
                'id_category' => 3,
                'size' => 'S',
                'color' => 'blue',
                'available_quantity' => 48,
                'img' => 'https://i.pinimg.com/originals/90/82/56/908256e768e492b1af6d4a52b4ea284e.jpg',
            ],
            [
                'name' => 'Blusas casuales/ manga corta',
                'description' => 'Blusa casual manga corta con diseño de moño en el cuello con rayas en el liston.',
                'price' => 806.32,
                'id_category' => 2,
                'size' => 'L',
                'color' => 'white',
                'available_quantity' => 49,
                'img' => 'https://i.pinimg.com/originals/c9/f3/8c/c9f38c1f9a4ab56973d924493cb71186.jpg',
            ],
            [
                'name' => 'Blusas casuales/manga larga',
                'description' => 'Apta para invierno, tela comoda, elastica y diseño semiformal con moño',
                'price' => 740.23,
                'id_category' => 5,
                'size' => 'L',
                'color' => 'blue',
                'available_quantity' => 79,
                'img' => 'https://images-na.ssl-images-amazon.com/images/I/61t6JCIY2CL._UX679_.jpg',
            ],
            [
                'name' => 'Blusas formales',
                'description' => 'Blusa/ Camisa formal de mujer, manga larga apta para trabajo en oficina con diseños elegantes .',
                'price' => 209.17,
                'id_category' => 5,
                'size' => 'L',
                'color' => 'white',
                'available_quantity' => 40,
                'img' => 'https://0.soompi.io/wp-content/uploads/2023/11/05181908/kim-yoo-jung-1-.jpeg',
            ],
            [
                'name' => 'Pantalon de mezclilla',
                'description' => 'Pantalon de mezclilla estilo vaquero vintaje, liso deslavado corte en la cintura',
                'price' => 731.28,
                'id_category' => 4,
                'size' => 'L',
                'color' => 'blue',
                'available_quantity' => 39,
                'img' => 'https://images-na.ssl-images-amazon.com/images/I/61bNzRsXhpL._AC_UL1500_.jpg',
            ],
            [
                'name' => 'Pantalon de mezclilla vaquero',
                'description' => 'Vaquero Acampandado estilo vaquero con linea, corte en la cintura, resistente',
                'price' => 861.67,
                'id_category' => 2,
                'size' => 'M',
                'color' => 'blue',
                'available_quantity' => 87,
                'img' => 'https://m.media-amazon.com/images/I/81upmPOYgsL._AC_SX569_.jpg',
            ],
            [
                'name' => 'Short',
                'description' => 'Short corto ajustable corte en cadera sin cierre, antes de la rodilla',
                'price' => 735.94,
                'id_category' => 3,
                'size' => 'S',
                'color' => 'blue',
                'available_quantity' => 89,
                'img' => 'https://images-na.ssl-images-amazon.com/images/I/7152WcHXM6S._UL1500_.jpg',
            ],
        ];

        foreach ($products as $productData) {
            Product::create($productData);
        }

        
    }
}
