<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;


class Playground extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'play';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Playground Command';

    /**
     * Execute the console command.
     */
    public function handle()
    {


     $return = Http::withHeaders([
                'X-Rapidapi-Key' => 'c7a2dc09dfmshdcc6e5be3a27006p1e56f2jsnd48882198077',
                'X-Rapidapi-Host' => 'sportscore1.p.rapidapi.com',
    ])->get('https://sportscore1.p.rapidapi.com/sports/1/teams?page=1');

     dd($return);
        return Command::SUCCESS;
    }
}
