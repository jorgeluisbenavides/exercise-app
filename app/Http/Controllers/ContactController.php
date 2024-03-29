<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Contact; 

class ContactController extends Controller
{
    
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'surname' => 'required|string',
            'email' => 'unique:contacts|required|email',
            'telephone' => 'required|regex:/[0-9]{10}/',
            'active' => 'required'
        ]);
        if($validator->fails()){
            return response()->json([
                'errors' => $validator->errors()->all(),
                'success' =>false
            ], 400); 
        }

        $data['name'] = @filter_var($request['name'], FILTER_SANITIZE_SPECIAL_CHARS);
        $data['surname'] = @filter_var($request['surname'], FILTER_SANITIZE_STRING);
        $data['email'] = @filter_var($request['email'], FILTER_SANITIZE_EMAIL);
        $data['telephone'] = @filter_var($request['telephone'], FILTER_SANITIZE_NUMBER_INT);
        $data['active'] = (bool) @filter_var( $request['active'], FILTER_SANITIZE_STRING);
        $validacion = $this->esPalindromo($data['surname']);
        $extra = "";
        if($validacion){
            $extra = ", El apellido es una palabra palíndromo.";
        }
        $contact = Contact::create($data);
        
        if($contact != null){
            return response()->json([
                'message' => "Creado con éxito".$extra,
                'success' => true
            ], 200);
        } else {
            return response()->json([
                'message' => "Error al guardar",
                'success' => true
            ], 400);
        }
        
    }

    public function index()
    {
        $contacts = Contact::all();
        foreach ($contacts as $contacto) {
            if($this->esPalindromo($contacto->surname)){
                $contacto->palabra = true;
            } else {
                $contacto->palabra = false;
            }
        }
        if(count($contacts)> 0){
            return response()->json([
                'success' =>true,
                'data'=>$contacts
            ], 200); 
        } else {
            return response()->json([
                'success' =>false
            ], 204); 
        }
    }

    public function update(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'surname' => 'required|string',
            'telephone' => 'required|regex:/[0-9]{10}/',
            'active' => 'required',
            'id' => 'exists:contacts,id|required|numeric',
        ]);
        
        if($validator->fails()){
            return response()->json([
                'errors' => $validator->errors()->all(),
                'success' =>false
            ], 400); 
        }

        $data['name'] = @filter_var($request['name'], FILTER_SANITIZE_SPECIAL_CHARS);
        $data['surname'] = @filter_var($request['surname'], FILTER_SANITIZE_STRING);
        $data['telephone'] = @filter_var($request['telephone'], FILTER_SANITIZE_NUMBER_INT);
        $data['active'] = (bool) @filter_var( $request['active'], FILTER_SANITIZE_STRING);
        $id = @filter_var($request['id'], FILTER_SANITIZE_NUMBER_INT);
        $validacion = $this->esPalindromo($data['surname']);
        $extra = "";
        if($validacion){
            $extra = ", El apellido es una palabra palíndromo.";
        }
        $contact = Contact::where('id', '=', $id)
            ->update($data);

        if($contact != null){
            return response()->json([
                'message' => "Datos actualizados".$extra,
                'success' => true
            ], 200);
        } else {
            return response()->json([
                'message' => "Los datos no fueron actualizados",
                'success' => false
            ], 400);
        }
    }

    public function delete($contact)
    {
        
        /* $validator = Validator::make($request->all(), [
            'id' => 'exists:contacts,id|required|numeric',
        ]);
        if($validator->fails()){
            return response()->json([
                'errors' => $validator->errors()->all(),
                'success' =>false
            ], 400); 
        }
        $id = @filter_var($request['identificador'], FILTER_SANITIZE_NUMBER_INT);
         */
        $contact = Contact::find($contact->id);

        $contact->delete(); 

        return response()->json([  
            'message' => "Datos eliminados",
            'success' => true
        ], 200);
        
    }

    private function esPalindromo($str){
        if (strlen($str)<2) {
            return false;
        }
        $str=strtolower(str_replace([" ", ",", "."], "", $str));
        for ($i=0;$i<strlen($str);$i++) {
            if ($str[$i]!=$str[strlen($str)-$i-1]) {
                return false;
            }
        }
        return true;
    }
}