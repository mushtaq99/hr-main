<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = $this->createRoles();
    }

    private function createRoles(): array
    {
        $dg = Role::factory()->create([
            'name' => 'Director General',
            'slug' => Str::slug('Director General'),
        ]);

        $da = Role::factory()->create([
            'name' => 'Director Administration',
            'slug' => Str::slug('Director Administration'),
        ]);

        $do = Role::factory()->create([
            'name' => 'Director Operations',
            'slug' => Str::slug('Director Operations'),
        ]);
        $df = Role::factory()->create([
            'name' => 'Director Finance',
            'slug' => Str::slug('Director Finance'),
        ]);
        $dt = Role::factory()->create([
            'name' => 'Director Technical',
            'slug' => Str::slug('Director Technical'),
        ]);
        $dda = Role::factory()->create([
            'name' => 'Deputy Director Administration',
            'slug' => Str::slug('Deputy Director Administration'),
        ]);

        $ddo = Role::factory()->create([
            'name' => 'Deputy Director Ops',
            'slug' => Str::slug('Deputy Director Ops'),
        ]);

        $ddh = Role::factory()->create([
            'name' => 'Deputy Director HQ',
            'slug' => Str::slug('Deputy Director HQ'),
        ]);

        $ddhr = Role::factory()->create([
            'name' => 'Deputy Director HR',
            'slug' => Str::slug('Deputy Director HR'),
        ]);
        $ddp = Role::factory()->create([
            'name' => 'Deputy Director Procurement',
            'slug' => Str::slug('Deputy Director Procurement'),
        ]);
        $ddl = Role::factory()->create([
            'name' => 'Deputy Director Legal',
            'slug' => Str::slug('Deputy Director Legal'),
        ]);
        $ddm = Role::factory()->create([
            'name' => 'Deputy Director Monitoring',
            'slug' => Str::slug('Deputy Director Monitoring'),
        ]);
        $ddw = Role::factory()->create([
            'name' => 'Deputy Director Web',
            'slug' => Str::slug('Deputy Director Web'),
        ]);
        $dddb = Role::factory()->create([
            'name' => 'Deputy Director Database',
            'slug' => Str::slug('Deputy Director Database'),
        ]);
        $ddb = Role::factory()->create([
            'name' => 'Deputy Director Budget',
            'slug' => Str::slug('Deputy Director Budget'),
        ]);
        $ddc = Role::factory()->create([
            'name' => 'Deputy Director Communication',
            'slug' => Str::slug('Deputy Director Communication'),
        ]);
        $ddlic = Role::factory()->create([
            'name' => 'Deputy Director Licensing',
            'slug' => Str::slug('Deputy Director Licensing'),
        ]);
        $pso = Role::factory()->create([
            'name' => 'Principal Staff Officer',
            'slug' => Str::slug('Principal Staff Officer'),
        ]);
        $adhr = Role::factory()->create([
            'name' => 'Assistant Director HR',
            'slug' => Str::slug('Assistant Director HR'),
        ]);
        $adm = Role::factory()->create([
            'name' => 'Assistant Director Monitoring',
            'slug' => Str::slug('Assistant Director Monitoring'),
        ]);
        $adp = Role::factory()->create([
            'name' => 'Assistant Director Procurement',
            'slug' => Str::slug('Assistant Director Procurement'),
        ]);
        $adw = Role::factory()->create([
            'name' => 'Assistant Director Web',
            'slug' => Str::slug('Assistant Director Web'),
        ]);
        $addb = Role::factory()->create([
            'name' => 'Assistant Director Database',
            'slug' => Str::slug('Assistant Director Database'),
        ]);
        $adict = Role::factory()->create([
            'name' => 'Assistant Director ICT',
            'slug' => Str::slug('Assistant Director ICT'),
        ]);
        $adn = Role::factory()->create([
            'name' => 'Assistant Director Network',
            'slug' => Str::slug('Assistant Director Network'),
        ]);
        $adl = Role::factory()->create([
            'name' => 'Assistant Director Legal',
            'slug' => Str::slug('Assistant Director Legal'),
        ]);
        $adc = Role::factory()->create([
            'name' => 'Assistant Director Communication',
            'slug' => Str::slug('Assistant Director Communication'),
        ]);
        $adlic = Role::factory()->create([
            'name' => 'Assistant Director Licensing',
            'slug' => Str::slug('Assistant Director Licensing'),
        ]);
        $adb = Role::factory()->create([
            'name' => 'Assistant Director Budget',
            'slug' => Str::slug('Assistant Director Budget'),
        ]);
        $adfs = Role::factory()->create([
            'name' => 'Assistant Director Food Safety',
            'slug' => Str::slug('Assistant Director Food Safety'),
        ]);
        $fso = Role::factory()->create([
            'name' => 'Food Safety Officer',
            'slug' => Str::slug('Food Safety Officer'),
        ]);
        $co = Role::factory()->create([
            'name' => 'Computer Operator',
            'slug' => Str::slug('Computer Operator'),
        ]);
        $act = Role::factory()->create([
            'name' => 'Accountant',
            'slug' => Str::slug('Accountant'),
        ]);
        $as = Role::factory()->create([
            'name' => 'Assistant',
            'slug' => Str::slug('Assistant'),
        ]);
        $ao = Role::factory()->create([
            'name' => 'Admin Officer',
            'slug' => Str::slug('Admin Officer'),
        ]);
        $to = Role::factory()->create([
            'name' => 'Telephone Operator',
            'slug' => Str::slug('Telephone Operator'),
        ]);
        $rk = Role::factory()->create([
            'name' => 'Record Keeper',
            'slug' => Str::slug('Record Keeper'),
        ]);
        $d = Role::factory()->create([
            'name' => 'Driver',
            'slug' => Str::slug('Driver'),
        ]);
        $ddr = Role::factory()->create([
            'name' => 'Dairy Dispatch',
            'slug' => Str::slug('Dairy Dispatch'),
        ]);
        $nq = Role::factory()->create([
            'name' => 'Naib Qasid',
            'slug' => Str::slug('Naib Qasid'),
        ]);
        $cd = Role::factory()->create([
            'name' => 'Chowkidar',
            'slug' => Str::slug('Chowkidar'),
        ]);
        $sg = Role::factory()->create([
            'name' => 'Security Guard',
            'slug' => Str::slug('Security Guard'),
        ]);
        $sw = Role::factory()->create([
            'name' => 'Sweeper',
            'slug' => Str::slug('Sweeper'),
        ]);




        return [
            'dg' => $dg,
            'da' => $da,
            'do' => $do,
            'df' => $df,
            'dt' => $dt,
            'dda' => $dda,
            'ddh' => $ddh,
            'ddo' => $ddo,
            'ddhr' => $ddhr,
            'ddp' => $ddp,
            'ddl' => $ddl,
            'ddm' => $ddm,
            'ddw' => $ddw,
            'dddb' => $dddb,
            'ddb' => $ddb,
            'ddc' => $ddc,
            'ddlic' => $ddlic,
            'pso' => $pso,
            'adhr' => $adhr,
            'adm' => $adm,
            'adp' => $adp,
            'adw' => $adw,
            'addb' => $addb,
            'adict' => $adict,
            'adn' => $adn,
            'adl' => $adl,
            'adc' => $adc,
            'adlic' => $adlic,
            'adb' => $adb,
            'adfs' => $adfs,
            'fso' => $fso,
            'co' => $co,
            'act' => $act,
            'as' => $as,
            'ao' => $ao,
            'to' => $to,
            'rk' => $rk,
            'd' => $d,
            'ddr' => $ddr,
            'nq' => $nq,
            'cd' => $cd,
            'sg' => $sg,
            'sw' => $sw,

        ];
    }
}
