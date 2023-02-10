function show(str) {
  if (str.length == 0) {
    document.getElementById("suggestion").innerHTML = "";
    return;
  } else {
    var http = new XMLHttpRequest();
    http.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("suggestion").innerHTML = this.responseText;
      }
    };
    http.open("GET", "A02-U7-Eduardo-Roca.php?city=" + str, true);
    http.send();
  }
}