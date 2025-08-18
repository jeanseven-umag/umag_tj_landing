<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Eqmodel;
use App\Eqhtml;
use App\Eqtype;
use Auth;
class Equip extends Controller
{
    public function single($url){
        $info = Eqmodel::with('htmls')->where('url', $url)->get();
        if(!isset($info[0]->url)){
            return abort(404);
        }else{
            foreach ($info as $single) {
                $id = $single->id;
                $name = $single->name;
                $descript = $single->descrip;
                $price = intval($single->price);
                $sale = $sale = intval($single->sale);
                $video = $single->video;
                $img = $single->image;
                $html = $single->htmls->html;
                $type_id = $single->type_id;
            }
            $single->rgx == "no" ? $model = $single->name : $model = preg_replace(["/[\p{Cyrillic}]/ui", "/(<br\ ?\/?>)+/"] , "", $single->name);
            !empty($sale) ? $sale_price = $price - ($price * $sale / 100) : $sale_price = null;
            return view('pages.equipment_single', 
                [
                    'id' => $id,
                    'model' => $model, 
                    'name' => $name, 
                    'descript' => $descript, 
                    'price' => str_replace(",", " ", number_format($price, 0)),
                    'sale' => $sale,
                    'sale_price' => str_replace(",", " ", number_format($sale_price, 0)),
                    'html' => $html,
                    'img' => $img,
                    'video' => $video,
                    'all' => $this->eqs(),
                    'types' => $this->types(),
                    'side' => 'equip',
                    'type_id' => $type_id
                ]);
        }
    }
    public function allitems(){
        return view('pages.equipments', 
            [
                'all' => $this->eqs(),
                'types' => $this->types(),
                'side' => 'equip'
            ]);
    }
    public function allitemshome(){
        return view('pages.home',
            [
                'all' => $this->eqs(),
                'types' => $this->types()
            ]);
    }
    public function types(){
        return Eqtype::all();
    }

    public function eqs(){
        return Eqmodel::with('types')->orderBy('priority', 'desc')->get();
    }

    public function Add(Request $request){
        $eqmodel = new Eqmodel;
        $htmlmodel = new Eqhtml;
        $htmlmodel->html = $request->eq_html==null ? "" : $request->eq_html;
        $eqmodel->name = $request->eq_name==null ? null :  $request->eq_name;
        $eqmodel->price = $request->eq_price==null ? null : str_replace(" ","", $request->eq_price);
        $eqmodel->sale = $request->eq_sale==null ? "" : str_replace(" ","", $request->eq_sale);
        $eqmodel->url = $request->eq_url==null ? "" : $request->eq_url;
        $eqmodel->image = $request->eq_image==null ? null : $request->eq_image;
        $eqmodel->type_id = $request->eq_category==null ? null : intval($request->eq_category);
        $eqmodel->descrip = $request->eq_descript==null ? "" : $request->eq_descript;
        $eqmodel->video = $request->eq_video==null ? "" : $request->eq_video;
        $eqmodel->rgx = $request->eq_rgx==null ? "" : $request->eq_rgx;
        $eqmodel->save();
        if ($eqmodel->save()) {
            if($request->eq_html!==null){
                $htmlmodel->eq_id = $eqmodel->id;
                if($htmlmodel->save()){
                    return response()->json(array('success' => true), 200);
                }
            }else{
                return response()->json(array('success' => true), 200);
            }
        }
    }
}
