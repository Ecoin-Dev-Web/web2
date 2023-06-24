$(document).ready(function () {
	oldNum = localStorage.getItem("ecoin") ? localStorage.getItem("ecoin") : 0
 $("#check").text(oldNum)
 $("input[type=number]").val(oldNum)

	$(document).on('change','input[type=number]',function () {
		var num = $(this).val()
	   $("#check").text(num)
	     localStorage.setItem("ecoin", num)
	})




})