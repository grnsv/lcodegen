<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Requests;

use App\Http\Requests\OpenApi\PatchAdmissionregistrationV1MutatingWebhookConfigurationRequest as BasePatchAdmissionregistrationV1MutatingWebhookConfigurationRequest;

final class PatchAdmissionregistrationV1MutatingWebhookConfigurationRequest extends BasePatchAdmissionregistrationV1MutatingWebhookConfigurationRequest
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
