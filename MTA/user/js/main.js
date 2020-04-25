function addIssue(){
    // console.log("add patient");

    // Get Variables from form
    var location = document.getElementById("location").value;
    // var pic = document.getElementById("pic").value;
    var issueType = document.getElementById("issue-type").value;

    // Testing variable grab
    console.log("Location: " + location);
    // console.log("Picture: " + pic);
    console.log("Issue Type: " + issueType);
    
    // Call AJAX
    callAJAX('addIssue.php','location='+location + '&issueType=' + issueType, 'addIssueResponse');
    // callAJAX('addNewPatient.php','name='+name + '&dog=' + dog + '&toy=' + toy + '&age=' + age + '&shots=' + shots,'addUserResponse');
}

function addIssueResponse(response) {
    console.log("Add Issue Response:" + decodeURIComponent(response));
    // init();
}

// For Upload Button
// var inputs = document.querySelectorAll( '.inputfile' );
 
// Array.prototype.forEach.call( inputs, function( input ) {
//   var label = input.nextElementSibling,
//               labelVal = label.innerHTML;
 
//   input.addEventListener( 'change', function( e ) {
//     var fileName = '';
     
//     // if ( this.files && this.files.length > 1 ) {
//     //   fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
//     // } else {
//     //   fileName = e.target.value.split( '\\' ).pop();
//     // }
 
//     if ( fileName ) {
//       label.querySelector( 'span' ).innerHTML = fileName;
//     } else {
//       label.innerHTML = labelVal;
//     }
//   });
// });







// From Week 10
// function search(){
//     console.log("search user");
//     var url = "searchuser.php";

//     // Get Variables from Form
//     var name = document.getElementById("name").value;
//     var dog = document.getElementById("dog").value;

//     // Send variables
//     callAJAX('searchuser.php','search=true&name='+name + '&dog=' + dog,'buildTable');

//     // callAJAX('searchuser.php','search=true','buildTable');
//     // How to get data from form, then make it into param string
// }
  
//generic AJAX call
function callAJAX(url, params, functionName) {

    console.log("callAJAX: url: " + url + ", params: " + params + ", functionName: " + functionName);

    var xhttp = new XMLHttpRequest();

    // What to do when it gets a response
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
        //do something...call the function?
        // console.log(xhttp.responseText);
        eval(functionName+"('" + xhttp.responseText + "')"); //must send back urlencoded
        }
    };
  
    // How to start the request
    xhttp.open("POST", url, true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // xhttp.setRequestHeader("Content-length", params.length);
    // xhttp.setRequestHeader("Connection", "close");
    xhttp.send(params); // send request parameters.
  
}








  
function buildTable(response){
    console.log("Build Table");
    console.log("RESPONSE");
    // console.log(response);


    var tableHeader = "<th>Owner Name</th><th>Dog Name</th><th>Shots</th>";
    var tableRows = "";
    var parsed = JSON.parse(response);

    //clear table
    document.getElementById("tableData").innerHTML = tableHeader;

    // ADD JSON DATA TO THE TABLE AS ROWS.
    for (var i = 0; i < parsed.length; i++) {

        // Get variables
        var name = parsed[i].name;
        var dog = parsed[i].dog;
        var shots = parsed[i].shots;

        // Determine Row Color
        var rowColor = checkForShots(shots);

        // Build table row
        var tr = "<tr bgcolor='" + rowColor + "'><td>" + name + "</td><td>" + dog + "</td><td>" + shots + "</td></tr>";
        // console.log("Row is: " + tr);

        tableRows += tr;
    }

    // console.log(tableData);

    document.getElementById("tableData").innerHTML = tableHeader + tableRows;
  
  
}
  

  