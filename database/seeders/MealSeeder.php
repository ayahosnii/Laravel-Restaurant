<?php

namespace Database\Seeders;

use App\Models\admin\Product;
use App\Models\admin\ProductTranslation;
use App\Models\Conversation;
use App\Models\providers\Meal;
use App\Models\providers\MealTranslation;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MealSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('meals')->delete();
        DB::table('meals')->insert([
            [
                'id' => 1,
                'name' =>'Layer Cakes',
                'description' => 'Whether you’re celebrating a birthday, wedding, or just want to show off that beautiful new cake stand, sky-high stacks of cake and frosting are definitely needed.',
                'calories' => 500,
                'category_id' => 3,
                'branch_id' => NULL,
                'price' => 95,
                'image' => 'images/products/chocolate-mousse-cake-1024x1536.jpg',
                'images' => NULL,
                'published' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'provider_id' => 2,
                'main_cate_id' => 1,
                'slug' => 'layer-cakes'
            ],
            [
                'id' => 2,
                'name' =>'homemade-cake-pops',
                'description' => 'How was your weekend? We spent most of it celebrating my friend’s birthday. I made a whole mess of treats including chocolate zucchini cake (as cupcakes), these salted caramel dark chocolate cookies, and these peanut butter M&M cookies too– it’s been way too long since I made a batch of those in particular! The birthday girl loves chocolate and peanut butter and caramel so these 3 were a no brainer.',
                'calories' => 440,
                'category_id' => 3,
                'branch_id' => NULL,
                'price' => 85,
                'image' => 'images/products/homemade-cake-pops.jpg',
                'images' => NULL,
                'published' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'provider_id' => 2,
                'main_cate_id' => 1,
                'slug' => 'homemade-cake-pops'
            ],
            [
                'id' => 3,
                'name' => 'Espresso',
                'description' => 'Our espresso is made with high-quality Arabica beans, carefully roasted to bring out the rich, bold flavors.',
                'calories' => 2,
                'category_id' => 1,
                'price' => 2.5,
                'image' => 'images/products/espresso.jpg',
                'images' => NULL,
                'published' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'provider_id' => 2,
                'main_cate_id' => 11,
                'slug' => 'espresso',
                'branch_id' => NULL,
            ],
            [
                'id' => 4,
                'name' => 'Cappuccino',
                'description' => 'Our cappuccino is made with freshly brewed espresso and creamy, steamed milk topped with a thick layer of foam.',
                'calories' => 150,
                'category_id' => 1,
                'price' => 55.5,
                'image' => 'images/products/cappuccino.jpg',
                'images' => NULL,
                'published' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'provider_id' => 2,
                'main_cate_id' => 11,
                'branch_id' => NULL,
                'slug' => 'cappuccino-4',
            ],
            [
                'id' => 5,
                'name' => 'Latte',
                'description' => 'Our latte is made with freshly brewed espresso and rich, steamed milk topped with a delicate layer of foam.',
                'calories' => 200,
                'category_id' => 1,
                'price' => 59.25,
                'image' => 'images/products/latte.jpg',
                'images' => NULL,
                'published' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'provider_id' => 2,
                'main_cate_id' => 11,
                'branch_id' => NULL,
                'slug' => 'latte-5',
            ],
            [
                'id' => 6,
                'name' => 'Croissant',
                'description' => 'Our croissants are made with flaky, buttery pastry dough and filled with delicious ingredients like chocolate or almond.',
                'calories' => 300,
                'category_id' => 2,
                'price' => 45.25,
                'image' => 'images/products/croissant.jpg',
                'images' => NULL,
                'published' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'provider_id' => 2,
                'main_cate_id' => 11,
                'branch_id' => NULL,
                'slug' => 'croissant-6',
            ],

            [
                'id' => 7,
                'name' => 'Bagel',
                'description' => 'Our bagels are made with fresh, chewy dough and come in a variety of flavors like plain, sesame, and everything.',
                'calories' => 250,
                'category_id' => 2,
                'price' => 45,
                'image' => 'images/products/bagel.jpg',
                'images' => NULL,
                'published' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'provider_id' => 2,
                'main_cate_id' => 11,
                'branch_id' => null,
                'slug' => 'bagel'
            ],
            [
                'id' => 8,
                'name' => 'Ice Cream Scoop',
                'description' => 'Our ice cream scoops come in a variety of flavors like chocolate, vanilla, and strawberry.',
                'calories' => 200,
                'category_id' => 4,
                'price' => 50,
                'image' => 'images/products/chocolate-mousse-cake-1024x1536.jpg',
                'images' => NULL,
                'published' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'provider_id' => 4,
                'main_cate_id' => 11,
                'branch_id' => null,
                'slug' => 'ice-cream-scoop'
            ],
            [
                'id' => 9,
                'name' => 'Sundae',
                'description' => 'Our sundaes are made with a scoop of our delicious ice cream and topped with your choice of toppings like hot fudge and sprinkles.',
                'calories' => 350,
                'category_id' => 4,
                'price' => 46,
                'image' => 'images/products/chocolate-mousse-cake-1024x1536.jpg',
                'images' => NULL,
                'published' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'provider_id' => 4,
                'main_cate_id' => 11,
                'branch_id' => null,
                'slug' => 'sundae'
            ],
            [
                'id' => 10,
                'name' => 'Vanilla Milkshake',
                'description' => 'Our milkshakes are made with creamy, delicious ice cream and come in a variety of flavors.',
                'calories' => 500,
                'category_id' => 5,
                'price' => 50,
                'image' => 'images/products/chocolate-mousse-cake-1024x1536.jpg',
                'images' => NULL,
                'published' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'provider_id' => 4,
                'main_cate_id' => 11,
                'branch_id' => null,
                'slug' => 'vanillia-milkshake'
                ],
            [
                'id' => 11,
                'name' => 'Cake Slice',
                'description' => 'Our cake slices come in a variety of flavors like chocolate, vanilla, and red velvet.',
                'calories' => 400,
                'category_id' => 3,
                'price' => 35,
                'image' => 'images/products/chocolate-mousse-cake-1024x1536.jpg',
                'images' => NULL,
                'published' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'provider_id' => 4,
                'main_cate_id' => 11,
                'branch_id' => null,
                'slug' => 'cake-slice'
            ],
            [
                'id' => 12,
                'name' => 'Cheesecake Slice',
                'description' => 'Our cheesecake slices come in a variety of flavors like classic, strawberry, and blueberry.',
                'calories' => 450,
                'category_id' => 3,
                'price' => 42.5,
                'provider_id' => 4,
                'main_cate_id' => 11,
                'image' => 'images/products/chocolate-mousse-cake-1024x1536.jpg',
                'images' => NULL,
                'published' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'branch_id' => null,
                'slug' => 'cheesecake-slice'
            ],
            [
                'id' => 13,
                'name' => 'Chocolate Cake',
                'description' => 'Our chocolate cake is made with rich, dark chocolate and layers of fluffy, moist cake.',
                'calories' => 400,
                'category_id' => 3,
                'price' => 50,
                'provider_id' => 4,
                'main_cate_id' => 11,
                'image' => 'images/products/chocolate-mousse-cake-1024x1536.jpg',
                'images' => NULL,
                'published' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'branch_id' => null,
                'slug' => 'chocolate-cake'
            ],
            [
                'id' => 14,
                'name' => 'Strawberry Cheesecake',
                'description' => 'Our strawberry cheesecake is made with a graham cracker crust, creamy cheesecake filling, and topped with fresh strawberries.',
                'calories' => 450,
                'category_id' => 3,
                'price' => 60,
                'provider_id' => 4,
                'main_cate_id' => 11,
                'branch_id' => null,
                'slug' => 'strauberry-cheesecake',
                'image' => 'images/products/chocolate-mousse-cake-1024x1536.jpg',
                'images' => NULL,
                'published' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 15,
                'name' => 'Ice Cream Sundae',
                'description' => 'Our ice cream sundaes are made with your choice of ice cream flavor, topped with hot fudge, whipped cream, and a cherry on top.',
                'calories' => 500,
                'category_id' => 4,
                'price' => 40,
                'provider_id' => 4,
                'main_cate_id' => 11,
                'branch_id' => null,
                'slug' => 'ice-cream-sundae',
                'image' => 'images/products/chocolate-mousse-cake-1024x1536.jpg',
                'images' => NULL,
                'published' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]

        ]);


        DB::table('meal_translations')->delete();
        DB::table('meal_translations')->insert(
            [
            'id' => 1,
            'meal_id' => 1,
            'locale' => 'ar',
            'name' => 'كيكة طبقات',
            'description' => 'Whether you’re celebrating a birthday, wedding, or just want to show off that beautiful new cake stand, sky-high stacks of cake and frosting are definitely needed.',
            ],
            [
                'id' => 2,
                'meal_id' => 2,
                'locale' => 'ar',
                'name' => 'مصاصات الكيك',
                'description' => 'Whether you’re celebrating a birthday, wedding, or just want to show off that beautiful new cake stand, sky-high stacks of cake and frosting are definitely needed.',
            ],
            [
                'id' => 3,
                'meal_id' => 3,
                'locale' => 'ar',
                'name' => 'إسبريسو',
                'description' => 'تصنع عصيراتنا من البن العربي ذو الجودة العالية، الذي يتم تحميصه بعناية لإخراج الأذواق الكثيفة والجريئة.',
            ],
            [
                'id' => 4,
                'meal_id' => 4,
                'locale' => 'ar',
                'name' => 'كابوتشينو',
                'description' => 'تصنع عصيراتنا باستخدام إسبريسو حديث وحليب غني ومغطى بطبقة كثيفة من الغزلان.',
            ],
            [
                'id' => 5,
                'meal_id' => 5,
                'locale' => 'ar',
                'name' => 'لاتي',
                'description' => 'تصنع عصيراتنا باستخدام إسبريسو حديث وحليب غني ومغطى بطبقة خفيفة من الغزلان.',
            ],
            [
                'id' => 6,
                'meal_id' => 6,
                'locale' => 'ar',
                'name' => 'كروان بالشوكولاتة أو اللوز',
                'description' => 'تصنع حلوياتنا باستخدام عجينة فتاة وزبدية وملئة بمكونات لذيذة مثل الشوكولاتة أو اللوز.',
            ],
            [
                'id' => 7,
                'meal_id' => 7,
                'locale' => 'ar',
                'name' => 'باجل',
                'description' => 'تصنع حلوياتنا باستخدام عجينة باردة ومشروبة وتتوفر بعدة أذواق مثل البدون توابل أو السمسم أو كل التوابل.',
            ],
            [
                'id' => 8,
                'meal_id' => 8,
                'locale' => 'ar',
                'name' => 'جراب لذيذ الآيس كريم',
                'description' => 'تتوفر جرابات لذيذ الآيس كريم الخاص بنا في مجموعة من الأذواق مثل الشوكولاتة والفانيليا والفراولة.',
            ],
            [
                'id' => 9,
                'meal_id' => 9,
                'locale' => 'ar',
                'name' => 'ساندا',
                'description' => 'تصنع سانداتنا باستخدام جرعة من لذيذ الآيس كريم الخاص بنا وتزين بالمكونات المفضلة لديك مثل الشوكولاتة الساخنة والذراعات.',
            ],
            [
                'id' => 10,
                'meal_id' => 10,
                'locale' => 'ar',
                'name' => 'ميلك شيك',
                'description' => 'تصنع ميلك شيكاتنا بالآيس كريم الغني واللذيذ وتتوفر في مجموعة من الأذواق.',
            ],
            [
                'id' => 11,
                'meal_id' => 11,
                'locale' => 'ar',
                'name' => 'شريحة كيك',
                'description' => 'تتوفر شرائح الكيك الخاص بنا في مجموعة من الأذواق مثل الشوكولاتة والفانيليا والخضراء الحمراء.',
            ],
            [
                'id' => 12,
                'meal_id' => 12,
                'locale' => 'ar',
                'name' => 'شريحة الجبن كيك',
                'description' => 'تتوفر شرائح الجبن كيك الخاص بنا في مجموعة من الأذواق مثل الأصلية والفراولة والتوت الزرق.',
            ],
            [
                'id' => 13,
                'meal_id' => 13,
                'locale' => 'ar',
                'name' => 'كيكة شوكولاتة',
                'description' => 'تحتوي كيكة الشوكولاتة الخاصة بنا على شوكولاتة داكنة وغنية وطبقات من خبز ناعم ورطب.',
            ],

            [
                'id' => 14,
                'meal_id' => 14,
                'locale' => 'ar',
                'name' => 'كيكة توت بالجبن',
                'description' => 'تحتوي كيكة توت بالجبن الخاصة بنا على قاعدة من خبز جراهام، حثوث جبن مخلط، ومزينة بتوت طازج.',
            ],

            [
                'id' => 15,
                'meal_id' => 15,
                'locale' => 'ar',
                'name' => 'شرائح الآيس كريم',
                'description' => 'تحتوي شرائح الآيس كريم الخاصة بنا على طعم الآيس كريم الذي تختاره، مزينة بغليظة الشوكولات وخنازير الحليب وزهرة فوق الجبن.',
            ],

        );

    }
}
