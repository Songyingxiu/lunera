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
            'role'       => 'user',
            'created_at' => date('Y-m-d H:i:s'),
        ];

        $this->db->table('users')->insert($userData);
        $userId = $this->db->insertID();

        // 2. Insert a Profile for that User (JutaroKujo)
        $profileData = [
            'id_user'      => $userId,
            'profile_name' => 'JotaroKujo',
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


        // ADDITIONAL USER DATA
        $userSelen = [
            'username'   => 'Selen Tatsuki',
            'email'      => 'selen@lunera.com',
            'password'   => password_hash('SelenTats', PASSWORD_DEFAULT),
            'role'       => 'user',
            'created_at' => date('Y-m-d H:i:s'),
        ];
        $this->db->table('users')->insert($userSelen);
        $idSelen = $this->db->insertID();

        $profileSelen = [
            'id_user'      => $idSelen,
            'profile_name' => 'Selen',
            'avatar'       => 'https://static.wikia.nocookie.net/character-stats-and-profiles/images/4/4c/Selen_tatsuki.png/revision/latest?cb=20240223152506',
        ];
        $this->db->table('profiles')->insert($profileSelen);
        $idProfileSelen = $this->db->insertID();

        $historySelen = [
            ['id_profile' => $idProfileSelen, 'id_content' => 2, 'watched_at' => date('Y-m-d H:i:s')],
            ['id_profile' => $idProfileSelen, 'id_content' => 3, 'watched_at' => date('Y-m-d H:i:s')],
        ];
        $this->db->table('watch_history')->insertBatch($historySelen);

        $favSelen = [
            ['id_profile' => $idProfileSelen, 'id_content' => 3, 'added_at' => date('Y-m-d H:i:s')],
            ['id_profile' => $idProfileSelen, 'id_content' => 5, 'added_at' => date('Y-m-d H:i:s')],
        ];
        $this->db->table('favorites')->insertBatch($favSelen);

        $userPetra = [
            'username'   => 'Petra Gurin',
            'email'      => 'petra@lunera.com',
            'password'   => password_hash('Pingu', PASSWORD_DEFAULT),
            'role'       => 'user',
            'created_at' => date('Y-m-d H:i:s'),
        ];
        $this->db->table('users')->insert($userPetra);
        $idPetra = $this->db->insertID();

        $profilePetra = [
            'id_user'      => $idPetra,
            'profile_name' => 'Petra',
            'avatar'       => 'https://pbs.twimg.com/media/FB6YsxOVkAMZFqt.png',
        ];
        $this->db->table('profiles')->insert($profilePetra);
        $idProfilePetra = $this->db->insertID();

        $historyPetra = [
            ['id_profile' => $idProfilePetra, 'id_content' => 4, 'watched_at' => date('Y-m-d H:i:s')],
            ['id_profile' => $idProfilePetra, 'id_content' => 1, 'watched_at' => date('Y-m-d H:i:s')],
        ];
        $this->db->table('watch_history')->insertBatch($historyPetra);

        $favPetra = [
            ['id_profile' => $idProfilePetra, 'id_content' => 4, 'added_at' => date('Y-m-d H:i:s')],
            ['id_profile' => $idProfilePetra, 'id_content' => 1, 'added_at' => date('Y-m-d H:i:s')],
        ];
        $this->db->table('favorites')->insertBatch($favPetra);

        $userNina = [
            'username'   => 'Nina Kosaka',
            'email'      => 'nina@lunera.com',
            'password'   => password_hash('NinaK', PASSWORD_DEFAULT),
            'role'       => 'user',
            'created_at' => date('Y-m-d H:i:s'),
        ];
        $this->db->table('users')->insert($userNina);
        $idNina = $this->db->insertID();

        $profileNina = [
            'id_user'      => $idNina,
            'profile_name' => 'Nina',
            'avatar'       => 'https://static.wikia.nocookie.net/youtube/images/4/4d/Nina_Kosaka%E3%80%90NIJISANJI_EN%E3%80%91_4.jpg/revision/latest?cb=20221016205749',
        ];
        $this->db->table('profiles')->insert($profileNina);
        $idProfileNina = $this->db->insertID();

        $historyNina = [
            ['id_profile' => $idProfileNina, 'id_content' => 1, 'watched_at' => date('Y-m-d H:i:s')],
            ['id_profile' => $idProfileNina, 'id_content' => 5, 'watched_at' => date('Y-m-d H:i:s')],
        ];
        $this->db->table('watch_history')->insertBatch($historyNina);

        $favNina = [
            ['id_profile' => $idProfileNina, 'id_content' => 2, 'added_at' => date('Y-m-d H:i:s')],
        ];
        $this->db->table('favorites')->insertBatch($favNina);

        $userVestia = [
            'username'   => 'Vestia Zeta',
            'email'      => 'zeta@lunera.com',
            'password'   => password_hash('VestiaZ', PASSWORD_DEFAULT),
            'role'       => 'user',
            'created_at' => date('Y-m-d H:i:s'),
        ];
        $this->db->table('users')->insert($userVestia);
        $idVestia = $this->db->insertID();

        $profileVestia = [
            'id_user'      => $idVestia,
            'profile_name' => 'Vestia',
            'avatar'       => 'https://i.pinimg.com/736x/c7/dc/43/c7dc4323539ccbbc78661d221c356bc7.jpg',
        ];
        $this->db->table('profiles')->insert($profileVestia);
        $idProfileVestia = $this->db->insertID();

        $historyVestia = [
            ['id_profile' => $idProfileVestia, 'id_content' => 5, 'watched_at' => date('Y-m-d H:i:s')],
        ];
        $this->db->table('watch_history')->insertBatch($historyVestia);

        $favVestia = [
            ['id_profile' => $idProfileVestia, 'id_content' => 4, 'added_at' => date('Y-m-d H:i:s')],
            ['id_profile' => $idProfileVestia, 'id_content' => 5, 'added_at' => date('Y-m-d H:i:s')],
        ];
        $this->db->table('favorites')->insertBatch($favVestia);

        $userKobo = [
            'username'   => 'Kobo Kanaeru',
            'email'      => 'kobo@lunera.com',
            'password'   => password_hash('Kobokan', PASSWORD_DEFAULT),
            'role'       => 'user',
            'created_at' => date('Y-m-d H:i:s'),
        ];
        $this->db->table('users')->insert($userKobo);
        $idKobo = $this->db->insertID();

        $profileKobo = [
            'id_user'      => $idKobo,
            'profile_name' => 'Kobo',
            'avatar'       => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtyuNR4vIWF0FZlGY67ofsX7iwCaoi-11TtA&s',
        ];
        $this->db->table('profiles')->insert($profileKobo);
        $idProfileKobo = $this->db->insertID();

        $historyKobo = [
            ['id_profile' => $idProfileKobo, 'id_content' => 4, 'watched_at' => date('Y-m-d H:i:s')],
            ['id_profile' => $idProfileKobo, 'id_content' => 3, 'watched_at' => date('Y-m-d H:i:s')],
        ];
        $this->db->table('watch_history')->insertBatch($historyKobo);

        $favKobo = [
            ['id_profile' => $idProfileKobo, 'id_content' => 1, 'added_at' => date('Y-m-d H:i:s')],
            ['id_profile' => $idProfileKobo, 'id_content' => 3, 'added_at' => date('Y-m-d H:i:s')],
        ];
        $this->db->table('favorites')->insertBatch($favKobo);

        // ADMIN

        $adminData = [
            'username'   => 'Rosemi Lovelock',
            'email'      => 'RoseLove@lunera.com',
            'password'   => password_hash('Rose143', PASSWORD_DEFAULT),
            'role'       => 'admin',
            'created_at' => date('Y-m-d H:i:s'),
        ];

        $this->db->table('users')->insert($adminData);
        $adminId = $this->db->insertID();

        // Profile Admin
        $adminProfile = [
            'id_user'      => $adminId,
            'profile_name' => 'Rosemi', 
            'avatar'       => 'https://i.redd.it/m30gw65kh2c71.jpg',
        ];

        $this->db->table('profiles')->insert($adminProfile);
    }
}