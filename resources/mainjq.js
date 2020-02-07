let tr;

document.body.innerHTML = document.body.innerHTML.replace(/SER1/g, '');

function isEmpty( el ){
    return !$.trim(el.html())
}

$('#test1234 tr').each(function () {
    if($(this).find('td:nth-child(1)').text().length){
        tr = $(this);
        tr.find('td:nth-child(2)').text('')
    }else if(! $(this).hasClass('heading')){
        let td = $(tr).find('td:nth-child(2)');
        // =map.set(td, );
        let comma = td.text() !== "" ? "|" : '';
        td.text(td.text() +  comma +  $(this).find('td:nth-child(2)').text())
        $(this).remove()
    }
});

// if($('#table_serv tbody tr:first-child td:nth-child(2)').html().trim() == '<span style="">​</span>') {
//     $('#table_serv tbody tr:first-child td:nth-child(2)').parent().remove();
// }

$('#table_serv tbody tr td').each(function() {
    if($(this).html().trim() == '<span style="">​</span>') {
        $(this).parent().remove();
    }
});

$('#table_serv tr td').each(function() {
    if($(this).text().trim() == 'Product_Name​') {
        $(this).parent().remove();
    }
});

$('#document-service tbody tr td').each(function() {
    if($(this).html().trim() == '<span style="">​</span>') {
        $(this).parent().remove();
    }
});

$('#document-service tr td').each(function() {
    if($(this).text().trim() == 'Product_Name​') {
        $(this).parent().remove();
    }
});

// [].forEach.call(tbl.querySelectorAll("tr td:first-child"), function(el) {
//     let parentNode = el.parentNode;
//     if (parentNode.childElementCount < 5)
//         return;
//
//     if (existProducts[el.textContent]) {
//
//         existProducts[el.textContent].count = existProducts[el.textContent].count + parseFloat(el.nextElementSibling.nextElementSibling.textContent);
//
//         existProducts[el.textContent].el.nextElementSibling.nextElementSibling.nextElementSibling.textContent = parseInt(existProducts[el.textContent].el.nextElementSibling.nextElementSibling.nextElementSibling.textContent) + 1;
//         existProducts[el.textContent].el.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.innerHTML = '<span style="font-family:verdana,geneva,sans-serif;"><strong>' + existProducts[el.textContent].count + ' €</strong></span>';
//         el.parentNode.remove();
//     } else {
//
//         existProducts[el.textContent] = {
//
//             count: (existProducts[el.textContent] || 0) + parseFloat(el.nextElementSibling.nextElementSibling.textContent),
//             el: el
//         }
//     }
// });

Number.prototype.format = function(n, x) {
    var postComma, preComma, stringReverse, _ref;
    stringReverse = function(str) {
        return str.split('').reverse().join('');
    };
    _ref = this.toFixed(2).split('.'), preComma = _ref[0], postComma = _ref[1];
    preComma = stringReverse(stringReverse(preComma).match(/.{1,3}/g).join('.'));
    return "" + preComma + "," + postComma;
};


function groupProds(selector, total = true) {
    const data = document.querySelectorAll(selector);

    function stringToNumber(str){
        return Number(str.replace("€", "").replace("$", "").replace('.', '').trim().replace(",", "."));
    }

    function getValute(str) {
        return str.substr(-1);
    }

    function numberToPrice(num){
        return num.toFixed(2).replace(",", ".");
    }


    const res = Object
        .values(data)
        .reduce((a,tr)=>{
            const [name, validity, quantityStr, price] = Object.values(tr.querySelectorAll('td'))
                .splice(1,4)
                .map(ele=>ele.textContent.replace(/(\n|\ |\t)*/g, ""));

            if(!name || !validity || !price || !quantityStr) return a;

            const quantity = Number(quantityStr.replace(",", "."));

            const key = `${name}|${price}`;
            //console.log(key);
            if(a.has(key)){
                const exists = a.get(key);
                exists.quantity += quantity;
                a.set(key, exists);
                tr.remove();
            } else {
                a.set(key, {tr, validity, name, quantity, price})
            }
            return a;
        }, new Map());

    [...res.values()]
        .forEach(({tr, quantity, price})=>{

            const [quantityEle, dummy, totalEle] = Object.values(tr.querySelectorAll("td"))
                .splice(3,3);
            if(total) {
                quantityEle.textContent = numberToPrice(quantity);
                if (numberToPrice(quantity) == 0) {
                    totalEle.innerHTML = '<span style="font-family:verdana,geneva,sans-serif;"><strong>Optional</strong></span>';
                } else {
                    totalEle.innerHTML = '<span style="font-family:verdana,geneva,sans-serif;"><strong>' + parseInt(numberToPrice(quantity * stringToNumber(price))).format(2) + " " + getValute(price) + '</strong></span>';
                }
            }
        });
}

function groupServ(selector) {
    const data = document.querySelectorAll(selector);

    const res = Object
        .values(data)
        .reduce((a,tr)=>{
            const [name, price] = Object.values(tr.querySelectorAll('td'))
                .splice(1,10)
                .map(ele=>ele.textContent.replace(/(\n|\ |\t)*/g, ""));

            if(!name || !price) return a;

            //const quantity = Number(quantityStr.replace(",", "."));

            const key = `${name}|${price}`;

            //console.log(key);
            if(a.has(key)){

                const exists = a.get(key);
                //exists.quantity += quantity;
                a.set(key, exists);
                tr.remove();
            } else {
                a.set(key, {tr, name, price})
            }

            return a;
        }, new Map());

    [...res.values()]
        .forEach(({tr})=>{

            Object.values(tr.querySelectorAll("td"))
                .splice(3,2);

        });
}

groupProds('#table_serv tbody tr');
groupServ('#document-service tbody tr', false);
// groupServ('#document-service2 tbody tr');


