$(document).ready(function ()
{
 //   $('.btn-default').click(function (e) {
 //       e.preventDefault();
//      //var row=$(this).parents("tr");
////      var row=$(this).closest('tr');
////      var id=row.data('codigoCompraEnc');
////      alert(id);
//
//    var row=$(this).closest('tr');
//    //var id=row.data('codigoCompraEnc',0);
        //    var id=$(this).data("codigoCompraEnc");
//    console.log(id);
//    alert(id);
//    var $row = $(this).closest("tr"),       // Finds the closest row <tr> 
//    $tds = $row.find("codigoCompraEnc");             // Finds all children <td> elements td
//
//    $.each($tds, function() {               // Visits every single <td> element
//     console.log($(this).text());        // Prints out the text within the <td>
//    });
        $('a.btn-default').on('click', function () {
            var dataId = $(this).attr("data-id");
            //alert($(this).attr("data-id"));
            $.post('/posv1/web/compras/vercompra/',dataId)   
        //alert(dataId);
       // });
//      var url1 = "http://localhost/posv1/web/compras";
//       $.ajax({
//        type: "GET",
//        url: url1,
//        data: {nombre: "pepe"}
//        }).done(function() {
//        alert( "Datos grabados");})
        })
      
      
      
        //alert(url1); 

   
});


