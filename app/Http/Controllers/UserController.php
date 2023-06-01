<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Reservation;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('type', 'user')->get();
        return view('admin.user', compact('users'));
    }
    public function store(Request $request, $id)
    {
        $user = User::find($id);
        $user->type = 'off';
        $user->save();

        return redirect()->route('admin.user');
    }

    public function off()
    {
        $users = Reservation::where('status', 'unknown')->get();
        return view ('admin.off',compact('users'));
    }
    public function active(Request $request, $id)
    {
        $user = Reservation::find($id);
        $user->status = 'aactive';
        $user->save();

        return redirect()->route('admin.off');
    }
    public function offinactive(Request $request, $id)
    {
        $user = Reservation::find($id);
        $user->status = 'inactive';
        $user->save();

        return redirect()->route('admin.off');
    }


}
