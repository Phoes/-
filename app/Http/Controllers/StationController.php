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
    public function newsave(Request $request) {
        $url="https://api.thingspeak.com/channels/258624/feeds.json?timezone=Asia/Bangkok";
        $json=file_get_contents($url);
        $datax=json_decode($json);
        $name = $request->get('name');
        $names = $request->get('names');
        //dd($names);
        $langtitude = $request->get('lng');
        $latitude = $request->get('lat');
        $location = $request->get('location');

        for ($i=0;$i < count($datax->feeds); $i++) {
            $data4=$datax->feeds[$i]->field1;
            $data5=$datax->feeds[$i]->field2;
            $data6=$datax->feeds[$i]->field3;
            $data7=$datax->feeds[$i]->created_at;
            $temp_app = DB::table('devices')->where('timelog',$data7)
                                         ->get();
                                         //dd($temp_app);
          if(count($temp_app)==0 && $names != null)
          {
            // dd($name);
            DB::table('devices')->insert(['turbidity'=>$data5, 'temperature'=>$data4, 'ph'=>$data6, 'timelog'=>$data7, 'type'=>$names,'langtitude'=>$langtitude,'latitude'=>$latitude, 'location'=>$location]);
          }
          elseif(count($temp_app)==0 && $names == null)
          {
            
            DB::table('devices')->insert(['turbidity'=>$data5, 'temperature'=>$data4, 'ph'=>$data6, 'timelog'=>$data7, 'type'=>$name,'langtitude'=>$langtitude,'latitude'=>$latitude, 'location'=>$location]);

          }
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

    public function part() {
        $Stations = Station::all();
        return View('part')->with('Stations',$Stations)->with('namedate',$namedate);
    }
    
    public function partdata(Request $request) 
    {

      $namedate = $request->get('namedate');
      $stations = DB::table('stations')->where('timelog','like',$namedate.'%')->paginate(30);
      return View('part')->with('Stations',$stations)->with('namedate',$namedate);
    }

     public function partt() {
        $Devices = Device::all();
        dd($Devices);
        return View('partmobli')->with('Devices',$Devices)->with('namedatemo',$namedatemo);
    }

    public function partmo(Request $request) 
    {

     $namedatemo = $request->get('namedatemo');
     $devices = DB::table('devices')->where('timelog','like',$namedatemo.'%')->paginate(30);
     $timelog = DB::table('devices')->where('timelog','like',$namedatemo.'%')->value('timelog');
 

    if($timelog== null )
      {
        $locations = [];
        $n = "ไม่มีข้อมูลการตรวจวัด กรุณากรอกวันที่ใหม่";
         return View('partmobli')->with('Devices',$devices)->with('namedatemo',$namedatemo)->with(['locations' => json_encode($locations)])->with('n',$n);
      }
     elseif($timelog!=null )
      {

      $n = "";
      foreach($devices as $value) {
        $locations[] = array($value->location,$value->latitude,$value->langtitude);
        }
        return View('partmobli')->with('Devices',$devices)->with('namedatemo',$namedatemo)->with(['locations' => json_encode($locations)])->with('n',$n);
     }



    }
}