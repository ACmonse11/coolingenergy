<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Mostrar formulario de inicio de sesión.
     */
    public function mostrarLogin()
    {
        return view('admin.login');
    }

    /**
     * Procesar inicio de sesión administrativo.
     */
    public function login(Request $request)
    {
        // Validar los datos recibidos
        $credenciales = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        // Verificar que el correo sea el autorizado
        if (
            $credenciales['email'] !== config('admin.email')
        ) {
            return back()
                ->withErrors([
                    'email' => 'Las credenciales son incorrectas.',
                ])
                ->onlyInput('email');
        }

        // Intentar autenticar al administrador
        if (Auth::attempt($credenciales)) {

            // Regenerar la sesión por seguridad
            $request->session()->regenerate();

            // Redirigir al panel administrativo
            return redirect()
                ->route('admin.dashboard');
        }

        // Mostrar error si las credenciales son incorrectas
        return back()
            ->withErrors([
                'email' => 'El correo electrónico o la contraseña son incorrectos.',
            ])
            ->onlyInput('email');
    }

    /**
     * Cerrar sesión administrativa.
     */
    public function logout(Request $request)
    {
        Auth::logout();

        // Invalidar la sesión actual
        $request->session()->invalidate();

        // Generar un nuevo token CSRF
        $request->session()->regenerateToken();

        return redirect()
            ->route('admin.login');
    }
}
