namespace App\Http\Controllers;
use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
   public function index(Request $request)
   {
       $name = $request->name;
       return response()->make("<h1>Hello World! This is ".$name, 200);
   }
}