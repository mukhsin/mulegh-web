<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('UsersTableSeeder');
        // $this->call('MghCustomerTableSeeder');
        // $this->call('MghDtbotolTableSeeder');
        // $this->call('MghDtvariantTableSeeder');
        // $this->call('MghSalesTableSeeder');
        // $this->call('MghStockTableSeeder');
        // $this->call('MghUserTableSeeder');
        $this->call('BotolsTableSeeder');
        $this->call('CustomersTableSeeder');
        $this->call('SalesTableSeeder');
        $this->call('StocksTableSeeder');
        $this->call('VariantsTableSeeder');
    }
}
