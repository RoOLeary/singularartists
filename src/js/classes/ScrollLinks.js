export default class ScrollLinks
{
    constructor($el, options={}) {
        this.DOM = {$el}
        this.options = {...ScrollLinks.prototype.defaults, ...options}
    }

    init(){
        let scrollTrigger = document.querySelectorAll('a.scroll');
        let scrollLinks = Array.from(scrollTrigger);
        scrollLinks.forEach((scrolllink) => {
            scrolllink.addEventListener('click', (e) => {
                e.preventDefault(); 
                let link = scrolllink.getAttribute('data-target');
                console.log(document.querySelector(link));
                document.querySelector(link).scrollIntoView({
                    behaviour: 'smooth'
                });
            });
        });
    }
}

ScrollLinks.prototype.defaults = {}