/*====== Quantity ========*/
$(document).on('click', '.qtyDec, .qtyInc, .qtyDecInf, .qtyIncInf', function () {
    var $button = $(this);
    numberButtonFunc($button);
});

function numberButtonFunc($button) {
    // var number = document.getElementById("adult_number").value;
    // console.log(number);

    var oldValue = $button.parent().find("input").val();
    var total = 0;
    $('input[type="text"]').each(function () {
        total += parseInt($(this).val());
    });
    var newVal;
    if ($button.hasClass('qtyInc') || $button.hasClass('qtyIncInf')) {
        newVal = parseFloat(oldValue) + 1;
    } else {
        if (oldValue > 0) {
            newVal = parseFloat(oldValue) - 1;
        } else {
            newVal = 0;
        }
    }
    $button.parent().find("input").val(newVal).trigger('change');
}

$('.gty-container').each(function () {
    // console.log("checking...")
    var parent = $(this);
    // Adult quantity number


    var adults;
    var children;
    var infant;
    var total_num ;
    var total_num_inf ;

    $('input[name="adult_number"]', parent).change(function () {
        var id = document.getElementsByClassName("children");

        if (id.length > 0) {
            children = id[0].value;
        }

        adults = parseInt($(this).val());
        if (adults<1) {
            adults=1;
        }

        // new cofing for adult infant

        if (adults>infant) {
            // console.log("adults>infant 1"+" adult: "+adults+"child: "+children);
            if (infant==3) {
                Array.from(document.getElementsByClassName("qtyIncInf")).forEach(element => {
                    element.disabled = true;
                });
                document.getElementById("qtyDecId31").disabled = false;
                document.getElementById("qtyDecId21").disabled = false;
                document.getElementById("qtyDecId11").disabled = false;
            }else{
                document.getElementById("qtyDecId31").disabled = false;
                document.getElementById("qtyDecId21").disabled = false;
                document.getElementById("qtyDecId11").disabled = false;
                Array.from(document.getElementsByClassName("qtyIncInf")).forEach(element => {
                    element.disabled = false;
                });
            }
        }
        else if(adults==infant){
            // console.log("adults==infant 1" +" adult: "+adults+"child: "+children);
            document.getElementById("qtyDecId31").disabled = true;

            document.getElementById("qtyDecId21").disabled = true;

            document.getElementById("qtyDecId11").disabled = true;

            Array.from(document.getElementsByClassName("qtyIncInf")).forEach(element => {
                element.disabled = true;
            });
        }
        else{
            // console.log("ELSE 1"+" adult: "+adults+"child: "+children);
            document.getElementById("qtyDecId31").disabled = false;

            document.getElementById("qtyDecId21").disabled = false;

            document.getElementById("qtyDecId11").disabled = false;
            Array.from(document.getElementsByClassName("qtyIncInf")).forEach(element => {
                element.disabled = false;
            });
        }
        //console.log("adults: " + adults);
        var total_num = adults + children;

        if (total_num >= 9) {
            // console.log("Maximum Reached");
            // document.getElementById("qtyIncId21").disabled = true;
            // document.getElementById("qtyIncId22").disabled = true;
            Array.from(document.getElementsByClassName("adult")).forEach(element => {
                element.value = adults;
                element.innerHTML = adults + ' ' + " Adults";
            });
            Array.from(document.getElementsByClassName("qtyInc")).forEach(element => {
                element.disabled = true;
            });
        } else{
            // document.getElementById("qtyIncId21").disabled = false;
            // document.getElementById("qtyIncId22").disabled = false;
            Array.from(document.getElementsByClassName("adult")).forEach(element => {
                element.value = adults;
                element.innerHTML = adults + ' ' + " Adults";
            });
            Array.from(document.getElementsByClassName("qtyInc")).forEach(element => {
                element.disabled = false;
            });
        }

        var html = adults;
        if (typeof adults == 'number') {
            if (adults < 2) {
                html = adults + ' ' + $('.adult', parent).data('text');
            } else {
                html = adults + ' ' + $('.adult', parent).data('text-multi');
            }
        }
        // element.innerHTML = html;
        $('.adult', parent).html(html);
    });

    $('input[name="adult_number"]', parent).trigger('change');

    // Children quantity number
    $('input[name="child_number"]', parent).change(function () {
        children = parseInt($(this).val());
        var id = document.getElementsByClassName("adult");

        if (id.length > 0) {
            adults = id[0].value;
        }

        //console.log("children: " + children);
        var total_num = adults + children;
        //console.log("total: " + total_num);

        if (total_num >= 9) {
            // console.log("Maximum Reached");
            // document.getElementById("qtyIncId21").disabled = true;
            // document.getElementById("qtyIncId22").disabled = true;
            Array.from(document.getElementsByClassName("children")).forEach(element => {
                element.value = children;
                element.innerHTML = children + ' ' + " Child";
            });
            Array.from(document.getElementsByClassName("qtyInc")).forEach(element => {
                element.disabled = true;
            });
        } else{
            // document.getElementById("qtyIncId21").disabled = false;
            // document.getElementById("qtyIncId22").disabled = false;
            Array.from(document.getElementsByClassName("children")).forEach(element => {
                element.value = children;
                element.innerHTML = children + ' ' + " Child";
            });
            Array.from(document.getElementsByClassName("qtyInc")).forEach(element => {
                element.disabled = false;
            });
        }

        var html = children;
        if (typeof children == 'number') {
            if (children < 2) {
                html = children + ' ' + $('.children', parent).data('text');
            } else {
                html = children + ' ' + $('.children', parent).data('text-multi');
            }
        }
        $('.children', parent).html(html);
    });
    $('input[name="child_number"]', parent).trigger('change');


    // Infants quantity number
    $('input[name="infants_number"]', parent).change(function () {
        var id = document.getElementsByClassName("adult");

        if (id.length > 0) {
            adults = id[0].value;
        }

        infant = parseInt($(this).val());

        // console.log("infant: " + infant);
        // console.log("adult: " + adults);

        if (adults>infant) {
            // console.log("adults>infant 2"+" adult: "+adults+"infant: "+infant);
            if (infant==3) {

                Array.from(document.getElementsByClassName("qtyIncInf")).forEach(element => {
                    element.disabled = true;
                });
                document.getElementById("qtyDecId31").disabled = false;
                document.getElementById("qtyDecId21").disabled = false;
                document.getElementById("qtyDecId11").disabled = false;
            }
            else{
                document.getElementById("qtyDecId31").disabled = false;
                document.getElementById("qtyDecId21").disabled = false;
                document.getElementById("qtyDecId11").disabled = false;
                Array.from(document.getElementsByClassName("qtyIncInf")).forEach(element => {
                    element.disabled = false;
                });
            }
        }
        else if(adults==infant){
            // console.log("adults==infant 2"+" adult: "+adults+"infant: "+infant);
            document.getElementById("qtyDecId31").disabled = true;
            document.getElementById("qtyDecId21").disabled = true;
            document.getElementById("qtyDecId11").disabled = true;
            Array.from(document.getElementsByClassName("qtyIncInf")).forEach(element => {
                element.disabled = true;
            });
        }
        else{
            // console.log("ELSE 2"+" adult: "+adults+"infant: "+infant);
            document.getElementById("qtyDecId31").disabled = false;
            document.getElementById("qtyDecId21").disabled = false;
            document.getElementById("qtyDecId11").disabled = false;
            Array.from(document.getElementsByClassName("qtyIncInf")).forEach(element => {
                element.disabled = false;
            });
        }
        Array.from(document.getElementsByClassName("infant")).forEach(element => {
            element.value = infant;
            element.innerHTML = infant;
        });
    });
    $('input[name="infants_number"]', parent).trigger('change');

});
