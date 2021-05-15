<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Ingredient\BulkDestroyIngredient;
use App\Http\Requests\Admin\Ingredient\DestroyIngredient;
use App\Http\Requests\Admin\Ingredient\IndexIngredient;
use App\Http\Requests\Admin\Ingredient\StoreIngredient;
use App\Http\Requests\Admin\Ingredient\UpdateIngredient;
use App\Models\Ingredient;
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

class IngredientsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexIngredient $request
     * @return array|Factory|View
     */
    public function index(IndexIngredient $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Ingredient::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'id_meal', 'ing1', 'ing2', 'ing3', 'ing4', 'ing5', 'ing6', 'ing7', 'ing8'],

            // set columns to searchIn
            ['id', 'ing1', 'ing2', 'ing3', 'ing4', 'ing5', 'ing6', 'ing7', 'ing8']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.ingredient.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.ingredient.create');

        return view('admin.ingredient.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreIngredient $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreIngredient $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Ingredient
        $ingredient = Ingredient::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/ingredients'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/ingredients');
    }

    /**
     * Display the specified resource.
     *
     * @param Ingredient $ingredient
     * @throws AuthorizationException
     * @return void
     */
    public function show(Ingredient $ingredient)
    {
        $this->authorize('admin.ingredient.show', $ingredient);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Ingredient $ingredient
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Ingredient $ingredient)
    {
        $this->authorize('admin.ingredient.edit', $ingredient);


        return view('admin.ingredient.edit', [
            'ingredient' => $ingredient,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateIngredient $request
     * @param Ingredient $ingredient
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateIngredient $request, Ingredient $ingredient)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Ingredient
        $ingredient->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/ingredients'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/ingredients');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyIngredient $request
     * @param Ingredient $ingredient
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyIngredient $request, Ingredient $ingredient)
    {
        $ingredient->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyIngredient $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyIngredient $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Ingredient::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
