<?php
namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
use App\Task;
use App\Http\Requests;
class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::orderBy('name','ASC')->paginate(5);
        $value=($request->input('page',1)-1)*5;
        return view('products.list',compact('products'))->with('i',$value);
    }
    public function create()
    {
        return view('products.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required',]);
        // create new task
        Product::create($request->all());
        return redirect()->route('products.index')->with('success', 'Your client
added successfully!');
    }
    public function show($id)
    {
        $task = Product::find($id);
        return view('products.show',compact('task'));
    }
    public function edit($id)
    {
        $task = Product::find($id);
        return view('products.edit', compact('task'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);
        Product::find($id)->update($request->all());
        return redirect()->route('products.index')->with('success','Client updated
successfully');
    }
    public function destroy($id)
    {
        Product::find($id)->delete();
        return redirect()->route('products.index')->with('success','Client
removed successfully');
    }
}
