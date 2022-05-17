<?php

namespace App\Http\Controllers;

use App\Mail\CompanyMailSending;
use App\Models\Company;
use App\Models\CompanyUser;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use phpDocumentor\Reflection\Project;

class FollowerController extends Controller
{
    public function subscribe(Request $request)
    {
        $company_id=$request->company_id;
        $user_id=$request->id;
        CompanyUser::create(['company_id' => $company_id, 'user_id' => $user_id]);

        //        $company = Company::where('id',$request->id)->first();
//        Mail::to($request->email)->send(new CompanyMailSending($company));

    }
    public function insert(Request $request){
        $post = $request->tittle;
        $company = Company::where('id',$request->id)->first();
//        $company->post()->update([])
        $comp=$company->id;
//        $data=array('company_id'=>$comp,"Tittle"=>$post);
//        Post::table('company_post')->insert($data);
        Post::create(['Tittle' => $post, 'company_id' => $comp]);
    }
}
