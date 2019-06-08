class Pidgeon {


    constructor ({
        selector = '.pidgeon'
    }) {
        this.selector = selector;
        this.jsonPath = document.querySelector(this.selector).dataset['struct'];
        
        this.init = this.init();
    }


    init () {
        this.structure = this.fetchData(this.jsonPath);
    }


    fetchData (path) {
        fetch(path)
            .then(data => data.json())
            .then(data => this.buildForm(data))
            .catch(err => console.error('Error: ', err));
    }


    buildForm (dataObject) {
        console.log('Data object:', dataObject);
        let formDOM = '<div class="row">';
        
        dataObject.fields.map((item, i) => {
            const placeholder = (item.placeholder || item.placeholder !== false) ? item.placeholder : '';
            const label = (item.label || item.label !== false) ? item.label : '';

            formDOM += `<div class="col-${ item.size }">`;
            formDOM += item.type !== 'submit' ? `<label for="${ item.name }">${ label }</label>` : ''; // put label before element when field is not a submit button
            switch (item.type) {
                case 'text': case 'email': case 'phone': formDOM += `<input placeholder="${ placeholder }" name="${ item.name }" id="${ item.name }" type="${ item.type }" required="${ item.required }">`; break;
                case 'textarea': formDOM += `<textarea placeholder="${ placeholder }" name="${ item.name }" id="${ item.name }" required="${ item.required }"></textarea>`; break;
                case 'submit': formDOM += `<button name="${ item.name }" id="${ item.name }" type="${ item.type }">${ label }</button>`; break;
            }
            formDOM += `</div>`;
        });
        formDOM += `</div>`;

        document.querySelector(this.selector).innerHTML = formDOM;
    }


}

export default Pidgeon;
