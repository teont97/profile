<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Education;
use App\Experience;
use App\Skill;
use App\Project;
use Mail;
use Response;

class PagesController extends Controller
{
    public function gethome(){
    	$data_edu=Education::orderBy('id','DESC')->get();
    	$Experiences=Experience::orderBy('id','DESC')->get();
    	$softSkills=Skill::where('type','2')->orderBy('id','DESC')->get();
    	$HardSkillsLeft=Skill::where('type','1')->orderBy('id','DESC')->take(3)->get();
    	$HardSkillsRight=Skill::where('type','1')->orderBy('id','DESC')->skip(3)->take(3)->get();
    	$Projects=Project::orderBy('id','DESC')->get();
    	//dd($HardSkillsRight);
    	//dd($HardSkills);
    	//dd($HardSkills);

    	//dd($data_edu);
    	return view('client.pages.home',compact('data_edu','Experiences','softSkills','HardSkillsLeft','HardSkillsRight','Projects'));
    }
    public function PostContact(Request $request){
    	 $input = $request->all();
       //dd($input);
        Mail::send('client.mail',array('email'=>$input['email'],'hoten'=>$input['name'],'content'=>$input['message'],'subject'=>$input['subject']), function($msg){
            $msg->from('ncchi1997@gmail.com','chidev.xyz');
            $msg->to('ncchi1997@gmail.com','chidev.xyz')->subject('Chidev.xyz Liên Hệ');
        });
        return Response::json(array('response'=>'true','message'=>'Bạn đã Gửi thành công '));
    }
}
