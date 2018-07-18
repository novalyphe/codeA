$(document).ready(function(){
	$("#PostAjax").click(function (){
		var name = $("#vardas").val();
		var numeris = $("#numeris").val();
		var pavarde = $("#pavarde").val();
		$.ajax({
			url:"/php.php",
			type: "POST",
			data: {
				name: vardas,
				numeris: email,
				pavarde: pavarde,
			},
			cache: false,
			success: function (html){
				$("#result").append(html);
			}
		});
	});
});