<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Requests;

use App\Http\Requests\OpenApi\WatchInternalApiserverV1alpha1StorageVersionListRequest as BaseWatchInternalApiserverV1alpha1StorageVersionListRequest;

final class WatchInternalApiserverV1alpha1StorageVersionListRequest extends BaseWatchInternalApiserverV1alpha1StorageVersionListRequest
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
