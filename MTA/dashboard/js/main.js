
function init(){
  console.log("app initialized");
  var url = "searchuser.php";
  callAJAX(url, '', 'buildTable');
}

function search(){
  console.log("search user");
  var url = "searchuser.php";

  // Get Variables from Form
  var name = document.getElementById("name").value;
  var dog = document.getElementById("dog").value;

  // Send variables
  callAJAX('searchuser.php','search=true&name='+name + '&dog=' + dog,'buildTable');

  // callAJAX('searchuser.php','search=true','buildTable');
  // How to get data from form, then make it into param string
}

//generic AJAX call
function callAJAX(url, params, functionName) {

    console.log("callAJAX: url: " + url + ", params: " + params + ", functionName: " + functionName);

  // console.log("callAJAX: url:" + url + ", params: " + params);

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

function searchResults(response){
    console.log("Search Results");
    console.log(response);

    buildTable(response)
}

function checkForShots($shots) {
  if ($shots == 'No' || $shots == 'no') {
    var rowColor = 'red';
  } else {
    var rowColor = 'white';
  }

  return rowColor;
}

function addUser(){
  console.log("add patient");

  // Get Variables from form
  var name = document.getElementById("newName").value;
  var dog = document.getElementById("newDog").value;
  var toy = document.getElementById("newToy").value;
  var age = document.getElementById("newAge").value;
  var shots = document.getElementById("newShots").value;

  // Call AJAX
  callAJAX('addNewPatient.php','name='+name + '&dog=' + dog + '&toy=' + toy + '&age=' + age + '&shots=' + shots,'addUserResponse');
}

function addUserResponse(response) {
  console.log("Add User Response:" + decodeURI(response));
  init();
}
