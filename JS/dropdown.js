function showTransaction(str) {
    const ajaxreq = new XMLHttpRequest();
        bank = document.getElementById("bank").value;
        ajaxreq.open('GET', "http://http://soul-pay.herokuapp.com/check.php?bank=" + bank, 'true');
        ajaxreq.send();
        ajaxreq.onreadystatechange = function () {
            if (ajaxreq.readyState == 4 && ajaxreq.status == 200) {
                document.getElementById("txtHint").innerHTML = ajaxreq.responseText;
            }
        };
  }