<?php

namespace App\Http\Requests;

use App\Gallery;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreGalleryRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('gallery_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name' => [
                'required',
            ],
            'photos' => [
                'required',
            ],
        ];
    }
}
