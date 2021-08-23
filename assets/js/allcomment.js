let numrow = 0;
let tray = 1

if (window.XMLHttpRequest) {
  xmlhttp = new XMLHttpRequest();
} else {
  xmlhttp = new ActiveXOject("Microsoft.XMLHTTP");
}

function getAllComment() {
  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("result").innerHTML = xmlhttp.responseText;
      getNumRow()
    }
  };
  let url = "../function/comment/commentController.php?allCommentStudent";
  xmlhttp.open("GET", url, true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.send();
}


function changePage(args) {
  let page = args;
  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("result").innerHTML = xmlhttp.responseText;
    }
  };
  let url =
    "../function/comment/commentController.php?allCommentStudent&pagenumber="+page;
  xmlhttp.open("GET", url, true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.send();
}

function getNumRow() {
  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("numrows").innerHTML = xmlhttp.responseText + " คน";
    }
  };
  let url = "../function/comment/commentController.php?getNumRow";
  xmlhttp.open("GET", url, true);
  xmlhttp.setRequestHeader(
    "Content-type",
    "application/x-www-form-urlencoded"
  );
  xmlhttp.send();
}