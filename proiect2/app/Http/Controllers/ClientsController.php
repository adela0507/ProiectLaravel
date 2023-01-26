<?php
namespace App\Http\Controllers;
use App\Client;
use Illuminate\Http\Request;
use App\Task;
use App\Http\Requests;
class ClientsController extends Controller
{
    public function index(Request $request)
    {
        $clients = Client::orderBy('name','ASC')->paginate(5);
        $value=($request->input('page',1)-1)*5;
        return view('clients.list',compact('clients'))->with('i',$value);
    }
    public function create()
    {
        return view('clients.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required','description' =>
            'required']);
        // create new task
        Client::create($request->all());
        return redirect()->route('clients.index')->with('success', 'Your client
added successfully!');
    }
    public function show($id)
    {
        $task = Client::find($id);
        return view('clients.show',compact('task'));
    }
    public function edit($id)
    {
        $task = Client::find($id);
        return view('clients.edit', compact('task'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required'
        ]);
        Client::find($id)->update($request->all());
        return redirect()->route('clients.index')->with('success','Client updated
successfully');
    }
    public function destroy($id)
    {
        Client::find($id)->delete();
        return redirect()->route('clients.index')->with('success','Client
removed successfully');
    }
}
