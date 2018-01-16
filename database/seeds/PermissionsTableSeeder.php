<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = new Permission();
        $value = [
                    0=>['name'=>'delete.customer.account','display_name'=>'Delete Customer Account','Description'=>''],
                    1=>['name'=>'view.rating','display_name'=>'View Rating','Description'=>''],
                    2=>['name'=>'view.notification','display_name'=>'View Notification','Description'=>''],
                    3=>['name'=>'create.admin','display_name'=>'Create Admin User','Description'=>''],
                    4=>['name'=>'delete.admin ','display_name'=>'Delete Admin User','Description'=>''],
                    5=>['name'=>'edit.admin','display_name'=>'Edit Admin User','Description'=>''],
                    6=>['name'=>'add.services','display_name'=>'Add Services','Description'=>''],
                    7=>['name'=>'view.services','display_name'=>'View Services','Description'=>''],
                    8=>['name'=>'search.services','display_name'=>'Search Services','Description'=>''],
                    9=>['name'=>'update.services ','display_name'=>'Update Services','Description'=>''],
                    10=>['name'=>'delete.services','display_name'=>'Delete Services	','Description'=>''],
                    11=>['name'=>'view.reservation','display_name'=>'View Reservation','Description'=>''],
                    12=>['name'=>'confirm.reservation','display_name'=>'Confirm Reservation','Description'=>''],
                    13=>['name'=>'view.message','display_name'=>'View Message','Description'=>''],
                    14=>['name'=>'reply.create.message','display_name'=>'Reply Compose Message','Description'=>''],
                    15=>['name'=>'add.product','display_name'=>'Add Product','Description'=>''],
                    16=>['name'=>'edit.product','display_name'=>'Edit Product','Description'=>''],
                    17=>['name'=>'delete.product ','display_name'=>'Delete Product','Description'=>''],
                    18=>['name'=>'view.payment','display_name'=>'View Payment','Description'=>''],
                    19=>['name'=>'confirm.payment','display_name'=>'Confirm Payment','Description'=>''],
                    20=>['name'=>'monitor.calendar','display_name'=>'Monitor Calendar','Description'=>''],
                    21=>['name'=>'view.order','display_name'=>'View Order','Description'=>''],
                    22=>['name'=>'create.customer.account','display_name'=>'Create customer account','Description'=>''],
                    23=>['name'=>'edit.customer.account','display_name'=>'Edit customer account','Description'=>''],
                    24=>['name'=>'rate.establishment','display_name'=>'Rate Establishment','Description'=>''],
                    25=>['name'=>'add.reservation','display_name'=>'Add Reservation','Description'=>''],
                    26=>['name'=>'update.reservation','display_name'=>'Update Reservation','Description'=>''],
                    27=>['name'=>'cancel.reservation','display_name'=>'Cancel Reservation','Description'=>''],
                    28=>['name'=>'view.product ','display_name'=>'View Product','Description'=>''],
                    29=>['name'=>'search.product','display_name'=>'Search Product ','Description'=>''],
                    30=>['name'=>'add.payment','display_name'=>'Add Payment','Description'=>''],
                    31=>['name'=>'add.order','display_name'=>'Add Order','Description'=>''],
                    32=>['name'=>'edit.order','display_name'=>'Edit Order','Description'=>''],
                    33=>['name'=>'delete.order','display_name'=>'Delete order','Description'=>''],
                    34=>['name'=>'edit.establishment.location','display_name'=>'Edit Establishment Location','Description'=>''],
                    35=>['name'=>'view.establishment.location','display_name'=>'View Establishment Location','Description'=>''],
                    36=>['name'=>'search.establishment.location','display_name'=>'Search Establishment Location','Description'=>''],
                    37=>['name'=>'edit.e-cart','display_name'=>'Edit E-cart','Description'=>''],
                    38=>['name'=>'view.e-cart ','display_name'=>'View E-cart','Description'=>''],
                    39=>['name'=>'add.package','display_name'=>'Add Package','Description'=>''],
                    40=>['name'=>'view.package','display_name'=>'View Package','Description'=>''],
                    41=>['name'=>'view.product.type','display_name'=>'View Product Type','Description'=>''],
                    42=>['name'=>'add.product.type','display_name'=>'Add Product Type','Description'=>''],
                    43=>['name'=>'edit.product.type','display_name'=>'Edit Product Type','Description'=>''],
                    44=>['name'=>'delete.product.type','display_name'=>'Delete Product Type','Description'=>''],

                ];

        for($i=0;$i<count($value)-1;$i++) {
            $permission->create([
                'name'=>$value[$i]['name'],
                'display_name'=>$value[$i]['display_name']
                ]);
        }
    }
}
