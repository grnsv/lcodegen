<?php

// This file can be edited. It will not be overwritten by the generator.

namespace App\Http\Requests;

use App\Http\Requests\OpenApi\WatchAdmissionregistrationV1MutatingWebhookConfigurationListRequest as BaseWatchAdmissionregistrationV1MutatingWebhookConfigurationListRequest;

final class WatchAdmissionregistrationV1MutatingWebhookConfigurationListRequest extends BaseWatchAdmissionregistrationV1MutatingWebhookConfigurationListRequest
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
