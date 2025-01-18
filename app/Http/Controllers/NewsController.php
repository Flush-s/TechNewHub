<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News; // Убедитесь, что у вас есть модель News

class NewsController extends Controller
{

    public function dashboard()
    {
        $news = News::latest()->take(3)->get(); // Get the 3 latest news items
        return view('dashboard', compact('news'));
    }
    public function index()
    {
        $news = News::latest()->paginate(6); // Получаем все новости
        return view('news.index', compact('news')); // Убедитесь, что путь к вашему шаблону правильный
    }
    public function create()
    {
        return view('news.create'); // Убедитесь, что путь к вашему шаблону правильный
    }

    public function store(Request $request)
    {

        // Валидация входящих данных
        $request->validate([
            'name' => 'required|string|max:255',
            'text' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Создание новой записи новости
        $news = new News();
        $news->name = $request->name;
        $news->text = $request->text;

        // Обработка загрузки изображения
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $news->image = $imagePath;
        }

        // Сохранение новости в базе данных
        $news->save();

        // Перенаправление с сообщением об успехе
        return redirect()->route('news')->with('success', 'Новость успешно создана!');
    }

}