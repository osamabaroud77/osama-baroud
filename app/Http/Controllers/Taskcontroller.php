<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;;
use Illuminate\Support\Facades\DB;
use App\Models\Task;
class Taskcontroller extends Controller
{
    public function index(){
//$tasks= DB::table('tasks')->get();
$tasks=Task::all();

return view('tasks', compact('tasks'));
   }
   public function insert(Request  $request){
//DB::table('tasks')->insert([
  //  'name' =>$_POST['name'],
//'created_at' => now(),
//'updated_at'=> now()
//]);
$task=new Task;
$task->name = $request->name;
//$task->create_ate=now();
$task->save();
return redirect()->back();
   }
   public function delete($id){
    $task=Task::find($id);
$task->delete();
    //DB::table('tasks')->where('id','=',$id)->delete();
   // $task=new Task;
   // $task->find($id);
   // $task->delete();
    //$task=Task::find($id)->delete();
    //$task->where('id',$id)->delete();
    return redirect()->back();

   }
   public function showData($id){
    $task=Task::find($id);
    return view('edit',['task'=>$task]
   );
}
public function update(Request $request){
$task=Task::find($request->id);
$task->name=$request->name;
$task->save();
return redirect('/');
}
public function showData2($id){
    $task=Task::find($id);
    return view('update',['task'=>$task]
   );
}
public function update2(Request $request){
    $task=Task::find($request->id);
    $task->name=$request->name;
    $task->save();
    return redirect('/');
    }
}
