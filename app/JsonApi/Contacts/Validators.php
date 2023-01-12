<?php

namespace App\JsonApi\Contacts;

use CloudCreativity\LaravelJsonApi\Validation\AbstractValidators;
use CloudCreativity\LaravelJsonApi\Contracts\Validation\ValidatorInterface;
use CloudCreativity\LaravelJsonApi\Document\Error\Error;
use Illuminate\Support\Facades\Validator;

class Validators extends AbstractValidators
{

    /**
     * The include paths a client is allowed to request.
     *
     * @var string[]|null
     *      the allowed paths, an empty array for none allowed, or null to allow all paths.
     */
    protected $allowedIncludePaths = [];

    /**
     * The sort field names a client is allowed send.
     *
     * @var string[]|null
     *      the allowed fields, an empty array for none allowed, or null to allow all fields.
     */
    protected $allowedSortParameters = [];

    /**
     * The filters a client is allowed send.
     *
     * @var string[]|null
     *      the allowed filters, an empty array for none allowed, or null to allow all.
     */
    protected $allowedFilteringParameters = [];

    /**
     * Get resource validation rules.
     *
     * @param mixed|null $record
     *      the record being updated, or null if creating a resource.
     * @param array $data
     *      the data being validated
     * @return array
     */
    protected function rules($record, array $data): array
    {

        return [
            'name' => 'required|string|min:3|max:255',
            'surname' => 'required|string|min:3|max:255',
            'telephone' => 'required|regex:/[0-9]{10}/',
            'active' => 'required'
        ];
    }

    /**
     * Get query parameter validation rules.
     *
     * @return array
     */
    protected function queryRules(): array
    {
        return [];
    }

    public function update($record, array $data): ValidatorInterface
    {
        
        $validator = parent::update($record, $data);
           
        $validator->sometimes('email', "unique:contacts,email|required|email", function ($input) {
            return $input->id >= 100;
        });  
        /* $validator = Validator::make($data->all(), [
            'id' => 'exists:contacts,id|required|numeric',
        ]); */
        //dd($validator->errors());
        return $validator;
        /* $validator = Validator::make($request->all(), [
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
        return $validator; */
    }
}
