<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use App\Membresia;
use DB;

class vencMembresias extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'daily:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Checkeo de vencimientos de membresias';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
/*         \Log::info("Cron is working fine!");
 */
        $fechaActual = Carbon::now()->toDateString();

        $membresias = Membresia::select('membresias.id', 'membresias.fechaTermino', 'membresias.estado')->get();

        foreach ($membresias as $membresia) {


            if ($membresia->fechaTermino == null) {
                echo 'Membresia Sin Datos'. PHP_EOL;
            } else {
                if($fechaActual > $membresia->fechaTermino){
                    $membresia->estado = 0;

                    $membresia->save();

                    echo 'Estado Asignado'. PHP_EOL;
                }
                else{
                    echo 'Membresia Vigente '. PHP_EOL;
                }
            }
            

            
        }

        
    }
}
