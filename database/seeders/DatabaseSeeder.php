<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
            // User::create([
            //     'name' => ' Pramudya Pratama',
            //     'email' => 'pramudya@example.com',
            //     'password' => bcrypt('12345')
            // ]);
            // User::create([
            //     'name' => ' Amanda Feb',
            //     'email' => 'amanda@example.com',
            //     'password' => bcrypt('12345')
            // ]);

            User::factory(3)->create();
            
            Category::create([
                'name' => 'Web Programming',
                'slug' => 'web-programming'
            ]);

            Category::create([
                'name' => 'Web Design',
                'slug' => 'web-desgin'
            ]);

            Category::create([
                'name' => 'Personal',
                'slug' => 'persnoal'
            ]);

            Post::factory(22)->create();

            // Post::create([
            //     'title' => 'Judul Pertama',
            //     'slug' => 'judul-pertama',
            //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis hic ipsum alias, esse consectetur, cumque voluptates voluptatum, fugiat recusandae temporibus distinctio debitis laboriosam. Quo, sint? Alias voluptate assumenda sunt impedit.',
            //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam auctor lacus a neque sollicitudin, in pretium ligula laoreet. Duis posuere tincidunt nisi. Curabitur volutpat ipsum risus, sit amet lobortis dui dignissim sit amet. Integer posuere sit amet ante eget viverra. Quisque non nibh bibendum, accumsan elit a, tincidunt purus. Donec ultricies aliquet auctor. Proin eleifend metus ligula, at pharetra dolor pulvinar sit amet. Maecenas sodales placerat accumsan. Donec rutrum consectetur ligula, eu convallis massa consequat sed. Nunc ultricies neque non dui varius, vitae ornare augue vestibulum. Aliquam erat volutpat. Pellentesque facilisis ullamcorper commodo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris maximus lorem quis feugiat placerat. Vivamus risus sem, egestas et pharetra a, pharetra vel odio. Nullam eget elementum ipsum. Sed elementum magna non elit tristique, vel scelerisque elit laoreet. Vestibulum nisl diam, hendrerit at suscipit vel, accumsan et felis. Mauris ut felis ac tellus porttitor pellentesque. Integer sit amet euismod augue, sed lacinia risus. Integer tristique quis lacus ullamcorper dignissim. Nullam sit amet dui sed nisl eleifend porttitor vel sit amet ex. Vivamus posuere, velit in hendrerit lacinia, arcu nulla porta eros, eu dignissim dui ipsum eget dolor. In hac habitasse platea dictumst. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec id ante nec sem rhoncus sodales.',
            //     'category_id' => 1,
            //     'user_id' => 1
                
            // ]);
            
            // Post::create([
            //     'title' => 'Judul Ke Dua',
            //     'slug' => 'judul-kedua',
            //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis hic ipsum alias, esse consectetur, cumque voluptates voluptatum, fugiat recusandae temporibus distinctio debitis laboriosam. Quo, sint? Alias voluptate assumenda sunt impedit.',
            //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam auctor lacus a neque sollicitudin, in pretium ligula laoreet. Duis posuere tincidunt nisi. Curabitur volutpat ipsum risus, sit amet lobortis dui dignissim sit amet. Integer posuere sit amet ante eget viverra. Quisque non nibh bibendum, accumsan elit a, tincidunt purus. Donec ultricies aliquet auctor. Proin eleifend metus ligula, at pharetra dolor pulvinar sit amet. Maecenas sodales placerat accumsan. Donec rutrum consectetur ligula, eu convallis massa consequat sed. Nunc ultricies neque non dui varius, vitae ornare augue vestibulum. Aliquam erat volutpat. Pellentesque facilisis ullamcorper commodo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris maximus lorem quis feugiat placerat. Vivamus risus sem, egestas et pharetra a, pharetra vel odio. Nullam eget elementum ipsum. Sed elementum magna non elit tristique, vel scelerisque elit laoreet. Vestibulum nisl diam, hendrerit at suscipit vel, accumsan et felis. Mauris ut felis ac tellus porttitor pellentesque. Integer sit amet euismod augue, sed lacinia risus. Integer tristique quis lacus ullamcorper dignissim. Nullam sit amet dui sed nisl eleifend porttitor vel sit amet ex. Vivamus posuere, velit in hendrerit lacinia, arcu nulla porta eros, eu dignissim dui ipsum eget dolor. In hac habitasse platea dictumst. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec id ante nec sem rhoncus sodales.',
            //     'category_id' => 1,
            //     'user_id' => 1
                
            // ]);

            // Post::create([
            //     'title' => 'Judul Ke Tiga',
            //     'slug' => 'judul-ketiga',
            //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis hic ipsum alias, esse consectetur, cumque voluptates voluptatum, fugiat recusandae temporibus distinctio debitis laboriosam. Quo, sint? Alias voluptate assumenda sunt impedit.',
            //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam auctor lacus a neque sollicitudin, in pretium ligula laoreet. Duis posuere tincidunt nisi. Curabitur volutpat ipsum risus, sit amet lobortis dui dignissim sit amet. Integer posuere sit amet ante eget viverra. Quisque non nibh bibendum, accumsan elit a, tincidunt purus. Donec ultricies aliquet auctor. Proin eleifend metus ligula, at pharetra dolor pulvinar sit amet. Maecenas sodales placerat accumsan. Donec rutrum consectetur ligula, eu convallis massa consequat sed. Nunc ultricies neque non dui varius, vitae ornare augue vestibulum. Aliquam erat volutpat. Pellentesque facilisis ullamcorper commodo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris maximus lorem quis feugiat placerat. Vivamus risus sem, egestas et pharetra a, pharetra vel odio. Nullam eget elementum ipsum. Sed elementum magna non elit tristique, vel scelerisque elit laoreet. Vestibulum nisl diam, hendrerit at suscipit vel, accumsan et felis. Mauris ut felis ac tellus porttitor pellentesque. Integer sit amet euismod augue, sed lacinia risus. Integer tristique quis lacus ullamcorper dignissim. Nullam sit amet dui sed nisl eleifend porttitor vel sit amet ex. Vivamus posuere, velit in hendrerit lacinia, arcu nulla porta eros, eu dignissim dui ipsum eget dolor. In hac habitasse platea dictumst. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec id ante nec sem rhoncus sodales.',
            //     'category_id' => 2,
            //     'user_id' => 1
                
            // ]);
            // Post::create([
            //     'title' => 'Judul Ke Empat',
            //     'slug' => 'judul-keempat',
            //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis hic ipsum alias, esse consectetur, cumque voluptates voluptatum, fugiat recusandae temporibus distinctio debitis laboriosam. Quo, sint? Alias voluptate assumenda sunt impedit.',
            //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam auctor lacus a neque sollicitudin, in pretium ligula laoreet. Duis posuere tincidunt nisi. Curabitur volutpat ipsum risus, sit amet lobortis dui dignissim sit amet. Integer posuere sit amet ante eget viverra. Quisque non nibh bibendum, accumsan elit a, tincidunt purus. Donec ultricies aliquet auctor. Proin eleifend metus ligula, at pharetra dolor pulvinar sit amet. Maecenas sodales placerat accumsan. Donec rutrum consectetur ligula, eu convallis massa consequat sed. Nunc ultricies neque non dui varius, vitae ornare augue vestibulum. Aliquam erat volutpat. Pellentesque facilisis ullamcorper commodo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris maximus lorem quis feugiat placerat. Vivamus risus sem, egestas et pharetra a, pharetra vel odio. Nullam eget elementum ipsum. Sed elementum magna non elit tristique, vel scelerisque elit laoreet. Vestibulum nisl diam, hendrerit at suscipit vel, accumsan et felis. Mauris ut felis ac tellus porttitor pellentesque. Integer sit amet euismod augue, sed lacinia risus. Integer tristique quis lacus ullamcorper dignissim. Nullam sit amet dui sed nisl eleifend porttitor vel sit amet ex. Vivamus posuere, velit in hendrerit lacinia, arcu nulla porta eros, eu dignissim dui ipsum eget dolor. In hac habitasse platea dictumst. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec id ante nec sem rhoncus sodales.',
            //     'category_id' => 2,
            //     'user_id' => 2
                
            // ]);


    }
}
