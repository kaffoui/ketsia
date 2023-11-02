<?php

namespace App\Http\Controllers\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

        public function __construct()
        {
            $this->middleware('guest')->except([
                'logout', 'dashboard'
            ]);
        }


        // public function signup(Request $request)
        // {
        //     // La validation
        //     $validator = Validator::make($request->all(), [
        //         'nom' => ['required', 'string', 'max:255'],
        //         'prenoms' => ['required', 'string', 'max:255'],
        //         'code_postal' => ['required', 'string', 'max:255'],
        //         'email' => ['required', 'email', 'max:255', 'unique:users'],
        //         'ville' => ['required', 'string', 'max:255'],
        //         'password' => ['required', 'min:8', 'confirmed'],
        //         'indicatif' => ['required'],
        //         "telephone" => ["required"],
        //     ]);
    
        //     $paysUser = Pays::where('indicatif', $request->indicatif)->first();
        //     $telephone = $paysUser->indicatif . $request->telephone;
        //     $validator->after(function ($validator) use ($request, $telephone) {
        //         // if (str_starts_with($request->telephone, '00') || str_starts_with($request->telephone, '+'))
        //         // {
        //         //     $validator->errors()->add('telephone', "La valeur du champ doit être saisi sans l'indicatif du pays.");
        //         // }
    
        //         // $adress_datas = $this->get_geolocation();
    
        //         // recuperation pays user via code pour avoir l'identifiant du pays
        //         // $paysUser = Pays::where('code', $request->code_pays)->first();
    
        //         // // $telephone = $paysUser->indicatif.$request->telephone;
        //         // $telephone = $request->telephone;
    
        //         if (User::where('telephone', $telephone)->first()) {
        //             $validator->errors()->add('telephone', "La valeur du champ est déjà utilisée.");
        //             return redirect()->back()->with([
        //                 "success" => false,
        //                 "message" => "La valeur du champ est déjà utilisée"
        //             ]);
        //         }
        //     });
    
        //     if ($validator->fails()) {
        //         dd($validator->errors());
        //         return redirect()->back()->with([
        //             "success" => false,
        //             "message" =>  "Oops ! Un problème a été rencontré lors de l'opération"
        //         ]);
        //     }
    
        //     // $adress_datas = $this->get_geolocation();
    
        //     // recuperation pays user via code pour avoir l'identifiant du pays
        //     // $paysUser = Pays::where('code', $adress_datas['country_code2'])->first();
    
        //     $telephone = str_replace(' ', '', $telephone);
    
        //     // nouvel user pour les infos de connexion
        //     $user = User::create([
        //         'pays_register_id' => $paysUser->id,
        //         'ip_register' => request()->ip(),
        //         'email' => strtolower($request->email),
        //         'telephone' => $telephone,
        //         'recent_ip' => request()->ip(),
        //         'password' => Hash::make($request->password),
        //         'role' => $request->role,
        //         'code_validation' => $request->code_validation,
        //         'email_verified_at' => date('Y-m-d H:i:s'),
        //     ]);
        //     // nouveau client
        //     Client::create([
        //         'reference' => Str::random(10),
        //         'nom' => ucwords(strtolower($request->nom)),
        //         'prenoms' => ucwords(strtolower($request->prenoms)),
        //         'code_postal' => $request->code_postal,
        //         'ville' => ucwords(strtolower($request->ville)),
        //         'email' => strtolower($request->email),
        //         'telephone' => $telephone,
        //         'pays_id' => $paysUser->id,
        //         'user_id' => $user->id,
        //     ]);
        //     //send phone first
        //     $code = generateRandomNumber();
        //     $user->update(["sms_code" => $code]);
        //     try {
        //         send_code("sms", $telephone, $code, "inscription");
        //     } catch (\Throwable $th) {
        //         try {
        //             send_code("sms", $telephone, $code, "inscription");
        //         } catch (\Throwable $th) {
        //             dd($th);
        //         }
        //     }
        //     // send other code and send email then
        //     $code = generateRandomNumber();
        //     $user->update(["email_code" => $code]);
        //     try {
        //         send_code("mail", strtolower($request->email), $code, "inscription");
        //     } catch (\Throwable $th) {
        //         try {
        //             send_code("mail", strtolower($request->email), $code, "inscription");
        //         } catch (\Throwable $th) {
        //         }
        //     }
    
        //     // event(new Registered($user));
    
        //     return redirect()->route('validateSmsCodeForm')->with([
        //         'success' => true,
        //         "message" => "Un code a été envoyé au ". $telephone .". Consultez votre messagerie sms ainsi que votre boite de réception email afin de valider votre inscription.",
        //         "phone" => $telephone
        //     ]);
        //     // }
    
        // }

        public function register() {
            return view('register');
        }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:250',
            'email' => 'required|email|max:250|unique:users',
            'password' => 'required|min:8|confirmed'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $credentials = $request->only('email', 'password');
        Auth::attempt($credentials);
        $request->session()->regenerate();
        return redirect()->route('dashboard')
        ->withSuccess('Vous êtes inscrit et connecté avec succès!');
    }

        public function login() {
            return view('login');
        }

    
        public function authenticate(Request $request)
        {
            $credentials = $request->validate([
                'email' => 'required|email',
                'password' => 'required'
            ]);
    
            if(Auth::attempt($credentials))
            {
                $request->session()->regenerate();
                return redirect()->route('dashboard')
                    ->withSuccess('Vous êtes connecté avec succès!');
            }
    
            return back()->withErrors([
                'email' => 'Les informations que vous avez fournies ne sont pas correctes.',
            ])->onlyInput('email');
    
        } 


        public function dashboard()
    {
        if(Auth::check())
        {
            return view('dashboard');
        }
        
        return redirect()->route('login')
            ->withErrors([
            'email' => 'Veuillez vous connecter !!.',
        ])->onlyInput('email');
    } 

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')
            ->withSuccess('Vous vous êtes déconnecté avec succès!');;
    } 









    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
