$(document).ready(function(){ 
		$("table").dataTable( {
			"dom": 'T<"clear">lfrtip', 
			"tableTools": {
				"aButtons": [
					{
						"sExtends": "copy",
						"sButtonText": "Copiar"								
					},
					{
						"sExtends": "csv",
						"sButtonText": "CSV"
					},
					{
						"sExtends": "xls",
						"sButtonText": "Excel"
					}, 
					{
						"sExtends": "pdf", 
						"sPdfSize": "A4", 
						"sButtonText": "PDF"
					}, 
					{
						"sExtends": "print", 
						"sButtonText": "Imprimir"
					}
				], 
				"sSwfPath": "../../assets/swf/copy_csv_xls_pdf.swf"
			},
		} );

}); 

jQuery(function($){
   $(".cnpj").mask("99.999.999-9999/99");
   $(".telefone").mask("(99) 9999-9999");
   $(".data_nota").mask("99/99/9999");
});

$(function() {
	$("#data_nota").datepicker();
	$("#data_inicial").datepicker();
	$("#data_final").datepicker();
});

jQuery(function($){
	$("input").tooltip({ placement: "right" });
});


