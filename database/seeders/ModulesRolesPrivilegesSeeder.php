<?php

namespace Database\Seeders;

//library
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Str;

//models
use App\Models\RoleModel;
use App\Models\PrivilegesModel;

class ModulesRolesPrivilegesSeeder extends Seeder
{
    private $privId = 1;
    private $rpId = 1;
    private $modulesPrivileges = array();
    private $moduleIds = [
       'Home' => 1,
       //master data
       'Users'  => 2,
       'Data Karyawan' => 3,
       //layanan
       'Epresence' => 4,
    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $modules = array();
        foreach($this->moduleIds as $name => $id) {
            $modules[] = [
                'id' => $id,
                'nama' => $name
            ];
        }
        DB::table('m_modules')->insertOrIgnore($modules);

        /**
         * PRIVILEGES TABLE INSERT
         * START
         */
        $privileges = array();

        /**
         * Home
         */
        $privileges = $this->shapePrivilegeData($this->moduleIds['Home'], $privileges, [
            'homer' => 'Lihat Menu Home',
        ]);
        
        /**
         * Users
         */
        $privileges = $this->shapePrivilegeData($this->moduleIds['Users'], $privileges, [
            'usersc' => 'Tambah Users',
            'usersr' => 'Lihat Users',
            'usersu' => 'Update Users',
            'usersd' => 'Hapus Users',
        ]);
        
        /**
         * Data Karyawan
         */
        $privileges = $this->shapePrivilegeData($this->moduleIds['Data Karyawan'], $privileges, [
            'karyawanc' => 'Tambah Data Karyawan',
            'karyawanr' => 'Lihat Data Karyawan',
            'karyawanu' => 'Update Data Karyawan',
            'karyawand' => 'Hapus Data Karyawan',
        ]);
        
        /**
         * Epresence
         */
        $privileges = $this->shapePrivilegeData($this->moduleIds['Epresence'], $privileges, [
            'epresencec' => 'Tambah Epresence',
            'epresencer' => 'Lihat Epresence',
        ]);
        
        DB::table('m_privileges')->insertOrIgnore($privileges);

        $superAdminPrivileges = [
            'modules' => [
                'Home',
                'Users',
                'Data Karyawan',
                'Epresence',
            ]
        ];
        $SupervisorPrivileges = [
            'modules' => [
                'Home',
                'Data Karyawan',
                'Epresence',
            ],
        ];
        $KaryawanPrivileges = [
            'modules' => [
                'Home',
                'Epresence',
            ],
        ];
        $this->givePrivileges($superAdminPrivileges, 'superadmin');
        $this->givePrivileges($SupervisorPrivileges, 'supervisor');
        $this->givePrivileges($KaryawanPrivileges, 'karyawan');
    }
    private function shapePrivilegeData($moduleId, $privilegesArr, $data) {
        foreach($data as $kode => $nama) {
            $privilegesArr[] = [
                'id' => $this->privId++,
                'm_module_id' => $moduleId,
                'kode' => $kode,
                'nama' => $nama
            ];
        }
        $this->modulesPrivileges[$moduleId] = $data;
        return $privilegesArr;
    }

    private function givePrivileges($data, $kodeRole) {
        $modulesInput = array_key_exists('modules', $data) ? $data['modules'] : [];
        $privilegesInput = array_key_exists('privileges', $data) ? $data['privileges'] : [];
        $privilegesToGive = array();
        $roleId = RoleModel::where('kode', $kodeRole)->pluck('id')->first();
        foreach($modulesInput as $input) {
            foreach($this->modulesPrivileges[$this->moduleIds[$input]] as $privilege => $_) {
                $privilegesToGive[$privilege] = true;
            }
        }

        foreach($privilegesInput as $privilege) {
            if(Str::startsWith($privilege,'-')) {
                unset($privilegesToGive[Str::after($privilege, '-')]);
            } else {
                $privilegesToGive[$privilege] = true;
            }
        }

        foreach($privilegesToGive as $privilege => $_) {
            $privilegeId = PrivilegesModel::where('kode', $privilege)->pluck('id')->first();
            $rolePrivilege = [
                'id' => $this->rpId++,
                'm_role_id' => $roleId,
                'm_privilege_id' => $privilegeId
            ];

            DB::table('m_roles_privileges')->insertOrIgnore($rolePrivilege);
        }


    }
}
