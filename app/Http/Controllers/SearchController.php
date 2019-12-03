<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
		public function index(Request $request)
    	{
    		$query = User::query();

    		$id = $request->input('id');
	        $name = $request->input('name');
	        $area = $request->input('area');
	        $attribute = $request->input('attribute');
	        $category = $request->input('category');

	         // プルダウンメニューで指定なし以外を選択した場合、$query->whereで選択した地域名と一致するカラムを取得します
	        if ($request->has('area') && $area != ('すべて')) {
	            $query->where('area', $area)->get();
	        }

	         // プルダウンメニューで指定なし以外を選択した場合、$query->whereで選択した好きな属性と一致するカラムを取得します
	        if ($request->has('attribute') && $attribute != ('すべて')) {
	            $query->where('attribute', $attribute)->get();
	        }

	        // プルダウンメニューで指定なし以外を選択した場合、$query->whereで選択した好きな戦法と一致するカラムを取得します
	        if ($request->has('category') && $category != ('すべて')) {
	            $query->where('category', $category)->get();
	        }

	        // キーワード入力フォームに入力した文字列を含むカラムを取得します
	        if ($request->has('name') && $name != '') {
	            $query->where('name', 'like', '%'.$name.'%')->get();
	        }

	        //ユーザを1ページにつき10件ずつ表示させます
	        $data = $query->paginate(10);

	        return view('searches.index',[
	            'data' => $data
	        ]);
    	}
}
