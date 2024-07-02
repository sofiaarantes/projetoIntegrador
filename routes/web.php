<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/metodos-barreira', function () {
    return view('barreira');
});

Route::get('/metodos-hormonais', function () {
    return view('hormonais');
});

Route::get('/metodos-intrauterinos', function () {
    return view('intrauterino');
});

Route::get('/metodos-definitivos', function () {
    return view('definitivos');
});

Route::get('/artigo-1', function () {
    return view('artigos/artigo1-detalhes');
});

Route::get('/artigo-2', function () {
    return view('artigos/artigo2-detalhes');
});

Route::get('/artigo-3', function () {
    return view('artigos/artigo3-detalhes');
});

Route::get('/artigo-4', function () {
    return view('artigos/artigo4-detalhes');
});

Route::get('/artigo-5', function () {
    return view('artigos/artigo5-detalhes');
});

Route::get('/artigo-6', function () {
    return view('artigos/artigo6-detalhes');
});

Route::get('/artigo-7', function () {
    return view('artigos/artigo7-detalhes');
});

Route::get('/artigo-8', function () {
    return view('artigos/artigo8-detalhes');
});

Route::get('/artigo-9', function () {
    return view('artigos/artigo9-detalhes');
});

Route::get('/artigo-10', function () {
    return view('artigos/artigo10-detalhes');
});

Route::get('/artigo-11', function () {
    return view('artigos/artigo11-detalhes');
});

Route::get('/artigo-12', function () {
    return view('artigos/artigo12-detalhes');
});

Route::get('/artigo-13', function () {
    return view('artigos/artigo13-detalhes');
});

Route::get('/artigo-14', function () {
    return view('artigos/artigo14-detalhes');
});

Route::get('/artigo-15', function () {
    return view('artigos/artigo15-detalhes');
});

Route::get('/artigo-16', function () {
    return view('artigos/artigo16-detalhes');
});

Route::get('/artigo-17', function () {
    return view('artigos/artigo17-detalhes');
});

Route::get('/artigo-18', function () {
    return view('artigos/artigo18-detalhes');
});

Route::get('/artigo-19', function () {
    return view('artigos/artigo19-detalhes');
});

Route::get('/artigo-20', function () {
    return view('artigos/artigo20-detalhes');
});

Route::get('/artigo-21', function () {
    return view('artigos/artigo21-detalhes');
});

Route::get('/artigo-22', function () {
    return view('artigos/artigo22-detalhes');
});

Route::get('/artigo-23', function () {
    return view('artigos/artigo23-detalhes');
});

Route::get('/artigo-24', function () {
    return view('artigos/artigo24-detalhes');
});

Route::get('/artigo-25', function () {
    return view('artigos/artigo25-detalhes');
});

Route::get('/artigo-26', function () {
    return view('artigos/artigo26-detalhes');
});

Route::get('/artigo-27', function () {
    return view('artigos/artigo27-detalhes');
});

Route::get('/quiz', function () {
    return view('quiz/quiz');
});

Route::get('/pergunta2', function () {
    return view('quiz/pgt2');
});

Route::get('/pergunta3', function () {
    return view('quiz/pgt3');
});

Route::get('/pergunta4', function () {
    return view('quiz/pgt4');
});

Route::get('/pergunta5', function () {
    return view('quiz/pgt5');
});

Route::get('/resultado', function () {
    return view('quiz/ranking');
});
