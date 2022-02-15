/**
 * Funcion asincrona para mostrar todos los productos visibles
 * @returns
 */



async function fetchProductsIndexJSON(counter) {
    let products = await fetch(`/api/products/${counter}`);
    console.log(products);
    let productsJSON = await products.json();
    console.log(productsJSON);
    return productsJSON;
}
/**
 * llamada a la funcion asincrona
 */
let counter = 0;
let currentCategory = 0;



fetchProductsIndexJSON(counter).then(productsJSON => {
    for (let product of productsJSON[0]) {
        //muestra todos los productos visibles y monta la estructura
        let div = document.createElement('div');
        let img = document.createElement('img');
        // Busca y muestra la imagen por defecto
        for (let i = 0; i < productsJSON[1].length; i++) {
            if (productsJSON[1][i].product_id === product.id && productsJSON[1][i].default == 1) {
                let prod_img = productsJSON[1][i];
                img.src = "/images/" + prod_img.path;
            }
        }

        div.classList.add('flexContainer', 'productContainer');
        let a = document.createElement('a');
        a.textContent = 'Nombre: ' + product.name;
        a.href = `/products/${product.id}`;
        // let category = document.createElement('p');
        // category.textContent = 'Categoria ' + product.category.name;
        let price = document.createElement('p');
        price.textContent = 'Precio: ' + product.price + '€';
        let stock = document.createElement('p');
        stock.textContent = 'Stock: ' + product.stock;
        div.append(img, a, price, stock);
        document.querySelector('.textContent').append(div);
    }
    counter = counter + 10;

})


// async function fetchCategoriesJSON() {
//     let categories = await fetch("{{ route('categoriesApi.index') }}");
//     console.log(categories);
//     let categoriesJSON = await categories.json();
//     console.log(categoriesJSON);
//     return categoriesJSON;
// }

// fetchCategoriesJSON().then(categories => {
//     for (let category of categories) {
//         let option = document.createElement('option');
//         option.setAttribute('value', category.id);
//         option.textContent = category.name;
//         form.elements['category'].append(option);
//     }
// })
// let form = document.querySelector('.formClass');
// let createProductButton = document.querySelector('#createProductButton');
// let submitButton = document.querySelector('#submitButton');
// let cancelButton = document.querySelector('#cancelButton');



// createProductButton.onclick = function() {
//     form.style.display = 'block';
//     createProductButton.style.display = 'none';
// }

// cancelButton.onclick = function() {
//     document.querySelector('#resetButton').click();
//     form.style.display = 'none';
//     createProductButton.style.display = 'inline';
// }

// document.querySelector('.formClass').onsubmit = function(event) {
//     let correctData = true;
//     event.preventDefault()
//     if (form.elements['name'].value == false) {
//         correctData = false;
//         form.querySelector('#errorName').style.display = 'inline';
//     } else {
//         removeWhiteSpaces(form.elements['name'].value);
//         form.querySelector('#errorName').style.display = 'none';
//     }
//     if (form.elements['description'].value == false) {
//         correctData = false;
//         form.querySelector('#errorDescription').style.display = 'inline';
//     } else {
//         form.querySelector('#errorDescription').style.display = 'none';
//     }
//     // if (form.elements['category'].value == false) {
//     //     form.querySelector('#errorCategory').style.display = 'inline';
//     // } else {
//     //     form.querySelector('#errorCategory').style.display = 'none';
//     // }
//     if (isNaN(form.elements['price'].value) || form.elements['price'].value < 0 || !checkDecimals(form.elements[
//             'price'].value)) {
//         correctData = false;
//         form.querySelector('#errorPrice').style.display = 'inline';
//     } else {
//         form.querySelector('#errorPrice').style.display = 'none';
//     }
//     if (isNaN(form.elements['discount'].value) || form.elements['discount'].value < 0 || form.elements[
//             'discount'].value > 100 || !checkDecimals(form.elements['discount'].value)) {
//         correctData = false;
//         form.querySelector('#errorDiscount').style.display = 'inline';
//     } else {
//         form.querySelector('#errorDiscount').style.display = 'none';
//     }
//     if (isNaN(form.elements['taxes'].value) || form.elements['taxes'].value < 0 || form.elements['taxes']
//         .value > 100 || !checkDecimals(form.elements['taxes'].value)) {
//         correctData = false;
//         form.querySelector('#errorTaxes').style.display = 'inline';
//     } else {
//         form.querySelector('#errorTaxes').style.display = 'none';
//     }
//     if (isNaN(form.elements['stock'].value) || form.elements['stock'].value < 0 || form.elements['stock'].value
//         .includes('.')) {
//         correctData = false;
//         form.querySelector('#errorStock').style.display = 'inline';
//     } else {
//         form.querySelector('#errorStock').style.display = 'none';
//     }
//     // if (form.elements['image'].files.length < 0 || !checkFileExtension(form.elements['image'].value)) {
//     //     form.querySelector('#errorImage').style.display = 'inline';
//     // } else {
//     //     form.querySelector('#errorImage').style.display = 'none';
//     // }
//     if (correctData === true) {
//         form.elements['name'].value = removeWhiteSpaces(form.elements['name'].value);
//         form.elements['description'].value = removeWhiteSpaces(form.elements['description'].value);
//         async function submitForm() {
//             let response = await fetch(form.action, {
//                 method: 'post',
//                 body: new FormData(form)
//             });
//             console.log(response);
//             let product = await response.json();
//             console.log(product)
//             return product;
//         }
//         submitForm().then(product => {
//             let p = document.createElement('p');
//             p.textContent = 'Nombre: ' + product.name + ' Categoria: ' + product.category.name;
//             document.body.append(p);

