<template>

    <div :class="'alert alert-flash alert-' + cls" v-show="show">

        <span>{{body}}</span>

    </div>

</template>

<script>
    export default {
        props : ['className','message'],
        data(){
            return{
                body : '',
                cls : "",
                show : false,
            }
        },
        mounted(){

            if(this.message){

                this.flash(this.message,this.className);
            }

          window.Events.listen('flash', data => {
             this.flash(data.message,data.className);
          });
        },
        methods :{

            flash(message,className){
                this.body = message;
                this.cls = className;
                this.show = true;

                this.hide();
            },

            hide(){
                setTimeout(() => {
                    this.show = false;
                },5000);
            }
        }
    }
</script>