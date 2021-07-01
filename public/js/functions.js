$(function() {
  var xhr = new XMLHttpRequest();
  xhr.open("GET", "xhr", true);
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4) {
      $("#result").html(xhr.responseText);
    }else{
      $("#result").html("XHR ERROR "+xhr.readyState);
    }
  };
  xhr.send();
});