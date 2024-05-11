<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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
                return response()->json([
                    'status' => '200',
                    'meesage' => "Login succesful",
                    "token" => $token,
                    'data' => $user,
                ]);
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


            $token = auth()->user()->token();
    
            $token->revoke();
    
            return response()->json([
                'status' => '200',
                'message' => 'User Logged out succesfully'
            ]);
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
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        $request->validate([
            'first_name' => 'string',
            'last_name' => 'string',
            'address' => 'string',
            'email' => 'string|email',
            'password' => 'string',
            'phone' => 'string'
        ]);

        $user->update($request->all());
        return response()->json($user, 200);
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

    // GET - Obtener un cliente por su ID
    // (o no LOGIN)
    public function check(Request $request)
    {
        // Obtener el token de autorización del encabezado de la solicitud
        $token = $request->bearerToken();
        if ($token) {
            // Verificar si el token es válido
            if (Auth::guard('api')->check()) {
                
                // Devolver el token junto con los datos del usuario asociado al token
                return response()->json([
                    'status' => '200',
                    'message' => 'Token verified successfully',
                    'token' => $token,
                    'data' => Auth::guard('api')->user(),
                ]);
            } else {
                return response()->json([
                    'status' => '401',
                    'message' => 'Invalid token',
                ], 401);
            }
        } else {
            return response()->json([
                'status' => '401',
                'message' => 'Token not provided',
            ], 401);
        }
    }
}
