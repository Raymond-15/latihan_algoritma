function ketupat(){
    var num = document.getElementById("num").value;
    var result = ``;
    
    for (var i = 0; i < (num * 2) - 1; i++){
      for (var j = 0; j < (num * 2) - 1; j++){
        if ( i + j === num - 1 || i - j === num - 1 || i + j === (num - 1) * 3|| j - i === num - 1 ){
        result += '*';
        } else {
          result += ' ';
        }
      }
      console.log(result);
      result = '';
    }

  }