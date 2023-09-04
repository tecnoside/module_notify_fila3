<?php

<<<<<<< HEAD
=======
declare(strict_types=1);

>>>>>>> b1dceab (up)
namespace Modules\Notify\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

<<<<<<< HEAD
class NotifyController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
=======
class NotifyController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return Renderable
     */
    public function index() {
>>>>>>> b1dceab (up)
        return view('notify::index');
    }

    /**
     * Show the form for creating a new resource.
<<<<<<< HEAD
     * @return Renderable
     */
    public function create()
    {
=======
     *
     * @return Renderable
     */
    public function create() {
>>>>>>> b1dceab (up)
        return view('notify::create');
    }

    /**
     * Store a newly created resource in storage.
<<<<<<< HEAD
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
=======
     *
     * @return Renderable
     */
    public function store(Request $request) {
>>>>>>> b1dceab (up)
    }

    /**
     * Show the specified resource.
<<<<<<< HEAD
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
=======
     *
     * @param int $id
     *
     * @return Renderable
     */
    public function show($id) {
>>>>>>> b1dceab (up)
        return view('notify::show');
    }

    /**
     * Show the form for editing the specified resource.
<<<<<<< HEAD
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
=======
     *
     * @param int $id
     *
     * @return Renderable
     */
    public function edit($id) {
>>>>>>> b1dceab (up)
        return view('notify::edit');
    }

    /**
     * Update the specified resource in storage.
<<<<<<< HEAD
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
=======
     *
     * @param int $id
     *
     * @return Renderable
     */
    public function update(Request $request, $id) {
>>>>>>> b1dceab (up)
    }

    /**
     * Remove the specified resource from storage.
<<<<<<< HEAD
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
=======
     *
     * @param int $id
     *
     * @return Renderable
     */
    public function destroy($id) {
>>>>>>> b1dceab (up)
    }
}
