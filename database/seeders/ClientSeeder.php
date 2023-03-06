<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        $createMultipleClients = [
            ['name' => 'acer', 'acronym' => 'acer', 'image' => 'acer.png', 'type'=>'p',  'created_at' => $now, 'updated_at' => $now],
            ['name' => 'aruba', 'acronym' => 'aruba', 'image' => 'aruba.png', 'type'=>'p',  'created_at' => $now, 'updated_at' => $now],
            ['name' => 'avaya', 'acronym' => 'avaya', 'image' => 'avaya.png', 'type'=>'p',  'created_at' => $now, 'updated_at' => $now],
            ['name' => 'barracuda', 'acronym' => 'barracuda', 'image' => 'barracuda.png', 'type'=>'p',  'created_at' => $now, 'updated_at' => $now],
            ['name' => 'cisco', 'acronym' => 'cisco', 'image' => 'cisco.png', 'type'=>'p',  'created_at' => $now, 'updated_at' => $now],
            ['name' => 'dell', 'acronym' => 'dell', 'image' => 'dell.png', 'type'=>'p',  'created_at' => $now, 'updated_at' => $now],
            ['name' => 'dellemc', 'acronym' => 'dellemc', 'image' => 'dellemc.png', 'type'=>'p',  'created_at' => $now, 'updated_at' => $now],
            ['name' => 'f5', 'acronym' => 'f5', 'image' => 'f5.png', 'type'=>'p',  'created_at' => $now, 'updated_at' => $now],
            ['name' => 'fortesys', 'acronym' => 'fortesys', 'image' => 'fortesys.png', 'type'=>'p',  'created_at' => $now, 'updated_at' => $now],
            ['name' => 'fortinet', 'acronym' => 'fortinet', 'image' => 'fortinet.png', 'type'=>'p',  'created_at' => $now, 'updated_at' => $now],
            ['name' => 'hewlett', 'acronym' => 'hewlett', 'image' => 'hewlett.png', 'type'=>'p',  'created_at' => $now, 'updated_at' => $now],
            ['name' => 'hp', 'acronym' => 'hp', 'image' => 'hp.png', 'type'=>'p',  'created_at' => $now, 'updated_at' => $now],
            ['name' => 'huawei', 'acronym' => 'huawei', 'image' => 'huawei.png', 'type'=>'p',  'created_at' => $now, 'updated_at' => $now],
            ['name' => 'ibm', 'acronym' => 'ibm', 'image' => 'ibm.png', 'type'=>'p',  'created_at' => $now, 'updated_at' => $now],
            ['name' => 'ingram', 'acronym' => 'ingram', 'image' => 'ingram.png', 'type'=>'p',  'created_at' => $now, 'updated_at' => $now],
            ['name' => 'innovix', 'acronym' => 'innovix', 'image' => 'innovix.png', 'type'=>'p',  'created_at' => $now, 'updated_at' => $now],
            ['name' => 'lenovo', 'acronym' => 'lenovo', 'image' => 'lenovo.png', 'type'=>'p',  'created_at' => $now, 'updated_at' => $now],
            ['name' => 'microsoft', 'acronym' => 'microsoft', 'image' => 'microsoft.png', 'type'=>'p',  'created_at' => $now, 'updated_at' => $now],
            ['name' => 'ogx', 'acronym' => 'ogx', 'image' => 'ogx.png', 'type'=>'p',  'created_at' => $now, 'updated_at' => $now],
            ['name' => 'paloalto', 'acronym' => 'paloalto', 'image' => 'paloalto.png', 'type'=>'p',  'created_at' => $now, 'updated_at' => $now],
            ['name' => 'ruckus', 'acronym' => 'ruckus', 'image' => 'ruckus.png', 'type'=>'p',  'created_at' => $now, 'updated_at' => $now],
            ['name' => 'sangfor', 'acronym' => 'sangfor', 'image' => 'sangfor.png', 'type'=>'p',  'created_at' => $now, 'updated_at' => $now],
            ['name' => 'servex', 'acronym' => 'servex', 'image' => 'servex.png', 'type'=>'p',  'created_at' => $now, 'updated_at' => $now],
            ['name' => 'sophos', 'acronym' => 'sophos', 'image' => 'sophos.png', 'type'=>'p',  'created_at' => $now, 'updated_at' => $now],
            ['name' => 'speedminer', 'acronym' => 'speedminer', 'image' => 'speedminer.png', 'type'=>'p',  'created_at' => $now, 'updated_at' => $now],
            ['name' => 'splunk', 'acronym' => 'splunk', 'image' => 'splunk.png', 'type'=>'p',  'created_at' => $now, 'updated_at' => $now],
            ['name' => 'tplink', 'acronym' => 'tplink', 'image' => 'tplink.png', 'type'=>'p',  'created_at' => $now, 'updated_at' => $now],
            ['name' => 'veritas', 'acronym' => 'veritas', 'image' => 'veritas.png', 'type'=>'p',  'created_at' => $now, 'updated_at' => $now],
            ['name' => 'vmware', 'acronym' => 'vmware', 'image' => 'vmware.png', 'type'=>'p',  'created_at' => $now, 'updated_at' => $now],
            ['name' => 'vstecs', 'acronym' => 'vstecs', 'image' => 'vstecs.png', 'type'=>'p',  'created_at' => $now, 'updated_at' => $now],
            ['name' => 'petronas', 'image' => 'petronas.jpg', 'acronym'=>'petronas', 'type'=>'c', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'universiti teknologi petronas', 'image' => 'utp.jpg', 'acronym'=>'utp', 'type'=>'c', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'vads telekom malaysia', 'image' => 'vads.png', 'acronym'=>'vads', 'type'=>'c', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'telekom malaysia', 'image' => 'tm.png', 'acronym'=>'tm', 'type'=>'c', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'wilayah ekonomi pantai timur', 'image' => 'wept.png', 'acronym'=>'wept', 'type'=>'c', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'kemeterian perladangan dan komoditi', 'image' => 'mpic.png', 'acronym'=>'mpic', 'type'=>'c', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'kementerian komunikasi dan multimedia malaysia', 'image' => 'kkmm.png', 'acronym'=>'kkmm', 'type'=>'c', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'kementerian pelancongan, seni dan budaya malaysia', 'image' => 'motac.jpg', 'acronym'=>'motac', 'type'=>'c', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'majlis amanah rakyat', 'image' => 'mara.png', 'acronym'=>'mara', 'type'=>'c', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'suruhanjaya perkhidmatan awam', 'image' => 'spa.png', 'acronym'=>'spa', 'type'=>'c', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'jabatan pertahanan awam', 'image' => 'jpa.png', 'acronym'=>'jpa', 'type'=>'c', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'multimedia universiti', 'image' => 'mmu.jpg', 'acronym'=>'mmu', 'type'=>'c', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'polis diraja malaysia', 'image' => 'pdrm.png', 'acronym'=>'pdrm', 'type'=>'c', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'dewan bandaraya kuala lumpur', 'image' => 'dbkl.png', 'acronym'=>'dbkl', 'type'=>'c', 'created_at' => $now, 'updated_at' => $now],
        ];
        
        Client::insert($createMultipleClients);
    }
}
