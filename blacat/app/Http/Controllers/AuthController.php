<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Address;

class AuthController extends Controller
{


    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ], [
            'name.required' => 'O campo nome é obrigatório',
            'username.required' => 'O campo nome de usuário é obrigatório',
            'username.unique' => 'O nome de usuário informado já está em uso',
            'email.required' => 'O campo email é obrigatório',
            'email.email' => 'O campo email deve ser um email válido',
            'email.unique' => 'O email informado já está em uso',
            'password.required' => 'O campo senha é obrigatório',
            'password.confirmed' => 'As senhas não coincidem',
        ]);

        // Crie um novo usuário
        $user = new User();
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        // Salve o usuário no banco de dados
        if ($user->save()) {
            // Autentique o usuário após o cadastro
            Auth::login($user);

            // Redirecione para o perfil do usuário com uma mensagem de sucesso
            return redirect()->route('login')->with('success', 'Perfil criado com sucesso e autenticado.');
        } else {
            // Se houver um erro ao salvar, redirecione de volta com uma mensagem de erro
            return redirect()->back()->with('error', 'Erro ao criar o perfil');
        }
    }

    public function showRegister()
    {
        return view('auth.signup');
    }

    // public function showLogin(){
    //     return view('auth.signin');
    // }

    public function index()
    {
        return view('index');
    }

    public function forgot()
    {
        return view('auth.forgot-password');
    }

    public function sendCode()
    {
        return view('auth.otp');
    }


    public function login(Request $request)
    {

        // dd($request->All());
        // Validação dos dados
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'O campo do email é obrigatório',
            'password.required' => 'O campo da senha é obrigatório',
        ]);

        // Verificação das credenciais
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Autenticação bem-sucedida
            $request->session()->regenerate();
            return redirect()->intended('dashboard')->with('success', 'Login realizado com sucesso.');
        }

        // Autenticação falhou
        return back()->withErrors([
            'username' => 'As credenciais fornecidas não correspondem aos nossos registros.',
        ])->onlyInput('username');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }


}

