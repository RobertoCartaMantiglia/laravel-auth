<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;


class ProjectController extends Controller
{
    protected $validationCondition = [
        'title' => 'required|min:2|max:100|unique:projects,title',
        'description' => 'required|string|min:6',
        'thumb' => 'required|url',
        'author' => 'required|string',
        'used_technology' => 'required|string|min:2|max:200',
    ];

    protected $messagesOfErrors = [
        'title.required' => 'Il titolo è obblogatorio',
        'title.min' => 'Il titolo deve contere almeno 2 caratteri',
        'description.required' => 'La descrizione è necessaria',
        'description.min' => 'La descrizione deve contenere minimo 6 caratteri',
        'thumb.required' => 'L\'url della immagine è fondamentale',
        'author.required' => 'l\'autore è necessario',
        'used_technology.required' => 'la tecnologia utilizzata nel progetto è necessaria',
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate($this->validationCondition, $this->messagesOfErrors);
        $data['slug'] = Str::slug($data['title']);
        $newProject = new Project();
        $newProject->fill($data);
        $newProject->save();
        return redirect()->route('admin.projects.show', $newProject->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $data = $request->validate(
            $this->validationCondition,
            $this->messagesOfErrors,
            // ['title' => ['required', Rule::unique('projects')->ignore($project->id)]]
        );
        $project->update($data);
        return redirect()->route('admin.projects.show', $project->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('admin.projects.index');
    }
}
