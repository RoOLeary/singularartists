export default class ScrollLinks
{
    constructor($el, options={}) {
        this.DOM = {$el}
        this.options = {...ScrollLinks.prototype.defaults, ...options}
        this.scrollTrigger = document.querySelectorAll('a.scroll');
    }

    init(){
        let scrollLinks = Array.from(this.scrollTrigger);
        scrollLinks.forEach((scrolllink) => {
            scrolllink.addEventListener('click', (e) => {
                //e.preventDefault(); 
                let link = scrolllink.getAttribute('data-target');
                document.querySelector(link).scrollIntoView({
                    behaviour: 'smooth'
                });
            });
        });
    }
}

ScrollLinks.prototype.defaults = {}