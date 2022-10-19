function goto(){
	alert("helo");
	poId=document.getElementById("poId");
	index=document.getElementById("index");
	index.value=poId;
	$("#exampleModal").modal("show");
}
function del(){
	id=document.getElementById("index");
	window.location.href="software/delete.php?id="+id.value;
}