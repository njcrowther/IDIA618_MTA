// THESE FUNCTIONS FOR FRONTEND INTERACTION
function showOther() {
    var selectValue = document.getElementById("issue-type").value;

    // console.log("Select Changed! Value is: " + selectValue);
    
    if (selectValue === "other") {
        // console.log("We're gonna change it to block!");
        document.getElementById("notes-label").style.display = "block";
        document.getElementById("notes").style.display = "block";
    } else {
        // console.log("We're gonna change it to none!");
        document.getElementById("notes-label").style.display = "none";
        document.getElementById("notes").style.display = "none";
    }
}





// THESE FUNCTIONS FOR ADDING ISSUES TO DATABASE
function addIssue(){
    // console.log("add patient");

    // Get Variables from form
    var location = document.getElementById("location").value;
    // var pic = document.getElementById("pic").value;
    var issueType = document.getElementById("issue-type").value;
    var notes = document.getElementById("notes").value;

    // Testing variable grab
    console.log("Location: " + location);
    // console.log("Picture: " + pic);
    console.log("Issue Type: " + issueType);

    var parameterString = 'location='+location + '&issueType=' + issueType + '&notes=' + notes;
    
    // if header = dashboard page use different url
    if (document.title === "MTA Issue Submitter") {
        var url = 'addIssue.php';
    } else if (document.title === "MTA Issue Tracker Dashboard") {
        var url = '../addIssue.php';
    }


    // Call AJAX
    callAJAX(url, parameterString , 'addIssueResponse');
}

function addIssueResponse(response) {
    console.log("Add Issue Response:" + decodeURIComponent(response));
    location.reload();
}

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
  
