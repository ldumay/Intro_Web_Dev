function mailVerif(mail){
  var tempMail = mail;
  var final = '';
  var checkMailPartArobase = false;
  var checkMailPartDomaine = false;

  // Vérification de : "@"
  if(tempMail.search('@')>=0){ checkMailPartArobase = true; }
  // Vérification de : ".*"
  if( (tempMail.search('.xyz')>=0) ){ checkMailPartDomaine = true; }

  //--
  var listValueOfMail = [];
  var compteurValues = 1;
  var positionMailPartArobase = 0;
  var positionMailPartDomaine = 0;
  //--
  for(valueOfTempMail of tempMail){
    if(valueOfTempMail=='@'){ positionMailPartArobase = compteurValues; }// position = compteurValues
    if(valueOfTempMail=='.'){ positionMailPartDomaine = compteurValues; }// position >= compteurValues
    listValueOfMail.push(valueOfTempMail);
    compteurValues++;
  }
  //--
  if( (checkMailPartArobase==true) && (checkMailPartDomaine==true) && (positionMailPartArobase>0) && (positionMailPartDomaine>0) && (positionMailPartArobase<=positionMailPartDomaine) ){
    final = 'L\'adresse '+tempMail+' saisi est une adresse mail valide.';
  } else { final = 'L\'adresse '+tempMail+' saisi n\'est pas une adresse mail valide.'; }
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
  if( (!tempMail.match(mailTypeA)) || (!adresse_email.match(mailTypeB)) ){
    final = 'L\'adresse mail saisie "'+tempMail+'" n\'est pas valide.';
  } else {
    final = 'L\'adresse mail saisie "'+tempMail+'" est valide.';
  }
  //--
  return final;
}
