<?php

namespace App\Controllers;

// Import the Models we need
use App\Models\ContentModel;
use App\Models\CategoryModel;
use App\Models\EpisodeModel;

class Lunera extends BaseController
{
    protected $contentModel;
    protected $categoryModel;
    protected $episodeModel;

    public function __construct()
    {
        // Initialize models so they are ready to use in any method
        $this->contentModel = new ContentModel();
        $this->categoryModel = new CategoryModel();
        $this->episodeModel = new EpisodeModel();
    }

    public function index()
    {
        $data = [
            // Fetch top 5 high-rated series for the slider/trending
            'trending' => $this->contentModel->where('type', 'series')->orderBy('rating', 'DESC')->findAll(5),
            // Fetch high-rated movies
            'movies'   => $this->contentModel->where('type', 'movie')->orderBy('rating', 'DESC')->findAll(6),
            // Fetch everything for the "Seasonal Hits" section
            'seasonal' => $this->contentModel->orderBy('created_at', 'DESC')->findAll(10)
        ];

        return view('home', $data);
    }

    public function explore()
    {
        $data = [
            'categories' => $this->categoryModel->findAll(),
            'all_content' => $this->contentModel->findAll()
        ];

        return view('explore', $data);
    }

    public function detail($slug = null)
    {
        // Find the specific anime based on the slug from the URL
        $anime = $this->contentModel->where('slug', $slug)->first();

        if (!$anime) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Anime not found.");
        }

        $data = [
            'anime'    => $anime,
            'episodes' => $this->episodeModel->where('id_content', $anime['id_content'])->orderBy('episode_no', 'ASC')->findAll(),
            // Suggest other anime from the same category
            'related'  => $this->contentModel->where('id_category', $anime['id_category'])
                                            ->where('id_content !=', $anime['id_content'])
                                            ->findAll(5)
        ];

        return view('detail', $data);
    }

    public function watch($episode_id = null)
    {
        $data = [
            'episode' => $this->episodeModel->find($episode_id)
        ];

        return view('watch', $data);
    }

    public function profile()
    {
        // For now, this is still static until we set up the Session/Auth
        return view('profile');
    }
}