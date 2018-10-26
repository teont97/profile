<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',['as'=>'gethome','uses'=>'PagesController@gethome']);
Route::post('post-contact',['as'=>'post.contact','uses'=>'PagesController@PostContact']);

Route::group(['prefix'=>'admin','middleware'=>'CheckAdminLogin'],function(){
	Route::group(['prefix'=>'education'],function(){
		Route::get('edit/{id}',['as'=>'admin.education.getEdit','uses'=>'AdminController@getEditEducation']);
		Route::get('list',['as'=>'admin.education.getList','uses'=>'AdminController@getListEducation']);
		Route::get('create',['as'=>'admin.education.getCreate','uses'=>'AdminController@getCreateEducation']);
		Route::post('post-edit/{id}',['as'=>'admin.education.postEdit','uses'=>'AdminController@PostEditEducation']);
		Route::post('post-create',['as'=>'admin.education.postCreate','uses'=>'AdminController@PostCreateEducation']);
		Route::post('post-delete',['as'=>'admin.education.postDelete','uses'=>'AdminController@PostDeleteEducation']);
	});
	Route::group(['prefix'=>'experience'],function(){
		//Route::get('edit/{id}',['as'=>'admin.education.getEdit','uses'=>'AdminController@getEditEducation']);
		Route::get('list',['as'=>'admin.experience.getList','uses'=>'AdminController@getListExperience']);
		Route::get('create',['as'=>'admin.experience.getCreate','uses'=>'AdminController@getCreateExperience']);
		//Route::post('post-edit/{id}',['as'=>'admin.education.postEdit','uses'=>'AdminController@PostEditEducation']);
		Route::post('post-create',['as'=>'admin.education.postCreate','uses'=>'AdminController@PostCreateExperience']);
		//Route::post('post-delete',['as'=>'admin.education.postDelete','uses'=>'AdminController@PostDeleteEducation']);
	});
	Route::group(['prefix'=>'skill'],function(){
		//Route::get('edit/{id}',['as'=>'admin.education.getEdit','uses'=>'AdminController@getEditEducation']);
		//Route::get('list',['as'=>'admin.experience.getList','uses'=>'AdminController@getListExperience']);
		Route::get('create',['as'=>'admin.skill.getCreate','uses'=>'AdminController@getCreateSkill']);
		//Route::post('post-edit/{id}',['as'=>'admin.education.postEdit','uses'=>'AdminController@PostEditEducation']);
		Route::post('post-create',['as'=>'admin.skill.postCreate','uses'=>'AdminController@PostCreateSkill']);
		//Route::post('post-delete',['as'=>'admin.education.postDelete','uses'=>'AdminController@PostDeleteEducation']);
	});
	Route::group(['prefix'=>'project'],function(){
		//Route::get('edit/{id}',['as'=>'admin.education.getEdit','uses'=>'AdminController@getEditEducation']);
		Route::get('list',['as'=>'admin.project.getList','uses'=>'AdminController@getListProject']);
		Route::get('create',['as'=>'admin.project.getCreate','uses'=>'AdminController@getCreateProject']);
		//Route::post('post-edit/{id}',['as'=>'admin.education.postEdit','uses'=>'AdminController@PostEditEducation']);
		Route::post('post-create',['as'=>'admin.project.postCreate','uses'=>'AdminController@PostCreateProject']);
		//Route::post('post-delete',['as'=>'admin.education.postDelete','uses'=>'AdminController@PostDeleteEducation']);
	});
	Route::group(['prefix'=>'categories'],function(){
		//Route::get('edit/{id}',['as'=>'admin.education.getEdit','uses'=>'AdminController@getEditEducation']);
		Route::get('list',['as'=>'admin.categories.getList','uses'=>'AdminController@getListCategories']);
		Route::get('create',['as'=>'admin.categories.getCreate','uses'=>'AdminController@getCreateCategories']);
		//Route::post('post-edit/{id}',['as'=>'admin.education.postEdit','uses'=>'AdminController@PostEditEducation']);
		Route::post('post-create',['as'=>'admin.categories.postCreate','uses'=>'AdminController@PostCreateCategories']);
		//Route::post('post-delete',['as'=>'admin.education.postDelete','uses'=>'AdminController@PostDeleteEducation']);
	});
	Route::group(['prefix'=>'blog'],function(){
		//Route::get('edit/{id}',['as'=>'admin.education.getEdit','uses'=>'AdminController@getEditEducation']);
		//Route::get('list',['as'=>'admin.categories.getList','uses'=>'AdminController@getListCategories']);
		Route::get('create',['as'=>'admin.blog.getCreate','uses'=>'AdminController@getCreateBlog']);
		//Route::post('post-edit/{id}',['as'=>'admin.education.postEdit','uses'=>'AdminController@PostEditEducation']);
		//Route::post('post-create',['as'=>'admin.categories.postCreate','uses'=>'AdminController@PostCreateCategories']);
		//Route::post('post-delete',['as'=>'admin.education.postDelete','uses'=>'AdminController@PostDeleteEducation']);
	});
	Route::group(['prefix'=>'user'],function(){
		Route::get('edit/{id}',['as'=>'admin.user.getEdit','uses'=>'AdminController@getEditUser']);
		Route::get('list',['as'=>'admin.user.getList','uses'=>'AdminController@getListUser']);
		Route::get('create',['as'=>'admin.user.getCreate','uses'=>'AdminController@getCreateUser']);
		Route::post('post-edit/{id}',['as'=>'admin.user.postEdit','uses'=>'AdminController@PostEditUser']);
		Route::post('post-create',['as'=>'admin.user.postCreate','uses'=>'AdminController@PostCreateUser']);
		Route::post('post-delete',['as'=>'admin.user.postDelete','uses'=>'AdminController@PostDeleteUser']);
	});
});
Route::get('admin/login',['as'=>'admin.login.getlogin','uses'=>'AdminController@getLogin']);
Route::post('admin-post-login',['as'=>'admin.login.PostLogin','uses'=>'AdminController@postLogin']);
Route::get('admin-logout',['as'=>'admin.logout.PostLogout','uses'=>'AdminController@PostLogout']);