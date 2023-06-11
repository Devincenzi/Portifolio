<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\HomeController;
use Illuminate\Contracts\Session\Session;
use Illuminate\Database\Eloquent\Model;

class UserController extends Controller
{
    public function index (){
        $users = User::all();
        return view('pages.users.index', compact('users'));
    }

    public function user($id){
        if(!$id){
            $user = [];
            return view('pages.users.user', compact('user'));
        }

        $user = User::find($id);
        return view('pages.users.user', compact('user'));
    }

    public function alter(Request $request){
        $userId = $request['id'];
        $userName = $request['name'];
        $userEmail = $request['email'];
        $userPassword = $request['password'];

        $hashedPassword = md5($userPassword);

        $queryResult = null;
        $flashMessage = '';
        if($userId == 0){
            $userCreated = User::Create(
                array('name'=> $userName, 'email'=> $userEmail, 'password' => $hashedPassword));
            
            if($userCreated)
                $flashMessage = 'Usuário '.$userCreated['name'] .' criado com sucesso! ';
                $request->session()->put('flashMessage', $flashMessage);
                return response(json_encode(['goTo'=>$userCreated['id']]), 201)->header('Content-Type', 'text/plain');
            }
        
        if($userName)
             User::where('id', '=', $userId)->update(['name'=> $userName]);
            
        if($userEmail) 
            User::where('id', '=', $userId)->update(['email'=> $userEmail]);

        if($userPassword) 
            User::where('id', '=', $userId)->update(['password'=> $hashedPassword]);

        if($queryResult)
            $flashMessage = 'Usuário atualizado com sucesso!';

        $request->session()->flash('flashMessage', $flashMessage);
        return response(json_encode([$request['name']]), 200)->header('Content-Type', 'text/plain');
    }

    public function delete(Request $request){
        $userId = $request['id'];
        User::destroy($userId);

        return response(json_encode(['flashMessage' => 'Usuário excluído com sucesso!']), 200)->header('Content-Type', 'text/plain');
    }

    public function deleteall(Request $request){
        $deleted = User::where('id', 'like', '%%')->delete();

        $request->session()->flash('flashMessage', 'Affected rows: '.$deleted);

        return redirect('/users');
    }

    public function resetPassword(Request $request){
        $userId = $request['id'];
        $newPassword = 'Abc123';

        $hashedPassword = md5($newPassword);

        User::where('id', '=', $userId)->update(['password' => $hashedPassword]);
        return response(json_encode(['flashMessage' => 'Nova senha criada com sucesso!']), 200)->header('Content-Type', 'text/plain');
    }
}
