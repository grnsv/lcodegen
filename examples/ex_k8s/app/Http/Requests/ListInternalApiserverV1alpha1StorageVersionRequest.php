<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Requests;

use App\Http\Requests\OpenApi\ListInternalApiserverV1alpha1StorageVersionRequest as BaseListInternalApiserverV1alpha1StorageVersionRequest;

final class ListInternalApiserverV1alpha1StorageVersionRequest extends BaseListInternalApiserverV1alpha1StorageVersionRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules = parent::rules();
        // You can add your rules here

        return $rules;
    }
}
