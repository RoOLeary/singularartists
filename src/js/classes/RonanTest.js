export default class Ronantest
{
    constructor($el, $options = {}){
        // this.$el = { $el }; 
        // console.log($el);
        this.introString = 'Just checking'; 
        this.devName = 'Ro';
    }

    init(){
        // console.log(this.introString);
        // console.log(this.devName);
        if(this.devName == 'Ro'){
            this.nextMethod(this.devName); 
        } else {
            this.getTheFuckOutofhere(); 
        }
    }

    nextMethod(e){
        console.log('Hey ' + e  + ', this is coming from next Method');
    }

    getTheFuckOutofhere(){
        alert('IMPOSTER');
    }
}

Ronantest.prototype.default = {}