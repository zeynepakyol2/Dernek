<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return view('backend.page.product.products', compact('products'));
    }

    public function ProductCreate(Request $request)
    {
        if ($request->isMethod('GET')) {
            return view('backend.page.product.products_create');
        } else {
            // Doğrulama kurallarını tanımlayın
            $validator = Validator::make($request->all(), [
                'name' => 'required|min:3|max:50',
                'price' => 'required|numeric|min:0', // 'numeric' ve 'min:0' ekledim
                'description' => 'required',
            ]);

            if ($validator->fails()) {
                // Hataları işleyin, örneğin, geri dönün ve hataları gösterin
                return redirect()->back()->withErrors($validator)->withInput();
            }

            // Ürün oluşturulmadan önce tüm alanların sağlandığından emin olun
            $product = Product::create([
                'name' => $request->input('name'),
                'price' => $request->input('price'),
                'description' => $request->input('description'),
            ]);

            // Başarı mesajı ile yönlendirme
            return redirect()->route('products.index')->with('success', 'Ürün başarıyla oluşturuldu!');
        }
    }


    public function ProductEdit(Request $request, $id)
    {
        if ($request->isMethod('GET')) {

            $product = Product::findOrFail($id);

            return view('backend.page.product.products_edit', compact('product'));
        } else {

            // Doğrulama kurallarını tanımlayın
            $validator = Validator::make($request->all(), [
                'name' => 'required|min:3|max:50',
                'price' => 'required|min:3|max:50',
                'description' => [
                    'required',

                    Rule::unique('product')->ignore($id),
                ],
            ]);

            // Doğrulamanın başarısız olup olmadığını kontrol edin
            if ($validator->fails()) {
                // Hataları alın
                $errors = $validator->errors();

                // Hataları işleyin, örneğin, JSON olarak dönebilir veya bir hata sayfasına yönlendirme yapabilirsiniz
                return back()->withErrors($errors)->withInput();
            }


            $product = Product::findOrFail($id);

            $data = $request->only('name', 'price', 'description');


            $product->update($data);

            return redirect()->route('product.edit', ['id' => $id])
                ->with('success', 'Ürün başarıyla güncellendi!');
        }
    }


    public function destroy($id, Request $request)
    {

//        return $id;
//        return response()->json($request->all());
        $product = Product::findOrFail($id);
        $product->delete();
        return response()->json([
            'status' => true,
            'success' => true,
            'title' => 'Ürün silindi',
            'icon' => 'success',
            'text' => 'Ürün başarıyla silindi.',
            'confirmButtonText' => 'Anlaşıldı, Tamam!'

        ]);


        return redirect()->route('products.index')->with('success', 'Ürün başarıyla silindi.');
    }


}
