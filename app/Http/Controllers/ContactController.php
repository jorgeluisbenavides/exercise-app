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
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'email' => 'unique:contacts|required|email',
            'telefono' => 'required|regex:/[0-9]{10}/',
            'activo' => 'required'
        ]);
        if($validator->fails()){
            return response()->json([
                'errors' => $validator->errors()->all(),
                'success' =>false
            ], 400); 
        }

        $data['name'] = @filter_var($request['nombre'], FILTER_SANITIZE_SPECIAL_CHARS);
        $data['surname'] = @filter_var($request['apellido'], FILTER_SANITIZE_STRING);
        $data['email'] = @filter_var($request['email'], FILTER_SANITIZE_EMAIL);
        $data['telephone'] = @filter_var($request['telefono'], FILTER_SANITIZE_NUMBER_INT);
        $data['active'] = (bool) @filter_var( $request['activo'], FILTER_SANITIZE_STRING);
        
        $contact = Contact::create($data);
        
        if($contact != null){
            return response()->json([
                'message' => "Creado con éxito",
                'success' => true
            ], 200);
        } else {
            return response()->json([
                'message' => "Error al guardar",
                'success' => true
            ], 400);
        }
        
    }

    public function read()
    {
        $contacts = Contact::all();
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
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'telefono' => 'required|regex:/[0-9]{10}/',
            'activo' => 'required',
            'identificador' => 'exists:contacts,id|required|numeric',
        ]);
        
        if($validator->fails()){
            return response()->json([
                'errors' => $validator->errors()->all(),
                'success' =>false
            ], 400); 
        }

        $data['name'] = @filter_var($request['nombre'], FILTER_SANITIZE_SPECIAL_CHARS);
        $data['surname'] = @filter_var($request['apellido'], FILTER_SANITIZE_STRING);
        $data['telephone'] = @filter_var($request['telefono'], FILTER_SANITIZE_NUMBER_INT);
        $data['active'] = (bool) @filter_var( $request['activo'], FILTER_SANITIZE_STRING);
        $id = @filter_var($request['identificador'], FILTER_SANITIZE_NUMBER_INT);
        
        $contact = Contact::where('id', '=', $id)
            ->update($data);

        if($contact != null){
            return response()->json([
                'message' => "Datos actualizados",
                'success' => true
            ], 200);
        } else {
            return response()->json([
                'message' => "Los datos no fueron actualizados",
                'success' => false
            ], 400);
        }
    }

    public function delete(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'identificador' => 'exists:contacts,id|required|numeric',
        ]);
        if($validator->fails()){
            return response()->json([
                'errors' => $validator->errors()->all(),
                'success' =>false
            ], 400); 
        }
        $id = @filter_var($request['identificador'], FILTER_SANITIZE_NUMBER_INT);
        
        $contact = Contact::find($id);

        $contact->delete(); 

        return response()->json([  
            'message' => "Datos eliminados",
            'success' => true
        ], 200);
        
    }
}