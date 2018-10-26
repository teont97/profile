<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Education;
use App\Experience;
use Response;
use App\Skill;
use App\Project;
use App\Categories;
use Auth;
use Illuminate\Support\MessageBag;
use App\User;
use Hash;
class AdminController extends Controller
{
  public function getEditEducation($id){
   $data_edit=Education::find($id);
   return view('admin.education.edit',compact('data_edit'));

 }
 public function getListEducation(){
   $data_edu=Education::orderBy('id','DESC')->get();
    	// /dd($data_edu);
   return view('admin.education.list',compact('data_edu'));
 }
 public function getCreateEducation(){
   return view('admin.education.create');
 }
 public function PostEditEducation(Request $request , $id){
   $edit=Education::find($id);
   $edit->name_school=$request->name_school;
   $edit->address=$request->address;
   $edit->content=$request->txtcontent;
   $edit->start=$request->start;
   $edit->end=$request->end;
   $edit->save();
   return redirect()->route('admin.education.getList')->with('status', 'Bạn đã chỉnh sửa thành công !');
 }
 public function PostCreateEducation(Request $request){
  $new_edu=new Education();
  $new_edu->name_school=$request->name_school;
  $new_edu->address=$request->address;
  $new_edu->content=$request->txtcontent;
  $new_edu->start=$request->start;
  $new_edu->end=$request->end;
  $new_edu->save();
  return redirect()->route('admin.education.getList')->with('status', 'Bạn đã thêm thành công');

}
public function PostDeleteEducation(Request $request){
  $deleteEducation=Education::find($request->id);
  $deleteEducation->delete();
  return Response::json(array('success'=>true,'data'=>'Bạn đã xóa thành công '));
}
public function getCreateExperience(){
  return view('admin.experience.create');
}
public function PostCreateExperience(Request $request){
  $newExperience=new Experience();
  $newExperience->company=$request->company;
  $newExperience->position=$request->position;
  $newExperience->content=$request->content;
  $newExperience->start=$request->start;
  $newExperience->end=$request->end;
  $newExperience->save();
  return redirect()->route('admin.experience.getList')->with('status', 'Bạn đã thêm thành công');
}
public function getListExperience(){
  $Experiences=Experience::orderBy('id','DESC')->get();
        //dd($Experiences);
  return view('admin.experience.list',compact('Experiences'));
}
public function getCreateSkill(){
  return view('admin.skill.create');
}
public function PostCreateSkill(Request $request){
  $newSkill=new Skill();
  $newSkill->name =$request->name;
  $newSkill->percent=$request->percent;
  $newSkill->type=$request->Type;
  $newSkill->save();
  return redirect()->route('admin.experience.getList')->with('status', 'Bạn đã thêm thành công');
}
public function getCreateProject(){
  return view('admin.project.create');
}
public function PostCreateProject(Request $request){
 $file_name=$request->file('files')->getClientOriginalName();
 $Project= new Project();
 $Project->title=$request->title;
 $Project->link=$request->link;
 $Project->categories=$request->Typeproject;
 $Project->images=$file_name;
 $request->file('files')->move('public/client/assets/images/project',$file_name);
 $Project->save();
 return redirect()->route('admin.project.getList')->with('status', 'Bạn đã thêm thành công');
}
public function getListProject(){
  $dataProjects=Project::orderBy('id','DESC')->get();
  return view('admin.project.list',compact('dataProjects'));  
}
public function getCreateCategories(){
  return view('admin.blog.create_categories');
}
public function PostCreateCategories(Request $request){
  $newCategories=new Categories();
  $newCategories->name=$request->title;
  $newCategories->slug=$newCategories->slug;
            //dd($newCategories->slug);
  $newCategories->save();
  return redirect()->route('admin.project.getList')->with('status', 'Bạn đã thêm thành công');
}
public function getListCategories(){
  $dataCategories=Categories::orderBy('id','DESC')->get();
  return view('admin.blog.list_categories',compact('dataCategories'));
}
public function getLogin(){
  return view('admin.login');
}
public function postLogin(Request $request){
  $login = array(
    'email' => $request->txtemail,
    'password'=> $request->txtpassword
  );
  if(Auth::attempt($login)){
    return redirect()->route('admin.education.getList');
  }
  else{
    $errors = new MessageBag(['errorlogin' => 'Email hoặc mật khẩu không đúng']);
    return redirect()->back()->withInput()->withErrors($errors);        }
  }
  public function PostLogout(Request $request){
    Auth::logout();
    return redirect('admin/login');
  }
  public function getCreateBlog(){
    return view('admin.blog.create_blog');
  }
  public function getCreateUser(){
    return view('admin.user.create');
  }
  public function PostCreateUser(Request $request){
    $User= new User();
    $User->name=$request->UserName;
    $User->email=$request->Email;
    $User->password=Hash::make($request->Password);
    $User->age=$request->Age;
    $User->gender=$request->Gender;
    $User->phone=$request->Phone;
    $User->note=$request->Note;
    $User->save();
    return back()->with('mesage','Bạn Đã Tạo Thành Công  ');;
  }
  public function getListUser(){
    $users=User::orderBy('id','DESC')->get();
    return view('admin.user.list',compact('Users'));
  }
  public function getEditUser($id){
    $userEdit=User::find($id);
    return view('admin.user.edit',compact('userEdit'));
  }
  public function PostEditUser(Request $request , $id){
    $user_edit=User::find($id);
    $userEdit->name=$request->UserName;
    $userEdit->email=$request->Email;
    $userEdit->password=Hash::make($request->Password);
    $userEdit->age=$request->Age;
    $userEdit->gender=$request->Gender;
    $userEdit->phone=$request->Phone;
    $userEdit->note=$request->Note;
    $userEdit->save();
    return back()->with('mesage','Bạn Đã Sữa Thành Công  ');;
  }
  public function PostDeleteUser(Request $request){
    $userDelete=User::find($request->id);
    $userDelete->delete();
    return Response::json(array('success'=>true,'data'=>'Bạn đã xóa thành công '));
  }
}
