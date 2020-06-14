export default class Nav
{
    constructor($el, options ={}){
       this.container = document.getElementById('myNav');
       this.menuTrigger = document.getElementById('navTrigger');
       this.menuClose = document.getElementById('closeNav');
    }

    init(){
        this.menuTrigger.addEventListener('click', this.openNav.bind(this));
        this.menuClose.addEventListener('click', this.closeNav.bind(this));
    }


    openNav() {
        this.container.style.width = "100%";
       
    }

    closeNav() {
        console.log(this.menuClose);
        this.container.style.width = "0%";
    }
}


Nav.prototype.defaults = {}