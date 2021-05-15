@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.ingredient.actions.edit', ['name' => $ingredient->id]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <ingredient-form
                :action="'{{ $ingredient->resource_url }}'"
                :data="{{ $ingredient->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.ingredient.actions.edit', ['name' => $ingredient->id]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.ingredient.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </ingredient-form>

        </div>
    
</div>

@endsection