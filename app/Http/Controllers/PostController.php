<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index()
    {
        $Postt =  Post::all();
        return response(['data' => $Postt]);
    }
    public function getone($id)
    {
        $data = Post::find($id);
        return response($data);
    }
    public function Make(Request $req)
    {
        $data = Post::create($req->all());
        return response($data);
    }
    public function delete($id)
    {
        $data = Post::find($id);
        if ($data) {
            $data->delete();
            return response(["message" => "Complete"]);
        } else if (!$data) {
            return response(["message" => "invalid data"]);
        };
    }
    public function update(Request $request, $id)
    {
        $data = Post::find($id);
        if ($data) {
            $data->update($request->all());
            $datanew = Post::find($id);
            return response(["message" => $datanew]);
        }
        return response(['message' => "dont have"]);
    }
}
