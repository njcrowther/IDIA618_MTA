// THESE FUNCTIONS FOR FRONTEND INTERACTION
function completeTask(id) {
  // var completed = document.getElementById("completeBox").value;

  console.log("ID is: " + id);
  callAJAX('deleteTask.php', 'id='+id, 'deleteTaskResponse');

}

function init(){
  console.log("app initialized");
  var url = "search.php";
  dashCallAJAX(url, 'order=timestamp', 'buildTable');
}

//generic AJAX call
function dashCallAJAX(url, params, functionName) {

    console.log("dashCallAJAX: url: " + url + ", params: " + params + ", functionName: " + functionName);

  // console.log("dashCallAJAX: url:" + url + ", params: " + params);

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


  var tableHeader = "<th>TimeStamp</th><th>Priority</th><th>Img Path</th><th>Location</th><th>Issue Type</th><th>Notes</th><th>Update Issue</th><th>Complete</th>";
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
      var tr = "<tr id='" + id + "'><td>" + ts + "</td><td style='background-color:" + rowColor + "'>" + priority + "</td><td>" + imgPath + "</td><td>" + location + "</td><td>" + issueType + "</td><td>" + notes + "</td><td><a onclick='updateIssueSearch(" + id + ")' class='btn btn-default btn-rounded'>Update Issue</a></td><td><input type='checkbox' onchange='completeTask(" + id + ")' id='completeBox'>";
      // console.log("Row is: " + tr);
      // updateIssue.php?id=" + id + "
      // data-target='#updateModal'
      // data-toggle='modal'
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

function sortChange(){
  var sort = document.querySelectorAll("input[name=filter]:checked")[0].value;
  console.log("IT'S ALIVE: " + sort);

  var order = "";

  if (sort === "time"){
    order = "timestamp";
  } else if (sort === "location") {
    order = "location";
  } else if (sort === "issue-type") {
    order = "issueType";
  }

  // Send variables
  dashCallAJAX('search.php','order=' + order,'buildTable');
}

function updateIssueSearch(id) {
  // console.log("We're going to update issue #" + id);
  dashCallAJAX('updateIssue.php', 'id=' + id, 'updateIssueResponse');
}

function updateIssueResponse(response) {
  var parsed = JSON.parse(response);
  var notes = parsed[0].notes;
  var rowid = parsed[0].id;

  console.log("Got an Updated Response!" + notes);

  $("#updateModal").modal("toggle");
  document.getElementById('modal-input-notes').value = notes;
  document.getElementById('modal-input-row-id').value = rowid;
}

function updateIssue() {

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
//   dashCallAJAX('addNewPatient.php','name='+name + '&dog=' + dog + '&toy=' + toy + '&age=' + age + '&shots=' + shots,'addUserResponse');
// }

// function addUserResponse(response) {
//   console.log("Add User Response:" + decodeURI(response));
//   init();
// }
