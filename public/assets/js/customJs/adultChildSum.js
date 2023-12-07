function myFunction() {
    console.log("Hi");
    var x = document.getElementById("adult_number");
    x.value = x.value.toUpperCase();
    console.log(x.value);
}

// $(function () {
//     $("#adult_number, #child_number").keyup(function () {
//           var total = $("#id-1").val() + +$("#id-2").val();
//           console.log(total);
//     //   $("#id-3").val(+$("#id-1").val() + +$("#id-2").val());
//     });
// });