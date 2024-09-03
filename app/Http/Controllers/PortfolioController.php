<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class PortfolioController extends Controller {
    public function home() {
        $data = $this->getData('home.json');
        // dd($data);
        return view('home', [
            'data' => $data
        ]);
    }

    public function workExperiences() {
        $data = $this->getData('work-experiences.json');
        return view('work-experiences', ['data' => $data]);
    }

    public function projects() {
        $data = $this->getData('projects.json');
        return view('projects', ['data' => $data]);
    }

    public function projectDetails($id) {
        $projects = $this->getData('projects.json');
        $project = collect($projects['Projects'])->firstWhere('id', $id);

        if (!$project) {
            abort(404);
        }

        return view('project-details', ['data' => $project]);
    }

    private function getData($filename) {
        $path = storage_path('data/' . $filename);
        if (File::exists($path)) {
            return json_decode(File::get($path), true);
        }
        return [];
    }
}
