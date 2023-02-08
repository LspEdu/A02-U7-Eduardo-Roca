const HTTP = new XMLHttpRequest,
      url = "A02-U7-Eduardo-Roca.json";

HTTP.open("GET", url);
HTTP.send();


HTTP.onreadystatechange = (e) => {
console.log(HTTP.responseText);
}

document.querySelector('input[type="text"]').addEventListener('keydown', () => {
    document.forms[0].submit;
})

document.forms[0].addEventListener('submit', () => {
        HTTP.onreadystatechange = (e) => {
            console.log(HTTP.responseText);
        }
})
