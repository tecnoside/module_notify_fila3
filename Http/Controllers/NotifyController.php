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
<<<<<<< HEAD
>>>>>>> b1dceab (up)
        return view('notify::index');
=======
        /**
         * @phpstan-var view-string
         */
        $view = 'notify::index';
        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
>>>>>>> 7e94996 (up)
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
<<<<<<< HEAD
>>>>>>> b1dceab (up)
        return view('notify::create');
=======
        /**
         * @phpstan-var view-string
         */
        $view = 'notify::create';
        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
>>>>>>> 7e94996 (up)
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
<<<<<<< HEAD
>>>>>>> b1dceab (up)
        return view('notify::show');
=======
        /**
         * @phpstan-var view-string
         */
        $view = 'notify::show';
        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
>>>>>>> 7e94996 (up)
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
<<<<<<< HEAD
>>>>>>> b1dceab (up)
        return view('notify::edit');
=======
        /**
         * @phpstan-var view-string
         */
        $view = 'notify::edit';
        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
>>>>>>> 7e94996 (up)
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
