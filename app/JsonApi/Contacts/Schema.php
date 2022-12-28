<?php

namespace App\JsonApi\Contacts;

use Neomerx\JsonApi\Schema\SchemaProvider;

class Schema extends SchemaProvider
{

    /**
     * @var string
     */
    protected $resourceType = 'contacts';

    /**
     * @param \App\Contact $resource
     *      the domain record being serialized.
     * @return string
     */
    public function getId($resource)
    {
        return (string) $resource->getRouteKey();
    }

    /**
     * @param \App\Contact $resource
     *      the domain record being serialized.
     * @return array
     */
    public function getAttributes($resource)
    {
        return [
            'name' => $resource->name,
            'surname' => $resource->surname,
            'email' => $resource->email,
            'telephone' => $resource->telephone,
            'active' => $resource->active,
            'createdAt' => $resource->created_at,
            'updatedAt' => $resource->updated_at,
        ];
    }
}
