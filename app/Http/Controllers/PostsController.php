<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use App\Screenshot;
use App\Requirement;
use DB;

class PostsController extends Controller
{
    //
    public function index(){
    	$posts = Post::paginate(20);
    	return view('dashboard.posts',compact('posts'));
    }

    public function listall(){
        $posts = Post::paginate(20);
        return view('posts.posts_all',compact('posts'));
    }

    public function detail($post_id){

    	$posts = Post::all();
    	$screenshots = Screenshot::all();
    	$post = $posts->find($post_id);
    	$listscr = $screenshots = $screenshots->where('post_id',$post_id);
        $i = 0;
        $scrshot = array();
        foreach($listscr as $scr){
            $scr->index = $i;
            $i++;
            array_push($scrshot,$scr);
        }
        $scrinit = $scrshot[0];
        unset($scrshot[0]);

        $requirement = Requirement::where('post_id',$post_id)->firstOrFail();
        return view('dashboard.detail',compact('post','listscr','requirement','scrshot','scrinit'));
    }
    public function create_by_steam(){
    	return view('posts.create_by_steam');
    }

    public function edit($post_id){
        $post = Post::find($post_id);
        return view('dashboard.post_edit',compact('post'));
    }

    public function update($post_id ,Request $request){
        $post = Post::find($post_id);
        $post->update($request->all());
        return redirect('posts');
    }

    public function destroy($post_id){
        $post = Post::find($post_id);
        $post->delete();
        return redirect('posts');
    }

    public function crawl(Request $request){
        $input = $request->all();
        $link = trim($input['link']);
        $link = str_replace("http://store.steampowered.com/app/","",$link);
        $link = str_replace("/","",$link);
        $api_link = 'http://store.steampowered.com/api/appdetails?appids='.$link;
        $game_id = intval($link);
        $result = file_get_contents($api_link);
        $data =  json_decode($result,true);
        if(!$data[$game_id]['success']){

            return " Không tồn tại game trong hệ thống steam";
        }
        $post = new Post();
        $post->name = $data[$game_id]['data']['name'];
        $post->type = $data[$game_id]['data']['type'];
        $post->appid = $data[$game_id]['data']['steam_appid'];
        $post->required_age = $data[$game_id]['data']['required_age'];
        $post->detailed_description = $data[$game_id]['data']['detailed_description'];
        $post->about_the_game = $data[$game_id]['data']['about_the_game'];
        $post->short_description = $data[$game_id]['data']['short_description'];
        if(array_key_exists('reviews',$data[$game_id]['data']['pc_requirements'])){
            $post->reviews = $data[$game_id]['data']['reviews'];
        }
        else{
            $post->reviews = "";
        }
        $post->header_image = $data[$game_id]['data']['header_image'];
        $post->developer = "";
        $post->publisher = "";
        foreach ($data[$game_id]['data']['developers'] as $value ){
            $post->developer = $post->developer." ".$value;
        }
        foreach ($data[$game_id]['data']['publishers'] as $value ){
            $post->publisher = $post->publisher." ".$value;
        }
        // $post->recommendations = $data[$game_id]['data']['recommendations'][0];
        $post->support = $data[$game_id]['data']['support_info']['url'];
        $post->background = $data[$game_id]['data']['background'];

        if($data[$game_id]['data']['release_date']['coming_soon']){
            $post->is_released = 1;
        }
        else{
            $post->is_released = 0;
        }

        if($data[$game_id]['data']['is_free']){
            $post->is_free = 1;
        }
        else{
            $post->is_free = 0;
        }
        $post->current_price = $data[$game_id]['data']['price_overview']['final'];
        $post->origin_price =  $data[$game_id]['data']['price_overview']['initial'];
        $post->save();
        
        //* Requirement
        $req = new Requirement();
        $req->platform = "Window";
        $req->minimum = $data[$game_id]['data']['pc_requirements']['minimum'];
        if(array_key_exists('recommended',$data[$game_id]['data']['pc_requirements'])){
            $req->recommended = $data[$game_id]['data']['pc_requirements']['recommended'];
            
        }
        else{
            $req->recommended = ""; 
        } 
        $req->post_id = $post->id;
        $req->save();
        //* Screenshots

        foreach($data[$game_id]['data']['screenshots'] as $ss){
            $scrshot = new Screenshot();
            $scrshot->path_full = $ss['path_full'];
            $scrshot->path_thumbnail = $ss['path_thumbnail'];
            $scrshot->post_id = $post->id;
            $scrshot->save();
        }
        return ($post->id) ;
    }

    public function livesearch(Request $request){
        if($request->ajax()){
            $answer = DB::table('posts')->where('name','LIKE','%'.$request->search.'%')->limit(5)->get();
            if($answer){
                return Response($answer);
            }
        }
        return '';
    }
}

