<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Meal\BulkDestroyMeal;
use App\Http\Requests\Admin\Meal\DestroyMeal;
use App\Http\Requests\Admin\Meal\IndexMeal;
use App\Http\Requests\Admin\Meal\StoreMeal;
use App\Http\Requests\Admin\Meal\UpdateMeal;
use App\Models\Ingredient;
use App\Models\Meal;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class MealsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexMeal $request
     * @return array|Factory|View
     */
    public function index(IndexMeal $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Meal::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'meal_name', 'vegan', 'time', 'url', 'img'],

            // set columns to searchIn
            ['id', 'meal_name', 'time', 'url', 'img']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.meal.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.meal.create');

        return view('admin.meal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreMeal $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreMeal $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();
        
        $meal1 = Meal::latest()->first();
        $test = (array)$meal1;
        $meal = Meal::create($sanitized);
        // $ing = Ingredient::create(['id_meal', $ok['id']]);
        
        if ($request->ajax()) {
            return ['redirect' => url('admin/meals'), 'message' => trans(print_r($test).'brackets/admin-ui::admin.operation.succeeded'.print_r($test).'ok')];
        }

        return redirect('admin/meals');
    }

    /**
     * Display the specified resource.
     *
     * @param Meal $meal
     * @throws AuthorizationException
     * @return void
     */
    public function show(Meal $meal)
    {
        $this->authorize('admin.meal.show', $meal);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Meal $meal
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Meal $meal)
    {
        $this->authorize('admin.meal.edit', $meal);


        return view('admin.meal.edit', [
            'meal' => $meal,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateMeal $request
     * @param Meal $meal
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateMeal $request, Meal $meal)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Meal
        $meal->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/meals'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/meals');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyMeal $request
     * @param Meal $meal
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyMeal $request, Meal $meal)
    {
        $meal->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyMeal $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyMeal $request): Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Meal::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
