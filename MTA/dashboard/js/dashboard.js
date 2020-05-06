// THESE FUNCTIONS FOR FRONTEND INTERACTION
function completeTask(id) {
  // var completed = document.getElementById("completeBox").value;

  console.log("ID is: " + id);
  callAJAX('deleteTask.php', 'id='+id, 'deleteTaskResponse');

}

function init(){
  console.log("app initialized");
  var url = "search.php";
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
  // console.log("Build Table");
  // console.log("RESPONSE");
  // console.log(response);


  var tableHeader = "<th>TimeStamp</th><th>Priority</th><th>Img Path</th><th>Location</th><th>Issue Type</th><th>Notes</th><th>Complete</th>";
  var tableRows = "";
  var parsed = JSON.parse(response);

  //clear table
  document.getElementById("tableData").innerHTML = tableHeader;

  // ADD JSON DATA TO THE TABLE AS ROWS.
  for (var i = 0; i < parsed.length; i++) {

      // Get variables
      var id = parsed[i].id;
      var imgPath = parsed[i].imagePath;
      var location = parsed[i].location;
      var issueType = parsed[i].issueType;
      var notes = parsed[i].notes;
      var ts = parsed[i].timestamp;



      // Determine Row Color
      var rowColor = checkPriority(issueType);

      if (rowColor === "red") {
        priority = "High";
      } else if (rowColor === "yellow") {
        priority = "Medium";
      } else {
        priority = "Low";
      }

      // Build table row
      var tr = "<tr id='" + id + "'><td>" + ts + "</td><td style='background-color:" + rowColor + "'>" + priority + "</td><td>" + imgPath + "</td><td>" + location + "</td><td>" + issueType + "</td><td>" + notes + "</td><td><input type='checkbox' onchange='completeTask(" + id + ")' id='completeBox'>";
      // console.log("Row is: " + tr);

      tableRows += tr;
  }

  // console.log(tableData);

  document.getElementById("tableData").innerHTML = tableHeader + tableRows;


}

function searchResults(response){
    // console.log("Search Results");
    // console.log(response);

    buildTable(response);
}

function checkPriority(issueType) {
  if (issueType === "electrical") {
    rowColor = "red";
  } else if (issueType === "broken bench") {
    rowColor = "orange";
  } else {
    rowColor = "yellow";
  }

  return rowColor;
}

function deleteTaskResponse(response) {
  console.log(response);
  init();
}
// function addUser(){
//   console.log("add patient");

//   // Get Variables from form
//   var name = document.getElementById("newName").value;
//   var dog = document.getElementById("newDog").value;
//   var toy = document.getElementById("newToy").value;
//   var age = document.getElementById("newAge").value;
//   var shots = document.getElementById("newShots").value;

//   // Call AJAX
//   callAJAX('addNewPatient.php','name='+name + '&dog=' + dog + '&toy=' + toy + '&age=' + age + '&shots=' + shots,'addUserResponse');
// }

// function addUserResponse(response) {
//   console.log("Add User Response:" + decodeURI(response));
//   init();
// }
