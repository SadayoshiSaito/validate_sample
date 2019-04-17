<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateTestRequest extends FormRequest
{
    public function authorize()
    {
        if ($this->path() === '/')
        {
            //リクエストのパスが"/"のときだけ、このクラスで定義した
            //バリデーションルールを適用する
            return true;
        }
        else
        {
            return false;
        }
    }

    public function rules()
    {
        return [
            'text1' => 'required',
            'text2' => 'email',
            'text3' => 'numeric|between:0,100',
            'text4' => 'size:5',
            'radio1' => 'required',
            'text6' => 'alpha',
        ];
    }

    public function messages()
    {
        return [
            'text1.required' => '必須入力です。',
            'text2.email' => 'メールアドレスの形式ではありません。',
            'text3.numeric' => '1〜100の範囲で入力してください。',
            'text4.size' => '5文字以内で入力してください。',
            'radio1.required' => 'いずれかを撰択してください。',
            'text6.alpha' => '英語以外の文字が含まれています。',
        ];
    }
}
