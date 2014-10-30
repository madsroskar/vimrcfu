<?php

class DotfilesController extends \BaseController
{

    function __construct()
    {
        // TODO: Add filter
    }

    /**
     * @return mixed
     */
    public function index()
    {
        $dotfiles = Dotfile::orderBy('id', 'DESC')->paginate(10);

        return View::make('dotfiles.index', compact('dotfiles'));
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return View::make('dotfiles.create')->with('dotfile', new Dotfile());
    }

    /**
     * @return mixed
     */
    public function store()
    {
        $validation = Validator::make(Input::all(), Dotfile::$rules);

        if($validation->fails())
        {
            return Redirect::route('dotfile.create')
                    ->withErrors($validation)
                    ->withInput();
        }

        $dotfile = new Dotfile();
        $dotfile->name = Input::get('name');
        $dotfile->save();

        return Redirect::route('dotfile.show', $dotfile->id);
    }

    /**
     * @param Dotfile $dotfile
     * @return mixed
     */
    public function show($id)
    {
        $dotfile = Dotfile::find($id);
        return View::make('dotfiles.show', ['dotfile' => $dotfile]);
    }

    /**
     * @param Dotfile $dotfile
     * @return mixed
     */
    public function edit($id)
    {
        $dotfile = Dotfile::find($id);

        return View::make('dotfiles.edit')
                ->withSnippet($dotfile);
    }

    /**
     * @param Dotfile $dotfile
     * @return mixed
     */
    public function update($id)
    {
        $dotfile = Dotfile::find($id);
        $validation = Validator::make(Input::all(), Dotfile::$rules);

        if($validation->fails())
        {
            return Redirect::route('dotfile.create')
                    ->withErrors($validation)
                    ->withInput();
        }

        $dotfile->name = Input::get('name');
        $dotfile->save();

        return Redirect::route('dotfile.show', $dotfile->id);
    }

    /**
     * @param Dotfile $dotfile
     * @return mixed
     */
    public function delete($id)
    {
        $dotfile = Dotfile::find($id);
        $dotfile->delete();
        return Redirect::route('dotfile.index');
    }
}
