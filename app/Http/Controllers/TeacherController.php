<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Teacher;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $teachers = Teacher::all();
        //return  $teachers;
      
           for ($i=0;$i<count($teachers);$i++) {
           $arr = array ($teachers);
     }
        return $arr  ; 
    //    return $memu['name'];
       
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $addteacher = Teacher::create($request->all());
        return $addteacher;
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Teacher::find($id);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $teacher = Teacher::find($id);
        $teacher->update($request->all());
        return $teacher;
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Teacher::destroy($id);
        //
    }
}
