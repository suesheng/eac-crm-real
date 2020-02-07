
$(document).ready(function() {

    var nums = [];

    let lang = $('#current_language');

    if(lang.text() == 'de_de') {
        $('.en_us').remove();
    }

    if(lang.text() == 'en_us') {
        $('.de_de').remove();
    }

    lang.hide();

    $('#document-service2 tr').slice(0, 4).remove();

    $('#document-service tr td').each(function() {
        list = $(this).find('span').hasClass('req-docs') ? $(this).find('span.req-docs').text().trim().split(',') : '';
        // list.sort(function() { return 0.5 - Math.random() });
        if(list==''){
            //var html = '-';
        } else{
            var html = '<ol class="or-pos" type="1">';

            for(var i=0; i<list.length; i++) {
                html += '<li>' + list[i] + '</li>';
            }

            html += '</ol>';
        }
        $(this).find('span.req-docs').html(html);
    });

    let status = $('#invoice_status');
    let allowedStatus = ['Mahnung 1', 'Mahnung 2', 'Mahnung 3', 'Reminder 1', 'Reminder 2', 'Reminder 3', 'Cancel', 'Storno'];

    let result = ! allowedStatus.includes(status.text()) ? status.remove() : true;
    var seen = {};
    // $('#document-service2 tr').each(function() {
    //     var txt = $(this).text();
    //     if (seen[txt])
    //         $(this).remove();
    //     else
    //         seen[txt] = true;
    // });

    $('#document-service2 tr').each(function() {

        $(this).find('td').hasClass('service_name') ? $(this).remove() : null;

        // console.log($(this).find('td').text().trim());
        // if ($(this).find('td').text().trim() == '') {
        //     $(this).prev().prev().remove();
        //     $(this).prev().remove();
        //     $(this).next().remove();
        //     $(this).remove();
        //
        // }
        //
        // if ($(this).find('td').text().trim() == '-') {
        //     $(this).prev().prev().remove();
        //     $(this).prev().remove();
        //     $(this).next().remove();
        //     $(this).remove();
        //
        // }
    });

    function stringToNumber(str){
        return Number(str.replace("€", "").replace("$", "").replace('.', '').trim().replace(",", "."));
    }

    function insertDecimal(num) {
        return (num / 100).toFixed(2).replace('.', ',');
    }

    function reverseDate(date) {
        let parts = date.split('-');
        return `${parts[2]}-${parts[1]}-${parts[0]}`;
    }

    String.prototype.splice = function(idx, rem, str) {
        return this.slice(0, idx) + str + this.slice(idx + Math.abs(rem));
    };

    Date.prototype.addDays = function(days) {
        var date = new Date(this.valueOf());
        date.setDate(date.getDate() + days);
        return date;
    }

    if($('#desc_skon').length > 0 && $('#disSum').length > 0 && $('#dateInv').length > 0 && $('#alanDisc').length > 0) {
        let descScon = $('#desc_skon').text();

        let disSum = $('#disSum').text();
        let dateInv = $('#dateInv').text();
        let newDatefour = new Date(reverseDate(dateInv)).addDays(14);
        let newDateFourAdd = reverseDate(newDatefour.toISOString().slice(0,10));

        let newDatethree = new Date(reverseDate(dateInv)).addDays(30);
        let newDateThreeAdd = reverseDate(newDatethree.toISOString().slice(0,10));

        let stringAlan = $('#alanDisc').text();
        
        if(stringAlan.includes("Skonto;")) {
            $('#alanDisc').text(descScon.replace('{date_add_four}', newDateFourAdd).replace('{offer}', insertDecimal(disSum.replace(',00', '').replace('.', ''))).replace('{date_three}', newDateThreeAdd));
        }
    }

    var disc = stringToNumber($('#table_serv .discount').text());
    var disc1 = stringToNumber($('#table_serv .discount1').text());

    if(disc == '0.00') {
        $('#table_serv .discount').parent().prev().remove();
        $('#table_serv .discount').parent().remove();
    }

    if(disc1 == '0.00') {
        // $('#table_serv .discount').parent().prev().remove();
        $('#table_serv .discount1').parent().remove();
    }

    $('#table_serv tr td').each(function() {
        if ($(this).text().trim() === '')
            $(this).parent().remove();
    });

    $('#document-service tr td').each(function() {
        if ($(this).text().trim() === '')
            $(this).parent().remove();
    });

    $('#document-service tr td:empty').remove();

    // [].forEach.call(data, function(el, ind) {
    //     if(ind == 0) {
    //         ind = 1;
    //         ind++;
    //     }
    //     nums[parseInt(el.textContent)] = ind;
    //     el.textContent = ind;
    // });
    $('#table_serv tr td.serv-nomer').each(function (index, elem) {
        // if (elem === 0) elem++;
        // if(ind == 0) {
        //     ind = 1;
        //     ind++;
        // }
        // var elem = elem === 0 ? elem + 1 : elem;
// console.log(elem);
//         console.log(parseInt($(this).text()));
//         console.log(parseInt($(this).text()));
        /*console.log(Number($(this).text()) + ' - ' + Number(elem));*/
        // console.log($(elem).text());
        // nums[parseInt($(this).text())] = Number(index);
        nums[$(this).text().trim()] = index + 1;
        // nums.oldNum[index] = parseInt($(this).text());
        $(this).text(index + 1);
    });

    $('#document-service tr td.serv-nomer').each(function(index, elem) {
        // nums.oldNum[index] = parseInt($(this).text());
        $(this).html('<b>' + (index + 1) + '</b>');
        $(this).prepend('<b>Pos. </b>');
    });

    $('#document-service2 tr td.serv-nomer').each(function(index, elem) {
        // nums.oldNum[index] = parseInt($(this).text());
        $(this).prepend('<b>' + (index + 1) + '</b>');
    });

    // console.log(nums);

    // function findMatch(array_1_small, array2_large) {
    //     var ary = new Array();
    //     for(i = 0;i < array2_large.length; i++)
    //     {
    //         for(z = 0; z < array_1_small.length; z++)
    //         {
    //             if(array2_large[i] == array_1_small[z])
    //             {
    //                 ary.push(i);
    //             }
    //         }
    //
    //     }
    //     return ary;
    // }


    $('#test1234 tr td:nth-child(2)').each(function() {

        var numbers = $(this).text().split('|');


        // extract each number in an array

        // var sortednum = [];
        var arrs = [];
        // console.log(findMatch(numbers, nums.oldNum))
        //  console.log(nums.oldNum);
        // console.log(numbers);
        //
        for(var i = 0; i < numbers.length; i++) {
            // console.log(numbers);
            // arrs[nums[i]] = nums[numbers[i]];
            arrs[i] = nums[numbers[i]];
        }
        // console.log(arrs);
        //
        // console

        // console.log(nums);
        // console.log(sortednum);
        // // Sort the numbers
        const sorted = arrs.sort((a, b) => a - b);
        const stringArray = sorted.reduce((tmp, x) => `${tmp},${x}`);
        // console.log(arrs);
        // Insert the string back in the td
        $(this).text(stringArray);
        $(this).text($(this).text().replace(',undefined', ''));
        // console.log(numbers);
    });

    // console.log($('.document-as').text());
    $('.document-as tr td:nth-child(3), .document-as tr td:nth-child(5)').each(function(elem) {
        if($(this).text().trim() == '0,00 €') {
            $(this).text('ver. required');
        }
    });

    // $('#documents-p tr').each(function () {
    //     if($(this).find('td:nth-child(1)').text().length){
    //         tr = $(this);
    //         tr.find('td:nth-child(2)').text('')
    //     }else if(! $(this).hasClass('heading')){
    //         let td = $(tr).find('td:nth-child(2)');
    //         // =map.set(td, );
    //         let comma = td.text() !== "" ? "|" : '';
    //         td.text(td.text() +  comma +  $(this).find('td:nth-child(2)').text())
    //         $(this).remove()
    //     }
    // });
    //
    // $('#documents-p tr td:nth-child(2)').each(function() {
    //
    //     var numbers = $(this).text().split('|');
    //
    //
    //     // extract each number in an array
    //
    //     // var sortednum = [];
    //     var arrs = [];
    //     // console.log(findMatch(numbers, nums.oldNum))
    //     //  console.log(nums.oldNum);
    //     // console.log(numbers);
    //     //
    //     for(var i = 0; i < numbers.length; i++) {
    //         // console.log(numbers);
    //         // arrs[nums[i]] = nums[numbers[i]];
    //         arrs[i] = nums[numbers[i]];
    //     }
    //     // console.log(arrs);
    //     //
    //     // console
    //
    //     // console.log(nums);
    //     // console.log(sortednum);
    //     // // Sort the numbers
    //     const sorted = arrs.sort((a, b) => a > b);
    //     const stringArray = sorted.reduce((tmp, x) => `${tmp},${x}`);
    //     // console.log(arrs);
    //     // Insert the string back in the td
    //     $(this).text(stringArray);
    // });

    $('#document-service tr th:nth-child(3)').remove();
    $('#document-service tr td:nth-child(3)').remove();

    Number.prototype.format = function(n, x) {
        var postComma, preComma, stringReverse, _ref;
        stringReverse = function(str) {
            return str.split('').reverse().join('');
        };
        _ref = this.toFixed(2).split('.'), preComma = _ref[0], postComma = _ref[1];
        preComma = stringReverse(stringReverse(preComma).match(/.{1,3}/g).join('.'));
        return "" + preComma + "," + postComma;
    };

    let grand = $('#table_serv:not(.inv_table) tr:last-of-type td:last-child');
    let valute = grand.text().substr(-1);
    grand.html('<strong>' + parseInt(grand.text()).format(2) + ' ' + valute + '</strong>');

    $('#table_serv:not(.inv_table) tr').each(function() {
            let grander = $(this).find('td:nth-child(5)');
            let valuteer = grander.text().substr(-1);
            grander.html('<span>' + parseInt(grander.text()).format(2) + ' ' + valuteer + '</span>');
    });

    $('#document-service tr td:nth-child(3)').each(function() {
        list = $(this).text().trim().split(',');
        list.sort(function() { return 0.5 - Math.random() });
        var html = '<ol type="1">';

        for(var i=0; i<list.length; i++) {
            html += '<li>' + list[i] + '</li>';
        }

        html += '</ol>';

        $(this).html(html);
    })

});