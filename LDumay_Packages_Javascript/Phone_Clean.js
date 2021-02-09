function phoneClean(phone){
  var tempPhone = phone;
  var startValuesTempPhone = tempPhone.substr(0, 4);
  switch(startValuesTempPhone){
    case '+331':
      tempPhone = tempPhone.replace('+331','');
      startValuesTempPhone = startValuesTempPhone.replace('+331', '01');
      break;
    case '+332':
      tempPhone = tempPhone.replace('+332','');
      startValuesTempPhone = startValuesTempPhone.replace('+332', '02');
      break;
    case '+333':
      tempPhone = tempPhone.replace('+333','');
      startValuesTempPhone = startValuesTempPhone.replace('+333', '03');
      break;
    case '+334':
      tempPhone = tempPhone.replace('+334','');
      startValuesTempPhone = startValuesTempPhone.replace('+334', '04');
      break;
    case '+335':
      tempPhone = tempPhone.replace('+335','');
      startValuesTempPhone = startValuesTempPhone.replace('+335', '05');
      break;
    case '+336':
      tempPhone = tempPhone.replace('+336','');
      startValuesTempPhone = startValuesTempPhone.replace('+336', '06');
      break;
    case '+337':
      tempPhone = tempPhone.replace('+337','');
      startValuesTempPhone = startValuesTempPhone.replace('+337', '07');
      break;
    case '+338':
      tempPhone = tempPhone.replace('+338','');
      startValuesTempPhone = startValuesTempPhone.replace('+338', '08');
      break;
    case '+339':
      tempPhone = tempPhone.replace('+339','');
      startValuesTempPhone = startValuesTempPhone.replace('+339', '09');
      break;
  }
  //console.log(startValuesTempPhone);
  var listValueOfPhone = [];
  //--
  for(valueOfPhone of startValuesTempPhone){
    listValueOfPhone.push(valueOfPhone);
  }
  //--
  for(valueOfPhone of tempPhone){
    if( (valueOfPhone!='+') && (valueOfPhone!='.') && (valueOfPhone!='-') && (valueOfPhone!='_') && (valueOfPhone!=' ') ){
      listValueOfPhone.push(valueOfPhone);
    }
  };
  //console.log(listValueOfPhone);
  //--
  var compteur = 1;
  var final = '';
  for(valueOfPhone of listValueOfPhone){
    if( (compteur==3) || (compteur==5) || (compteur==7) || (compteur==9) ){ final += '.'; }
    final += valueOfPhone;
    compteur++;
  }
  //--
  return final;
}
