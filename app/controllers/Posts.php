<?php
// Post Controller 
// RESTful routes: index, new, create, show, edit, update, destroy

class Posts extends Controller 
{
    function index($param = []) 
    {
        $post = new Post;
        $data = $post->getResults();
        $this->view('index', $param, $data);
    }

    function new($param = []) 
    {
        $this->view('new', $param);
    }

    function create($param = []) 
    {
        $this->view('create', $param);
    }

    function show($param = []) 
    {
        $this->view('show', $param);
    }

    function edit($param = []) 
    {
        $this->view('edit', $param);
    }

    function update($param = [])
    {
        $this->view('update', $param);
    }

    function destroy($param = []) 
    {
        $this->view('destroy', $param);
    }

}