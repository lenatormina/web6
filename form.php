<html>
  <head>
    <style>
/* Сообщения об ошибках и поля с ошибками выводим с красным бордюром. */
.error {
  border: 2px solid red;
}
    </style>
  </head>
  <body>


      
<form action="" method="POST">
        <label>
            Имя:<br />
            <input name="name"  value="<?php print $values['name']; ?> "  />
        </label><br />
        <label>
            email:<br />
            <input name="email"  value="<?php print $values['email']; ?> "  />
        </label><br />
        <select id="year" name="year"></select> <br />
        <script>for (let year = 1920; year <= 2022; year++) {
            let options = document.createElement("OPTION");
            document.getElementById("year").appendChild(options).innerHTML = year;
          }
        </script>
        Пол:
        <label>
            <input type="radio" 
                   name="radio-group-1" value="m" <?php if($values['radio-group-1']=="m") {print 'checked';} ?> />
            Муж
        </label>
        <label>
            <input type="radio"
                   name="radio-group-1" value="f"  <?php if($values['radio-group-1']=="f") {print 'checked';} ?>/>
            Жен
        </label><br />
        Количество конечностей: <br />
        <label>
            <input type="radio" 
                   name="radio-group-2" value="1" 
                   <?php if($values['radio-group-2']=="1") {print 'checked';} ?>/>
            1
        </label>
        <label>
            <input type="radio"
                   name="radio-group-2" value="2"
                   <?php if($values['radio-group-2']=="2") {print 'checked';} ?>/>
            2
        </label>
        <label>
            <input type="radio" 
                   name="radio-group-2" value="3"  
                   <?php if($values['radio-group-2']=="3") {print 'checked';} ?>/>
            3
        </label>
        <label>
            <input type="radio"
                   name="radio-group-2" value="4"
                   <?php if($values['radio-group-2']=="4") {print 'checked';} ?>/>
            4
        </label><br />
        <label>
            Сверхспособности:
            <br />
            <select name="power"
                    multiple="multiple">
                <option value="immortality">Бессмертие</option>
                <option value="pass_thr_walls">Прохождение сквозь стены</option>
                <option value="levitation" >Левитация</option>
            </select>
        </label><br />
        <label>
           Биография:<br />
            <textarea name="bio">   <?php print $values['bio']; ?> </textarea>
        </label><br />
        <label><input type="checkbox"  name="check-1" <?php if($values['check-1']==TRUE){print 'checked';} ?> />
            С контрактом ознакомлен
        </label><br />
        
         <input type="submit" value="ok"  />
    </form>
</body>
</html>
