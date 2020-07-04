<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestCategory extends FormRequest
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
            'name' => 'required|unique:categories,c_name,'.$this->id,
            //Sử dụng unique rule theo cách bạn làm ở trên thì bạn cần cho Laravel biết muốn so sánh giá trị hiện tại với giá trị của column nào trong table. Nếu như bạn muốn kiểm tra tính duy nhất của giá trị của $input['name'] với giá trị của column name của các record có trong table categories
            // unique:table,column,except,idColumn
            // table: refers to the table name "users"
            // column: refers the column name "email"
            // except: I'm taking it as the id of the Model instance I want to exclude from the "unique" verification
            'icon' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Trường này không được để trống',
            'name.unique' => 'Tên thư mục đã tồn tại',
            'icon.required' => 'Trường này không được để trống'
        ];
    }
}
