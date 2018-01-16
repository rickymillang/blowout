<?php

use Illuminate\Database\Seeder;
use App\PermissionRole;

class PermissionRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissionRole = new PermissionRole();

        $permission = [
                0=>["permission_id"=>1,"role_id"=>1],
                1=>["permission_id"=>2,"role_id"=>1],
                2=>["permission_id"=>3,"role_id"=>1],
                3=>["permission_id"=>4,"role_id"=>1],
                4=>["permission_id"=>5,"role_id"=>1],
                5=>["permission_id"=>6,"role_id"=>1],
                6=>["permission_id"=>42,"role_id"=>1],
                7=>["permission_id"=>43,"role_id"=>1],
                8=>["permission_id"=>44,"role_id"=>1],
                9=>["permission_id"=>3,"role_id"=>2],
                10=>["permission_id"=>7,"role_id"=>2],
                11=>["permission_id"=>8,"role_id"=>2],
                12=>["permission_id"=>9,"role_id"=>2],
                13=>["permission_id"=>10,"role_id"=>2],
                14=>["permission_id"=>11,"role_id"=>2],
                15=>["permission_id"=>12,"role_id"=>2],
                16=>["permission_id"=>13,"role_id"=>2],
                17=>["permission_id"=>14,"role_id"=>2],
                18=>["permission_id"=>15,"role_id"=>2],
                19=>["permission_id"=>16,"role_id"=>2],
                20=>["permission_id"=>17,"role_id"=>2],
                21=>["permission_id"=>18,"role_id"=>2],
                22=>["permission_id"=>19,"role_id"=>2],
                23=>["permission_id"=>20,"role_id"=>2],
                24=>["permission_id"=>21,"role_id"=>2],
                25=>["permission_id"=>22,"role_id"=>2],
                26=>["permission_id"=>23,"role_id"=>3],
                27=>["permission_id"=>24,"role_id"=>3],
                28=>["permission_id"=>25,"role_id"=>3],
                29=>["permission_id"=>3,"role_id"=>3],
                30=>["permission_id"=>8,"role_id"=>3],
                31=>["permission_id"=>9,"role_id"=>3],
                32=>["permission_id"=>26,"role_id"=>3],
                33=>["permission_id"=>12,"role_id"=>3],
                34=>["permission_id"=>27,"role_id"=>3],
                35=>["permission_id"=>28,"role_id"=>3],
                36=>["permission_id"=>14,"role_id"=>3],
                37=>["permission_id"=>15,"role_id"=>3],
                38=>["permission_id"=>29,"role_id"=>3],
                39=>["permission_id"=>30,"role_id"=>3],
                40=>["permission_id"=>31,"role_id"=>3],
                41=>["permission_id"=>19,"role_id"=>3],
                42=>["permission_id"=>20,"role_id"=>3],
                43=>["permission_id"=>32,"role_id"=>3],
                44=>["permission_id"=>33,"role_id"=>3],
                45=>["permission_id"=>22,"role_id"=>3],
                46=>["permission_id"=>34,"role_id"=>3],
                47=>["permission_id"=>21,"role_id"=>3],
                48=>["permission_id"=>35,"role_id"=>3],
                49=>["permission_id"=>36,"role_id"=>3],
                50=>["permission_id"=>37,"role_id"=>3],
                51=>["permission_id"=>38,"role_id"=>3],
                52=>["permission_id"=>39,"role_id"=>3],
                53=>["permission_id"=>40,"role_id"=>3],
                54=>["permission_id"=>41,"role_id"=>3]
            ];

            for($i = 0;$i<count($permission);$i++){
                $permissionRole->create([
                    'permission_id'=>$permission[$i]['permission_id'],
                    'role_id'=>$permission[$i]['role_id']
                ]);
            }

    }
}
