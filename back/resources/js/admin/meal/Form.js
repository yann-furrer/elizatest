import AppForm from '../app-components/Form/AppForm';

Vue.component('meal-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                meal_name:  '' ,
                vegan:  '' ,
                time:  '' ,
                url:  '' ,
                img:  '' ,
                
            }
        }
    }

});