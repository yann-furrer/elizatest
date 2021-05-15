<div class="form-group row align-items-center" :class="{'has-danger': errors.has('id_meal'), 'has-success': fields.id_meal && fields.id_meal.valid }">
    <label for="id_meal" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.ingredient.columns.id_meal') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.id_meal" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('id_meal'), 'form-control-success': fields.id_meal && fields.id_meal.valid}" id="id_meal" name="id_meal" placeholder="{{ trans('admin.ingredient.columns.id_meal') }}">
        <div v-if="errors.has('id_meal')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('id_meal') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('ing1'), 'has-success': fields.ing1 && fields.ing1.valid }">
    <label for="ing1" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.ingredient.columns.ing1') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.ing1" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('ing1'), 'form-control-success': fields.ing1 && fields.ing1.valid}" id="ing1" name="ing1" placeholder="{{ trans('admin.ingredient.columns.ing1') }}">
        <div v-if="errors.has('ing1')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('ing1') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('ing2'), 'has-success': fields.ing2 && fields.ing2.valid }">
    <label for="ing2" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.ingredient.columns.ing2') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.ing2" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('ing2'), 'form-control-success': fields.ing2 && fields.ing2.valid}" id="ing2" name="ing2" placeholder="{{ trans('admin.ingredient.columns.ing2') }}">
        <div v-if="errors.has('ing2')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('ing2') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('ing3'), 'has-success': fields.ing3 && fields.ing3.valid }">
    <label for="ing3" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.ingredient.columns.ing3') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.ing3" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('ing3'), 'form-control-success': fields.ing3 && fields.ing3.valid}" id="ing3" name="ing3" placeholder="{{ trans('admin.ingredient.columns.ing3') }}">
        <div v-if="errors.has('ing3')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('ing3') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('ing4'), 'has-success': fields.ing4 && fields.ing4.valid }">
    <label for="ing4" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.ingredient.columns.ing4') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.ing4" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('ing4'), 'form-control-success': fields.ing4 && fields.ing4.valid}" id="ing4" name="ing4" placeholder="{{ trans('admin.ingredient.columns.ing4') }}">
        <div v-if="errors.has('ing4')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('ing4') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('ing5'), 'has-success': fields.ing5 && fields.ing5.valid }">
    <label for="ing5" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.ingredient.columns.ing5') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.ing5" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('ing5'), 'form-control-success': fields.ing5 && fields.ing5.valid}" id="ing5" name="ing5" placeholder="{{ trans('admin.ingredient.columns.ing5') }}">
        <div v-if="errors.has('ing5')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('ing5') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('ing6'), 'has-success': fields.ing6 && fields.ing6.valid }">
    <label for="ing6" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.ingredient.columns.ing6') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.ing6" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('ing6'), 'form-control-success': fields.ing6 && fields.ing6.valid}" id="ing6" name="ing6" placeholder="{{ trans('admin.ingredient.columns.ing6') }}">
        <div v-if="errors.has('ing6')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('ing6') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('ing7'), 'has-success': fields.ing7 && fields.ing7.valid }">
    <label for="ing7" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.ingredient.columns.ing7') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.ing7" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('ing7'), 'form-control-success': fields.ing7 && fields.ing7.valid}" id="ing7" name="ing7" placeholder="{{ trans('admin.ingredient.columns.ing7') }}">
        <div v-if="errors.has('ing7')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('ing7') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('ing8'), 'has-success': fields.ing8 && fields.ing8.valid }">
    <label for="ing8" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.ingredient.columns.ing8') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.ing8" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('ing8'), 'form-control-success': fields.ing8 && fields.ing8.valid}" id="ing8" name="ing8" placeholder="{{ trans('admin.ingredient.columns.ing8') }}">
        <div v-if="errors.has('ing8')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('ing8') }}</div>
    </div>
</div>


