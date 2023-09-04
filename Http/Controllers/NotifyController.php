<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> 42aa20e (.)
namespace Modules\Notify\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

<<<<<<< HEAD
class NotifyController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return Renderable
     */
    public function index() {
=======
class NotifyController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
>>>>>>> 42aa20e (.)
        return view('notify::index');
    }

    /**
     * Show the form for creating a new resource.
<<<<<<< HEAD
     *
     * @return Renderable
     */
    public function create() {
=======
     * @return Renderable
     */
    public function create()
    {
>>>>>>> 42aa20e (.)
        return view('notify::create');
    }

    /**
     * Store a newly created resource in storage.
<<<<<<< HEAD
     *
     * @return Renderable
     */
    public function store(Request $request) {
=======
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
>>>>>>> 42aa20e (.)
    }

    /**
     * Show the specified resource.
<<<<<<< HEAD
     *
     * @param int $id
     *
     * @return Renderable
     */
    public function show($id) {
=======
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
>>>>>>> 42aa20e (.)
        return view('notify::show');
    }

    /**
     * Show the form for editing the specified resource.
<<<<<<< HEAD
     *
     * @param int $id
     *
     * @return Renderable
     */
    public function edit($id) {
=======
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
>>>>>>> 42aa20e (.)
        return view('notify::edit');
    }

    /**
     * Update the specified resource in storage.
<<<<<<< HEAD
     *
     * @param int $id
     *
     * @return Renderable
     */
    public function update(Request $request, $id) {
=======
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
>>>>>>> 42aa20e (.)
    }

    /**
     * Remove the specified resource from storage.
<<<<<<< HEAD
     *
     * @param int $id
     *
     * @return Renderable
     */
    public function destroy($id) {
=======
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
>>>>>>> 42aa20e (.)
    }
}
