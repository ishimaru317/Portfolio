<?php
 
namespace App\Http\Requests;
 
use Illuminate\Foundation\Http\FormRequest;
 
class PostRequest extends FormRequest
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
            'name' => 'required|max:40',
            'photo' => 'mimes:jpeg,jpg,png,gif|max:10000', // max 10000kb
            'comment' => 'required|max:350',
            'category_id' => 'required|integer',
        ];
    }
 
    /**
     * エラーメッセージを日本語化
     * 
     */
    public function messages()
    {
        return [
            'name.required' => '名前を入力してください',
            'name.max' => '名前は40文字以内で入力してください',
            'photo.required' => '写真を投稿してください。',
            'photo.max' => 'ファイルデータが大きすぎます。',
            'comment.required' => 'メッセージを入力してください',
            'comment.max' => 'メッセージは350文字以内で入力してください',
            'category_id.required' => 'カテゴリーを選択してください',
            'category_id.integer' => 'カテゴリーの入力形式が不正です',
        ];
    }
}