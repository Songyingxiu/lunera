<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        // 1. Insert a Main User
        $userData = [
            'username'   => 'Jotaro_Kujo',
            'email'      => 'jotaro@lunera.com',
            'password'   => password_hash('jotarokujo46', PASSWORD_DEFAULT),
            'created_at' => date('Y-m-d H:i:s'),
        ];

        $this->db->table('users')->insert($userData);
        $userId = $this->db->insertID();

        // 2. Insert a Profile for that User (NEO_GHOST)
        $profileData = [
            'id_user'      => $userId,
            'profile_name' => 'NEO_GHOST',
            'avatar'       => 'https://lh3.googleusercontent.com/aida-public/AB6AXuC1nNhLmj8sleWRjQLrO70-_WTGuq5_i0hBPPt4og-BiRkeezsDz2sT2sA4sPq-u58rsEhXsB4-oNpKYnHMarjAphjUkALAfiu2IL9erofsUxKtQRRUHlp5GQ3B_-BgfOLlB_rogL9ZZic0r0maDDziPBkP9dyZ0oqI99Yb2DgFbercVCIETKTqT1XZVdLkEXrgqPy548Kcv0Zc1tNelTOicdEmZLXITD7ZVSBIw0135zY6tTbEGkvNi_4nq6gLxFEVMt2Nq0AnGL4n', // Matching your profile.php view
        ];

        $this->db->table('profiles')->insert($profileData);
        $profileId = $this->db->insertID();

        // 3. Insert some Watch History
        // 1=Your Name, 3=JJK, 5=Demon Slayer (based on your LuneraSeeder)
        $historyData = [
            [
                'id_profile' => $profileId,
                'id_content' => 3, 
                'watched_at' => date('Y-m-d H:i:s', strtotime('-1 hour')),
            ],
            [
                'id_profile' => $profileId,
                'id_content' => 5,
                'watched_at' => date('Y-m-d H:i:s', strtotime('-2 days')),
            ],
        ];

        $this->db->table('watch_history')->insertBatch($historyData);

        // 4. Insert some Favorites
        $favoriteData = [
            [
                'id_profile' => $profileId,
                'id_content' => 1, // Your Name
                'added_at'   => date('Y-m-d H:i:s'),
            ],
            [
                'id_profile' => $profileId,
                'id_content' => 4, // Oshi no Ko
                'added_at'   => date('Y-m-d H:i:s'),
            ],
        ];

        $this->db->table('favorites')->insertBatch($favoriteData);
    }
}