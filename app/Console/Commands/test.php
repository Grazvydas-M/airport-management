<?php

namespace App\Console\Commands;

use App\Models\Airport;
use App\Services\AirlineService;
use Illuminate\Console\Command;

class test extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'labas';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(AirlineService $airlineService)
    {

      //  dd(Airport::all());
//        $data = [
//            'name' => 'vardas',
//            'country_id' => 1 ,
//        ];
//        $aa = $airlineService->create($data);
//
//        $aa->airports()->attach(3);
//
//        dd($aa, $aa->airports);
       // dd(123);
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
       // dd(22);
        return Command::SUCCESS;
    }
}
