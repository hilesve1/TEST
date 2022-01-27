<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
<main class="container mt-5">
        <h4>Форма Регистрации</h4>
        <form action="" method="post">

        <h2 class="bg-danger text-uppercase" id="error"></h2>

        <label for="name">Ваше Имя</label>
        <input type="text" name="name" id="name" class="form-control">

        <label for="surname">Ваша фамилия</label>
        <input type="text" name="surname" id="surname" class="form-control">

        <label for="email">email</label>
        <input type="email" name="email" id="email" class="form-control">

        <label for="pass">Пароль</label>
        <input type="password" name="pass" id="pass" class="form-control">

        <label for="pass">Подтвердите пароль</label>
        <input type="password" name="pass2" id="pass2" class="form-control">
       
        <button type="button" id="reg_user" class="btn btn-warning mt-5">Зарегистрироваться</button>

      
        </form>
  </main>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <script> 
    $('#reg_user').click(function(){
      var name = $('name').val();
      var surname = $('surname').val();
      var email = $('#email').val();
      var pass = $('#pass').val();
      var pass2 = $('#pass2').val();

      $.ajax({
        url: 'ajax/reg.php',
        type: 'POST',
        cache: false,
        data: {'name': name, 'surname': surname, 'email': email, 'pass': pass, 'pass2': pass2 },
        dataType: 'html', 
        success: function(data){
          if(data == 'OK'){
            $('#error').hide();
            alert('Вы успешно зарегистрировались');
            window.location = "http://test/main.php"
          }
           else{
            $('#error').show();
            $('#error').text(data);
           }
        }
      })

    });
</script>
</body>
</html>