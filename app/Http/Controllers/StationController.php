<?php namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;
use Validator;
use DB;
use Session;
use Input;
use App\Station;

class StationController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
     public function index() {
        $url="https://api.thingspeak.com/channels/258624/feeds.json?timezone=Asia/Bangkok";
        $json=file_get_contents($url);
        $data=json_decode($json);
        //data
         $name = "สถานที่";
        $tambon = "สถานที่";
        $amphoe = "สถานที่";
        $county = "สถานที่";
        return view('result')->with('data', $data)
                         ->with('name',$name)
                         ->with('tambon',$tambon)
                         ->with('amphoe',$amphoe)
                         ->with('county',$county);
    }

    public function getData() {
        $url="https://api.thingspeak.com/channels/242711/feeds.json?timezone=Asia/Bangkok";
        $json=file_get_contents($url);
        $data=json_decode($json); // return response()->json($data);
        $result=count($data->feeds); // for ($i=0; $i < count($data->feeds) ; $i++) {
        $lastest = Station::orderBy('timelog', 'desc')->first();
        return view('data') ->with('data', $data); // ->with('result',$result);  
    }

    public function save(Request $request) {    
        $url="https://api.thingspeak.com/channels/242711/feeds.json?timezone=Asia/Bangkok";
        $json=file_get_contents($url);
        $data=json_decode($json);
        //$count=count($data->feeds);
        
        return back();
    }
    public function newsave() {
        $url="https://api.thingspeak.com/channels/258624/feeds.json?timezone=Asia/Bangkok";
        $json=file_get_contents($url);
        $datax=json_decode($json);

        for ($i=0;$i < count($datax->feeds); $i++) {
            $data4=$datax->feeds[$i]->field1;
            $data5=$datax->feeds[$i]->field2;
            $data6=$datax->feeds[$i]->field3;
            $data7=$datax->feeds[$i]->created_at;
            DB::table('device')->insert(['newturb'=>$data5, 'newtemp'=>$data4, 'ph'=>$data6, 'newtime'=>$data7]);
        }
        return back();
    }
    public function search(Request $request) {  
      $url="https://api.thingspeak.com/channels/258624/feeds.json?timezone=Asia/Bangkok";
        $json=file_get_contents($url);
        $data=json_decode($json);  
       $name = $request->get('name');
      $tambon = $request->get('tambon');
      $amphoe = $request->get('amphoe');
      $county = $request->get('county');
      
      return view('result')->with('data', $data)->with('name',$name)
                         ->with('tambon',$tambon)
                         ->with('amphoe',$amphoe)
                         ->with('county',$county);
    }
     public function home() {
        $url="https://api.thingspeak.com/channels/242711/feeds.json?timezone=Asia/Bangkok";
        $json=file_get_contents($url);
        $data=json_decode($json);
        return view('home')->with('data', $data);
    }
}