//         });
//     }
//     correctData = true;
// }

// function checkDecimals(number) {
//     let correctLength = false;
//     number = String(number);
//     if (number.includes('.') && number.charAt[number.length - 1] != '.') {
//         if ((number.split('.')[1].length > 0 && number.split('.')[1].length <= 2)) {
//             correctLength = true;
//         }
//     } else {
//         correctLength = true;
//     }
//     return correctLength;
// }

// function checkFileExtension(file) {
//     let correctExtension = false;
//     let validExtensions = /(\.jpg|\.jpeg|\.png|\.webp)$/i;
//     if (validExtensions.exec(file) != null) {
//         correctExtension = true;
//     }
//     return correctExtension;
// }

// function removeWhiteSpaces(str) {
//     let filteredStr = [];
//     let string = str;
//     string = string.split(' ');
//     for (let char of string) {
//         if (char != '') {
//             filteredStr.push(char);
//         }
//     }
//     filteredStr = filteredStr.join(' ');
//     return filteredStr;
// }



let categories = document.querySelectorAll('.categoria');

for (let category of categories) {
    category.addEventListener('click', function (event) {
        event.preventDefault();
        document.querySelector('#loadButton').style.display = 'block';
        if (event.target.getAttribute('data-value') != currentCategory) {
            currentCategory = event.target.getAttribute('data-value');
            document.querySelector('.textContent').textContent = '';
            counter = 0;
            fetchProductsJSON(currentCategory).then(productsJSON => {
                for (let product of productsJSON[0]) {
                    //muestra todos los productos visibles y monta la estructura
                    let div = document.createElement('div');
                    let img = document.createElement('img');
                    // Busca y muestra la imagen por defecto
                    for (let i = 0; i < productsJSON[1].length; i++) {
                        if (productsJSON[1][i].product_id === product.id && productsJSON[1][i].default == 1) {
                            let prod_img = productsJSON[1][i];
                            img.src = "/images/" + prod_img.path;
                        }
                    }

                    div.classList.add('flexContainer', 'productContainer');
                    let a = document.createElement('a');
                    a.textContent = 'Nombre: ' + product.name;
                    a.href = `/products/${product.id}`;
                    // let category = document.createElement('p');
                    // category.textContent = 'Categoria ' + product.category.name;
                    let price = document.createElement('p');
                    price.textContent = 'Precio: ' + product.price + '€';
                    let stock = document.createElement('p');
                    stock.textContent = 'Stock: ' + product.stock;
                    div.append(img, a, price, stock);
                    document.querySelector('.textContent').append(div);
                }
                counter = counter + 2;
            });
        }
    })
}

document.querySelector('#loadButton').onclick = function () {

    if (currentCategory === 0) {
        fetchProductsIndexJSON(counter).then(productsJSON => {
            for (let product of productsJSON[0]) {
                //muestra todos los productos visibles y monta la estructura
                let div = document.createElement('div');
                let img = document.createElement('img');
                // Busca y muestra la imagen por defecto
                for (let i = 0; i < productsJSON[1].length; i++) {
                    if (productsJSON[1][i].product_id === product.id && productsJSON[1][i].default == 1) {
                        let prod_img = productsJSON[1][i];
                        img.src = "/images/" + prod_img.path;
                    }
                }

                div.classList.add('flexContainer', 'productContainer');
                let a = document.createElement('a');
                a.textContent = 'Nombre: ' + product.name;
                a.href = `/products/${product.id}`;
                // let category = document.createElement('p');
                // category.textContent = 'Categoria ' + product.category.name;
                let price = document.createElement('p');
                price.textContent = 'Precio: ' + product.price + '€';
                let stock = document.createElement('p');
                stock.textContent = 'Stock: ' + product.stock;
                div.append(img, a, price, stock);
                document.querySelector('.textContent').append(div);

            }
            counter = counter + 10;
        })
    } else {

        fetchProductsJSON(currentCategory).then(productsJSON => {
            for (let product of productsJSON[0]) {
                //muestra todos los productos visibles y monta la estructura
                let div = document.createElement('div');
                let img = document.createElement('img');
                // Busca y muestra la imagen por defecto
                for (let i = 0; i < productsJSON[1].length; i++) {
                    if (productsJSON[1][i].product_id === product.id && productsJSON[1][i].default == 1) {
                        let prod_img = productsJSON[1][i];
                        img.src = "/images/" + prod_img.path;
                    }
                }

                div.classList.add('flexContainer', 'productContainer');
                let a = document.createElement('a');
                a.textContent = 'Nombre: ' + product.name;
                a.href = `/products/${product.id}`;
                // let category = document.createElement('p');
                // category.textContent = 'Categoria ' + product.category.name;
                let price = document.createElement('p');
                price.textContent = 'Precio: ' + product.price + '€';
                let stock = document.createElement('p');
                stock.textContent = 'Stock: ' + product.stock;
                div.append(img, a, price, stock);
                document.querySelector('.textContent').append(div);
            }
            counter = counter + 2;
        })
    }
}

async function fetchProductsJSON(category) {
    console.log(counter);
    // let url = "{{ route('productsApi.showProducts', ['id' => ':category', 'counter' => ':counter']) }}";
    // url = url.replace(':category', category);
    // url = url.replace(':counter', counter);
    let products = await fetch(`/api/products/${category}/${counter}`);
    console.log(products);
    let jsonProducts = await products.json();
    console.log(jsonProducts);
    return jsonProducts;
}
