// import something

class Main {

    constructor () {
        this.version = 'v0.8beta2';
    }

    init () {
        console.log(`Welcome to WP Starter Theme ${this.version}!`);
        console.log('Everything looks good, feel free to edit this theme!');
    }

}

const main = new Main;
main.init();
