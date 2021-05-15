import AppForm from '../app-components/Form/AppForm';

Vue.component('ingredient-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                id_meal:  '' ,
                ing1:  '' ,
                ing2:  '' ,
                ing3:  '' ,
                ing4:  '' ,
                ing5:  '' ,
                ing6:  '' ,
                ing7:  '' ,
                ing8:  '' ,
                
            }
        }
    }

});