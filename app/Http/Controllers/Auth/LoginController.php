<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
//use Illuminate\Foundation\Auth\User;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use function Laravel\Prompts\error;


class LoginController extends Controller
{
    public function sign_in(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('components.auth-layout');
    }
    public function sign_up(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('components.register');
    }
   public function sign_up_post(RegisterRequest $request): \Illuminate\Http\RedirectResponse
   {
      // dd($request->all());

       $data = $request->only('first_name', 'last_name','email', 'password');
      $data['password'] = Hash::make($data['password']);
//       try {
//           $user = User::create($data);
//           dd($user);
//       } catch (\Exception $e) {
//           dd('Kullanıcı oluşturulurken hata: ' . $e->getMessage());
//           return back()->withError('Kullanıcı oluşturulurken hata oluştu.');
//       }
       User::create($data);
       return redirect()->route('sign_in');

   }



    public function sign_in_post(LoginRequest $request)
    {
        //bunu da kullanabilirsin

//        $credentials = [
//            'email' => $request->email,
//            'password' => $request->password
//        ];
//
//
//        if (Auth::attempt($credentials)) {
//            return redirect()->route('dashboard');
//        } else {
//            return redirect()->route('sign_in')
//                ->withErrors([
//                    'email' => 'Bilgileriniz Hatalı!',
//                ])
//                ->onlyInput("email");
//        }

        $email = $request->email;
        $password = $request->password;
        $user = User::where("email", $email)->first();
      //  dd($request->all());
       // dd(Hash::make($user->password));

        if ($user && Hash::check($password, $user->password)) {
            Auth::login($user);
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('sign_in')
                ->withErrors([
                    'email' => 'Bilgileriniz Hatalı!',
                ])
                ->onlyInput("email");
        }
    }

    public function sign_out(Request $request)
    {
        if (Auth::check()) {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect()->route('sign_in');
        }

    }
}
