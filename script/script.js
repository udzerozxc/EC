new Vue({
    el:'#app',
    data(){
        return{
            isActive: false
        };
    },
    methods:{
        ChangeTure(){
            this.isActive = !this.isActive;
        },
        ChangeFalse(){
            setTimeout(() => {
            this.isActive = false;},2000);
        }
    }
})
