function mailVerif(mail){
  var tempMail = mail;
  var final = '';
  //--
  //--
  if( (!tempMail.match(mailTypeA)) || (!adresse_email.match(mailTypeB)) ) {
    final = 'L\'adresse mail saisie "'+tempMail+'" n\'est pas valide.';
  } else {
    final = 'L\'adresse mail saisie "'+tempMail+'" est valide.';
  }
  //--
  return final;
}
function mailVerifTypeB(mail){
  var tempMail = mail;
  var final = '';
  //--
  var mailTypeA = /[a-z0-9_\-\.]+@[a-z0-9_\-\.]+\.[a-z]+/i;
  var mailTypeB = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
  //--
  if( (!tempMail.match(mailTypeA)) || (!adresse_email.match(mailTypeB)) ) {
    final = 'L\'adresse mail saisie "'+tempMail+'" n\'est pas valide.';
  } else {
    final = 'L\'adresse mail saisie "'+tempMail+'" est valide.';
  }
  //--
  return final;
}
