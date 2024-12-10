<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
        return [
        'product_name' => ' required |present | max:255',
        'price' => 'required | present | integer',
        'stock' => 'required | present | integer',
        'company_name' => 'required | present | string | max:255',
        'comment' => 'required | present | string | max:10000',
        ];
    }

    public function attributes()
{
    return [
        'product_name' => '商品名',
        'price' => '金額' ,'価格',
        'stock' => '在庫数' ,
        'company_name' => 'メーカー' ,
        'comment' => 'コメント',
    ];
}

/**
 * エラーメッセージ
 *
 * @return array
 */
public function messages() {
    return [
        'product_name' => ':商品名を入力してください',
        'price' => ':金額を入力してください',
        'stock' => ':在庫数を入力してください',
        'company_name' => ':attributeは:max字以内で入力してください。',
        'comment' => ':attributeはURL形式で入力してください。',
        'comment' => ':attributeは:max字以内で入力してください。',
    ];
}
}
