if (window.XMLHttpRequest) {
  xmlhttp = new XMLHttpRequest();
} else {
  xmlhttp = new ActiveXOject("Microsoft.XMLHTTP");
}

function insertComment() {
  let std_id = document.getElementById("stdId").value;
  let name = document.getElementById("name").value;
  let major = document.getElementById("inputmajor").value;
  let grade = document.getElementById("grade").value;
  let comment = document.getElementById("comment").value;
  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      console.log(xmlhttp.responseText)
    }
  };

  let url = "./function/comment/commentController.php";
  let data = "insertComment&std_id=" + std_id + "&name=" + name+ "&major=" + major+ "&grade=" + grade + "&comment=" + comment;
  xmlhttp.open("POST", url, true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.send(data);
}
