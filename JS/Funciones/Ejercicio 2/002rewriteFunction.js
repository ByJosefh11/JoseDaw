// Usando un operador de signo de interrogación ?

function checkAge(age) {
    
   return age > 18  ? true : confirm('¿Tienes permiso de tus padres?');
}


    checkAge(5);


// Usando OR || 

function checkAge2(age) {

if (age == 18 || age > 18) {
    return true;
  } else {
    return confirm('¿Tienes permiso de tus padres?');
  }
}

    checkAge2(5);