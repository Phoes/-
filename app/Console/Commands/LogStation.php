<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Station;

class LogStation extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'log:station';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update station data from thingspeak';

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
        $url="https://api.thingspeak.com/channels/242711/feeds.json?timezone=Asia/Bangkok";
        $json=file_get_contents($url);
        $data=json_decode($json); // return response()->json($data);
        $result=count($data->feeds); // for ($i=0; $i < count($data->feeds) ; $i++) {
        $lastest = Station::orderBy('entry_id', 'desc')->first();
        $lastest_entry_id = isset($lastest->entry_id) ? $lastest->entry_id : 0;
        //print_r($data);
        //dd($data->feeds);

        foreach ($data->feeds as $item) {
            $turbidity   = $item->field2;
            $temperature = $item->field1;
            $timelog     = $item->created_at;
            $entry_id    = $item->entry_id;
            if($entry_id > $lastest_entry_id) {
                $station = Station::create([
                    'entry_id' => $entry_id, 
                    'turbidity' => $turbidity, 
                    'temperature' => $temperature, 
                    'timelog' => $timelog]);
            }
            //DB::table('station')->insert(['turbidity'=>$data2, 'temperature'=>$data1, 'time'=>$data3]);
        }
        echo "station data updated.\n";
    }
}
