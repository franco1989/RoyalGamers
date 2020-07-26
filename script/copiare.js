function CopyToClipboard(containerid) {
  if (document.selection) {
    var range = document.body.createTextRange();
    range.moveToElementText(document.getElementById(containerid));
    range.select().createTextRange();
    document.execCommand("copy");
  } else if (window.getSelection) {
    var range = document.createRange();
    range.selectNode(document.getElementById(containerid));
    window.getSelection().removeAllRanges(range);
    window.getSelection().addRange(range);
    document.execCommand("copy");
    alert("Il testo e stato copiato con successo incollare ip su minecraft :)");
  }
}
