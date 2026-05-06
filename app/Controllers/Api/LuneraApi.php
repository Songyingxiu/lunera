<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\ContentModel;

class LuneraApi extends ResourceController
{
    use ResponseTrait;

    // Mendefinisikan model utama (untuk resource 'contents')
    protected $modelName = 'App\Models\ContentModel';
    protected $format    = 'json';

    // ---------------------------------------------------------
    // 1. GET ALL (Mengambil semua data contents)
    // ---------------------------------------------------------
    public function index()
    {
        $data = $this->model->orderBy('created_at', 'DESC')->findAll();
        
        return $this->respond([
            'status'  => 200,
            'message' => 'Success retrieve all contents',
            'data'    => $data
        ], 200);
    }

    // ---------------------------------------------------------
    // 2. GET SINGLE (Mengambil 1 data content)
    // ---------------------------------------------------------
    public function show($id = null)
    {
        $data = $this->model->find($id);

        if ($data) {
            return $this->respond([
                'status'  => 200,
                'message' => 'Data found',
                'data'    => $data
            ], 200);
        } else {
            return $this->failNotFound('Data with ID ' . $id . ' not found');
        }
    }

    // ---------------------------------------------------------
    // 3. POST not allowed
    // ---------------------------------------------------------
    public function create()
    {
        $data = $this->request->getJSON(true) ?? $this->request->getPost();

        if (empty($data)) {
            return $this->failValidationError('No data provided');
        }

        if ($this->model->insert($data)) {
            return $this->respondCreated([
                'status'  => 201,
                'message' => 'Content successfully created',
                'data'    => $data
            ]);
        } else {
            return $this->failServerError('Failed to create content');
        }
    }

    // ---------------------------------------------------------
    // 4. PUT/PATCH not allowed
    // ---------------------------------------------------------
    public function update($id = null)
    {
        $data = $this->request->getJSON(true) ?? $this->request->getRawInput();
        $find = $this->model->find($id);
        
        if (!$find) {
            return $this->failNotFound('Data with ID ' . $id . ' not found');
        }

        if ($this->model->update($id, $data)) {
            return $this->respond([
                'status'  => 200,
                'message' => 'Content successfully updated'
            ], 200);
        } else {
            return $this->failServerError('Failed to update content');
        }
    }

    // ---------------------------------------------------------
    // 5. DELETE not allowed
    // ---------------------------------------------------------
    public function delete($id = null)
    {
        $find = $this->model->find($id);
        
        if ($find) {
            $this->model->delete($id);
            return $this->respondDeleted([
                'status'  => 200,
                'message' => 'Content with ID ' . $id . ' successfully deleted'
            ]);
        } else {
            return $this->failNotFound('Data with ID ' . $id . ' not found');
        }
    }

    // ---------------------------------------------------------
    // 6. GET CATEGORIES / GENRES
    // ---------------------------------------------------------
    public function categories()
    {
        $categoryModel = new \App\Models\CategoryModel();
        return $this->respond([
            'status'  => 200,
            'message' => 'Success retrieve categories',
            'data'    => $categoryModel->findAll()
        ], 200);
    }

    // ---------------------------------------------------------
    // 7. GET EPISODES
    // ---------------------------------------------------------
    public function episodes()
    {
        $episodeModel = new \App\Models\EpisodeModel();
        return $this->respond([
            'status'  => 200,
            'message' => 'Success retrieve episodes',
            'data'    => $episodeModel->findAll()
        ], 200);
    }
}