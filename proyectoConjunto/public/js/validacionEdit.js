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
let form = document.querySelector('.formClass');
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

document.querySelector('.formClass').onsubmit = function(event) {
    let correctData = true;
    event.preventDefault()
    if (form.elements['name'].value == false) {
        correctData = false;
        form.querySelector('#errorName').style.display = 'inline';
    } else {
        removeWhiteSpaces(form.elements['name'].value);
        form.querySelector('#errorName').style.display = 'none';
    }
    if (form.elements['description'].value == false) {
        correctData = false;
        form.querySelector('#errorDescription').style.display = 'inline';
    } else {
        form.querySelector('#errorDescription').style.display = 'none';
    }
    // if (form.elements['category'].value == false) {
    //     form.querySelector('#errorCategory').style.display = 'inline';
    // } else {
    //     form.querySelector('#errorCategory').style.display = 'none';
    // }
    if (isNaN(form.elements['price'].value) || form.elements['price'].value < 0 || !checkDecimals(form.elements[
            'price'].value)) {
        correctData = false;
        form.querySelector('#errorPrice').style.display = 'inline';
    } else {
        form.querySelector('#errorPrice').style.display = 'none';
    }
    if (isNaN(form.elements['discount'].value) || form.elements['discount'].value < 0 || form.elements[
            'discount'].value > 100 || !checkDecimals(form.elements['discount'].value)) {
        correctData = false;
        form.querySelector('#errorDiscount').style.display = 'inline';
    } else {
        form.querySelector('#errorDiscount').style.display = 'none';
    }
    if (isNaN(form.elements['taxes'].value) || form.elements['taxes'].value < 0 || form.elements['taxes']
        .value > 100 || !checkDecimals(form.elements['taxes'].value)) {
        correctData = false;
        form.querySelector('#errorTaxes').style.display = 'inline';
    } else {
        form.querySelector('#errorTaxes').style.display = 'none';
    }
    if (isNaN(form.elements['stock'].value) || form.elements['stock'].value < 0 || form.elements['stock'].value
        .includes('.')) {
        correctData = false;
        form.querySelector('#errorStock').style.display = 'inline';
    } else {
        form.querySelector('#errorStock').style.display = 'none';
    }
    // if (form.elements['image'].files.length < 0 || !checkFileExtension(form.elements['image'].value)) {
    //     form.querySelector('#errorImage').style.display = 'inline';
    // } else {
    //     form.querySelector('#errorImage').style.display = 'none';
    // }
    if (correctData === true) {
        form.submit(form.action,{method:'post', body: new FormData(form)});
    }
    correctData = true;
}

function checkDecimals(number) {
    let correctLength = false;
    number = String(number);
    if (number.includes('.') && number.charAt[number.length - 1] != '.') {
        if ((number.split('.')[1].length > 0 && number.split('.')[1].length <= 2)) {
            correctLength = true;
        }
    } else {
        correctLength = true;
    }
    return correctLength;
}

function checkFileExtension(file) {
    let correctExtension = false;
    let validExtensions = /(\.jpg|\.jpeg|\.png|\.webp)$/i;
    if (validExtensions.exec(file) != null) {
        correctExtension = true;
    }
    return correctExtension;
}

function removeWhiteSpaces(str) {
    let filteredStr = [];
    let string = str;
    string = string.split(' ');
    for (let char of string) {
        if (char != '') {
            filteredStr.push(char);
        }
    }
    filteredStr = filteredStr.join(' ');
    return filteredStr;
}
