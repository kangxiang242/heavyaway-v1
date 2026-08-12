<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'consignee_name' => 'required',
            'consignee_phone' => 'required',
            'consignee_email' => 'required',
            'hcity' => 'required',
            'hproper' => 'required',
            'harea' => 'required',
            'consignee_address' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'consignee_name.required' => '請填寫收貨人',
            'consignee_phone.required' => '請填寫收貨電話',
            'consignee_email.required' => '請填寫電子郵箱',
            'hcity.required' => '請填寫縣市',
            'hproper.required' => '請填寫區/鄉鎮',
            'harea.required' => '請填寫街道',
            'consignee_address.required' => '請填寫詳細地址',
        ];
    }
}
