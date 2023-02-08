const HTTP = new XMLHttpRequest,
      url = "A02-U7-Eduardo-Roca.php";

HTTP.open("GET", url);
HTTP.send();

HTTP.onreadystatechange = (e) => {
    console.log(HTTP.responseText);
}

