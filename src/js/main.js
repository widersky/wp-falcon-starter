import Siema from 'siema';
import Pidgeon from './pidgeon/Pidgeon';

class Main {

    constructor () {
        this.version = 'v0.8beta2';
    }

    init () {
        console.log(`Welcome to WP Starter Theme ${this.version}!`);
        console.log('Everything looks good, feel free to edit this theme!');

        new Siema({
            selector: '.siema',
            duration: 200,
            easing: 'ease-out',
            threshold: 30 
        });

        new Pidgeon({
            selector: '.pidgeon'
        });
    }

}

document.addEventListener('DOMContentLoaded', () => {
    const main = new Main;
    main.init();
});
