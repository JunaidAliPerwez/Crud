
$(document).ready(function(){
	//for getting data in the table
 function showdata(){
 	output ='';
$.ajax({
	url:"retrieve.php",
	method:"GET",
	dataType:"JSON",
	success:function(data){
		//calling all data in tbody
		if(data){
			x = data; 
		}
		else{
			x = "";
		}
		for(i=0; i<x.length; i++) 
		{
		output += "<tr><td>" + x[i].id + "</td><td>" + x[i].name + "</td><td>" + x[i].email + "</td><td>" + x[i].password + "</td><td> <button class='btn btn-info btn-sm btn-edit' data-id=" + x[i].id +" >EDIT</button>  <button class= 'btn btn-danger btn-sm btn-delete' data-id=" + x[i].id +" >DELETE</button> </td></tr>"; 
		}
		$("tbody").html(output)
	}
})

 }
showdata()

 //Inserting data using ajax
$("#btnsave").click(function(e){
e.preventDefault();
// console.log("Saved button clicked");
let id = $("#nid").val();
 let name = $("#nameid").val();
 let email = $("#emailid").val();
 let password = $("#passwordid").val();
 //making javascript object to send this dataa to server
 //first name email and password are keys and other are variables we are calling
 mydata = {id:id, name:name, email:email, password:password}
 $.ajax({
 	url: "insert.php",
 	method: "POST",
 	data:JSON.stringify(mydata),
 	success: function(data){
 		// msg = "<div> " + data + "</div>"
 		// $("#msg").html(msg);
 		alert(data)
 $("#myform")[0].reset();
 showdata()
 	} 
 })

});
//

$('#nameid').keyup(function () {
  // single value 
  var str = $(this).val()
            // $(#username).val().replace('', '-');
            $(this).val(str.replace(/ /g, "_"))
  
        });
//deleting data using ajax
$("tbody").on("click", ".btn-delete" , function(e){
	e.preventDefault();
console.log("Delete button was clicked")
let id = $(this).attr("data-id");
mydata = {id:id}
mythis = this
$.ajax({
	url: "delete.php",
	method: "POST",
	data:JSON.stringify(mydata),
	success: function(data){
	alert("Record was deleted")
	$(mythis).closest("tr").fadeOut();
	}

})
// console.log(id);
})

// editing data using ajax
$("tbody").on("click", ".btn-edit", function(e){
	e.preventDefault();
console.log("Edit button clicked")
let id = $(this).attr("data-id");
// console.log("id")
mydata = {id:id}
$.ajax({
url: "edit.php",
method: "POST",
dataType:"JSON",
data: JSON.stringify(mydata),
success: function(data) {
	// 
	$("#nameid").val(data.name)
	$("#emailid").val(data.email)
	$("#passwordid").val(data.password)
	$("#nid").val(data.id)
}

})
})


//data-id=" + x[i].id"
})

