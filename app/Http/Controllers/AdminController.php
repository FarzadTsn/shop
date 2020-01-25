<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Psy\Exception\RuntimeException;

class AdminController extends Controller
{
    public function AdminShow(){
        return view('AdminPage.Panel');
    }

    public function IndexShow(){
        return view('front.index');
    }
    public function ShowListPage(){
        $UserList = User::all();
        return view('AdminPage.Users.All',compact('UserList'));
    }
    public function SubmitUser(){
        return view('AdminPage.Users.submituser');
    }
    public function EditUser($id){

        $userinfo = User::where('id',$id)->get();
        $switalert = 0;

        return view('AdminPage.Users.edituser',compact('userinfo'),compact('switalert'));
    }

    public function EditUserDb(Request $request){
        if($request->role =='notselected'){
            $switalert =2;
            return view('AdminPage.Users.editeduser',compact('switalert'));
            die();
        }
        if ($request->passwordnew != '') {
            User::where('email',$request->email)->update([
               'password' => Hash::make($request->passwordnew),
                'name' => $request->namesub,
                'email'=> $request->emailsub,
                'phone'=> $request->phone,
                'role' => $request->role,
            ]);
        }
        User::where('email',$request->email)->update([
            'name' => $request->namesub,
            'email'=> $request->emailsub,
            'phone'=> $request->phone,
            'role' => $request->role,

        ]);
        $switalert = 1;
        return view('AdminPage.Users.editeduser',compact('switalert'));
    }

    public function ChangeRoleInline(Request $request){

        $ChangeRoleInlineVar = User::where('id',$request->changeroleinlineid);
//        dd($request->changeroleinlineid);
            switch ($request->changeroleinline){
                case 'admin':
                    $NowRole = 'haghighi';
                    $ChangeRoleInlineVar->update(['role' => $NowRole]);
                    return $this->ShowListPage();
                    break;
                case 'haghighi':
                    $NowRole = 'hoghooghi';
                    $ChangeRoleInlineVar->update(['role' => $NowRole]);
                    return $this->ShowListPage();
                case 'hoghooghi':
                    $NowRole = 'admin';
                    $ChangeRoleInlineVar->update(['role' => $NowRole]);
                    return $this->ShowListPage();
            }
    }

    public function ChangeStatusInline(Request $request){
        $ChangeStatusInlineVar = User::where('id',$request->changestatusinlineid);
//        dd($request->changeroleinlineid);
        switch ($request->changestatusinline){
            case 'active':
                $NowStatus = 'disactive';
                $ChangeStatusInlineVar->update(['status' => $NowStatus]);
                return $this->ShowListPage();
                break;
            case 'disactive':
                $NowStatus = 'delete';
                $ChangeStatusInlineVar->update(['status' => $NowStatus]);
                return $this->ShowListPage();
                break;
            case 'delete':
                $NowStatus = 'block';
                $ChangeStatusInlineVar->update(['status' => $NowStatus]);
                return $this->ShowListPage();
                break;
            case 'block':
                $NowStatus = 'active';
                $ChangeStatusInlineVar->update(['status' => $NowStatus]);
                return $this->ShowListPage();
                break;
        }
    }

    public function AddUser(Request $request){

        if (User::create([
            'name'      => $request->namesub,
            'email'     => $request->emailsub,
            'password'  => Hash::make($request->passwordsub),
            'phone'     => $request->phone,
            'role'      => $request->role,
        ])){
            return redirect(route('userslist'));
        }
    }
}
