<?php

namespace App\Http\Controllers\Api\V1;

use App\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    private $tag, $date;
    public function __construct(Tag $tag){
        $this->tag=$tag;
        date_default_timezone_set('Asia/Phnom_Penh');
        $this->date=date("Y-m-d H:m:s");
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $tags=$this->tag->where('status','1')->orderBy('order','asc')->get();
            return response()->json([
                "message"=>"List all tags successfull",
            "data"=>$tags
            ]);
        }catch (\Exception $e) {
            return response()->json([
                "message"=>"Tag can't list",
                "Error"=>$e
            ]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->tag->tag_name=$request->tag_name;
        $this->tag->order=$request->order;
        $this->tag->tag_description=$request->tag_description;
        try{
            $this->tag->save();
            return response()->json([
                "message"=>"Tag insert successfull"
            ]);
        }catch (\Exception $e) {
            return response()->json([
                "message"=>"Tag can't insert"
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        $id = preg_replace('#[^0-9]#','',$tag->id);
        if($id != "" &&! empty($id)){
            $tag = $this->tag->where('id',$id)->first();
        }
        return response()->json([
            "message"=>"Show Tag successfull",
            "data"=>$tag
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
        $tag_name=$request->tag_name;
        $order=$request->order;
        $status=$request->status;
        $tag_description=$request->tag_description;

        $tag->tag_name=$tag_name;
        $tag->order=$order;
        $tag->status=$status;
        $tag->tag_description=$tag_description;
        try{
            $tag->save();
            return response()->json([
                "message"=>"tag update successfull",
            ]);
        }catch (\Exception $e) {
            return response()->json([
                "message"=>"tag cant' update",
                "data"=>$tag
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        $id =  preg_replace('#[^0-9]#','',$tag->id);
        try{
            $this->tag->where('id',$id)->update([
                'status'                =>'0',
            ]);
            return response()->json([
                "message"=>"tag delete successfull",
            ]);
        }catch (\Exception $e) {
            return response()->json([
                "message"=>"tag cant' delete"
            ]);
        }
    }
}
