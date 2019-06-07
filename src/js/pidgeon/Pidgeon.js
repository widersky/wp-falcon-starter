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
        const fieldsCount = dataObject.fields.length;
        const maxSize = 99; // 99 is the minimum max size to achieve needed effect (3 x col-33)
        let formDOM = '';
        let col = 0;
        
        dataObject.fields.map((item, i) => {
            formDOM += col === 0 ? '<div class="row">' : '';
            col += item.size;

            // TODO: Placeholder / label true/false
            formDOM += `<div class="col-${ item.size }">`;
            switch (item.type) {
                case 'text': case 'email': case 'phone': formDOM += `<input name="${ item.name }" id="${ item.name }" type="${ item.type }" required="${ item.required }">`; break;
                case 'textarea': formDOM += `<textarea name="${ item.name }" id="${ item.name }" required="${ item.required }"></textarea>`; break;
                case 'submit': formDOM += `<button name="${ item.name }" id="${ item.name }" type="${ item.type }">${ item.label }</button>`; break;
            }
            formDOM += item.type !== 'submit' ? `<label for="${ item.name }">${ item.label }</label>` : '';
            formDOM += `</div>`;

            // If it's the last item
            if (fieldsCount === i + 1 || col >= maxSize) { 
                formDOM += '</div>';
            }

            col = col >= maxSize ? col = 0 : col = col;
        });

        document.querySelector(this.selector).innerHTML = formDOM;
    }


}

export default Pidgeon;
