<?php

namespace App\Console\Commands;

use App\Models\Customer;
use Illuminate\Console\Command;

class NumberOfAddresses extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'customer:count-addresses {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Count customers addresses';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $id = $this->argument('id');
        $this->info('Customer #' . $id . ' has ' . Customer::query()->findOrFail($id)->addresses->count() . ' addresses.');
    }
}