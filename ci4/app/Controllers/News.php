<?php

namespace App\Controllers;

use App\Models\NewsModel;

use CodeIgniter\Exceptions\PageNotFoundException;

class News extends BaseController
{
    public function index()
    {
        $model = model(NewsModel::class);

        $data = [
            'news'  => $model->getNews(),
            'title' => 'News archive',
        ];

        return view('templates/Header', $data)
            . view('news/index')
            . view('templates/Footer');
    }

    public function view($slug = null)
    {
        $model = model(NewsModel::class);

        $data['alcabildo_news'] = $model->getNews($slug);

        if (empty($data['alcabildo_news'])) {
            throw new PageNotFoundException('Cannot find the news item: ' . $slug);
        }

        $data['title'] = $data['alcabildo_news']['title'];

        return view('templates/header', $data)
            . view('news/view')
            . view('templates/footer');
    }
}