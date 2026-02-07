<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Requests;

use App\Http\Requests\OpenApi\ListAutoscalingV2beta2HorizontalPodAutoscalerForAllNamespacesRequest as BaseListAutoscalingV2beta2HorizontalPodAutoscalerForAllNamespacesRequest;

final class ListAutoscalingV2beta2HorizontalPodAutoscalerForAllNamespacesRequest extends BaseListAutoscalingV2beta2HorizontalPodAutoscalerForAllNamespacesRequest
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
