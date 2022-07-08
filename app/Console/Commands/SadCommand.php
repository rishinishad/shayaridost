<?php

namespace App\Console\Commands;

use App\Models\Joke;
use App\Models\Shayari;
use Illuminate\Console\Command;

use Goutte\Client;
use Symfony\Component\HttpClient\HttpClient;

class SadCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sad:start';

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
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $results = array();
        $client = new Client();
        $crawler = $client->request('GET', 'https://www.sanjayjangam.com/hindi/attitude-shayari-in-hindi/');
        // Get the latest post in this category and display the titles
        $results = $crawler->filter('.wp-block-quote')->each(function ($node) {
           $str = strip_tags($node->html(), '<br>');
           $str = str_replace('<br><br>', "\n", $str);
           return $str;
            // $result[] = $node->text();
        });
        
        // print_r($results);
        foreach($results as $result){
            $shayari = new Shayari();
            $shayari->category_id = 3;
            $shayari->shayari = $result;
            $shayari->save();
        }


    }
}
