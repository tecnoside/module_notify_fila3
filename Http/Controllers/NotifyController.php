<?php

declare(strict_types=1);

<<<<<<< HEAD
=======
>>>>>>> 42aa20e (.)
=======
>>>>>>> 3a62aee (up)
namespace Modules\Notify\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class NotifyController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return Renderable
     */
    public function index() {
<<<<<<< HEAD
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
=======
>>>>>>> 3a62aee (up)
        return view('notify::index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Renderable
     */
    public function create() {
<<<<<<< HEAD
=======
     * @return Renderable
     */
    public function create()
    {
>>>>>>> 42aa20e (.)
=======
>>>>>>> 3a62aee (up)
        return view('notify::create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Renderable
     */
    public function store(Request $request) {
<<<<<<< HEAD
=======
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
>>>>>>> 42aa20e (.)
=======
>>>>>>> 3a62aee (up)
    }

    /**
     * Show the specified resource.
     *
     * @param int $id
     *
     * @return Renderable
     */
    public function show($id) {
<<<<<<< HEAD
=======
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
>>>>>>> 42aa20e (.)
=======
>>>>>>> 3a62aee (up)
        return view('notify::show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return Renderable
     */
    public function edit($id) {
<<<<<<< HEAD
=======
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
>>>>>>> 42aa20e (.)
=======
>>>>>>> 3a62aee (up)
        return view('notify::edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     *
     * @return Renderable
     */
    public function update(Request $request, $id) {
<<<<<<< HEAD
=======
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
>>>>>>> 42aa20e (.)
=======
>>>>>>> 3a62aee (up)
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return Renderable
     */
    public function destroy($id) {
<<<<<<< HEAD
=======
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
>>>>>>> 42aa20e (.)
=======
>>>>>>> 3a62aee (up)
    }
}
