if (window.XMLHttpRequest) {
  xmlhttp = new XMLHttpRequest();
} else {
  xmlhttp = new ActiveXOject("Microsoft.XMLHTTP");
}

function getAllComment() {
  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("result").innerHTML = xmlhttp.responseText;
    }
  };
  let url = "../function/comment/commentController.php?allCommentDashboard";
  xmlhttp.open("GET", url, true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.send();
}

function getCommentByMajor(majorID) {
  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("result").innerHTML = xmlhttp.responseText;
    }
  };
  let url = "../function/comment/commentController.php?commentByMajor&major="+majorID;
  xmlhttp.open("GET", url, true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.send();
}

function changePage(args) {
  let page = args;
  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("result").innerHTML = xmlhttp.responseText;
      console.log(xmlhttp.responseText);
    }
  };
  let url =
    "../function/comment/commentController.php?allCommentDashboard&pagenumber=" +
    page;
  let data = "pagenumber=" + page;
  xmlhttp.open("GET", url, true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.send();
}

function deleteComment(commentID) {
  if (!confirm("คุณต้องการลบคำอวยพรใช่หรือไม่ ? ")) {
    return;
  }
  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      getAllComment();
    }
  };
  let url =
    "../function/comment/commentController.php?allCommentDashboard&deleteComment";
  let data = "deleteComment&comment_id=" + commentID;
  xmlhttp.open("POST", url, true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.send(data);
}

function selectType(type){
  let blog = document.getElementById('searchBlog')
  if(type==1){
    getAllComment()
    document.getElementById('selectMajorID').remove()
  }
  else if(type==2){
    let selectMajor = document.createElement('select')
    selectMajor.id ="selectMajorID"
    selectMajor.setAttribute('onchange','getCommentByMajor(this.value);');
    selectMajor.innerHTML ='<option value="1" selected>วิทยาการคอมพิวเตอร์ (CS)</option><option value="2">เทคโนโลยีสารสนเทศ (IT)</option><option value="3">ภูมิสารสนเทศศาสตร์ (GIS)</option>'
    blog.appendChild(selectMajor)
  }
  else if(type==3){
    document.getElementById('selectMajorID').remove()
    let inputSearchName  = document.createElement('input')
    inputSearchName.type="text"
  }
}
