<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class LuneraSeeder extends Seeder
{
    public function run()
    {
        // 1. Insert Categories (Anime Genres)
        $categories = [
            ['category_name' => 'Shounen Action', 'slug' => 'shounen-action'],
            ['category_name' => 'Isekai', 'slug' => 'isekai'],
            ['category_name' => 'Slice of Life', 'slug' => 'slice-of-life'],
            ['category_name' => 'Movies (Original)', 'slug' => 'movies-original'],
            ['category_name' => 'Sci-Fi & Mecha', 'slug' => 'sci-fi-mecha'],
        ];
        
        // Using insertBatch to insert multiple rows at once
        $this->db->table('categories')->insertBatch($categories);

        // 2. Insert Contents (Anime Series & Movies)
        // Note: IDs depend on the order above. 
        // 1=Shounen, 2=Isekai, 3=Slice of Life, 4=Movies, 5=Sci-Fi
        
        $contents = [
            // --- MOVIES ---
            [
                'id_category'   => 4, 
                'title'         => 'Your Name (Kimi no Na wa)',
                'slug'          => 'your-name',
                'description'   => 'Two teenagers share a profound, magical connection upon discovering they are swapping bodies.',
                'thumbnail_url' => 'yourname_thumb.jpg',
                'cover_url'     => 'yourname_cover.jpg',
                'video_url'     => 'yourname_movie.mp4',
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
                'description'   => 'A modern action-adventure road story where a 17-year-old girl named Suzume helps a mysterious young man close doors from the other side that are releasing disasters all over Japan.',
                'thumbnail_url' => 'suzume_thumb.jpg',
                'cover_url'     => 'suzume_cover.jpg',
                'video_url'     => 'suzume_movie.mp4',
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
                'description'   => 'A boy swallows a cursed talisman - the finger of a demon - and becomes cursed himself. He enters a shaman\'s school to be able to locate the demon\'s other body parts and thus exorcise himself.',
                'thumbnail_url' => 'jjk_thumb.jpg',
                'cover_url'     => 'jjk_cover.jpg',
                'video_url'     => 'jjk_trailer.mp4',
                'release_year'  => '2020',
                'studio'        => 'MAPPA',
                'type'          => 'series',
                'status'        => 'ongoing',
                'rating'        => 9.0,
                'created_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'id_category'   => 3, // Slice of Life / Drama
                'title'         => 'Oshi no Ko',
                'slug'          => 'oshi-no-ko',
                'description'   => 'A doctor and his patient are reborn as the twin children of their favorite musical idol and navigate the highs and lows of the Japanese entertainment industry.',
                'thumbnail_url' => 'oshinoko_thumb.jpg',
                'cover_url'     => 'oshinoko_cover.jpg',
                'video_url'     => 'oshinoko_trailer.mp4',
                'release_year'  => '2023',
                'studio'        => 'Doga Kobo',
                'type'          => 'series',
                'status'        => 'ongoing',
                'rating'        => 9.5,
                'created_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'id_category'   => 1, // Shounen
                'title'         => 'Demon Slayer: Kimetsu no Yaiba',
                'slug'          => 'demon-slayer',
                'description'   => 'A family is attacked by demons and only two members survive - Tanjiro and his sister Nezuko, who is turning into a demon slowly. Tanjiro sets out to become a demon slayer to avenge his family and cure his sister.',
                'thumbnail_url' => 'kny_thumb.jpg',
                'cover_url'     => 'kny_cover.jpg',
                'video_url'     => 'kny_trailer.mp4',
                'release_year'  => '2019',
                'studio'        => 'Ufotable',
                'type'          => 'series',
                'status'        => 'ongoing',
                'rating'        => 9.4,
                'created_at'    => date('Y-m-d H:i:s'),
            ],
        ];

        $this->db->table('contents')->insertBatch($contents);

        // 3. Insert Episodes (For Series only)
        // Assuming:
        // ID 3 = Jujutsu Kaisen
        // ID 4 = Oshi no Ko
        // ID 5 = Demon Slayer
        
        $episodes = [
            // Jujutsu Kaisen Episodes
            [
                'id_content' => 3, 
                'episode_no' => 1, 
                'title'      => 'Ryomen Sukuna', 
                'video_url'  => 'jjk_ep1.mp4', 
                'duration'   => 24, 
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'id_content' => 3, 
                'episode_no' => 2, 
                'title'      => 'For Myself', 
                'video_url'  => 'jjk_ep2.mp4', 
                'duration'   => 24, 
                'created_at' => date('Y-m-d H:i:s')
            ],
            
            // Oshi no Ko Episodes
            [
                'id_content' => 4, 
                'episode_no' => 1, 
                'title'      => 'Mother and Children', 
                'video_url'  => 'onk_ep1.mp4', 
                'duration'   => 82, // Special 1 hour+ episode
                'created_at' => date('Y-m-d H:i:s')
            ],
            
            // Demon Slayer Episodes
            [
                'id_content' => 5, 
                'episode_no' => 1, 
                'title'      => 'Cruelty', 
                'video_url'  => 'kny_ep1.mp4', 
                'duration'   => 24, 
                'created_at' => date('Y-m-d H:i:s')
            ],
        ];

        // Insert episodes only if the table exists (in case you skipped the optional step)
        if ($this->db->tableExists('episodes')) {
            $this->db->table('episodes')->insertBatch($episodes);
        }
    }
}