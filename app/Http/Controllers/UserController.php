<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // GET - Obtener todos los clientes
    public function index()
    {
        //
        $users = User::all();
        return response()->json($users, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    // POST - Crear un nuevo cliente (REGISTER)
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'address' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed', // password_confirmation
            'phone' => 'required|regex:/^\d{10}$/',
        ]);

        $user = User::create($request->all());

        return response()->json([
            'status' => '200',
            "meesage" => "User registered succesfully",
            "data" => $user,
        ]);
    }


    // POST - Crear un nuevo cliente (LOGIN)
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required', // password_confirmation
        ]);

        $user = User::where('email', $request->email)->first();

        if (!empty($user)) {
            //user exist
            if (Hash::check($request->password, $user->password)) {
                // Password mateched
                //add token value
                $token = $user->createToken("myToken")->accessToken;
                $cookie = cookie('cookie_token', $token, 60*24);
                return response()->json([
                    'status' => '200',
                    'meesage' => "Login succesful",
                    "token" => $token,
                    'data' => $user,
                ])->withoutCookie($cookie);
            }else{
                return response()->json([
                    'status' => '400',
                    'meesage' => "Password didn't match",
                    'data' => []
                ]);
                
            }
        }else{
            return response()->json([
                'status' => '400',
                'meesage' => 'Invalid Email Value',
                'data' => []
            ]);

        }
    }


    //LOGOUT

    // GET [Auth: Token]
    public function logout()
    {
        if(auth()->check()){
            //olvidar la cookie
            $cookie = Cookie::forget('cookie_token');


            $token = auth()->user()->token();
    
            $token->revoke();
    
            return response()->json([
                'status' => '200',
                'message' => 'User Logged out succesfully'
            ])->withCookie($cookie);
        }
        return response()->json([
            'status' => '401',
            'message' => 'User is not authenticated'
    
        ]);
    }

    /**
     * Display the specified resource.
     */
    // GET - Obtener un cliente por su ID
    // (o no LOGIN)
    public function show(string $id)
    {
        $user = User::find($id);
        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }
        return response()->json($user, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    // PUT - Actualizar un cliente existente
    public function update(Request $request){
        $user = User::find($request->id);
    
        if ($user) {
            if ($request->has('first_name')) {
                $user->first_name = $request->first_name;
            }
            if ($request->has('last_name')) {
                $user->last_name = $request->last_name;
            }            
            // Verifica si el campo "email" se proporciona en la solicitud
            if ($request->has('email')) {
                $user->email = $request->email;
            }
            if ($request->has('email_verified_at')) {
                $user->email_verified_at = $request->email_verified_at;
            }
          
            if ($request->has('phone')) {
                $user->phone = $request->phone;
            }
            if ($request->has('password')) {
                $user->password =bcrypt($request->password);
            }
    
            $user->save();
            return response()->json($user, 200);
        } else {
            return response()->json(['mensaje' => 'Usuario no encontrado'], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    // DELETE - Eliminar un cliente
    public function destroy(string $id)
    {
        $user = User::find($id);
        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }
        $user->delete();
        return response()->json(['message' => 'User deleted succesfully'], 200);
    }
}
