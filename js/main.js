function sendEmail() {

  var name = document.getElementsByName("name")[0].value;

  var email = document.getElementsByName("email")[0].value;

  var message = document.getElementsByName("message")[0].value;

  var subject = "Новое сообщение от " + name;

  var body = "Имя: " + name + "";

  body += "Email: " + email + "";

  body += "Сообщение:" + message;

  window.open("mailto:shindin112@gmail.com?subject=" + encodeURIComponent(subject) + "&body=" + encodeURIComponent(body));
}
