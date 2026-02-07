<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Requests;

use App\Http\Requests\OpenApi\WatchPolicyV1NamespacedPodDisruptionBudgetRequest as BaseWatchPolicyV1NamespacedPodDisruptionBudgetRequest;

final class WatchPolicyV1NamespacedPodDisruptionBudgetRequest extends BaseWatchPolicyV1NamespacedPodDisruptionBudgetRequest
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
