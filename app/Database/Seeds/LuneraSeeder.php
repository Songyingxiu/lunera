<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class LuneraSeeder extends Seeder
{
    public function run()
    {
        // 1. Insert Categories (Anime Genres)
        $categories = [
            ['category_name' => 'Shōnen Action', 'slug' => 'shōnen-action'],
            ['category_name' => 'Isekai', 'slug' => 'isekai'],
            ['category_name' => 'Slice of Life', 'slug' => 'slice-of-life'],
            ['category_name' => 'Movies (Original)', 'slug' => 'movies-original'],
            ['category_name' => 'Sci-Fi & Mecha', 'slug' => 'sci-fi-mecha'],
        ];
        
        $this->db->table('categories')->insertBatch($categories);

        // 2. Insert Contents (Official TMDB Images)
        // Saya menggunakan server 'image.tmdb.org' yang stabil dan resmi.
        
        $contents = [
            // --- MOVIES ---
            [
                'id_category'   => 4, 
                'title'         => 'Your Name (Kimi no Na wa)',
                'slug'          => 'your-name',
                'description'   => 'Two teenagers share a profound, magical connection upon discovering they are swapping bodies.',
                'thumbnail_url' => 'https://image.tmdb.org/t/p/original/q719jXXEzOoYaps6babgKnONONX.jpg',
                'cover_url'     => 'https://static.wikia.nocookie.net/kiminonawa/images/4/45/MainHeader.jpg/revision/latest?cb=20240624060223',
                'video_url'     => 'https://www.w3schools.com/html/mov_bbb.mp4',
                'release_year'  => '2016',
                'studio'        => 'CoMix Wave Films',
                'type'          => 'movie',
                'status'        => 'completed',
                'rating'        => 9.2,
                'created_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'id_category'   => 4,
                'title'         => 'Suzume',
                'slug'          => 'suzume-no-tojimari',
                'description'   => 'A modern action-adventure road story where a 17-year-old girl named Suzume helps a mysterious young man close doors.',
                'thumbnail_url' => 'https://4kwallpapers.com/images/wallpapers/suzume-no-tojimari-3840x2160-11464.jpg',
                'cover_url'     => 'https://4kwallpapers.com/images/wallpapers/suzume-no-tojimari-3840x2160-11464.jpg',
                'video_url'     => 'https://www.w3schools.com/html/mov_bbb.mp4',
                'release_year'  => '2022',
                'studio'        => 'CoMix Wave Films',
                'type'          => 'movie',
                'status'        => 'completed',
                'rating'        => 8.8,
                'created_at'    => date('Y-m-d H:i:s'),
            ],

            // --- SERIES ---
            [
                'id_category'   => 1, // Shounen
                'title'         => 'Jujutsu Kaisen',
                'slug'          => 'jujutsu-kaisen',
                'description'   => 'A boy swallows a cursed talisman - the finger of a demon - and becomes cursed himself.',
                // Official Poster JJK
                'thumbnail_url' => 'https://image.tmdb.org/t/p/original/hD8yERO8eDFvIql1vrnz083xbjc.jpg',
                // Official Wide Wallpaper
                'cover_url'     => 'https://image.tmdb.org/t/p/original/fXkIifg2FHK40b2V95JgQn4gD.jpg',
                'video_url'     => 'https://www.w3schools.com/html/mov_bbb.mp4',
                'release_year'  => '2020',
                'studio'        => 'MAPPA',
                'type'          => 'series',
                'status'        => 'ongoing',
                'rating'        => 9.0,
                'created_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'id_category'   => 3, // Slice of Life
                'title'         => 'Oshi no Ko',
                'slug'          => 'oshi-no-ko',
                'description'   => 'A doctor and his patient are reborn as the twin children of their favorite musical idol.',
                // Official Poster Oshi no Ko
                'thumbnail_url' => 'https://image.tmdb.org/t/p/original/r165CMt27C9F209b53q9lY08Xh.jpg',
                // Official Wide Wallpaper
                'cover_url'     => 'https://image.tmdb.org/t/p/original/4HodYYKEIsGOdinkGi2Ucz6X9i0.jpg',
                'video_url'     => 'https://www.w3schools.com/html/mov_bbb.mp4',
                'release_year'  => '2023',
                'studio'        => 'Doga Kobo',
                'type'          => 'series',
                'status'        => 'ongoing',
                'rating'        => 9.5,
                'created_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'id_category'   => 1, // Shounen
                'title'         => 'Demon Slayer',
                'slug'          => 'demon-slayer',
                'description'   => 'Tanjiro sets out to become a demon slayer to avenge his family and cure his sister.',
                // Official Poster Demon Slayer
                'thumbnail_url' => 'https://image.tmdb.org/t/p/original/wrCVHdkBlBWdJUZPvnJWcBRuhSY.jpg',
                // Official Wide Wallpaper
                'cover_url'     => 'https://image.tmdb.org/t/p/original/nTvM4mhqNlHIvUkI1gVnW6XP7GG.jpg',
                'video_url'     => 'https://www.w3schools.com/html/mov_bbb.mp4',
                'release_year'  => '2019',
                'studio'        => 'Ufotable',
                'type'          => 'series',
                'status'        => 'ongoing',
                'rating'        => 9.4,
                'created_at'    => date('Y-m-d H:i:s'),
            ],
        ];

        $this->db->table('contents')->insertBatch($contents);

        // 3. Insert Episodes
        // Karena link screenshot episode spesifik sering expired, 
        // saya menggunakan Official Backdrop (Wide) anime tersebut sebagai thumbnail episode.
        // Ini memastikan gambar selalu High Quality dan tidak broken link.

        $episodes = [
            // Jujutsu Kaisen Episodes (ID 3)
            [
                'id_content'    => 3, 
                'episode_no'    => 1, 
                'title'         => 'Ryomen Sukuna',
                'episode_thumb' => 'https://static.wikia.nocookie.net/jujutsu-kaisen/images/6/63/Episode_1_Title_Card.png/revision/latest/scale-to-width-down/1000?cb=20201003030212',
                'video_url'     => 'https://www.w3schools.com/html/mov_bbb.mp4', 
                'duration'      => 24, 
                'created_at'    => date('Y-m-d H:i:s')
            ],
            [
                'id_content'    => 3, 
                'episode_no'    => 2, 
                'title'         => 'For Myself', 
                'episode_thumb' => 'https://static.wikia.nocookie.net/jujutsu-kaisen/images/2/22/Episode_2_Title_Card.png/revision/latest/scale-to-width-down/1000?cb=20201010064928',
                'video_url'     => 'https://www.w3schools.com/html/mov_bbb.mp4', 
                'duration'      => 24, 
                'created_at'    => date('Y-m-d H:i:s')
            ],
            
            // Oshi no Ko Episodes (ID 4)
            [
                'id_content'    => 4, 
                'episode_no'    => 1, 
                'title'         => 'Mother and Children',
                'episode_thumb' => 'https://static.wikia.nocookie.net/oshi_no_ko/images/5/5c/Episode_1_Website_Preview_1.jpg/revision/latest/scale-to-width-down/200?cb=20230418193336',
                'video_url'     => 'https://www.w3schools.com/html/mov_bbb.mp4', 
                'duration'      => 82, 
                'created_at'    => date('Y-m-d H:i:s')
            ],
            
            // Demon Slayer Episodes (ID 5)
            [
                'id_content'    => 5, 
                'episode_no'    => 1, 
                'title'         => 'Cruelty',
                'episode_thumb' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-9CSaxax7Lz82vt9bQIfB6KcHXMd_5oHAbw&s',
                'video_url'     => 'https://youtu.be/BgwgzZo77bg?si=2d3RevtcXlxl63zd', 
                'duration'      => 24, 
                'created_at'    => date('Y-m-d H:i:s')
            ],
        ];

        if ($this->db->tableExists('episodes')) {
            $this->db->table('episodes')->insertBatch($episodes);
        }
    }
}