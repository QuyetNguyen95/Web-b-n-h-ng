<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
class AdminAuthCotrollerController extends Controller
{
   public function getLogin()
   {
       return view('admin::auth.login');
   }
   public function postLogin(Request $request)
   {
   		$data = $request->only('email', 'password');

        if (Auth::guard('admins')->attempt($data))
         {
            // Authentication passed...
            return redirect()->route('admin.home');
        }
        return redirect()->back();
   }
   public function logoutAdmin()
   {
   		Auth::guard('admins')->logout();
   		return redirect()->route('admin.login');
   }
  public function index()
  {
    $authenticates = Admin::select('id','email','phone','name')->get();
    $viewData = [
      'authenticates' => $authenticates
    ];
    return view('admin::signup.index',$viewData);
  }
  public function create()
  {
    return view('admin::signup.create');
  }
  public function store(Request $request)
  {
    $this->insertOrUpdate($request);
    return redirect()->back()->with('success','Tạo mới tài khoản thành công');
  }
  public function edit($id)
  {
    $authenticate = Admin::find($id);
    return view('admin::signup.update',compact('authenticate'));
  }
  public function update(Request $request,$id)
  {
    $this->insertOrUpdate($request,$id);
     return redirect()->back()->with('success','Cập nhật thành công');
  }
  public function insertOrUpdate($request, $id='')
  {
    $authenticates = new Admin();
    if($id) $authenticates = Admin::find($id);
    $authenticates->name = $request->name;
    $authenticates->email = $request->email;
    $authenticates->phone = $request->phone;
    $authenticates->password = bcrypt($request->password);
    $authenticates->save();
  }
  public function action($action,$id)
  {
    $authenticate  = Admin::find($id);
    if ($action) {
      switch ($action) {
        case 'delete':
          $authenticate->delete();
          break;
      }
    }
    return redirect()->back()->with('success','Xóa thành công');
  }
}
