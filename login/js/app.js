$(document).ready(() => {
  $("#main #login > *, #main #register > *").css({ opacity: "1" });
});

/* Valid Login Submit */
const logAttention = $("#login .form a");
$("#login .form").submit(function (e) {
  if (
    $("#login .form #logName").val() == "" ||
    $("#login .form #logPassword").val() == ""
  ) {
    e.preventDefault();

    markInput("#logName, #logPassword"); // Set Border On Name And Passoword Input + Timeout -> to back

    var originalHref = $(logAttention).attr("href");
    changeAttention(
      "Vyplnte všechna pole!",
      "crimson",
      "#",
      "markInput('#logName, #logPassword')",
      logAttention
    );
    setTimeout(() => {
      changeAttention(
        "Nemáte účet? Můžete se zaregistrovat!",
        "white",
        originalHref,
        "",
        logAttention
      );
    }, 5000);
    return false;
  } else return true;
});
function markInput(destination) {
  $(destination).css({ "border-bottom": "3px solid crimson" });
  setTimeout(() => {
    $(destination).css({ "border-bottom": "3px solid gray" });
  }, 1000);
}
function changeAttention(text, color, href, func, destination) {
  $(destination).text(text).css({ color: color });
  $(destination).attr({ href: href });
  $(destination).attr({ onclick: func });
}
/* End Valid Login Submit */

/* Valid Register Submit */
const regAttention = $("#register .form a");
$("#register .form").submit(function (e) {
  if (
    $("#register .form #regName").val() == "" ||
    $("#register .form #regPassword").val() == "" ||
    $("#register .form #regPasswordAgain").val() == ""
  ) {
    e.preventDefault();

    markInput("#regName, #regPassword, #regPasswordAgain"); // Set Border On Name And Passoword Input + Timeout -> to back

    var originalHref = $(regAttention).attr("href");
    changeAttention(
      "Vyplnte všechna pole!",
      "crimson",
      "##",
      "markInput('#regName, #regPassword, #regPasswordAgain')",
      regAttention
    );
    setTimeout(() => {
      changeAttention(
        "Nemáte účet? Můžete se zaregistrovat!",
        "white",
        originalHref,
        "",
        regAttention
      );
    }, 5000);
    return false;
  } else if (
    $("#register .form #regPassword").val() !=
    $("#register .form #regPasswordAgain").val()
  ) {
    e.preventDefault();

    markInput("#regPassword, #regPasswordAgain"); // Set Border On Name And Passoword Input + Timeout -> to back

    var originalHref = $(regAttention).attr("href");
    changeAttention(
      "Hesla se neshodují!",
      "crimson",
      "##",
      "markInput('#regName, #regPassword, #regPasswordAgain')",
      regAttention
    );
    setTimeout(() => {
      changeAttention(
        "Nemáte účet? Můžete se zaregistrovat!",
        "white",
        originalHref,
        "",
        regAttention
      );
    }, 5000);
    return false;
  } else return true;
});

/* End Valid Register Submit */
